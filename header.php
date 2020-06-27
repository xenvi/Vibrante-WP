<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vibrante</title>

    <?php wp_head(); ?>

    
</head>
<body>

<header>
<div class="container">
    <span class="brand">BRAND</span>

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
