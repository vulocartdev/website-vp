<?php
/**
 * Features block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$areas = array(
	array(
		'icon' => '<rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect>',
		'title' => 'Dashboard',
		'desc'  => 'Every score, trend and recent change in one place you can arrange yourself.',
		'items' => array( 'Six health scores at a glance', 'Timeline of what changed and when', 'Needs-your-attention list' ),
	),
	array(
		'icon' => '<path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path>',
		'title' => 'AI Copilot',
		'desc'  => 'Ask questions about your site in plain language and get a plan back.',
		'items' => array( 'Chat with your site’s data', 'Draft fixes and content', 'Explains every recommendation' ),
	),
	array(
		'icon' => '<path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle>',
		'title' => 'SEO',
		'desc'  => 'Technical and on-page SEO checks that stay current as your site changes.',
		'items' => array( 'Meta titles, descriptions and headings', 'Broken links and redirects', 'Sitemap and indexing health' ),
	),
	array(
		'icon' => '<path d="M19.07 4.93A10 10 0 0 0 6.99 3.34"></path><path d="M4 6h.01"></path><path d="M2.29 9.62A10 10 0 1 0 21.31 8.35"></path><path d="M16.24 7.76A6 6 0 1 0 8.23 16.67"></path><path d="M12 18h.01"></path><path d="M17.99 11.66A6 6 0 0 1 15.77 16.67"></path><circle cx="12" cy="12" r="2"></circle><path d="m13.41 10.59 5.66-5.66"></path>',
		'title' => 'AI Visibility',
		'desc'  => 'See how clearly ChatGPT, Gemini and Perplexity understand your business.',
		'items' => array( 'llms.txt and crawler traffic', 'Entity and knowledge-graph strength', 'FAQ schema coverage' ),
	),
	array(
		'icon' => '<path d="M13 21h8"></path><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>',
		'title' => 'Content',
		'desc'  => 'Find thin, stale or duplicate content before it costs you traffic.',
		'items' => array( 'Readability and structure checks', 'Duplicate and thin-content detection', 'AI-assisted rewrites' ),
	),
	array(
		'icon' => '<path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path>',
		'title' => 'Performance',
		'desc'  => 'Core Web Vitals and real load-time data, tracked over time.',
		'items' => array( 'LCP, CLS and INP tracking', 'Image and script weight audits', 'Hosting and caching checks' ),
	),
	array(
		'icon' => '<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"></path><path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"></path>',
		'title' => 'Site Health &amp; Backups',
		'desc'  => 'Automatic backups and plain-language health checks for WordPress itself.',
		'items' => array( 'Scheduled, restorable backups', 'Outdated plugin and PHP checks', 'Debug mode and exposed files' ),
	),
	array(
		'icon' => '<circle cx="16" cy="4" r="1"></circle><path d="m18 19 1-7-6 1"></path><path d="m5 8 3-3 5.5 3-2.36 3.5"></path><path d="M4.24 14.5a5 5 0 0 0 6.88 6"></path>',
		'title' => 'Accessibility',
		'desc'  => 'Catch contrast, alt-text and keyboard-navigation issues automatically.',
		'items' => array( 'Automated WCAG scans', 'Alt text generation', 'Scheduled re-checks' ),
	),
);
?>
<section id="features" class="vp-features">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Everything inside</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo esc_html( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="vp-features-grid" data-features data-reveal="fade-up-blur" style="margin-top:3rem">
			<div class="vp-features-sidebar">
				<?php foreach ( $areas as $i => $area ) : ?>
					<button class="vp-feature-tab <?php echo 0 === $i ? 'is-active' : ''; ?>" data-feature="<?php echo esc_attr( $i ); ?>">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $area['icon']; // phpcs:ignore ?></svg>
						<span><?php echo wp_kses_post( $area['title'] ); ?></span>
					</button>
				<?php endforeach; ?>
			</div>

			<div class="card vp-feature-panel">
				<?php foreach ( $areas as $i => $area ) : ?>
					<div class="vp-feature-view" data-feature-panel="<?php echo esc_attr( $i ); ?>" <?php echo 0 === $i ? '' : 'hidden'; ?>>
						<h3 class="font-display" style="font-size:1.75rem"><?php echo wp_kses_post( $area['title'] ); ?></h3>
						<p class="muted" style="margin-top:.5rem"><?php echo wp_kses_post( $area['desc'] ); ?></p>
						<ul class="vp-feature-list">
							<?php foreach ( $area['items'] as $item ) : ?>
								<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									<?php echo esc_html( $item ); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
