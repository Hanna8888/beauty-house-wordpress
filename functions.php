<?php
/**
 * houses functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package houses
 */

function houses_scripts() {
	
	wp_enqueue_style( 'bootstrap-cdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_enqueue_style( 'houses-style', get_template_directory_uri() . '/style.css', array(), '1.3');
    wp_enqueue_style( 'house-media', get_template_directory_uri() . '/assets/css/media-houses.css', array(), '' );
    wp_enqueue_style( 'font1', 'https://fonts.googleapis.com/css?family=Julius+Sans+One&display=swap');  
    wp_enqueue_style( 'font2', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
  
    wp_deregister_script( 'jquery');
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
}
 add_action( 'wp_enqueue_scripts', 'houses_scripts' );

 
 
show_admin_bar( false );