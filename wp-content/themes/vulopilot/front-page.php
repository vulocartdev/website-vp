<?php
/**
 * Homepage template.
 *
 * Each marketing section is a registered custom block. If the homepage's
 * post_content already holds authored block markup (edited via the block
 * editor), we render that. Otherwise we fall back to a hard-coded default
 * ordering of every section block, so the homepage works out of the box.
 */
defined( 'ABSPATH' ) || exit;

get_header();

if ( have_posts() ) {
	the_post();
}

if ( have_posts() || ( isset( $post ) && ! empty( trim( wp_strip_all_tags( $post->post_content ) ) ) ) ) {
	the_content();
} else {
	$default_blocks = array(
		'vulopilot/hero',
		'vulopilot/problem',
		'vulopilot/meet-vulopilot',
		'vulopilot/how-it-works',
		'vulopilot/automation',
		'vulopilot/ai-visibility',
		'vulopilot/dashboard-preview',
		'vulopilot/features',
		'vulopilot/pricing',
		'vulopilot/final-cta',
	);

	foreach ( $default_blocks as $block_name ) {
		echo render_block( array( 'blockName' => $block_name, 'attrs' => array(), 'innerBlocks' => array(), 'innerHTML' => '', 'innerContent' => array() ) );
	}
}

get_footer();
