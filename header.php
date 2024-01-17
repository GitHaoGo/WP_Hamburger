<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
<div class="l-main">
    <article class="l-main__left">
        <header class="l-header">
            <div class="c-menu-btn">
                <p>Menu</p>
            </div>
            <div class="c-header">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                <?php get_search_form(); ?>
            </div>
        </header>