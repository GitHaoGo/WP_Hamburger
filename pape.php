<?php
/* 
Template Name: ヒストリー
*/
?>
<?php get_header(); ?>

<section class="c-mv">
    <?php the_post_thumbnail(); ?>
    <h1><?php the_title(); ?></h1>
</section>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<div class="c-close-mask"></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

    