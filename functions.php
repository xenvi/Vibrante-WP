<?php

// load stylesheets
function load_css()
{
    wp_register_style('style', get_template_directory_uri() . '/dist/app.css', array(), 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

// load Javascript
function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('app', get_template_directory_uri() . '/dist/app.js', 'jquery', 1, true);
    wp_enqueue_script('app');
}
add_action('wp_enqueue_scripts', 'load_js');

// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location',
        'social-menu' => 'Social Menu Location',
    )
);

// custom image sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
add_image_size('header', 1048, 214, true);

// register sidebars
function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');

// post types
function first_post_type()
{
    $args = array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    );
    register_post_type('products', $args);
}
add_action('init', 'first_post_type');

// taxonomy
function first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name' => 'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => 'true',
        'hierarchical' => true
    );
    register_taxonomy('brands', array('products'), $args);
}
add_action('init', 'first_taxonomy');