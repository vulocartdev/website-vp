<?php
/**
 * VuloPilot theme functions.
 */

defined( 'ABSPATH' ) || exit;

define( 'VULOPILOT_VERSION', '1.0.0' );
define( 'VULOPILOT_DIR', get_template_directory() );
define( 'VULOPILOT_URI', get_template_directory_uri() );

/**
 * Theme setup.
 */
function vulopilot_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'vulopilot' ),
			'footer'  => __( 'Footer Menu', 'vulopilot' ),
		)
	);
}
add_action( 'after_setup_theme', 'vulopilot_setup' );

/**
 * Register the custom "VuloPilot" block category.
 */
function vulopilot_block_category( $categories ) {
	return array_merge(
		array(
			array(
				'slug'  => 'vulopilot',
				'title' => __( 'VuloPilot Sections', 'vulopilot' ),
			),
		),
		$categories
	);
}
add_filter( 'block_categories_all', 'vulopilot_block_category' );

/**
 * Enqueue theme styles and scripts.
 */
function vulopilot_assets() {
	wp_enqueue_style(
		'vulopilot-fonts',
		'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,600&display=swap',
		array(),
		null
	);

	wp_enqueue_style( 'vulopilot-base', VULOPILOT_URI . '/assets/css/base.css', array(), VULOPILOT_VERSION );

	wp_enqueue_script( 'vulopilot-reveal', VULOPILOT_URI . '/assets/js/reveal.js', array(), VULOPILOT_VERSION, true );
	wp_script_add_data( 'vulopilot-reveal', 'strategy', 'defer' );

	wp_enqueue_script( 'vulopilot-nav', VULOPILOT_URI . '/assets/js/nav.js', array(), VULOPILOT_VERSION, true );
	wp_script_add_data( 'vulopilot-nav', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'vulopilot_assets' );

/**
 * Register every custom block found under /blocks.
 */
function vulopilot_register_blocks() {
	$blocks_dir = VULOPILOT_DIR . '/blocks';
	if ( ! is_dir( $blocks_dir ) ) {
		return;
	}
	foreach ( scandir( $blocks_dir ) as $block_slug ) {
		if ( '.' === $block_slug || '..' === $block_slug ) {
			continue;
		}
		$block_json = $blocks_dir . '/' . $block_slug . '/block.json';
		if ( file_exists( $block_json ) ) {
			register_block_type( $blocks_dir . '/' . $block_slug );
		}
	}
}
add_action( 'init', 'vulopilot_register_blocks' );

/**
 * Register the Home page template used by the Home Page Blocks fallback.
 */
function vulopilot_register_page_templates( $templates ) {
	$templates['front-page.php'] = __( 'VuloPilot Home', 'vulopilot' );
	return $templates;
}
