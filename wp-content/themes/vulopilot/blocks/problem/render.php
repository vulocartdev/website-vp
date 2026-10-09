<?php
/**
 * Problem block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading      = $attributes['heading'] ?? '';
$closing_line = $attributes['closingLine'] ?? '';

$quotes = array(
	'I have three tools and a hundred warnings. What do I fix?',
	'Does ChatGPT even know my business exists?',
	'Is my website even okay? I can’t tell.',
	'I fixed it last week. Did it help?',
	'My visitors dropped. Why?',
);

$tags = array(
	array( 'SSL warning', 4, 8, -6 ),
	array( 'Missing alt text ×48', 32, 2, 4 ),
	array( 'Slow LCP', 62, 10, -3 ),
	array( 'Broken link /about', 84, 4, 7 ),
	array( 'Plugin outdated', 10, 30, -8 ),
	array( 'No meta desc', 40, 26, 3 ),
	array( 'Duplicate H1', 70, 32, -5 ),
	array( '404 ×12', 88, 28, 6 ),
	array( 'Large images', 2, 48, -2 ),
	array( 'Weak schema', 28, 44, 5 ),
	array( 'XML sitemap?', 52, 50, -7 ),
	array( 'Thin content', 78, 46, 2 ),
	array( 'Mixed content', 12, 68, 6 ),
	array( 'Core Web Vitals', 38, 72, -4 ),
	array( 'Orphan pages', 64, 68, 3 ),
	array( 'Cache off', 86, 70, -6 ),
	array( 'Old PHP', 22, 80, 5 ),
	array( 'Low contrast', 56, 82, -3 ),
);
?>
<section id="problem" class="vp-problem">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>The problem</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo esc_html( $heading ); ?></h2>
		</div>

		<div class="vp-quotes">
			<?php foreach ( $quotes as $i => $quote ) : ?>
				<div data-reveal="fade-up-blur" data-reveal-delay="<?php echo esc_attr( $i * 80 ); ?>">
					<div class="card vp-quote">&ldquo;<?php echo esc_html( $quote ); ?>&rdquo;</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="vp-toggle-wrap" data-reveal="fade-up-blur">
			<div class="vp-toggle" data-tabs>
				<button class="vp-toggle-btn is-active" data-tab="without">
					<span class="vp-toggle-pill"></span>
					<span class="vp-toggle-label">Without VuloPilot</span>
				</button>
				<button class="vp-toggle-btn" data-tab="with">
					<span class="vp-toggle-label">With VuloPilot</span>
				</button>
			</div>

			<div class="card vp-scatter-card">
				<div class="vp-scatter" data-tab-panel="without">
					<?php foreach ( $tags as $i => $tag ) : ?>
						<span class="vp-tag" style="left:<?php echo esc_attr( $tag[1] ); ?>%;top:<?php echo esc_attr( $tag[2] ); ?>%;--rot:<?php echo esc_attr( $tag[3] ); ?>deg"
							data-reveal="scale-in-sm" data-reveal-delay="<?php echo esc_attr( $i * 40 ); ?>">
							⚠ <?php echo esc_html( $tag[0] ); ?>
						</span>
					<?php endforeach; ?>
					<div class="vp-scatter-caption">100 warnings. Zero direction.</div>
				</div>

				<div class="vp-scatter vp-scatter-with" data-tab-panel="with" hidden>
					<div class="vp-with-list">
						<div class="vp-with-row"><span class="vp-check">✓</span> SSL renewed automatically</div>
						<div class="vp-with-row"><span class="vp-check">✓</span> Alt text generated for 48 images</div>
						<div class="vp-with-row"><span class="vp-check">✓</span> LCP improved 2.1s</div>
						<div class="vp-with-row"><span class="vp-check">✓</span> 12 broken links fixed</div>
						<div class="vp-with-row"><span class="vp-check">✓</span> 3 plugins updated safely</div>
					</div>
					<div class="vp-scatter-caption">One ranked list. One next step.</div>
				</div>
			</div>
		</div>

		<div class="center" style="margin-top:4rem" data-reveal="fade-up-blur">
			<p class="font-display" style="font-size:1.75rem;font-style:italic">
				<?php echo esc_html( str_replace( '— and act on them?', '', $closing_line ) ); ?>
				<span class="sage">— and act on them?</span>
			</p>
		</div>
	</div>
</section>
