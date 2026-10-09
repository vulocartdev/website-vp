<?php
/**
 * Fallback template.
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>
<main class="wrap section">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			the_title( '<h1 class="font-display h2">', '</h1>' );
			the_content();
		}
	} else {
		echo '<p>' . esc_html__( 'Nothing found.', 'vulopilot' ) . '</p>';
	}
	?>
</main>
<?php
get_footer();
