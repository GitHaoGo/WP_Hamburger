<?php get_header(); ?>
<section class="p-archive-mv">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive.jpeg" alt="">
    <div class="mask"></div>
    <h1>Menu: <span><?php single_cat_title(); ?></span></h1>
</section>

<section class="c-caption">
    <h2>小見出しが入ります</h2>
    <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
</section>

<div class="c-wrap">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="c-card">
                <div class="card-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/card.jpeg" alt="">
                    <?php endif; ?>
                </div>
                <figcaption>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <div class="btn">
                        <button><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
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