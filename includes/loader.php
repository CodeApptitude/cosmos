<?php
/**
 * Load Cosmos Theme core
 */

/**
 * Register theme support
 */
function cosmos_theme_support() {
	// Add support lo
	add_theme_support( 'custom-logo' );

	// Add support for Post Formats.
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'aside' ) );

	// Add support for Featured Images.
	add_theme_support( 'post-thumbnails' );

	// Add support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

	// Add support for Translation.
	load_theme_textdomain( 'cosmos', get_template_directory() . '/lang' );
}

add_action( 'after_setup_theme', 'cosmos_theme_support' );

function cosmos_register_assets() {
	// Load CSS.
	wp_enqueue_style( 'cosmos-css', cosmos_get_asset_file_uri( 'css/style.css' ) );
	// Load JS
}

add_action( 'wp_enqueue_scripts', 'cosmos_register_assets' );

function cosmos_theme_init() {

	// Register Main navigation menu.
	register_nav_menu( 'primary-menu', __( 'Header Menu', 'cosmos' ) );
}

add_action( 'init', 'cosmos_theme_init' );