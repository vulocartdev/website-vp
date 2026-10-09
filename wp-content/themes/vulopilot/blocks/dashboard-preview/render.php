<?php
/**
 * Dashboard preview block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$cards = array(
	array( 'icon' => '<path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle>', 'label' => 'Visibility Score', 'score' => 84, 'desc' => 'Can people and AI find you?', 'color' => 'sage' ),
	array( 'icon' => '<path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path>', 'label' => 'Content Score', 'score' => 71, 'desc' => 'Are you answering them?', 'color' => 'lilac' ),
	array( 'icon' => '<path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path>', 'label' => 'Performance Score', 'score' => 92, 'desc' => 'How slow, really?', 'color' => 'apricot' ),
	array( 'icon' => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>', 'label' => 'Health Score', 'score' => 97, 'desc' => 'How are WordPress and your server?', 'color' => 'sage' ),
	array( 'icon' => '<path d="M16 10a4 4 0 0 1-8 0"></path><path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z"></path>', 'label' => 'Commerce Score', 'score' => 76, 'desc' => 'Is my store doing okay?', 'color' => 'rose' ),
	array( 'icon' => '<path d="M11 6a13 13 0 0 0 8.4-2.8A1 1 0 0 1 21 4v12a1 1 0 0 1-1.6.8A13 13 0 0 0 11 14H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"></path>', 'label' => 'Brand Score', 'score' => 68, 'desc' => 'Does your brand look trustworthy?', 'color' => 'lilac' ),
);

$tabs = array( 'SEO', 'GEO', 'AEO', 'Brand', 'Knowledge Graph' );
?>
<section class="vp-dashboard">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Inside VuloPilot</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo wp_kses_post( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="card vp-dashboard-card" data-reveal="fade-up-blur" style="margin-top:3rem">
			<div class="vp-dashboard-tabs">
				<?php foreach ( $tabs as $i => $tab ) : ?>
					<span class="pill vp-dash-tab <?php echo 0 === $i ? 'is-active' : ''; ?>"><?php echo esc_html( $tab ); ?></span>
				<?php endforeach; ?>
			</div>

			<div class="vp-dashboard-grid">
				<?php foreach ( $cards as $i => $card ) : ?>
					<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="<?php echo esc_attr( $i * 70 ); ?>">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--<?php echo esc_attr( $card['color'] ); ?>)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $card['icon']; // phpcs:ignore ?></svg>
								<?php echo esc_html( $card['label'] ); ?>
							</span>
							<span class="font-display" style="font-size:1.75rem"><?php echo esc_html( $card['score'] ); ?></span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem"><?php echo esc_html( $card['desc'] ); ?></div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--<?php echo esc_attr( $card['color'] ); ?>)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
