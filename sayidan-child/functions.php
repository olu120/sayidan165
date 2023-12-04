<?php
function sayidan_child_scripts() {
	
	$theme = wp_get_theme('sayidan');
  	$version = $theme['Version'];

    /* Styles */ 
  	wp_enqueue_style( 'animate', get_template_directory_uri() .'/css/animate.css', array(), $version, 'all' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.css', array(), $version, 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/css/font-awesome.min.css', array(), $version, 'all' );
	wp_enqueue_style( 'meanmenu', get_template_directory_uri() .'/css/meanmenu.css', array(), $version, 'all' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri() .'/css/owl.carousel.css', array(), $version, 'all' );
	wp_enqueue_style( 'icon-font', get_template_directory_uri() .'/css/icon-font.min.css', array(), $version, 'all' );
	wp_enqueue_style( 'superfish', get_template_directory_uri() .'/css/superfish.css', array(), $version, 'all' );
	wp_enqueue_style( 'sayidan-fonts', sayidan_fonts_url(), array(), null );

	wp_enqueue_style( 'sayidan-style', get_template_directory_uri().'/style.css', array(), $version, 'all');
	wp_enqueue_style( 'sayidan-child-style', get_stylesheet_directory_uri() .'/style.css');
}
add_action('wp_enqueue_scripts', 'sayidan_child_scripts');

/* ADD custom theme functions here  */
