<?php
/**
 * AI visibility block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$tags = array( 'GPTBot', 'ClaudeBot', 'PerplexityBot', 'llms.txt', 'FAQ schema', 'Knowledge graph' );

$steps = array(
	'Make your business easier to understand.',
	'Strengthen information and entities that explain your business.',
	'Help AI and search tools find the right information.',
	'Monitor the signals you can improve.',
	'Track what’s working and where to make your website stronger.',
);

$gauges = array(
	array( 'score' => 78, 'color' => 'lilac', 'label' => 'AI Search' ),
	array( 'score' => 64, 'color' => 'apricot', 'label' => 'Entities' ),
	array( 'score' => 89, 'color' => 'sage', 'label' => 'Clarity' ),
);
$radius = 38;
$circumference = 2 * M_PI * $radius;
?>
<section id="ai" class="vp-ai">
	<div class="wrap vp-ai-grid">
		<div data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Looking ahead</div>
			<h2 class="font-display" style="margin-top:1.25rem;font-size:2.5rem;line-height:1.1"><?php echo wp_kses_post( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>

			<div class="vp-ai-tags">
				<?php foreach ( $tags as $tag ) : ?>
					<span class="pill" style="font-family:monospace;font-size:.75rem"><?php echo esc_html( $tag ); ?></span>
				<?php endforeach; ?>
			</div>

			<ol class="vp-ai-steps">
				<?php foreach ( $steps as $i => $step ) : ?>
					<li data-reveal="fade-up" data-reveal-delay="<?php echo esc_attr( $i * 90 ); ?>">
						<span class="vp-ai-num"><?php echo esc_html( $i + 1 ); ?></span>
						<span><?php echo esc_html( $step ); ?></span>
					</li>
				<?php endforeach; ?>
			</ol>
		</div>

		<div class="vp-ai-visual" data-reveal="scale-in">
			<div class="card vp-chat-card">
				<div class="vp-chat-user">Best bakery near me for a custom birthday cake?</div>
				<div class="vp-chat-answer">For a family-run bakery in Austin, try Rise &amp; Grind Bakery — known for sourdough, same-day custom cakes and gluten-free options.</div>

				<div class="vp-mini-gauges">
					<?php foreach ( $gauges as $g ) :
						$offset = $circumference * ( 1 - $g['score'] / 100 );
						?>
						<div class="vp-mini-gauge">
							<div class="vp-gauge" data-gauge data-score="<?php echo esc_attr( $g['score'] ); ?>" style="width:92px;height:92px">
								<svg width="92" height="92" viewBox="0 0 92 92" class="vp-gauge-svg">
									<circle cx="46" cy="46" r="<?php echo esc_attr( $radius ); ?>" fill="none" stroke="var(--line)" stroke-width="8"></circle>
									<circle cx="46" cy="46" r="<?php echo esc_attr( $radius ); ?>" fill="none" stroke="var(--<?php echo esc_attr( $g['color'] ); ?>)" stroke-width="8" stroke-linecap="round"
										stroke-dasharray="<?php echo esc_attr( $circumference ); ?>"
										stroke-dashoffset="<?php echo esc_attr( $circumference ); ?>"
										data-target-offset="<?php echo esc_attr( $offset ); ?>"
										class="vp-gauge-fill"></circle>
								</svg>
								<div class="vp-gauge-label">
									<div class="font-display" style="font-size:1.5rem" data-counter data-target="<?php echo esc_attr( $g['score'] ); ?>">0</div>
								</div>
							</div>
							<span class="muted" style="font-size:.75rem"><?php echo esc_html( $g['label'] ); ?></span>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
