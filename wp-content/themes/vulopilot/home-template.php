<?php
/**
 * Template Name: VuloPilot Home
 *
 * Page content only — no <header>/<footer>/<html>/<body> here.
 * Your active theme's own get_header() / get_footer() wrap this when WordPress
 * renders a page assigned to this template (set it under Page Attributes →
 * Template in the editor). This file intentionally contains ONLY the main
 * marketing sections (hero through final CTA), matching the static preview,
 * so it can be dropped into any theme without bringing its own nav/footer.
 */
defined( 'ABSPATH' ) || exit;
?>

<section id="top" class="vp-hero" data-rotating='["improve itself.","be understood by AI.","prove it worked."]'>
	<div class="vp-hero-glow" aria-hidden="true"></div>

	<div class="wrap center" style="max-width:64rem">
		<div class="eyebrow" data-reveal="fade-up">
			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--apricot)"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path></svg>
			The WordPress Growth Operating System		</div>

		<h1 class="font-display vp-hero-title" data-reveal="fade-up" data-reveal-delay="80">
			Stop collecting warnings. Your website should <br>
			Your website should <span class="vp-rotating-wrap"><span class="vp-rotating-word">
				improve itself.			</span></span>
		</h1>

		<p class="muted vp-hero-sub" data-reveal="fade-up" data-reveal-delay="140">VuloPilot looks across your entire WordPress website, finds what is holding it back, explains why it matters, and helps you improve it.</p>

		<div class="vp-hero-ctas" data-reveal="fade-up" data-reveal-delay="200">
			<a href="#scan" class="btn btn-primary group">
				Connect your WordPress site				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vp-arrow"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
			</a>
			<a href="#how" class="btn btn-secondary">See how it works</a>
		</div>

		<p class="muted" style="margin-top:1rem;font-size:.9rem" data-reveal="fade-up" data-reveal-delay="260">Free to start · No credit card required</p>
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
				<div class="vp-gauge" data-gauge data-score="82" style="width:150px;height:150px">
					<svg width="150" height="150" viewBox="0 0 150 150" class="vp-gauge-svg">
						<circle cx="75" cy="75" r="67" fill="none" stroke="var(--line)" stroke-width="8"></circle>
						<circle cx="75" cy="75" r="67" fill="none" stroke="var(--sage)" stroke-width="8" stroke-linecap="round"
							stroke-dasharray="420.97341558103"
							stroke-dashoffset="420.97341558103"
							data-target-offset="75.775214804586"
							class="vp-gauge-fill"></circle>
					</svg>
					<div class="vp-gauge-label">
						<div class="font-display" style="font-size:1.875rem" data-counter data-target="82">0</div>
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
<section id="problem" class="vp-problem">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>The problem</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Your website keeps changing. Are you keeping up?</h2>
		</div>

		<div class="vp-quotes">
							<div data-reveal="fade-up-blur" data-reveal-delay="0">
					<div class="card vp-quote">&ldquo;I have three tools and a hundred warnings. What do I fix?&rdquo;</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="80">
					<div class="card vp-quote">&ldquo;Does ChatGPT even know my business exists?&rdquo;</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="160">
					<div class="card vp-quote">&ldquo;Is my website even okay? I can’t tell.&rdquo;</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="240">
					<div class="card vp-quote">&ldquo;I fixed it last week. Did it help?&rdquo;</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="320">
					<div class="card vp-quote">&ldquo;My visitors dropped. Why?&rdquo;</div>
				</div>
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
											<span class="vp-tag" style="left:4%;top:8%;--rot:-6deg"
							data-reveal="scale-in-sm" data-reveal-delay="0">
							⚠ SSL warning						</span>
											<span class="vp-tag" style="left:32%;top:2%;--rot:4deg"
							data-reveal="scale-in-sm" data-reveal-delay="40">
							⚠ Missing alt text ×48						</span>
											<span class="vp-tag" style="left:62%;top:10%;--rot:-3deg"
							data-reveal="scale-in-sm" data-reveal-delay="80">
							⚠ Slow LCP						</span>
											<span class="vp-tag" style="left:84%;top:4%;--rot:7deg"
							data-reveal="scale-in-sm" data-reveal-delay="120">
							⚠ Broken link /about						</span>
											<span class="vp-tag" style="left:10%;top:30%;--rot:-8deg"
							data-reveal="scale-in-sm" data-reveal-delay="160">
							⚠ Plugin outdated						</span>
											<span class="vp-tag" style="left:40%;top:26%;--rot:3deg"
							data-reveal="scale-in-sm" data-reveal-delay="200">
							⚠ No meta desc						</span>
											<span class="vp-tag" style="left:70%;top:32%;--rot:-5deg"
							data-reveal="scale-in-sm" data-reveal-delay="240">
							⚠ Duplicate H1						</span>
											<span class="vp-tag" style="left:88%;top:28%;--rot:6deg"
							data-reveal="scale-in-sm" data-reveal-delay="280">
							⚠ 404 ×12						</span>
											<span class="vp-tag" style="left:2%;top:48%;--rot:-2deg"
							data-reveal="scale-in-sm" data-reveal-delay="320">
							⚠ Large images						</span>
											<span class="vp-tag" style="left:28%;top:44%;--rot:5deg"
							data-reveal="scale-in-sm" data-reveal-delay="360">
							⚠ Weak schema						</span>
											<span class="vp-tag" style="left:52%;top:50%;--rot:-7deg"
							data-reveal="scale-in-sm" data-reveal-delay="400">
							⚠ XML sitemap?						</span>
											<span class="vp-tag" style="left:78%;top:46%;--rot:2deg"
							data-reveal="scale-in-sm" data-reveal-delay="440">
							⚠ Thin content						</span>
											<span class="vp-tag" style="left:12%;top:68%;--rot:6deg"
							data-reveal="scale-in-sm" data-reveal-delay="480">
							⚠ Mixed content						</span>
											<span class="vp-tag" style="left:38%;top:72%;--rot:-4deg"
							data-reveal="scale-in-sm" data-reveal-delay="520">
							⚠ Core Web Vitals						</span>
											<span class="vp-tag" style="left:64%;top:68%;--rot:3deg"
							data-reveal="scale-in-sm" data-reveal-delay="560">
							⚠ Orphan pages						</span>
											<span class="vp-tag" style="left:86%;top:70%;--rot:-6deg"
							data-reveal="scale-in-sm" data-reveal-delay="600">
							⚠ Cache off						</span>
											<span class="vp-tag" style="left:22%;top:80%;--rot:5deg"
							data-reveal="scale-in-sm" data-reveal-delay="640">
							⚠ Old PHP						</span>
											<span class="vp-tag" style="left:56%;top:82%;--rot:-3deg"
							data-reveal="scale-in-sm" data-reveal-delay="680">
							⚠ Low contrast						</span>
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
				What if your website could answer these questions 				<span class="sage">— and act on them?</span>
			</p>
		</div>
	</div>
</section>
<section class="vp-meet">
	<div class="wrap">
		<div style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Meet VuloPilot</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Every problem deserves a next step.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">One WordPress plugin that understands your entire website, tells you what matters, and helps you act – automatically.</p>
		</div>

		<div class="vp-meet-rows">
							<div class="vp-meet-row" style="background:color-mix(in srgb, var(--rose) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="0">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--rose)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem">Is my website okay?</h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted">Checks your whole site and tells you what is fine and what needs attention.</p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span>
						<div>
							<div class="sage" style="font-weight:500">Security &amp; health</div>
							<div class="muted" style="font-size:.875rem">Old software, risky settings and broken links.</div>
						</div>
					</div>
				</div>
							<div class="vp-meet-row" style="background:color-mix(in srgb, var(--sage) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="90">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--sage)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem">Why did my visitors drop?</h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted">Finds the likely cause and shows you the exact pages.</p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m8 11 2 2 4-4"></path><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg></span>
						<div>
							<div class="sage" style="font-weight:500">Search · Content · Performance</div>
							<div class="muted" style="font-size:.875rem">Spot critical issues and make your site safer.</div>
						</div>
					</div>
				</div>
							<div class="vp-meet-row" style="background:color-mix(in srgb, var(--lilac) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="180">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--lilac)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 17H7A5 5 0 0 1 7 7h2"></path><path d="M15 7h2a5 5 0 1 1 0 10h-2"></path><line x1="8" x2="16" y1="12" y2="12"></line></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem">What do I fix first?</h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted">Puts the important things first, so you know where to start.</p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5h10"></path><path d="M11 12h10"></path><path d="M11 19h10"></path><path d="M4 4h1v5"></path><path d="M4 9h2"></path><path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path></svg></span>
						<div>
							<div class="sage" style="font-weight:500">All six areas, ranked</div>
							<div class="muted" style="font-size:.875rem">By what matters most.</div>
						</div>
					</div>
				</div>
							<div class="vp-meet-row" style="background:color-mix(in srgb, var(--rose) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="270">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--rose)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="3" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="3" rx="1"></rect><rect width="7" height="7" x="14" y="14" rx="1"></rect><rect width="7" height="7" x="3" y="14" rx="1"></rect></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem">Did my fix work?</h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted">Checks again and tells you if the problem is gone.</p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m17 2 4 4-4 4"></path><path d="M3 11v-1a4 4 0 0 1 4-4h14"></path><path d="m7 22-4-4 4-4"></path><path d="M21 13v1a4 4 0 0 1-4 4H3"></path></svg></span>
						<div>
							<div class="sage" style="font-weight:500">Automation</div>
							<div class="muted" style="font-size:.875rem">Checks that run on their own, so nothing is forgotten.</div>
						</div>
					</div>
				</div>
							<div class="vp-meet-row" style="background:color-mix(in srgb, var(--lilac) 7%, var(--surface))" data-reveal="fade-up" data-reveal-delay="360">
					<div class="vp-meet-cell vp-meet-q">
						<span class="vp-meet-icon" style="color:var(--lilac)">
							<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path></svg>
						</span>
						<h3 class="font-display" style="font-size:1.5rem">Does AI know my business?</h3>
					</div>
					<div class="vp-meet-cell vp-meet-desc">
						<p class="muted">Shows how clearly tools like ChatGPT and Gemini understand what you do.</p>
						<span class="vp-meet-arrow">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
						</span>
					</div>
					<div class="vp-meet-cell vp-meet-where">
						<span class="vp-meet-where-icon"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19.07 4.93A10 10 0 0 0 6.99 3.34"></path><path d="M4 6h.01"></path><path d="M2.29 9.62A10 10 0 1 0 21.31 8.35"></path><path d="M16.24 7.76A6 6 0 1 0 8.23 16.67"></path><path d="M12 18h.01"></path><path d="M17.99 11.66A6 6 0 0 1 15.77 16.67"></path><circle cx="12" cy="12" r="2"></circle><path d="m13.41 10.59 5.66-5.66"></path></svg></span>
						<div>
							<div class="sage" style="font-weight:500">AI Visibility</div>
							<div class="muted" style="font-size:.875rem">And how to improve it.</div>
						</div>
					</div>
				</div>
					</div>
	</div>
</section>
<section id="how" class="vp-how">
	<div class="wrap">
		<div style="max-width:40rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>How VuloPilot works</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">“What’s wrong?” becomes “We’ve got this.”</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">Every problem goes from found to fixed — and proven.</p>
		</div>

		<div class="vp-how-grid" data-how>
			<div class="vp-steps">
									<button class="vp-step is-active" data-step="0">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path><circle cx="12" cy="12" r="3"></circle><path d="m16 16-1.9-1.9"></path></svg>
							</span>
							<div>
								<div class="vp-step-num">01</div>
								<div class="font-display" style="font-size:1.5rem">Find</div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px">A full scan of every page, plugin, speed metric and search signal on your site.</p></div>
						<span class="vp-step-progress"></span>
					</button>
									<button class="vp-step " data-step="1">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg>
							</span>
							<div>
								<div class="vp-step-num">02</div>
								<div class="font-display" style="font-size:1.5rem">Understand</div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px">Each warning gets context: why it matters and what it actually costs you.</p></div>
						<span class="vp-step-progress"></span>
					</button>
									<button class="vp-step " data-step="2">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5h10"></path><path d="M11 12h10"></path><path d="M11 19h10"></path><path d="M4 4h1v5"></path><path d="M4 9h2"></path><path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02"></path></svg>
							</span>
							<div>
								<div class="vp-step-num">03</div>
								<div class="font-display" style="font-size:1.5rem">Prioritize</div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px">Everything is ranked so you always know what to fix first.</p></div>
						<span class="vp-step-progress"></span>
					</button>
									<button class="vp-step " data-step="3">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.64 3.64-1.28-1.28a1.21 1.21 0 0 0-1.72 0L2.36 18.64a1.21 1.21 0 0 0 0 1.72l1.28 1.28a1.2 1.2 0 0 0 1.72 0L21.64 5.36a1.2 1.2 0 0 0 0-1.72"></path><path d="m14 7 3 3"></path></svg>
							</span>
							<div>
								<div class="vp-step-num">04</div>
								<div class="font-display" style="font-size:1.5rem">Fix</div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px">One-click AI fixes for the issues that can be automated, with your approval.</p></div>
						<span class="vp-step-progress"></span>
					</button>
									<button class="vp-step " data-step="4">
						<div class="vp-step-top">
							<span class="vp-step-icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="m16 9-5.5 5.5L8 12"></path></svg>
							</span>
							<div>
								<div class="vp-step-num">05</div>
								<div class="font-display" style="font-size:1.5rem">Verify</div>
							</div>
						</div>
						<div class="vp-step-desc"><p class="muted" style="padding-left:60px">See the result for yourself, with proof it worked.</p></div>
						<span class="vp-step-progress"></span>
					</button>
							</div>

			<div class="card vp-how-panel">
				<div class="muted vp-how-panel-label" style="font-family:monospace;font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">
					Step <span data-panel-step-num>01</span> · <span data-panel-step-title>Find</span>
				</div>

				<div class="vp-panel-view" data-panel="0">
					<div class="vp-checklist">
													<div class="vp-check-row" data-reveal-delay="0">
								<div class="vp-check-row-top">
									<span>Pages</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--sage)" data-progress data-target="92"></span>
								</div>
							</div>
													<div class="vp-check-row" data-reveal-delay="120">
								<div class="vp-check-row-top">
									<span>Plugins</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--rose)" data-progress data-target="78"></span>
								</div>
							</div>
													<div class="vp-check-row" data-reveal-delay="240">
								<div class="vp-check-row-top">
									<span>Speed</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--apricot)" data-progress data-target="85"></span>
								</div>
							</div>
													<div class="vp-check-row" data-reveal-delay="360">
								<div class="vp-check-row-top">
									<span>Search</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--lilac)" data-progress data-target="70"></span>
								</div>
							</div>
													<div class="vp-check-row" data-reveal-delay="480">
								<div class="vp-check-row-top">
									<span>Content</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--sage)" data-progress data-target="64"></span>
								</div>
							</div>
													<div class="vp-check-row" data-reveal-delay="600">
								<div class="vp-check-row-top">
									<span>AI visibility</span>
									<span class="vp-check-mark" data-checkmark>✓</span>
								</div>
								<div class="vp-progress-track">
									<span class="vp-progress-fill" style="background:var(--lilac)" data-progress data-target="58"></span>
								</div>
							</div>
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
<section id="automation" class="vp-automation">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Automation</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Set up VuloPilot. It keeps working.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">Free covers scheduled scans, reports and backups. Pro adds rules, security watch and scheduled audits.</p>
		</div>

		<div class="vp-automation-grid">
							<div data-reveal="fade-up-blur" data-reveal-delay="0">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--sage) 16%, white);color:var(--sage)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v3"></path><path d="M16 2v3"></path><rect x="3" y="3" width="18" height="18" rx="2"></rect><path d="M3 9h18"></path><path d="m9 15 2 2 4-4"></path></svg>
							</span>
							<span class="pill vp-tier-pill ">Free</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Run Full Site Scan</h3>
						<p class="muted" style="margin-top:.25rem">Every scanner runs on a schedule and every score refreshes.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Scan</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Score</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Compare</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--sage);font-weight:500">Result:</span> The dashboard stays honest without you.</p>
					</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="100">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--lilac) 16%, white);color:var(--lilac)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11.35 22H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v5.35"></path><path d="M14 2v5a1 1 0 0 0 1 1h5"></path><path d="M14 19h6"></path><path d="M17 16v6"></path></svg>
							</span>
							<span class="pill vp-tier-pill ">Free</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Send Visibility Report</h3>
						<p class="muted" style="margin-top:.25rem">A summary of visibility, issues and opportunities, emailed to you.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Check</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Summarize</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Email you</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--lilac);font-weight:500">Result:</span> Start the week knowing what needs you.</p>
					</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="200">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--apricot) 16%, white);color:var(--apricot)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 22h14"></path><path d="M5 2h14"></path><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"></path><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"></path></svg>
							</span>
							<span class="pill vp-tier-pill ">Free</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Backups that run themselves</h3>
						<p class="muted" style="margin-top:.25rem">Save a copy of your site, then download, restore or delete it.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Back up</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Store</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Restore if needed</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--apricot);font-weight:500">Result:</span> Recover from any mistake or hack.</p>
					</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="0">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--apricot) 16%, white);color:var(--apricot)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="10" x2="14" y1="2" y2="2"></line><line x1="12" x2="15" y1="14" y2="11"></line><circle cx="12" cy="14" r="8"></circle></svg>
							</span>
							<span class="pill vp-tier-pill is-pro">Pro</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Workflow automation</h3>
						<p class="muted" style="margin-top:.25rem">Run a rule only when conditions are true, such as the score dropping below 70.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Condition</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Step</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Retry</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Log</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--apricot);font-weight:500">Result:</span> Every run is logged, so you see why it did or didn’t fire.</p>
					</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="100">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--rose) 16%, white);color:var(--rose)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="M12 8v4"></path><path d="M12 16h.01"></path></svg>
							</span>
							<span class="pill vp-tier-pill is-pro">Pro</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Security watch</h3>
						<p class="muted" style="margin-top:.25rem">Vulnerabilities, file changes, exposed files and debug mode.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Notice</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Check the risk</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Alert you</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--rose);font-weight:500">Result:</span> You hear about it before it becomes a problem.</p>
					</div>
				</div>
							<div data-reveal="fade-up-blur" data-reveal-delay="200">
					<div class="card vp-automation-card">
						<div class="vp-automation-top">
							<span class="vp-automation-icon" style="background:color-mix(in srgb, var(--lilac) 16%, white);color:var(--lilac)">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 21h8"></path><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path></svg>
							</span>
							<span class="pill vp-tier-pill is-pro">Pro</span>
						</div>
						<h3 class="font-display" style="margin-top:1.25rem;font-size:1.5rem">Audits, rankings &amp;amp; reports</h3>
						<p class="muted" style="margin-top:.25rem">Hourly-to-weekly accessibility audits, daily keyword sync and scheduled PDF reports.</p>
						<div class="vp-automation-steps">
															<span class="pill vp-step-pill">Audit</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Sync</span>
																	<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="muted"><path d="m9 18 6-6-6-6"></path></svg>
																							<span class="pill vp-step-pill">Report</span>
																					</div>
						<p class="vp-automation-result"><span style="color:var(--lilac);font-weight:500">Result:</span> History shows whether you’re improving.</p>
					</div>
				</div>
					</div>
	</div>
</section>
<section id="ai" class="vp-ai">
	<div class="wrap vp-ai-grid">
		<div data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Looking ahead</div>
			<h2 class="font-display" style="margin-top:1.25rem;font-size:2.5rem;line-height:1.1">People now ask AI, not just Google. Be the answer.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">VuloPilot helps your website explain itself clearly, so tools like ChatGPT and Gemini understand what you do.</p>

			<div class="vp-ai-tags">
									<span class="pill" style="font-family:monospace;font-size:.75rem">GPTBot</span>
									<span class="pill" style="font-family:monospace;font-size:.75rem">ClaudeBot</span>
									<span class="pill" style="font-family:monospace;font-size:.75rem">PerplexityBot</span>
									<span class="pill" style="font-family:monospace;font-size:.75rem">llms.txt</span>
									<span class="pill" style="font-family:monospace;font-size:.75rem">FAQ schema</span>
									<span class="pill" style="font-family:monospace;font-size:.75rem">Knowledge graph</span>
							</div>

			<ol class="vp-ai-steps">
									<li data-reveal="fade-up" data-reveal-delay="0">
						<span class="vp-ai-num">1</span>
						<span>Make your business easier to understand.</span>
					</li>
									<li data-reveal="fade-up" data-reveal-delay="90">
						<span class="vp-ai-num">2</span>
						<span>Strengthen information and entities that explain your business.</span>
					</li>
									<li data-reveal="fade-up" data-reveal-delay="180">
						<span class="vp-ai-num">3</span>
						<span>Help AI and search tools find the right information.</span>
					</li>
									<li data-reveal="fade-up" data-reveal-delay="270">
						<span class="vp-ai-num">4</span>
						<span>Monitor the signals you can improve.</span>
					</li>
									<li data-reveal="fade-up" data-reveal-delay="360">
						<span class="vp-ai-num">5</span>
						<span>Track what’s working and where to make your website stronger.</span>
					</li>
							</ol>
		</div>

		<div class="vp-ai-visual" data-reveal="scale-in">
			<div class="card vp-chat-card">
				<div class="vp-chat-user">Best bakery near me for a custom birthday cake?</div>
				<div class="vp-chat-answer">For a family-run bakery in Austin, try Rise &amp; Grind Bakery — known for sourdough, same-day custom cakes and gluten-free options.</div>

				<div class="vp-mini-gauges">
											<div class="vp-mini-gauge">
							<div class="vp-gauge" data-gauge data-score="78" style="width:92px;height:92px">
								<svg width="92" height="92" viewBox="0 0 92 92" class="vp-gauge-svg">
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8"></circle>
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--lilac)" stroke-width="8" stroke-linecap="round"
										stroke-dasharray="238.76104167282"
										stroke-dashoffset="238.76104167282"
										data-target-offset="52.527429168021"
										class="vp-gauge-fill"></circle>
								</svg>
								<div class="vp-gauge-label">
									<div class="font-display" style="font-size:1.5rem" data-counter data-target="78">0</div>
								</div>
							</div>
							<span class="muted" style="font-size:.75rem">AI Search</span>
						</div>
											<div class="vp-mini-gauge">
							<div class="vp-gauge" data-gauge data-score="64" style="width:92px;height:92px">
								<svg width="92" height="92" viewBox="0 0 92 92" class="vp-gauge-svg">
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8"></circle>
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--apricot)" stroke-width="8" stroke-linecap="round"
										stroke-dasharray="238.76104167282"
										stroke-dashoffset="238.76104167282"
										data-target-offset="85.953975002217"
										class="vp-gauge-fill"></circle>
								</svg>
								<div class="vp-gauge-label">
									<div class="font-display" style="font-size:1.5rem" data-counter data-target="64">0</div>
								</div>
							</div>
							<span class="muted" style="font-size:.75rem">Entities</span>
						</div>
											<div class="vp-mini-gauge">
							<div class="vp-gauge" data-gauge data-score="89" style="width:92px;height:92px">
								<svg width="92" height="92" viewBox="0 0 92 92" class="vp-gauge-svg">
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8"></circle>
									<circle cx="46" cy="46" r="38" fill="none" stroke="var(--sage)" stroke-width="8" stroke-linecap="round"
										stroke-dasharray="238.76104167282"
										stroke-dashoffset="238.76104167282"
										data-target-offset="26.263714584011"
										class="vp-gauge-fill"></circle>
								</svg>
								<div class="vp-gauge-label">
									<div class="font-display" style="font-size:1.5rem" data-counter data-target="89">0</div>
								</div>
							</div>
							<span class="muted" style="font-size:.75rem">Clarity</span>
						</div>
									</div>
			</div>
		</div>
	</div>
</section>
<section class="vp-dashboard">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Inside VuloPilot</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Finally, see what's really happening.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">Six scores, a health timeline, a needs-your-attention list and recent changes you can undo. Drag, hide and arrange the cards your way.</p>
		</div>

		<div class="card vp-dashboard-card" data-reveal="fade-up-blur" style="margin-top:3rem">
			<div class="vp-dashboard-tabs">
									<span class="pill vp-dash-tab is-active">SEO</span>
									<span class="pill vp-dash-tab ">GEO</span>
									<span class="pill vp-dash-tab ">AEO</span>
									<span class="pill vp-dash-tab ">Brand</span>
									<span class="pill vp-dash-tab ">Knowledge Graph</span>
							</div>

			<div class="vp-dashboard-grid">
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="0">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--sage)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
								Visibility Score							</span>
							<span class="font-display" style="font-size:1.75rem">84</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">Can people and AI find you?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--sage)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="70">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--lilac)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path></svg>
								Content Score							</span>
							<span class="font-display" style="font-size:1.75rem">71</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">Are you answering them?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--lilac)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="140">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--apricot)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg>
								Performance Score							</span>
							<span class="font-display" style="font-size:1.75rem">92</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">How slow, really?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--apricot)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="210">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--sage)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
								Health Score							</span>
							<span class="font-display" style="font-size:1.75rem">97</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">How are WordPress and your server?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--sage)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="280">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--rose)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 10a4 4 0 0 1-8 0"></path><path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z"></path></svg>
								Commerce Score							</span>
							<span class="font-display" style="font-size:1.75rem">76</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">Is my store doing okay?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--rose)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
									<div class="vp-dashboard-mini" data-reveal="fade-up" data-reveal-delay="350">
						<div class="vp-dashboard-mini-top">
							<span class="vp-dashboard-mini-label" style="color:var(--lilac)">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 6a13 13 0 0 0 8.4-2.8A1 1 0 0 1 21 4v12a1 1 0 0 1-1.6.8A13 13 0 0 0 11 14H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"></path></svg>
								Brand Score							</span>
							<span class="font-display" style="font-size:1.75rem">68</span>
						</div>
						<div class="muted" style="font-size:.9rem;margin-top:.25rem">Does your brand look trustworthy?</div>
						<svg viewBox="0 0 160 48" class="vp-sparkline" preserveAspectRatio="none">
							<polyline points="0,44 23,38 46,40 69,30 92,22 115,24 138,12 160,4" fill="none" stroke="var(--lilac)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></polyline>
						</svg>
					</div>
							</div>
		</div>
	</div>
</section>
<section id="features" class="vp-features">
	<div class="wrap">
		<div class="center" style="max-width:48rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Everything inside</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Eleven areas. One plugin.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">Free gives you the insight. Pro adds the action. Pick an area to see exactly what you get in each.</p>
		</div>

		<div class="vp-features-grid" data-features data-reveal="fade-up-blur" style="margin-top:3rem">
			<div class="vp-features-sidebar">
									<button class="vp-feature-tab is-active" data-feature="0">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="9" x="3" y="3" rx="1"></rect><rect width="7" height="5" x="14" y="3" rx="1"></rect><rect width="7" height="9" x="14" y="12" rx="1"></rect><rect width="7" height="5" x="3" y="16" rx="1"></rect></svg>
						<span>Dashboard</span>
					</button>
									<button class="vp-feature-tab " data-feature="1">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8V4H8"></path><rect width="16" height="12" x="4" y="8" rx="2"></rect><path d="M2 14h2"></path><path d="M20 14h2"></path><path d="M15 13v2"></path><path d="M9 13v2"></path></svg>
						<span>AI Copilot</span>
					</button>
									<button class="vp-feature-tab " data-feature="2">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>
						<span>SEO</span>
					</button>
									<button class="vp-feature-tab " data-feature="3">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19.07 4.93A10 10 0 0 0 6.99 3.34"></path><path d="M4 6h.01"></path><path d="M2.29 9.62A10 10 0 1 0 21.31 8.35"></path><path d="M16.24 7.76A6 6 0 1 0 8.23 16.67"></path><path d="M12 18h.01"></path><path d="M17.99 11.66A6 6 0 0 1 15.77 16.67"></path><circle cx="12" cy="12" r="2"></circle><path d="m13.41 10.59 5.66-5.66"></path></svg>
						<span>AI Visibility</span>
					</button>
									<button class="vp-feature-tab " data-feature="4">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 21h8"></path><path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path></svg>
						<span>Content</span>
					</button>
									<button class="vp-feature-tab " data-feature="5">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg>
						<span>Performance</span>
					</button>
									<button class="vp-feature-tab " data-feature="6">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5"></path><path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27"></path></svg>
						<span>Site Health &amp; Backups</span>
					</button>
									<button class="vp-feature-tab " data-feature="7">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="4" r="1"></circle><path d="m18 19 1-7-6 1"></path><path d="m5 8 3-3 5.5 3-2.36 3.5"></path><path d="M4.24 14.5a5 5 0 0 0 6.88 6"></path></svg>
						<span>Accessibility</span>
					</button>
							</div>

			<div class="card vp-feature-panel">
									<div class="vp-feature-view" data-feature-panel="0" >
						<h3 class="font-display" style="font-size:1.75rem">Dashboard</h3>
						<p class="muted" style="margin-top:.5rem">Every score, trend and recent change in one place you can arrange yourself.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Six health scores at a glance								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Timeline of what changed and when								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Needs-your-attention list								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="1" hidden>
						<h3 class="font-display" style="font-size:1.75rem">AI Copilot</h3>
						<p class="muted" style="margin-top:.5rem">Ask questions about your site in plain language and get a plan back.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Chat with your site’s data								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Draft fixes and content								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Explains every recommendation								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="2" hidden>
						<h3 class="font-display" style="font-size:1.75rem">SEO</h3>
						<p class="muted" style="margin-top:.5rem">Technical and on-page SEO checks that stay current as your site changes.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Meta titles, descriptions and headings								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Broken links and redirects								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Sitemap and indexing health								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="3" hidden>
						<h3 class="font-display" style="font-size:1.75rem">AI Visibility</h3>
						<p class="muted" style="margin-top:.5rem">See how clearly ChatGPT, Gemini and Perplexity understand your business.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									llms.txt and crawler traffic								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Entity and knowledge-graph strength								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									FAQ schema coverage								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="4" hidden>
						<h3 class="font-display" style="font-size:1.75rem">Content</h3>
						<p class="muted" style="margin-top:.5rem">Find thin, stale or duplicate content before it costs you traffic.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Readability and structure checks								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Duplicate and thin-content detection								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									AI-assisted rewrites								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="5" hidden>
						<h3 class="font-display" style="font-size:1.75rem">Performance</h3>
						<p class="muted" style="margin-top:.5rem">Core Web Vitals and real load-time data, tracked over time.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									LCP, CLS and INP tracking								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Image and script weight audits								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Hosting and caching checks								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="6" hidden>
						<h3 class="font-display" style="font-size:1.75rem">Site Health &amp; Backups</h3>
						<p class="muted" style="margin-top:.5rem">Automatic backups and plain-language health checks for WordPress itself.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Scheduled, restorable backups								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Outdated plugin and PHP checks								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Debug mode and exposed files								</li>
													</ul>
					</div>
									<div class="vp-feature-view" data-feature-panel="7" hidden>
						<h3 class="font-display" style="font-size:1.75rem">Accessibility</h3>
						<p class="muted" style="margin-top:.5rem">Catch contrast, alt-text and keyboard-navigation issues automatically.</p>
						<ul class="vp-feature-list">
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Automated WCAG scans								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Alt text generation								</li>
															<li>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>
									Scheduled re-checks								</li>
													</ul>
					</div>
							</div>
		</div>
	</div>
</section>
<section id="pricing" class="vp-pricing">
	<div class="wrap" style="max-width:64rem">
		<div class="center" style="max-width:40rem" data-reveal="fade-up-blur">
			<div class="eyebrow"><span class="dot"></span>Plans for your next step</div>
			<h2 class="font-display h2" style="margin-top:1.25rem">Start with insight. Upgrade to action.</h2>
			<p class="muted" style="margin-top:1rem;font-size:1.125rem">Start free to discover what’s holding your website back. Upgrade when you’re ready to let AI fix, create and improve it automatically.</p>
		</div>

		<div class="vp-pricing-grid">
			<div data-reveal="fade-up-blur">
				<div class="card vp-pricing-card">
					<div class="muted" style="font-family:monospace;font-size:.75rem;text-transform:uppercase;letter-spacing:.14em">Free</div>
					<h3 class="font-display" style="margin-top:.5rem;font-size:1.75rem">Know what matters.</h3>
					<div class="font-display" style="margin-top:1.25rem;font-size:3rem">$0 <span class="muted" style="font-size:1rem">forever</span></div>
					<ul class="vp-pricing-list">
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>Website analysis and six health scores</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>SEO, GEO and AEO insights</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>AI visibility, llms.txt and crawler traffic</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>AI Copilot chat and content drafts</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>Speed, accessibility and security scans</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>Backups and website health automation</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>Scheduled scans and emailed reports</li>
													<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="sage"><path d="M20 6 9 17l-5-5"></path></svg>100 free AI credits</li>
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
															<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg>Everything in Free</li>
															<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg>One-click AI fixes and bulk improvements</li>
															<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg>Workflow automation and security watch</li>
															<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg>Scheduled audits, rankings and reports</li>
															<li><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color:var(--flare)"><path d="M20 6 9 17l-5-5"></path></svg>Priority support</li>
													</ul>
						<a href="#scan" class="btn" style="margin-top:1.5rem;display:block;text-align:center;background:#fff;color:var(--ink)">Go Pro</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="scan" class="vp-final-cta">
	<div class="wrap">
		<div class="vp-final-cta-card" data-reveal="fade-up-blur">
			<div class="vp-final-cta-glow" aria-hidden="true"></div>
			<div class="center" style="position:relative">
				<h2 class="font-display h2">You have the questions. VuloPilot has the answers.</h2>

				<form class="vp-scan-form" onsubmit="return false;">
					<input type="text" placeholder="yourwebsite.com" aria-label="Website URL">
					<button type="submit" class="btn btn-primary">
						Scan My Website						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
					</button>
				</form>

				<p class="muted" style="margin-top:1rem;font-size:.9rem">Free to start · No credit card required</p>
			</div>
		</div>
	</div>
</section>

