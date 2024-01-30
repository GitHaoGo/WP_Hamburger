<?php get_header(); ?>
<section class="p-archive-mv">
<div class="mask"></div>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive.jpeg" alt="">
    
    <h1>News: <span></span></h1>
</section>

<section class="c-caption">
    <h2>小見出しが入ります</h2>
    <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
</section>

<div class="c-news_wrap">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="c-news-card">
                <div class="card-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/news.jpg" alt="">
                    <?php endif; ?>
                </div>
                <figcaption class="c-news-cap">
                    <h2><?php the_title(); ?></h2>
                    <?php the_category(); ?>
                    <?php the_tags(); ?>
                    <?php the_excerpt(); ?>
                    <div class="btn_news">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>
                    </div>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php wp_pagenavi(); ?>

<div class="c-close-mask"></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>