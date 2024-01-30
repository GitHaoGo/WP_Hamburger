<?php
/*
YARPP Template: Starter Template
Description: A simple starter example template that you can edit.
Author: YARPP Team
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()      // this will print the YARPP match score of that particular related post
2. get_the_score()      // or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<div class="c-yet">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <figure class="c-yetcard">
                <div class="card-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/card.jpeg" alt="">
                    <?php endif; ?>
                </div>
                <figcaption>
            
                    <p><?php the_excerpt(); ?></p>
                    <div class="yet-btn">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>
                    </div>
                </figcaption>
            </figure>
        <?php endwhile; ?>
    <?php endif; ?>
</div>