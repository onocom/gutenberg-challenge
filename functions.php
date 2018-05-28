<?php
/**
 * Style Load
 */
function lp_enqueue_scripts() {
	wp_enqueue_style( 'lp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lp-blocks-style', get_template_directory_uri() . '/blocks.css');
}
add_action( 'wp_enqueue_scripts', 'lp_enqueue_scripts' );


/**
 * Editor style Load
 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#editor-styles
 */
function lp_editor_styles() {
	wp_enqueue_style( 'gutenberg-block-editor-style', get_template_directory_uri() . '/blocks.css');
}
add_action( 'enqueue_block_editor_assets', 'lp_editor_styles' );


/**
 * Theme Support
 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
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

	// Gutenberg Wide Alignment
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#wide-alignment
	add_theme_support( 'align-wide' );

	// Gutenberg color palette
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#block-color-palettes
	add_theme_support( 'editor-color-palette',
		array(
			'name' => 'WordPress Blue',
			'color' => '#21759b',
		),
		array(
			'name' => 'WordPress Orange',
			'color' => '#d54e21',
		),
		array(
			'name' => 'WordPress Gray',
			'color' => '#464646',
		)
	);

	// Gutenberg custom colors disable 
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#disabling-custom-colors-in-block-color-palettes
	add_theme_support( 'disable-custom-colors' );

	
}
add_action( 'after_setup_theme', 'lp_setup_theme' );

