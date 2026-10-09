<?php
/**
 * Template Name: VuloPilot Landing (No Header/Footer)
 * Description: Pixel-match conversion of the VuloPilot marketing page.
 *              Intentionally omits get_header() / get_footer() — drop this
 *              in as a full-bleed page and let your theme's own
 *              header/footer wrap it if needed, or use it standalone.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function vulopilot_enqueue_assets() {
	if ( ! is_page_template( 'page-vulopilot.php' ) ) {
		return;
	}

	$base = get_stylesheet_directory_uri() . '/vulopilot-template';
	$dir  = get_stylesheet_directory() . '/vulopilot-template';

	wp_enqueue_style(
		'vulopilot-styles',
		$base . '/assets/css/vulopilot.css',
		array(),
		file_exists( $dir . '/assets/css/vulopilot.css' ) ? filemtime( $dir . '/assets/css/vulopilot.css' ) : '1.0.0'
	);

	wp_enqueue_script(
		'vulopilot-script',
		$base . '/assets/js/vulopilot.js',
		array(),
		file_exists( $dir . '/assets/js/vulopilot.js' ) ? filemtime( $dir . '/assets/js/vulopilot.js' ) : '1.0.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'vulopilot_enqueue_assets' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo esc_html( get_the_title() ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'vulopilot-page' ); ?>>
<?php wp_body_open(); ?>

<main>
	<?php
	// Pulls in the converted markup (extracted from the original site,
	// header/nav and footer stripped out per the brief).
	$content_path = get_stylesheet_directory() . '/vulopilot-template/content.html';
	if ( file_exists( $content_path ) ) {
		include $content_path;
	}
	?>
</main>

<?php wp_footer(); ?>
</body>
</html>
