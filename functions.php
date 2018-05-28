<?php
/**
 * Style Load
 */
function lp_enqueue_scripts() {
	wp_enqueue_style( 'lp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lp-block-style', get_template_directory_uri() . '/blocks.css' );
}
add_action( 'wp_enqueue_scripts', 'lp_enqueue_scripts' );

/**
 * Theme Support
 */
function lp_setup_theme() {

	add_theme_support( 'title-tag' );
	
	// Gutenberg support
	add_theme_support( 'gutenberg', array(
		'wide-images' => true,
		'colors' => array(
			'#21759b', /* WordPress Blue */
			'#d54e21', /* WordPress Orange */
			'#464646', /* WordPress Grey */
			'#ffffff'  /* White */
		)
	) );
	
}
add_action( 'after_setup_theme', 'lp_setup_theme' );

