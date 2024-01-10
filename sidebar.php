<article class="l-main__right">
        <aside class="l-sidebar">
            <div class="c-close-btn"></div>
            <h2><a href="<?php echo home_url(); ?>/menu">Menu</a></h2>
            <!-- <div class="c-gl">
                <div class="c-menu">バーガー</div>
                <ul class="c-sub">
                    <li>ハンバーガー</li>
                    <li>チーズバーガー</li>
                    <li>テリヤキバーガー</li>
                    <li>アボカドバーガー</li>
                    <li>フィッシュバーガー</li>
                    <li>ベーコンバーガー</li>
                    <li>チキンバーガー</li>
                </ul>
                <div class="c-menu">サイド</div>
                <ul class="c-sub">
                    <li>ポテト</li>
                    <li>サラダ</li>
                    <li>ナゲット</li>
                    <li>コーン</li>
                </ul>
                <div class="c-menu">ドリンク</div>
                <ul class="c-sub">
                    <li>コーラ</li>
                    <li>ファンタ</li>
                    <li>オレンジ</li>
                    <li>アップル</li>
                    <li>紅茶（Ice/Hot）</li>
                    <li>コーヒー（Ice/Hot）</li>
                </ul> -->
    <?php
    if ( has_nav_menu( 'side' )){
	// メニューの設定を配列で指定
	$args = array(
		'theme_location' => 'side',
        'container_class' => 'l-sidebar',
        'menu_class' => 'c-gl',
	);
	// メニューを表示
	wp_nav_menu( $args ); 
}; 
?>
            </div>
        </aside>
    </article>
</div>                                                                           