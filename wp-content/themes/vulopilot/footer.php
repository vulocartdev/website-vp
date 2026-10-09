<?php
/**
 * Footer template.
 */
defined( 'ABSPATH' ) || exit;
?>
<footer class="site-footer">
	<div class="wrap">
		<div class="footer-grid">
			<div>
				<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="logo-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><path d="m16.24 7.76-1.804 5.411a2 2 0 0 1-1.265 1.265L7.76 16.24l1.804-5.411a2 2 0 0 1 1.265-1.265z"></path></svg>
					</span>
					VuloPilot
				</a>
				<p class="muted" style="margin-top:1rem;max-width:22rem;font-size:.9rem">The WordPress Growth Operating System. Find what holds your site back, fix it with your approval, and prove it worked.</p>
			</div>

			<div class="footer-col">
				<div class="footer-col-title">Product</div>
				<ul>
					<li><a href="#how">How it works</a></li>
					<li><a href="#features">Search Visibility</a></li>
					<li><a href="#ai">AI Search</a></li>
					<li><a href="#automation">Website Health</a></li>
					<li><a href="#features">Performance</a></li>
					<li><a href="#features">Security</a></li>
					<li><a href="#pricing">Pricing</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<div class="footer-col-title">Solutions</div>
				<ul>
					<li><a href="#">WordPress SEO</a></li>
					<li><a href="#">SEO Audit</a></li>
					<li><a href="#">Website Audit</a></li>
					<li><a href="#">AI Search Optimization</a></li>
					<li><a href="#">Core Web Vitals</a></li>
					<li><a href="#">WordPress Security</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<div class="footer-col-title">For &amp; use cases</div>
				<ul>
					<li><a href="#">Website Owners</a></li>
					<li><a href="#">Businesses</a></li>
					<li><a href="#">Marketers</a></li>
					<li><a href="#">Agencies</a></li>
					<li><a href="#">WooCommerce Stores</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<div class="footer-col-title">Resources</div>
				<ul>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Guides</a></li>
					<li><a href="#">Changelog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>

			<div class="footer-col">
				<div class="footer-col-title">Company</div>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Terms</a></li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> VuloPilot. All rights reserved.</span>
			<span>Built for WordPress.</span>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
