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


// 何も記入せずに検索をすると、TOPページにリダイレクトされる設定
