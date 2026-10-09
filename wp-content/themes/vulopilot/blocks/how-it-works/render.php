<?php
/**
 * How it works block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$steps = array(
	array(
		'icon' => '<path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path><circle cx="12" cy="12" r="3"></circle><path d="m16 16-1.9-1.9"></path>',
		'title' => 'Find',
		'desc'  => 'A full scan of every page, plugin, speed metric and search signal on your site.',
	),
	array(
		'icon' => '<path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle>',
		'title' => 'Understand',
		'desc'  => 'Each warning gets context: why it matters and what it actually costs you.',
	),
	array(
		'icon' => '<path d="M11 5h10"></path><path d="M11 12h10"></path><path d="M11 19h10"></path><path d="M4 4h1v5"></path><path d="M4 9h2"></path><path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path>',
		'title' => 'Prioritize',
		'desc'  => 'Everything is ranked so you always know what to fix first.',
	),
	array(
		'icon' => '<path d="m21.64 3.64-1.28-1.28a1.21 1.21 0 0 0-1.72 0L2.36 18.64a1.21 1.21 0 0 0 0 1.72l1.28 1.28a1.2 1.2 0 0 0 1.72 0L21.64 5.36a1.2 1.2 0 0 0 0-1.72"></path><path d="m14 7 3 3"></path>',
		'title' => 'Fix',
		'desc'  => 'One-click AI fixes for the issues that can be automated, with your approval.',
	),
	array(
		'icon' => '<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="m16 9-5.5 5.5L8 12"></path>',
		'title' => 'Verify',
		'desc'  => 'See the result for yourself, with proof it worked.',
	),
);

$checklist = array(
	array( 'Pages', 92, 'sage' ),
	array( 'Plugins', 78, 'rose' ),
	array( 'Speed', 85, 'apricot' ),
	array( 'Search', 70, 'lilac' ),
	array( 'Content', 64, 'sage' ),
	array( 'AI visibility', 58, 'lilac' ),
);
?>
<section id="how" class="vp-how">
	<div class="wrap">
		<div style="max-width:40rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>How VuloPilot works</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo wp_kses_post( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="vp-how-grid" data-how>
			<div class="vp-steps">
				<?php foreach ( $steps as $i => $step ) : ?>
					<button class="vp-step <?php echo 0 === $i ? 'is-active' : ''; ?>" data-step="<?php echo esc_attr( $i ); ?>">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $step['icon']; // phpcs:ignore ?></svg>
							</span>
							<div>
								<div class="vp-step-num">0<?php echo esc_html( $i + 1 ); ?></div>
								<div class="font-display" style="font-size:1.5rem"><?php echo esc_html( $step['title'] ); ?></div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px"><?php echo esc_html( $step['desc'] ); ?></p></div>
						<span class="vp-step-progress"></span>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="card vp-how-panel">
				<div class="muted vp-how-panel-label" style="font-family:monospace;font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">
					Step <span data-panel-step-num>01</span> · <span data-panel-step-title>Find</span>
				</div>

				<div class="vp-panel-view" data-panel="0">
					<div class="vp-checklist">
						<?php foreach ( $checklist as $i => $item ) : ?>
							<div class="vp-check-row" data-reveal-delay="<?php echo esc_attr( $i * 120 ); ?>">
								<div class="vp-check-row-top">
									<span><?php echo esc_html( $item[0] ); ?></span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--<?php echo esc_attr( $item[2] ); ?>)" data-progress data-target="<?php echo esc_attr( $item[1] ); ?>"></span>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="vp-panel-view" data-panel="1" hidden>
					<p class="muted">Every warning is translated into plain language: what it means, what it affects, and how urgent it really is.</p>
				</div>
				<div class="vp-panel-view" data-panel="2" hidden>
					<p class="muted">A single ranked list across all six areas, so the first thing on it is always the thing worth doing first.</p>
				</div>
				<div class="vp-panel-view" data-panel="3" hidden>
					<p class="muted">Approve a fix and VuloPilot applies it — safely, with a backup taken first.</p>
				</div>
				<div class="vp-panel-view" data-panel="4" hidden>
					<div class="vp-verify">
						<div class="vp-verify-score">
							<div class="font-display" style="font-size:3.5rem;color:var(--rose)">42</div>
							<div class="muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">Before</div>
						</div>
						<div class="vp-verify-score">
							<div class="font-display" style="font-size:3.5rem;color:var(--sage)">91</div>
							<div class="muted" style="font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">After</div>
						</div>
						<div class="vp-verify-badge">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="m16 9-5.5 5.5L8 12"></path></svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
