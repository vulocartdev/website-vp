<?php
/**
 * Pricing block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$free_items = array(
	'Website analysis and six health scores',
	'SEO, GEO and AEO insights',
	'AI visibility, llms.txt and crawler traffic',
	'AI Copilot chat and content drafts',
	'Speed, accessibility and security scans',
	'Backups and website health automation',
	'Scheduled scans and emailed reports',
	'100 free AI credits',
);

$pro_items = array(
	'Everything in Free',
	'One-click AI fixes and bulk improvements',
	'Workflow automation and security watch',
	'Scheduled audits, rankings and reports',
	'Priority support',
);
?>
<section id="pricing" class="vp-pricing">
	<div class="wrap" style="max-width:64rem">
		<div class="center" style="max-width:40rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Plans for your next step</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo wp_kses_post( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="vp-pricing-grid">
			<div data-reveal="fade-up-blur">
				<div class="card vp-pricing-card">
					<div class="muted" style="font-family:monospace;font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">Free</div>
					<h3 class="font-display" style="margin-top:.5rem;font-size:1.75rem">Know what matters.</h3>
					<div class="font-display" style="margin-top:1.25rem;font-size:3rem">$0 <span class="muted" style="font-size:1rem">forever</span></div>
					<ul class="vp-pricing-list">
						<?php foreach ( $free_items as $item ) : ?>
							<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg><?php echo esc_html( $item ); ?></li>
						<?php endforeach; ?>
					</ul>
					<a href="#features" class="vp-pricing-link">Compare every feature</a>
					<a href="#scan" class="btn btn-secondary" style="margin-top:1rem;display:block;text-align:center">Start Free</a>
				</div>
			</div>

			<div data-reveal="fade-up-blur" data-reveal-delay="120">
				<div class="vp-pricing-card vp-pricing-pro">
					<div class="vp-pricing-pro-glow" aria-hidden="true"></div>
					<div style="position:relative">
						<div class="vp-pricing-pro-top">
							<span class="muted" style="font-family:monospace;font-size:.75rem;text-transform:uppercase;letter-spacing:.14em;color:rgba(255,255,255,.5)">Pro</span>
							<span class="pill" style="background:var(--apricot);color:#fff;border:none;font-size:.75rem">Licence key</span>
						</div>
						<h3 class="font-display" style="margin-top:.5rem;font-size:1.75rem">Fix it. Automate it. Keep improving.</h3>
						<div class="font-display" style="margin-top:1.25rem;font-size:3rem"><span style="font-size:1rem;color:rgba(255,255,255,.5)">From </span>$19 <span style="font-size:1rem;color:rgba(255,255,255,.5)">/month</span></div>
						<ul class="vp-pricing-list">
							<?php foreach ( $pro_items as $item ) : ?>
								<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg><?php echo esc_html( $item ); ?></li>
							<?php endforeach; ?>
						</ul>
						<a href="#scan" class="btn" style="margin-top:1.5rem;display:block;text-align:center;background:#fff;color:var(--ink)">Go Pro</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
