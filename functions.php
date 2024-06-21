<?php
function my_theme_enqueue_styles() {
    // Main theme stylesheet
    wp_enqueue_style( 'my_theme_style', get_stylesheet_uri() );

    // Additional stylesheets
   wp_enqueue_style( 'my_bootstrap_style', get_theme_file_uri('/assets/css/bootstrap.min.css') );
   wp_enqueue_style( 'my_slider_style', get_theme_file_uri('/assets/css/flex-slider.css') );
    wp_enqueue_style( 'my_font_style', get_theme_file_uri('/assets/css/font-awesome.css') );
    wp_enqueue_style( 'my_lightbox_style', get_theme_file_uri('/assets/css/lightbox.css') );
     wp_enqueue_style( 'my_carousel_style', get_theme_file_uri('/assets/css/owl-carousel.css') );
     
   wp_enqueue_style( 'my_template_style', get_theme_file_uri('/assets/css/templatemo-hexashop.css') ); 

//ADDING JAVASCRIPTS FILES


    // Enqueue scripts
    wp_enqueue_script( 'jquery' ); // Make sure jQuery is enqueued
    wp_enqueue_script( 'my_custom_script10', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script3', get_theme_file_uri('/assets/js/custom.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script1', get_theme_file_uri('/assets/js/accordions.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script2', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script4', get_theme_file_uri('/assets/js/datepicker.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script5', get_theme_file_uri('/assets/js/imgfix.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script6', get_theme_file_uri('/assets/js/isotope.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script7', get_theme_file_uri('/assets/js/jquery-2.1.0.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script8', get_theme_file_uri('/assets/js/jquery.counterup.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script9', get_theme_file_uri('/assets/js/lightbox.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script10', get_theme_file_uri('/assets/js/owl-carousel.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script11', get_theme_file_uri('/assets/js/popper.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script12', get_theme_file_uri('/assets/js/quantity.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script13', get_theme_file_uri('/assets/js/scrollreveal.min.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script14', get_theme_file_uri('/assets/js/slick.js'), array('jquery'), null, true );
    wp_enqueue_script( 'my_custom_script15', get_theme_file_uri('/assets/js/waypoints.min.js'), array('jquery'), null, true );



}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


function enqueue_custom_fonts() {
    wp_enqueue_style( 'custom-fonts', get_template_directory_uri() . '/assets/css/font-awesome.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_fonts' );

//to add featured image in wordpress
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

// this functio is to register menu in our theme 
function register_my_menu() {
    register_nav_menu('primary', __('Primary Menu', 'mytheme'));
  }
  add_action('after_setup_theme', 'register_my_menu');


  function enqueue_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'enqueue_font_awesome');




?>
