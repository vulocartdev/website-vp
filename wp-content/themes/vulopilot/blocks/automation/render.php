<?php
/**
 * Automation block render.
 *
 * @var array $attributes
 */
defined( 'ABSPATH' ) || exit;

$heading = $attributes['heading'] ?? '';
$subhead = $attributes['subhead'] ?? '';

$cards = array(
	array(
		'tier'  => 'Free',
		'color' => 'sage',
		'freq'  => 'daily, weekly or monthly',
		'icon'  => '<path d="M8 2v3"></path><path d="M16 2v3"></path><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path><path d="m9 15 2 2 4-4"></path>',
		'title' => 'Run Full Site Scan',
		'desc'  => 'Every scanner runs on a schedule and every score refreshes.',
		'steps' => array( 'Scan', 'Score', 'Compare' ),
		'result' => 'The dashboard stays honest without you.',
	),
	array(
		'tier'  => 'Free',
		'color' => 'lilac',
		'freq'  => 'on your schedule',
		'icon'  => '<path d="M11.35 22H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v5.35"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M14 19h6"></path><path d="M17 16v6"></path>',
		'title' => 'Send Visibility Report',
		'desc'  => 'A summary of visibility, issues and opportunities, emailed to you.',
		'steps' => array( 'Check', 'Summarize', 'Email you' ),
		'result' => 'Start the week knowing what needs you.',
	),
	array(
		'tier'  => 'Free',
		'color' => 'apricot',
		'freq'  => 'automatic backups',
		'icon'  => '<path d="M5 22h14"></path><path d="M5 2h14"></path><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"></path><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"></path>',
		'title' => 'Backups that run themselves',
		'desc'  => 'Save a copy of your site, then download, restore or delete it.',
		'steps' => array( 'Back up', 'Store', 'Restore if needed' ),
		'result' => 'Recover from any mistake or hack.',
	),
	array(
		'tier'  => 'Pro',
		'color' => 'apricot',
		'freq'  => 'if / then rules',
		'icon'  => '<line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle>',
		'title' => 'Workflow automation',
		'desc'  => 'Run a rule only when conditions are true, such as the score dropping below 70.',
		'steps' => array( 'Condition', 'Step', 'Retry', 'Log' ),
		'result' => 'Every run is logged, so you see why it did or didn’t fire.',
	),
	array(
		'tier'  => 'Pro',
		'color' => 'rose',
		'freq'  => 'always on',
		'icon'  => '<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path>',
		'title' => 'Security watch',
		'desc'  => 'Vulnerabilities, file changes, exposed files and debug mode.',
		'steps' => array( 'Notice', 'Check the risk', 'Alert you' ),
		'result' => 'You hear about it before it becomes a problem.',
	),
	array(
		'tier'  => 'Pro',
		'color' => 'lilac',
		'freq'  => 'scheduled',
		'icon'  => '<path d="M13 21h8"></path><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>',
		'title' => 'Audits, rankings &amp; reports',
		'desc'  => 'Hourly-to-weekly accessibility audits, daily keyword sync and scheduled PDF reports.',
		'steps' => array( 'Audit', 'Sync', 'Report' ),
		'result' => 'History shows whether you’re improving.',
	),
);
?>
<section id="automation" class="vp-automation">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Automation</div>
			<h2 class="font-display h2" style="margin-top:1.25rem"><?php echo esc_html( $heading ); ?></h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem"><?php echo esc_html( $subhead ); ?></p>
		</div>

		<div class="vp-automation-grid">
			<?php foreach ( $cards as $i => $card ) : ?>
				<div data-reveal="fade-up-blur" data-reveal-delay="<?php echo esc_attr( ( $i % 3 ) * 100 ); ?>">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--<?php echo esc_attr( $card['color'] ); ?>) 16%, white);color:var(--<?php echo esc_attr( $card['color'] ); ?>)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?php echo $card['icon']; // phpcs:ignore ?></svg>
							</span>
							<span class="pill vp-tier-pill <?php echo 'Pro' === $card['tier'] ? 'is-pro' : ''; ?>"><?php echo esc_html( $card['tier'] ); ?></span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem"><?php echo esc_html( $card['title'] ); ?></h3>
						<p class="muted" style="margin-top:.25rem"><?php echo wp_kses_post( $card['desc'] ); ?></p>
						<div class="vp-automation-steps">
							<?php foreach ( $card['steps'] as $j => $step ) : ?>
								<span class="pill vp-step-pill"><?php echo esc_html( $step ); ?></span>
								<?php if ( $j < count( $card['steps'] ) - 1 ) : ?>
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
								<?php endif; ?>
							<?php endforeach; ?>
						</div>
						<p class="vp-automation-result"><span style="color:var(--<?php echo esc_attr( $card['color'] ); ?>);font-weight:500">Result:</span> <?php echo wp_kses_post( $card['result'] ); ?></p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
