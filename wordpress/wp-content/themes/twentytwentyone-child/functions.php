<?php

function outdoor_supply_store_setup() {
    add_theme_support( "custom-header" );
    
    add_image_size( "medium_square_crop", 400, 400, true );
}
add_action( 'after_setup_theme', 'outdoor_supply_store_setup' );


function register_new_menus() {
    register_nav_menu( 'footer-nav-links', __( 'Footer Nav Links' ) );
}
add_action( 'init', 'register_new_menus' );


add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() . "?mod=12122025", array( 'twenty-twenty-one-style' ) );
    wp_enqueue_style( 'print-styles', "" . get_stylesheet_directory_uri() . '/assets/css/print-styles.css?mod=12122025', array(), '', 'print' );
    
    wp_register_script( 'javascript-functions', get_stylesheet_directory_uri() . '/assets/javascript/javascript-functions.js' );
    wp_enqueue_script( 'javascript-functions', get_stylesheet_directory_uri() . '/assets/javascript/javascript-functions.js' ); 
    
    //Add Font Awesome
    wp_enqueue_style( 'fontawesome-css', "" . get_stylesheet_directory_uri() . '/assets/fontawesome/css/fontawesome.css', '', true );
    wp_enqueue_style( 'brands-css', "" . get_stylesheet_directory_uri() . '/assets/fontawesome/css/brands.css', '', true );
    wp_enqueue_style( 'solid-css', "" . get_stylesheet_directory_uri() . '/assets/fontawesome/css/solid.css', '', true );
    
    //Add Slick.js
    wp_enqueue_style( 'slick-css', "" . get_stylesheet_directory_uri() . '/assets/css/slick.css', '1.8.1', true );   
    wp_enqueue_style( 'slick-theme-css', "" . get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', '1.8.1', true );
     
    wp_enqueue_script( 'slick-slider-min-js', "" . get_stylesheet_directory_uri() . '/assets/javascript/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'slick-slider-init-js', "" . get_stylesheet_directory_uri() . '/assets/javascript/slick-init.js', array('jquery'), '1.8.1', true );
        
});
