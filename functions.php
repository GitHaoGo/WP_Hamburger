<?php
add_theme_support( 'menus' );  /* テーマにメニューという項目を機能をサポートすることを許可するという記述 */
add_theme_support( 'title-tag' ); /* タイトルタグのサポートを許可するという記述 */
add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
add_theme_support( 'automatic-feed-links' );
add_theme_support(
    'html5', //HTML5でマークアップ
    array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    )
);

function post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'menu'; //任意のスラッグ名　←アーカイブページを有効に
        $args['label'] = 'Menu:'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// サイト内検索 //
// 投稿ページのみ検索されるように設定
function my_posy_search($search) {
    if(is_search()) {
        $search .= " AND post_type = 'post'";
    }
    return $search;
}
add_filter('posts_search', 'my_posy_search');

// 何も記入せずに検索をすると、menuページにリダイレクトされる設定
function empty_search_redirect( $wp_query ) {
    if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
        $s = $wp_query->get( 's' );
        $s = trim( $s );
        if ( empty( $s ) ) {
            wp_safe_redirect( home_url('/menu/') );
            exit;
        }
    }
}
add_action( 'parse_query', 'empty_search_redirect' );

// メニューの位置
register_nav_menus( array(
    'side'   => 'サイド',
    'footer' => 'フッター'
) );

// headの読み込み部分
function hamburger_script() {
    wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap');
    wp_enqueue_style( 'awesome', get_template_directory_uri() . '/fontawesome-free-6.5.1-web/css/all.css');
    // wp_enqueue_style( 'jq', get_template_directory_uri() .'/jQuery/jquery-3.7.1.min.js');
    wp_register_script( 'jq', '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' ,array());
    wp_enqueue_script( 'js', get_template_directory_uri() .'/js/menu.js', array('jq'));
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
}
add_action( 'wp_enqueue_scripts', 'hamburger_script' );

// add_filter('nav_menu_css_class', 'wp_navtag_remove', 100, 1); // liのclassを強制的に全削除
add_filter('nav_menu_item_id', 'wp_navtag_remove', 100, 1); // liのidを強制的に削除

function wp_navtag_remove($classes) {
    return array(); // クラスやIDを空の配列にして削除する
}



//カスタム投稿タイプを登録
function new_post_type() {
    register_post_type('news',
        array(
            'label' => 'お知らせ',
            'labels' => array(
            'add_new' => '新規追加',
            'edit_item' => '編集',
            'view_item' => '表示',
            'search_items' => '検索',
            ),
            'public' => true,
            'hierarchical' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'exclude_from_search' => true,
            'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields',
            'excerpt'
            ),
            'menu_position' => 5
        )
        ); 
        register_taxonomy(
        'news-cat',
        'news',
        array(
            'label' =>  'カテゴリー',
            'labels' => array(
            'popular_items' => 'よく使うカテゴリー',
            'edit_item' => 'カテゴリーを編集',
            'add_new_item' => 'カテゴリーを追加',
            'search_items' =>  'カテゴリーを検索',
            ),
            'public' => true,
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'news-cat') 
        )
        );
        register_taxonomy(
            'news-tag',
            'news',
            array(
            'label' => 'タグ',
            'rewrite' => array( 'slug' => 'news-tag' ),
            'hierarchical' => false,
            'public' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            
            )
        );
        }
    add_action('init', 'new_post_type');


