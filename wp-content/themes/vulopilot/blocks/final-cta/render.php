<?php
/**
 * Final CTA block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading     = $attributes['heading'] ?? '';
$button_text = $attributes['buttonText'] ?? '';
$helper      = $attributes['helperText'] ?? '';
?>
<section id="scan" class="vp-final-cta">
	<div class="wrap">
		<div class="vp-final-cta-card" data-reveal="fade-up-blur">
			<div class="vp-final-cta-glow" aria-hidden="true"></div>
			<div class="center" style="position:relative">
				<h2 class="font-display h2"><?php echo wp_kses_post( $heading ); ?></h2>

				<form class="vp-scan-form" onsubmit="return false;">
					<input type="text" placeholder="yourwebsite.com" aria-label="Website URL">
					<button type="submit" class="btn btn-primary">
						<?php echo esc_html( $button_text ); ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</button>
				</form>

				<p class="muted" style="margin-top:1rem;font-size:.9rem"><?php echo esc_html( $helper ); ?></p>
			</div>
		</div>
	</div>
</section>
