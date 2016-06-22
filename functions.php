<?php
add_image_size('thumb-custom', 242, 200, true);
/**************************************
 *  THEME SUPORT
 **************************************/
function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );

}
add_action('after_setup_theme','add_suport_theme');

/**************************************
 * Registro Menu Personalizado
 **************************************/
add_theme_support('menus');

/**************************************
 *  SCRIPTS / CSS
 **************************************/
function wp_responsivo_scripts() {
  // Carregando CSS header
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . 'path/to/font-awesome/css/font-awesome.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );

  // Carregando Scripts header
  wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery') );
  wp_enqueue_script('visible', get_template_directory_uri().'/assets/js/jquery.visible.min.js', array('jquery') );
  wp_enqueue_script('visible');

  wp_register_script('visible', get_template_directory_uri().'/assets/js/jquery.visible.min.js', array('jquery') );

  //Carregando no footer
  //wp_enqueue_script('functions-js', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'wp_responsivo_scripts' );
