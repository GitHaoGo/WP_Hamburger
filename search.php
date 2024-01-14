<?php get_header() ;?>
        <section class="p-archive-mv">
            <img src="<?php echo get_template_directory_uri() ?>/img/archive.png" alt="">
            <div class="mask"></div>
            <h1>Search: <span><?php the_search_query();?></span></h1>
        </section>
        <section class="c-caption">
            <h2>小見出しが入ります</h2>
            <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
        </section>
        <div class="c-wrap">
            <?php if (have_posts()&& get_search_query()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <figure class="c-card">
                        <div class="card-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/card.png" alt="">
                            <?php endif; ?>
                        </div>
                        <figcaption>
                            <h2><?php the_title(); ?></h2>
                            <h3></h3>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn">
                                <button><a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                            </div>
                        </figcaption>
                </figure>
            <?php endwhile; ?>
            <?php else: ?>
                <div class="post">
                    <p>申し訳ございません。<br>該当する記事がございません。</p>
                </div>
            <?php endif;?>

        <?php wp_pagenavi(); ?>
        

        <!-- <div class="pagination">
            <p class="pagination__pos">Page 1/10</p>
            <a class="pagination__btn--first" href="">&lt;&lt;</a>
            <a class="pagination__btn--prev" href="">前へ</a>
            <ul class="pagination__list">
                <li class="pagination__item--current"><a href="">1</a></li>
                <li class="pagination__item"><a href="">2</a></li>
                <li class="pagination__item"><a href="">3</a></li>
                <li class="pagination__item"><a href="">4</a></li>
                <li class="pagination__item"><a href="">5</a></li>
                <li class="pagination__item"><a href="">6</a></li>
                <li class="pagination__item"><a href="">7</a></li>
                <li class="pagination__item"><a href="">8</a></li>
                <li class="pagination__item"><a href="">9</a></li>
            </ul>
            <a class="pagination__btn--next" id="pe-left" href="">次へ</a>
            <a class="pagination__btn--last" id="pe-right" href="">&gt;&gt;</a>
        </div> -->
        <div class="c-close-mask"></div>
    </article>
    <?php get_sidebar() ;?>
    <?php get_footer() ;?>
