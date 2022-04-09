<?php

/*Prevent non-logged in users from accessing the site's user and post data using the WordPress REST API.*/
//add_filter( 'rest_authentication_errors', function( $result ) {
//   if ( !empty( $result ) ) {
//       return $result;
//   } 
//   if( !is_user_logged_in() ) {
//       return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );    
//   }
//   return $result;
//});

function outdoor_supply_store_setup() {
    add_theme_support( "custom-header" );
    
    add_image_size( "medium_square_crop", 400, 400, true );
}
add_action( 'after_setup_theme', 'outdoor_supply_store_setup' );


add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri() . "?mod=04082022", array( 'twenty-twenty-one-style' ) );
    
    //Add Slick.js
    wp_enqueue_style( 'slick-css', "" . get_stylesheet_directory_uri() . '/assets/css/slick.css', '1.8.1', true );   
    wp_enqueue_style( 'slick-theme-css', "" . get_stylesheet_directory_uri() . '/assets/css/slick-theme.css', '1.8.1', true );
     
    wp_enqueue_script( 'slick-slider-min-js', "" . get_stylesheet_directory_uri() . '/assets/javascript/slick.min.js', array('jquery'), '1.8.1', true );
    wp_enqueue_script( 'slick-slider-init-js', "" . get_stylesheet_directory_uri() . '/assets/javascript/slick-init.js', array('jquery'), '1.8.1', true );
        
});
