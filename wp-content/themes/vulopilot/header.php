<?php
/**
 * Header template.
 */
defined( 'ABSPATH' ) || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class( 'grain' ); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="site-header-inner">
		<nav class="site-nav">
			<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<span class="logo-icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"></path></svg>
				</span>
				VuloPilot
			</a>

			<div class="nav-links">
				<a href="#how">How it works</a>
				<a href="#features">Features</a>
				<a href="#automation">Solutions</a>
				<a href="#features">Compare</a>
				<a href="#ai">Resources</a>
				<a href="#pricing">Pricing</a>
				<a href="#top">About</a>
			</div>

			<div class="nav-actions">
				<a class="btn btn-flare" href="#scan">
					<span class="flare-sweep"></span>
					<span class="btn-label">
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path><path d="M7 12h10"></path></svg>
						Scan my site
					</span>
				</a>
				<button class="nav-toggle" aria-label="Menu">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 5h16"></path><path d="M4 12h16"></path><path d="M4 19h16"></path></svg>
				</button>
			</div>

			<div class="nav-progress"></div>
		</nav>
	</div>
</header>
