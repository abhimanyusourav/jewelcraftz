<?php
/**
 * mireya-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mireya-child
 */

/**
 * Load the parent style.css and child styles.css file
 */
function mireya_child_stylesheets() {
  // Dynamically get version number of the parent stylesheet
  $parent_style = 'mireya-style';
  $parent_dep = array( 'bootstrap', 'fontawesome', 'swiper', 'magnific-popup' );
  $child_style = 'mireya-child-style';
  $rtl_style = 'mireya-rtl';
  $version = wp_get_theme()->get('Version');

  // Load the main stylesheet
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css', $parent_dep );

  if ( is_rtl() ) {
	// Load the rtl stylesheet
	wp_enqueue_style( $rtl_style, get_template_directory_uri() . '/rtl.css', array( $parent_style ), $version );

	// Load the child stylesheet
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style, $rtl_style ), $version );
  } else {
	// Load the child stylesheet
	wp_enqueue_style( $child_style, get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), $version );
  }
}
add_action( 'wp_enqueue_scripts', 'mireya_child_stylesheets' );
