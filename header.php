<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_bloginfo('name')?></title>

    <?php wp_head(); ?>
    
</head>
<body>

<header>
<div class="container">
    <a href="<?php echo get_home_url();?>" class="brand"><?php echo get_bloginfo('name')?></a>

    <div class="menu">
        <?php wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
            )
        ); ?>
        <div class="mobile-nav">
            <?php wp_nav_menu(
                array(
                'theme_location' => 'mobile-menu',
                'menu_class' => 'mobile-menu'
                )
            ); ?>
            <span class="close-menu"><i class="fas fa-times"></i></span>
        </div>
        <span class="hamburger"><i class="fas fa-bars"></i></span>
    <div class="search-form">
        <?php get_search_form();?>
    </div>
    </div>
</div>
</header>
