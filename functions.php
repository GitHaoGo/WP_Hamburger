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

// 何も記入せずに検索をすると、TOPページにリダイレクトされる設定
function empty_search_redirect( $wp_query ) {
    if ( $wp_query->is_main_query() && $wp_query->is_search && ! $wp_query->is_admin ) {
        $s = $wp_query->get( 's' );
        $s = trim( $s );
        if ( empty( $s ) ) {
            wp_safe_redirect( home_url('/') );
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

// タイトル出力
// function hamburger_title( $title ) {
//     if ( is_front_page() && is_home() ) { //トップページなら
//         $title = get_bloginfo( 'name', 'display' );
//     } elseif ( is_singular() ) { //シングルページなら
//         $title = single_post_title( '', false );
//     }
//     return $title;
// }
// add_filter( 'pre_get_document_title', 'hamburger_title' );
