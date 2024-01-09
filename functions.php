<?php
    add_theme_support( 'menus' );  /* テーマにメニューという項目を機能をサポートすることを許可するという記述 */
    add_theme_support( 'title-tag' ); /* タイトルタグのサポートを許可するという記述 */
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
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

    function theme_slug_widgets_init() {
        register_sidebar( array(
            'name' => 'サイドバー', //ウィジェットの名前を入力
            'id' => 'sidebar', //ウィジェットに付けるid名を入力
        ) );
    }
    add_action( 'widgets_init', 'theme_slug_widgets_init' );
        
// サイト内検索
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


// 引数に指定したメニューの位置にメニューが設定してある場合。引数にはregister_nav_menus()で登録したスラッグ名を指定
if ( has_nav_menu( 'side' )){
	// メニューの設定を配列で指定
	$args = array(
		// 表示させるメニューを、register_nav_menus()で登録したスラッグ名で指定。初期値はなし
		'theme_location' => 'side',
		// ul要素を囲むかどうか。使えるタグはdiv、nav。囲まない場合はfalseを指定。初期値はdiv
		// 'container'      => false,
		// メニューのリンク前に表示するテキスト。初期値はなし
		// 'link_before'    => '<span>',
		// メニューのリンク後に表示するテキスト。初期値はなし
		// 'link_after'     => '</span>',
		// メニュー項目を囲むタグ。囲むタグをなしにする場合でも、パラメータを指定し %3$s の記述が必須
		// 'items_wrap'     =>'<ul>%3$s</ul>',
        'container_class' => 'l-sidebar',
        'menu_class' => 'c-gl',
	);
	// メニューを表示
	wp_nav_menu( $args ); 
}; 
