<?php

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





/* Plocka bort comments från wp menyn */
add_action('admin_menu', 'my_remove_admin_menus');

function my_remove_admin_menus() {
    remove_menu_page('edit-comments.php');
}