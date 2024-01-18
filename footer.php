<footer class="l-footer">
    <?php
    if (has_nav_menu('footer')) {
        // メニューの設定を配列で指定
        $args = array(
            'theme_location' => 'footer',
        );
        // メニューを表示
        wp_nav_menu(array('theme_location' => 'footer'));
    };
    ?>
    <p><small>Copyright: RaiseTech</small></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>

