<?php

// style and scripts of page
function scripts(){
    wp_register_style('style',get_template_directory_uri() . '/assets/css/style.css',[],1,'all');
    wp_enqueue_style('style');
    wp_enqueue_style('custom-google-font','//fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    wp_register_script('app',get_template_directory_uri() . '/assets/js/app.js',[],1,true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts','scripts');


// theme support

add_theme_support('menus');
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//logo support
function custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'init', 'custom_logo_setup' );


function register_my_menus() {
  register_nav_menus(
    array(
      'primary-menu' => "Primary Menu",
     )
   );
 }
add_action( 'init', 'register_my_menus' );

