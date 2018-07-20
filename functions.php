<?php
/**
 * Frontend Style Load
 */
function lp_enqueue_scripts() {
	wp_enqueue_style( 'lp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'lp-blocks-style', get_template_directory_uri() . '/blocks.css');
}
add_action( 'wp_enqueue_scripts', 'lp_enqueue_scripts' );


/**
 * Editor Style Load
 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#editor-styles
 */
function lp_block_editor_styles() {
	wp_enqueue_style( 'lp-block-editor-style', get_template_directory_uri() . '/blocks.css');
}
add_action( 'enqueue_block_editor_assets', 'lp_block_editor_styles' );


/**
 * Theme Support
 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support/
 */
function lp_setup_theme() {

	add_theme_support( 'title-tag' );
	
	// Gutenberg Wide Alignment
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#wide-alignment
	add_theme_support( 'align-wide' );

	// Gutenberg color palette
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#block-color-palettes
	add_theme_support( 'editor-color-palette',
		array(
			'name' => 'Blue',
			'slug' => 'my-blue',
			'color' => '#21759b',
		),
		array(
			'name' => 'Orange',
			'slug' => 'my-orange',
			'color' => '#d54e21',
		),
		array(
			'name' => 'Gray',
			'slug' => 'my-gray',
			'color' => '#464646',
		),
		array(
			'name' => 'White',
			'slug' => 'my-white',
			'color' => '#ffffff',
		)
	);

	// Gutenberg custom colors disable 
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#disabling-custom-colors-in-block-color-palettes
	add_theme_support( 'disable-custom-colors' );

	// Gutenberg Default block styles
	// https://wordpress.org/gutenberg/handbook/extensibility/theme-support/#default-block-styles
	add_theme_support( 'wp-block-styles' );

}
add_action( 'after_setup_theme', 'lp_setup_theme' );

