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
      'mobile-menu' =>"Mobile Menu"
     )
   );
 }
add_action( 'init', 'register_my_menus' );

//creating custom post type

function portfolio_post_type(){
  $args=array(
      'labels'=>array(
          'name'=>'Portfolios',
          'singular_name'=>'Portfolio'
      ),
      'public'=>true,
      'has_archive'=>true,
      'menu_icon'=>'dashicons-admin-site-alt3',
      'supports'=>array('title','editor','thumbnail','custom-fields'),

  );
  register_post_type('portfolio',$args);
}
add_action( 'init','portfolio_post_type' );


//widgets custom
function sidebar_widgets(){
  register_sidebar(array(
      'name'=>'Right Side Widget ',
      'id'=>'right-side-1',
      'before_title'=>'<h2 class="widget-title">',
      'after_title'=>'</h2>'
  ));
  
}


add_action('widgets_init','sidebar_widgets');