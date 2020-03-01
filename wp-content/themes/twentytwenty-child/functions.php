<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null);
    wp_enqueue_script( 'knockout', get_stylesheet_directory_uri() . '/js/vendor/knockout-3.5.1.js' );
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js' );
    wp_enqueue_style( 'bootstrap-4-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_script('bootstrap-4-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), null, true);
}
