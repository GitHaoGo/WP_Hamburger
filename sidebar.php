<article class="l-main__right">
    <aside class="l-sidebar">
        <div class="c-close-btn"></div>
        <h2><a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a></h2>
        <?php
        if (has_nav_menu('side')) {
            // メニューの設定を配列で指定
            $args = array(
                'theme_location' => 'side'
            );
            // メニューを表示
            wp_nav_menu(array(
                'theme_location' => 'side',
                'container'=>false,
                'menu_class' => 'c-gl',
        ));
        };
        ?>
        <h2><a href="<?php echo esc_url(home_url('/news/')); ?>">お知らせ</a></h2>
    </aside>
</article>
</div>