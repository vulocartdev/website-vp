<?php
/**
 * Meet VuloPilot block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$rows = array(
	array(
		'color'  => 'rose',
		'icon'   => '<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path>',
		'question' => 'Is my website okay?',
		'desc'   => 'Checks your whole site and tells you what is fine and what needs attention.',
		'icon2'  => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path>',
		'label'  => 'Security &amp; health',
		'sub'    => 'Old software, risky settings and broken links.',
	),
	array(
		'color'  => 'sage',
		'icon'   => '<path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path>',
		'question' => 'Why did my visitors drop?',
		'desc'   => 'Finds the likely cause and shows you the exact pages.',
		'icon2'  => '<path d="m8 11 2 2 4-4"></path><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path>',
		'label'  => 'Search · Content · Performance',
		'sub'    => 'Spot critical issues and make your site safer.',
	),
	array(
		'color'  => 'lilac',
		'icon'   => '<path d="M9 17H7A5 5 0 0 1 7 7h2"></path><path d="M15 7h2a5 5 0 1 1 0 10h-2"></path><line x1="8" x2="16" y1="12" y2="12"></line>',
		'question' => 'What do I fix first?',
		'desc'   => 'Puts the important things first, so you know where to start.',
		'icon2'  => '<path d="M11 5h10"></path><path d="M11 12h10"></path><path d="M11 19h10"></path><path d="M4 4h1v5"></path><path d="M4 9h2"></path><path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path>',
		'label'  => 'All six areas, ranked',
		'sub'    => 'By what matters most.',
	),
	array(
		'color'  => 'rose',
		'icon'   => '<rect width="7" height="7" x="3" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="14" rx="1"></rect><rect width="7" height="7" x="3" y="14" rx="1"></rect>',
		'question' => 'Did my fix work?',
		'desc'   => 'Checks again and tells you if the problem is gone.',
		'icon2'  => '<path d="m17 2 4 4-4 4"></path><path d="M3 11v-1a4 4 0 0 1 4-4h14"></path><path d="m7 22-4-4 4-4"></path><path d="M21 13v1a4 4 0 0 1-4 4H3"></path>',
		'label'  => 'Automation',
		'sub'    => 'Checks that run on their own, so nothing is forgotten.',
	),
	array(
		'color'  => 'lilac',
		'icon'   => '<path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path>',
		'question' => 'Does AI know my business?',
		'desc'   => 'Shows how clearly tools like ChatGPT and Gemini understand what you do.',
		'icon2'  => '<path d="M19.07 4.93A10 10 0 0 0 6.99 3.34"></path><path d="M4 6h.01"></path><path d="M2.29 9.62A10 10 0 1 0 21.31 8.35"></path><path d="M16.24 7.76A6 6 0 1 0 8.23 16.67"></path><path d="M12 18h.01"></path><path d="M17.99 11.66A6 6 0 0 1 15.77 16.67"></path><circle cx="12" cy="12" r="2"></circle><path d="m13.41 10.59 5.66-5.66"></path>',
		'label'  => 'AI Visibility',
		'sub'    => 'And how to improve it.',
	),
);
?>
<section class="vp-meet">
	<div class="wrap">
		<div style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Meet VuloPilot</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo esc_html( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="vp-meet-rows">
			<?php foreach ( $rows as $i => $row ) : ?>
				<div class="vp-meet-row" style="background:color-mix(in srgb, var(--<?php echo esc_attr( $row['color'] ); ?>) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="<?php echo esc_attr( $i * 90 ); ?>">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--<?php echo esc_attr( $row['color'] ); ?>)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $row['icon']; // phpcs:ignore ?></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem"><?php echo esc_html( $row['question'] ); ?></h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted"><?php echo esc_html( $row['desc'] ); ?></p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $row['icon2']; // phpcs:ignore ?></svg></span>
						<div>
							<div class="sage" style="font-weight:500"><?php echo wp_kses_post( $row['label'] ); ?></div>
							<div class="muted" style="font-size:.875rem"><?php echo esc_html( $row['sub'] ); ?></div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
