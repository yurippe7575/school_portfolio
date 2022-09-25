<?php
function portfolio_theme_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
add_image_size( 'page_eyecatch', 300, 400, true );
add_image_size( 'archive_thumbnail', 200, 150, true );
register_nav_menu( 'main-menu', 'メインメニュー' );
};
add_action( 'after_setup_theme', 'portfolio_theme_setup' );

function portfolio_enqueue_scripts(){
  wp_enqueue_script(
    'Jquery', 
    get_template_directory_uri() . '/js/jquery-3.6.1.min.js',
    array(),
    '1.0.0'
  );
  wp_enqueue_script(
    'bubble-js', 
    get_template_directory_uri() . '/js/bubbly-bg.js',
    array(),
    '1.0.0'
  );
  wp_enqueue_script(
    'index-js', 
    get_template_directory_uri() . '/js/script.js',
    array(),
    '1.0.0'
  );
   
  wp_enqueue_style(
    'google-fonts', 
    'https://fonts.googleapis.com/css2?family=Lato&display=swap',
    array(),
    '1.0.0'
  );
  
  wp_enqueue_style(
    'reset-style', 
    get_template_directory_uri() . '/css/ress.css',
    array(),
    '1.0.0'
  );
    wp_enqueue_style(
      'main-style', 
      get_template_directory_uri() . '/css/style.css',
      array(),
      '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_scripts' );