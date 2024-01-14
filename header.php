<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hamburger</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<?php wp_head(); ?>
</head>
<body>
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