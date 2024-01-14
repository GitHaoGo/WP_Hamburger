<?php get_header() ;?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="c-mv">
            <img src="<?php echo get_template_directory_uri() ?>/img/ham-burger-with-vegetables-1639557.png" alt="">
            <h1>Search: <span><?php the_title(); ?></span></h1>
        </section>
        <section class="c-caption2">
            <h2><?php the_category(); ?></h2>
            <p><?php the_tags(); ?></p>
            <h3>見出しh3</h3>
            <h4>見出しh4</h4>
            <h4>見出しh5</h4>
            <h4>見出しh6</h4>
        </section>
        <article class="c-column">
            <p class="text">Blockquote 引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ</p>
            <p class="go">出典元： <a href="">○○○○○○○○○○○○</a></p>
        </article>
        <article class="c-photocap">
            <div class="c-photocap__top">
            <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
            </div>
            <div class="c-photocap__flex">
                <div class="c-photocap__flex--left">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                    <p> テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                </div>
                <div class="c-photocap__flex--right">
                    <p>テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります テキストが入ります</p>
                    <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                </div>

            </div>
            <div class="c-photocap__center">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
            </div>
            <div class="c-photocap__all" >
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
                <img src="<?php echo get_template_directory_uri() ?>/img/cooked-foods-750073.png" alt="">
            </div>
        </article>
        <article>
            <ul class="list">
                <ol>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ol>
                <ol class="list1">
                    <li>リストリストリスト2</li>
                    <li>リストリストリスト2</li>
                </ol>
                <ol>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ol>
            </ul>
            <ul class="list"> 
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
                <ul class="list2">
                    <li>リストリストリスト2</li>
                    <li>リストリストリスト2</li>
                </ul>
                <ul>
                    <li>リストリストリスト</li>
                    <li>リストリストリスト</li>
                </ul>
            </ul>
        </article>
        <article class="c-code">
            <p>&lt;html&gt;</p>
            <p>&lt;head &gt;</p>
            <p>&lt;/head &gt;</p>
            <p>&lt;body &gt;</p>
            <p>&lt;/body &gt;</p>
            <p>&lt;/html &gt;</p>
        </article>
        <article class="c-table">
            <table>
                <tr>
                    <td class="left">テーブル</td>
                    <td class="right">テーブル</td>
                </tr>
                <tr>
                    <td class="left">テーブル</td>
                    <td class="right">テーブル</td>
                </tr>
                <tr>
                    <td class="left">テーブル</td>
                    <td class="right">テーブル</td>
                </tr>
                <tr>
                    <td class="left">テーブル</td>
                    <td class="right">テーブル</td>
                </tr>
                <tr>
                    <td class="left">テーブル</td>
                    <td class="right">テーブル</td>
                </tr>
            </table>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
        <button class="c-t-btn"><a href="<?php echo home_url(); ?>/menu">一覧に戻る</a></button>
        <p class="bold">boldboldboldboldboldboldbold</p>
        <div class="c-close-mask"></div>
    </article>
    <?php get_sidebar() ;?>
    <?php get_footer() ;?>
