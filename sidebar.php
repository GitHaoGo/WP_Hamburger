<article class="l-main__right">
    <aside class="l-sidebar">
        <div class="c-close-btn"></div>
        <h2><a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a></h2>
        <?php
        if (has_nav_menu('side')) {
            // メニューの設定を配列で指定
            $args = array(
                'theme_location' => 'side',
                'container_class' => 'l-sidebar',
                'menu_class' => 'c-gl',
            );
            // メニューを表示
            wp_nav_menu(array('theme_location' => 'side' ));
        };
        ?>
    </aside>
</article>
</div>