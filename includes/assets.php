<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Theme styles & scripts.
 */
add_action( 'wp_enqueue_scripts', function () {
	wp_deregister_style( 'mlp-frontend-css' );

	// main style
	$file    = WP_DEBUG ? 'main.css' : 'main.min.css';
	$version = filemtime( THEME_STYLESHEETS_DIR . $file );
	wp_enqueue_style( 'style-main', THEME_STYLESHEETS_URI . $file, array(), $version );

	// transition script
// 	$file    = WP_DEBUG ? 'transition.js' : 'transition.min.js';
// 	$version = filemtime( THEME_JAVASCRIPTS_DIR . $file );
// 	wp_enqueue_script( 'script-transition', THEME_JAVASCRIPTS_URI . $file, array( 'jquery' ), $version, true );

	// carousel script
	$file    = WP_DEBUG ? 'carousel.js' : 'carousel.min.js';
	$version = filemtime( THEME_JAVASCRIPTS_DIR . $file );
	wp_enqueue_script( 'script-carousel', THEME_JAVASCRIPTS_URI . $file, array( 'jquery', 'comic-script-transition' ), $version, true );

	// google map script
	// wp_enqueue_script( 'script-google-map', '//maps.googleapis.com/maps/api/js?sensor=false', array(), false, true );

	// main script
	$file    = WP_DEBUG ? 'main.js' : 'main.min.js';
	$version = filemtime( THEME_JAVASCRIPTS_DIR . $file );
	wp_enqueue_script( 'drevprom-script-main', THEME_JAVASCRIPTS_URI . $file, array( 'jquery', 'comic-script-main' ), false, true );
} );