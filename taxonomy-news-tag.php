<?php
get_header();
$taxonomy = 'news-tag'; // タームが属するタクソノミーのスラッグ
// 現在表示中のターム情報を取得
$term = get_queried_object();
?>

<section class="p-archive-mv">
<div class="mask"></div>
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/archive.jpeg" alt="">
    <!-- // タームアーカイブのタイトルを表示 -->
    <h1>News: <span>お知らせタグ<?php echo '' . single_term_title() . '(' . $term->count . '件)'  ?></span></h1>
</section>

<section class="c-caption">
    <h2>小見出しが入ります</h2>
    <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
</section>

<div class="c-wrap">
    <?php
    // タームに属する記事を表示
    $args = array(
        'post_type' => 'news', // カスタム投稿タイプのスラッグ
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field'    => 'slug',
                'terms'    => $term->slug,
            ),
        ),
    );

    $term_query = new WP_Query($args);

    if ($term_query->have_posts()) :
        while ($term_query->have_posts()) : $term_query->the_post();
            ?>
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
                    <div class="cate">
                    <?php
                    $terms = get_terms( 'news-cat');
                    foreach ( $terms as $term ){
                    echo '<a href="'.get_term_link($term->slug, 'news-cat').'">'.$term->name.'</a>'; }
                    ?>
                    </div>
                    <!-- タグというタクソノミーのタームを表示 -->
                    <div class="tag"><?php
                    $terms = get_terms( 'news-tag');
                    foreach ( $terms as $term ){
                    echo '<a href="'.get_term_link($term->slug, 'news-tag').'">'.$term->name.'</a>'; }
                    ?></div>
                    <p class="ex"><?php the_excerpt(); ?></p>
                    <div class="btn_news">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a>
                    </div>
                </figcaption>
            </figure>
            <?php
        endwhile;
    else :
        echo '該当する記事はありません。';
    endif;
    wp_reset_postdata(); // カスタムクエリをリセット
    ?>
</div>

<?php wp_pagenavi(); ?>

<div class="c-close-mask"></div>
</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>