<?php
/**
 * Hero block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$eyebrow      = $attributes['eyebrow'] ?? '';
$headline     = $attributes['headlineStart'] ?? '';
$rotating     = $attributes['headlineRotating'] ?? array( 'improve itself.' );
$subhead      = $attributes['subhead'] ?? '';
$cta_primary  = $attributes['ctaPrimaryText'] ?? '';
$cta_secondary = $attributes['ctaSecondaryText'] ?? '';
$helper       = $attributes['helperText'] ?? '';
$score        = (int) ( $attributes['siteScore'] ?? 82 );

$radius = 67;
$circumference = 2 * M_PI * $radius;
$offset = $circumference * ( 1 - $score / 100 );
?>
<section id="top" class="vp-hero" data-rotating='<?php echo esc_attr( wp_json_encode( $rotating ) ); ?>'>
	<div class="vp-hero-glow" aria-hidden="true"></div>

	<div class="wrap center" style="max-width:64rem">
		<div class="eyebrow" data-reveal="fade-up">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--apricot)"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path></svg>
			<?php echo esc_html( $eyebrow ); ?>
		</div>

		<h1 class="font-display vp-hero-title" data-reveal="fade-up" data-reveal-delay="80">
			<?php echo esc_html( $headline ); ?><br>
			Your website should <span class="vp-rotating-wrap"><span class="vp-rotating-word">
				<?php echo esc_html( $rotating[0] ?? '' ); ?>
			</span></span>
		</h1>

		<p class="muted vp-hero-sub" data-reveal="fade-up" data-reveal-delay="140"><?php echo esc_html( $subhead ); ?></p>

		<div class="vp-hero-ctas" data-reveal="fade-up" data-reveal-delay="200">
			<a href="#scan" class="btn btn-primary group">
				<?php echo esc_html( $cta_primary ); ?>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vp-arrow"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
			</a>
			<a href="#how" class="btn btn-secondary"><?php echo esc_html( $cta_secondary ); ?></a>
		</div>

		<p class="muted" style="margin-top:1rem;font-size:.9rem" data-reveal="fade-up" data-reveal-delay="260"><?php echo esc_html( $helper ); ?></p>
	</div>

	<div class="vp-scan-card-wrap">
		<div class="vp-badge" style="left:-8%;top:6%" data-reveal="scale-in">
			<span class="floaty" style="animation-delay:0s" data-badge>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--rose)"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
				3 plugins outdated
			</span>
		</div>
		<div class="vp-badge" style="left:78%;top:-4%" data-reveal="scale-in" data-reveal-delay="100">
			<span class="floaty" style="animation-delay:0.8s" data-badge>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--apricot)"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg>
				Homepage 2.1s slower
			</span>
		</div>
		<div class="vp-badge" style="left:84%;top:62%" data-reveal="scale-in" data-reveal-delay="200">
			<span class="floaty" style="animation-delay:1.6s" data-badge>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--lilac)"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
				14 pages missing titles
			</span>
		</div>
		<div class="vp-badge" style="left:-10%;top:70%" data-reveal="scale-in" data-reveal-delay="300">
			<span class="floaty" style="animation-delay:2.2s" data-badge>
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--sage)"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path></svg>
				Stale: /pricing
			</span>
		</div>

		<div class="card vp-scan-card" data-reveal="fade-up" data-reveal-delay="120">
			<div class="vp-scan-card-top">
				<div class="vp-dots">
					<span style="background:var(--rose)"></span><span style="background:var(--apricot)"></span><span style="background:var(--sage)"></span>
					<span class="muted" style="margin-left:.75rem;font-size:.75rem">yourstore.com · scanned just now</span>
				</div>
				<span class="pill" style="background:var(--sage-soft);color:var(--sage);border:none;font-size:.75rem">Live</span>
			</div>

			<div class="vp-scan-card-body">
				<div class="vp-gauge" data-gauge data-score="<?php echo esc_attr( $score ); ?>" style="width:150px;height:150px">
					<svg width="150" height="150" viewBox="0 0 150 150" class="vp-gauge-svg">
						<circle cx="75" cy="75" r="<?php echo esc_attr( $radius ); ?>" fill="none" stroke="var(--line)" stroke-width="8"></circle>
						<circle cx="75" cy="75" r="<?php echo esc_attr( $radius ); ?>" fill="none" stroke="var(--sage)" stroke-width="8" stroke-linecap="round"
							stroke-dasharray="<?php echo esc_attr( $circumference ); ?>"
							stroke-dashoffset="<?php echo esc_attr( $circumference ); ?>"
							data-target-offset="<?php echo esc_attr( $offset ); ?>"
							class="vp-gauge-fill"></circle>
					</svg>
					<div class="vp-gauge-label">
						<div class="font-display" style="font-size:1.875rem" data-counter data-target="<?php echo esc_attr( $score ); ?>">0</div>
						<div class="muted" style="font-size:.625rem;text-transform:uppercase;letter-spacing:.14em;margin-top:.25rem">Site score</div>
					</div>
				</div>

				<div class="vp-fix-list">
					<p class="font-display" style="font-size:1.25rem">Your site is mostly healthy. <span class="muted">Start with these three.</span></p>
					<div class="vp-fix-row"><span><span class="muted" style="font-family:monospace;font-size:.75rem">01</span> Fix 2 outdated plugins</span><span class="pill" style="border:none;font-size:.7rem;background:color-mix(in srgb, var(--rose) 16%, white);color:var(--rose)">Security</span></div>
					<div class="vp-fix-row"><span><span class="muted" style="font-family:monospace;font-size:.75rem">02</span> Compress hero image (-1.9s)</span><span class="pill" style="border:none;font-size:.7rem;background:color-mix(in srgb, var(--apricot) 16%, white);color:var(--apricot)">Speed</span></div>
					<div class="vp-fix-row"><span><span class="muted" style="font-family:monospace;font-size:.75rem">03</span> Add FAQ schema to /services</span><span class="pill" style="border:none;font-size:.7rem;background:color-mix(in srgb, var(--lilac) 16%, white);color:var(--lilac)">AI visibility</span></div>
				</div>
			</div>
		</div>
	</div>
</section>
