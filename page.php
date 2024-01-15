<?php
/* 
Template Name: ショップ情報
*/
?>

<?php get_header() ;?>
<section class="c-mv">
            <img src="<?php echo get_template_directory_uri() ?>/img/black-steel-lamp-post-1070945.png" alt="">
            <h1><?php echo CFS()->get('h1'); ?></h1>
        </section>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?> 
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="c-close-mask"></div>
    </article>
    <?php get_sidebar() ;?>
    <?php get_footer() ;?>
