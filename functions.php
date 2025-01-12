<?php

if (!defined('ABSPATH')) {
    exit;
}

//Lägg till menyer

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(
        array(
            'main-menu' => __('Huvudmeny'),
            
        )
    );
}

// Aktivera utvald bild
add_theme_support(('post-thumbnails'));

// Ange storlekar
add_image_size('img-l', 900);
add_image_size('img-parallax', 1500, 1500);
add_image_size('img-ml', 600);
add_image_size('img-m', 400);
add_image_size('img-s', 200);
add_image_size('img-square', 600, 600, true);
add_image_size('img-icon', 40, 40);



/* Aktivera widget area */
add_action('widgets_init', 'mozzafiato_widgets_init');

function mozzafiato_widgets_init()
{
    register_sidebar(array(
        'name' => 'Widget on Home Page',
        'id' => 'topWidget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    // location widgetområde
    register_sidebar(array(
        'name' => 'Widget on Location Page',
        'id' => 'locationWidget',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}


/* Plocka bort comments från wp menyn */
add_action('admin_menu', 'my_remove_admin_menus');

function my_remove_admin_menus() {
    remove_menu_page('edit-comments.php');
}