
<footer class="l-footer">
        <?php
            if ( has_nav_menu( 'footer' )){
            // メニューの設定を配列で指定
            $args = array(
                'theme_location' => 'footer',
                // 'container_class' => 'l-sidebar',
                // 'menu_class' => 'c-gl',
            );
            // メニューを表示
            wp_nav_menu( $args ); 
        }; 
        ?>
        <p><small>Copyright:RaiseTech</small></p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri() ) ?>/js/menu.js"></script>
<?php wp_footer(); ?>
</body>
</html>