<?php get_header(); ?>

<section class="p-archive-mv">
<div class="mask"></div>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive.jpeg" alt="">
    
    <h1>News: <span>全ての記事一覧 (<?php echo $wp_query->found_posts; ?>件)</span></h1>
</section>

<section class="c-caption">
    <h2>小見出しが入ります</h2>
    <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
</section>


<div class="c-wrap">
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
                    <!-- カテゴリーというタクソノミーのタームを表示 -->
                    <div class="cate">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'news-cat');
                        if ($terms && !is_wp_error($terms)) {
                            foreach ($terms as $term) {
                                echo '<a href="' . esc_url(get_term_link($term->slug, 'news-cat')) . '">' . esc_html($term->name) . '</a>';
                            }
                        }
                        ?>
                    </div>
                    <!-- タグというタクソノミーのタームを表示 -->
                    <div class="tag">
                        <?php
                        $tags = get_the_terms(get_the_ID(), 'news-tag');
                        if ($tags && !is_wp_error($tags)) {
                            foreach ($tags as $tag) {
                                echo '<a href="' . esc_url(get_term_link($tag->slug, 'news-tag')) . '">' . esc_html($tag->name) . '</a>';
                            }
                        }
                        ?>
                    </div>
                    <p class="ex"><?php the_excerpt(); ?></p>
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