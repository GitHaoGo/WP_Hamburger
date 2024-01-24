<?php get_header(); ?>

<div class="wrap_404">
    <h2>アクセスしたページは見つかりませんでした。</h2>
    <p>アクセスしたURLアドレスにお間違いがないようでしたら、ページの移動、または削除されている可能性があります。</p>
    <div class="fond-btn"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページに戻る</a></div>
</div>


<div class="c-close-mask"></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>