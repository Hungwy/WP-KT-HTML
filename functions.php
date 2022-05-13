<?php
    add_filter( 'excerpt_length', function($length) {
        return 5;
    }, PHP_INT_MAX );


   
function enqueue_mystyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/styles/my_style.css' );
}
add_action('wp_enqueue_scripts', 'enqueue_mystyle');


function register_my_links_menu() {
    register_nav_menu('links-menu',__( 'Links Menu' ));
  }
  add_action( 'init', 'register_my_links_menu' );