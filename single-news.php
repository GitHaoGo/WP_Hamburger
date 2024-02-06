<?php get_header(); ?>

<section class="c-mv">
    <?php the_post_thumbnail(); ?>
</section>

<div class="tax-wrap">
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p class="tax-text"><?php the_content(); ?></p>
    
    <?php endwhile; ?>
<?php endif; ?>
</div>

<div class="c-close-mask"></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>