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
    <a href="<?php echo get_page_link(get_page_by_path('/'));?>" class="brand"><?php the_field('title');?></a>

    <div class="menu">
        <?php wp_nav_menu(
            array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar'
            )
        ); ?>
    <div class="search-form">
        <?php get_search_form();?>
    </div>
    </div>
</div>
</header>
