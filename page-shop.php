<?php
/* 
Template Name: ショップ情報
*/
?>

<?php get_header() ;?>
        <section class="c-mv">
            <img src="<?php echo get_template_directory_uri() ?>/img/black-steel-lamp-post-1070945.png" alt="">
            <h1>ショップについて</h1>
        </section>
        <section class="c-caption2">
            <h2><?php echo CFS()->get('h2'); ?></h2>
            <p><?php echo CFS()->get('p'); ?></p>
            <h3><?php echo CFS()->get('h3'); ?></h3>
            <h4><?php echo CFS()->get('h4'); ?></h4>
            <h4><?php echo CFS()->get('h5'); ?></h4>
            <h4><?php echo CFS()->get('h6'); ?></h4>
        </section>
        <section class="c-column">
            <p class="text"><?php echo CFS()->get('blockquote'); ?></p>
            <p class="go">出典元： <a href="">○○○○○○○○○○○○</a></p>
        </section>
        <section class="c-photocap">
            <div class="c-photocap__top">
                <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            </div>
            <div class="c-photocap__flex">
                <div class="c-photocap__flex--left">
                    <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
                    <p><?php echo CFS()->get('right_text'); ?></p>
                </div>
                <div class="c-photocap__flex--right">
                    <p><?php echo CFS()->get('left_text'); ?></p>
                    <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
                </div>
            </div>
            <div class="c-photocap__center">
                <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            </div>
            <div class="c-photocap__all" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            <img src="<?php echo CFS()->get('カスタムフィールド名'); ?>" >
            </div>
        </section>
        <article>
            <ul class="list">
                <ol>
                    <li><?php echo CFS()->get('list_1'); ?></li>
                    <li><?php echo CFS()->get('list_1'); ?></li>
                </ol>
                <ol class="list1">
                    <li><?php echo CFS()->get('list_2'); ?></li>
                    <li><?php echo CFS()->get('list_2'); ?></li>
                </ol>
                <ol>
                    <li><?php echo CFS()->get('list_3'); ?></li>
                    <li><?php echo CFS()->get('list_3'); ?></li>
                </ol>
            </ul>
            <ul class="list"> 
                <ul>
                    <li><?php echo CFS()->get('list_4'); ?></li>
                    <li><?php echo CFS()->get('list_4'); ?></li>
                </ul>
                <ul class="list2">
                    <li><?php echo CFS()->get('list_5'); ?></li>
                    <li><?php echo CFS()->get('list_5'); ?></li>
                </ul>
                <ul>
                    <li><?php echo CFS()->get('list_6'); ?></li>
                    <li><?php echo CFS()->get('list_6'); ?></li>
                </ul>
            </ul>
        </article>
        <article class="c-code">
            <p><?php echo CFS()->get('html'); ?><</p>
            <p><?php echo CFS()->get('head'); ?></p>
            <p><?php echo CFS()->get('head_2'); ?></p>
            <p><?php echo CFS()->get('body'); ?></p>
            <p><?php echo CFS()->get('body_2'); ?></p>
            <p><?php echo CFS()->get('html_2'); ?></p>
        </article>
        <article class="c-table">
            <table>
                <tr>
                    <td class="left"><?php echo CFS()->get('table'); ?></td>
                    <td class="right"><?php echo CFS()->get('table'); ?></td>
                </tr>
                <tr>
                    <td class="left"><?php echo CFS()->get('table'); ?></td>
                    <td class="right"><?php echo CFS()->get('table'); ?></td>
                </tr>
                <tr>
                    <td class="left"><?php echo CFS()->get('table'); ?></td>
                    <td class="right"><?php echo CFS()->get('table'); ?></td>
                </tr>
                <tr>
                    <td class="left"><?php echo CFS()->get('table'); ?></td>
                    <td class="right"><?php echo CFS()->get('table'); ?></td>
                </tr>
                <tr>
                    <td class="left"><?php echo CFS()->get('table'); ?></td>
                    <td class="right"><?php echo CFS()->get('table'); ?></td>
                </tr>
            </table>
        </article>
        <button class="c-t-btn">ボタン</button>
        <p class="bold"><?php echo CFS()->get('bold'); ?></p>
        <div class="c-close-mask"></div>
    </article>
    <?php get_sidebar() ;?>
    <?php get_footer() ;?>