<?php get_header() ;?>
        <section class="p-archive-mv">
            <img src="<?php echo get_template_directory_uri() ?>/img/archive.png" alt="">
            <div class="mask"></div>
            <h1>Menu:</h1>
            <span></span>
        </section>
        <section class="c-caption">
            <h2>小見出しが入ります</h2>
            <h3>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</h3>
        </section>

        <div class="c-wrap">
            <?php if (have_posts()) : ?>
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
                                <h3><?php the_category(); ?> </h3>
                                <p><?php the_content(); ?></p>
                                <div class="btn">
                                    <button><a href="<?php echo home_url(); ?>/shop">詳しく見る</a></button>
                                </div>
                            </figcaption>
                    </figure>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- <figure class="c-card">
                <div class="card-img">
                <img src="../img/card.png" alt="">
                </div>
                <figcaption>
                    <h2>チーズバーガー</h2>
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <div class="btn">
                        <button>詳しく見る</button>
                    </div>
                </figcaption>
            </figure>
            <figure class="c-card">
                <div class="card-img">
                    <img src="../img/card.png" alt="">
                </div>
                <figcaption>
                    <h2>ダブルチーズバーガー</h2>
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <div class="btn">
                        <button>詳しく見る</button>
                    </div>
                </figcaption>
            </figure>
            <figure class="c-card">
                <div class="card-img">
                    <img src="../img/card.png" alt="">
                </div>
                <figcaption>
                    <h2>スペシャルチーズバーガー</h2>
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <div class="btn">
                        <button>詳しく見る</button>
                    </div>
                </figcaption>
            </figure> -->
        </div>
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
        <?php wp_pagenavi(); ?>
        <div class="c-close-mask"></div>
    </article>
    <?php get_sidebar() ;?>
    <?php get_footer() ;?>