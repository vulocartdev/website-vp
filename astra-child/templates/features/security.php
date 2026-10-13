<?php
/**
 * Template Name: Security
 * Template Post Type: page
 * Original route: /features/security/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'security' );
get_header();
$home = untrailingslashit( home_url( '/' ) );
?>
<noscript><style>#vulopilot-root [style*="opacity:0"] { opacity:1 !important; transform:none !important; }</style></noscript>
<?php
ob_start();
?>
<div id="vulopilot-root" class="vulopilot-page grain">
<main>

<section class="relative overflow-hidden px-5 pb-14 pt-32">
<div class="pointer-events-none absolute inset-0 -z-10">
<div class="absolute -left-24 top-10 h-96 w-96 rounded-full bg-sage-soft blur-3xl"></div>
<div class="absolute -right-20 top-24 h-80 w-80 rounded-full bg-apricot-soft blur-3xl"></div>
<div class="absolute inset-0 opacity-[.35] [background-image:radial-gradient(var(--line)_1px,transparent_1px)] [background-size:26px_26px] [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]"></div>
</div>
<div class="mx-auto max-w-6xl">
<nav aria-label="Breadcrumb" class="mb-6 flex flex-wrap items-center gap-1.5 text-sm text-muted">
<a href="<?php echo esc_url( $home ); ?>/features/" class="hover:text-ink">Features</a>
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Security</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress security plugin</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Close WordPress security gaps <span class="text-sage">before bots find them.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">Bots scan millions of WordPress sites a day for the same openings: a weak password, an old plugin, a forgotten backup file. If you have one, it gets found.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot finds them first, blocks password guessing and ranks what to fix.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">Why would anyone hack my site?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Login attempts, last hour</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">Blocked</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>203.0.113.14</span><span class="font-semibold text-rose">37 attempts</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>198.51.100.22</span><span class="font-semibold text-rose">12 attempts</span></li>
</ul>
<div class="border-t border-line bg-bg/40 px-5 py-4 text-xs text-muted">Both addresses blocked automatically after too many wrong logins.</div>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">It is not personal. It is automated.</h2>
<p class="mt-5 text-lg text-muted">Attack tools try every door and walk through the open ones. Good security means closing doors, guarding the login and knowing fast when something is off.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-3">
<a href="#lock" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Lock</h3>
<p class="relative mt-3 text-muted">Blocks brute-force logins and bad requests.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Login protection &amp; attack filter<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#walkaround" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Walkaround</h3>
<p class="relative mt-3 text-muted">Finds what your site gives away: usernames, files, settings.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Exposure &amp; browser protection checks<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#alarm" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">3</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-ring" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M22 8c0-2.3-.8-4.3-2-6"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path><path d="M4 2c-1.2 1.7-2 3.7-2 6"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Alarm</h3>
<p class="relative mt-3 text-muted">Alerts you to trouble, and with Pro, to known vulnerabilities.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Alerts &amp; vulnerability feed<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square-text" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path><path d="M7 8h10"></path><path d="M7 12h6"></path></svg></span><div><div class="font-semibold">No jargon</div><p class="mt-1 text-sm text-muted">What each finding means for you.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Most serious first</div><p class="mt-1 text-sm text-muted">Your first fix is the one that matters.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">Protection is free</div><p class="mt-1 text-sm text-muted">Login protection, firewall and alerts included.</p></div></div>
</div>
</div>
</section>

<section id="lock" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Lock</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Brute-force protection: <span class="text-sage">bots try your login all night.</span></h2>
<p class="mt-5 text-lg text-muted">WordPress allows unlimited password attempts by default. VuloPilot blocks an address after too many wrong guesses and filters bad requests before they reach WordPress. See the demo at the top of the page.</p>
</div>
</div>
</section>

<section id="walkaround" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Walkaround</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">What your site gives away <span class="text-sage">to attackers.</span></h2>
<p class="mt-5 text-lg text-muted">A public username. A downloadable old backup. Debug mode printing file paths. None are break-ins. All are directions.</p>
<p class="mt-4 text-lg font-medium">VuloPilot checks your site the way an attacker would.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: scan the site, then open a finding and fix it.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Exposure checks</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>Debug mode is on</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">Fix now</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Old backup.zip publicly accessible</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">Fix now</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>HTTPS forced sitewide</span><span class="rounded-sm bg-sage-soft px-2 py-0.5 text-xs font-semibold text-sage">OK</span></li>
</ul>
</div>
</div>
</section>

<section id="alarm" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 3 · The Alarm</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Every WordPress security check, free and Pro.</h2>
<p class="mt-5 text-lg text-muted">Free covers the doors and windows. Pro watches for known vulnerabilities and unexpected file changes.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$sec_tools = array(
	array( 'Security score', 'Every issue ranked, most serious first.', 'Free' ),
	array( 'Login and account checks', 'Weak passwords and suspicious logins.', 'Free' ),
	array( 'Brute-force protection and firewall', 'Block password guessing and bad requests.', 'Free' ),
	array( 'Exposure checks', 'Public usernames, leftover files, HTTPS and headers.', 'Free' ),
	array( 'Security alerts', 'Warned the moment something looks wrong.', 'Free' ),
	array( 'Vulnerability feed', 'Known holes in your core, plugins and themes.', 'Pro' ),
	array( 'File change monitoring', 'Catch unexpected changes on your server.', 'Pro' ),
	array( 'Deeper hardening checks', 'Exposed files, debug mode, headers and XML-RPC.', 'Pro' ),
	array( 'Incident log', 'What happened and when, with alerts.', 'Pro' ),
);
foreach ( $sec_tools as $t ) :
	$tag_class = 'Pro' === $t[2] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Recovery</div><h3 class="mt-1 text-2xl font-semibold">Security and backups go together</h3><p class="mt-2 max-w-2xl text-white/70">No lock is perfect. A recent backup is how you recover. Website Health makes them automatically.</p></div>
<a href="<?php echo esc_url( $home ); ?>/features/website-health/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">See Website Health<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/security.jpg" width="1760" height="727" alt="VuloPilot security view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"Most break-ins are not clever. <span class="text-sage">They are just patient.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$sec_faq = array(
	array( 'How do WordPress sites get hacked?', 'Mostly through outdated plugins, weak passwords, unlimited login attempts, exposed files and debug mode left on. VuloPilot checks for each one.' ),
	array( 'Is WordPress secure?', 'Yes, when kept updated. Most incidents come from outdated plugins and themes, weak passwords and poor hosting, not WordPress core.' ),
	array( 'Do I still need backups with a security plugin?', 'Yes. Security limits logins, filters attacks and alerts you; backups are how you recover. Website Health handles them.' ),
	array( 'Is the WordPress security scan free?', 'Yes. The security score, login protection, attack filter, exposure checks and alerts are free. Pro adds a vulnerability feed, file change monitoring, deeper checks and an incident log.' ),
	array( 'Will it change my site without asking?', 'No. You approve every fix, and can undo it later from History.' ),
);
foreach ( $sec_faq as $i => $f ) :
	?>
<div>
<h3 class="text-base">
<button aria-expanded="<?php echo 0 === $i ? 'true' : 'false'; ?>" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium"><?php echo esc_html( $f[0] ); ?><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition<?php echo 0 === $i ? ' rotate-45' : ''; ?>" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
</h3>
<div class="overflow-hidden" style="<?php echo 0 === $i ? 'height:auto;opacity:1' : 'height:0px;opacity:0'; ?>">
<p class="px-6 pb-5 text-muted"><?php echo esc_html( $f[1] ); ?></p>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<h2 class="font-display text-3xl leading-tight sm:text-4xl">Related</h2>
<div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<a href="<?php echo esc_url( $home ); ?>/features/website-health/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Website Health</div><p class="mt-1.5 text-sm text-muted">Updates and restorable backups: the other half of security.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/website-security/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Website Security guide</div><p class="mt-1.5 text-sm text-muted">The weak spots attackers use first, and how to close them.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/automation/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Automation</div><p class="mt-1.5 text-sm text-muted">Scheduled scans that keep the score honest.</p></div></div></a>
</div>
</div>
</section>

<section class="px-5 pb-24">
<div class="relative mx-auto max-w-5xl overflow-hidden rounded-[36px] bg-ink p-10 text-center text-bg sm:p-16">
<div class="absolute -right-10 -top-10 h-56 w-56 rounded-full bg-flare/30 blur-3xl"></div>
<div class="absolute -left-10 bottom-0 h-56 w-56 rounded-full bg-sage/40 blur-3xl"></div>
<div class="relative">
<h2 class="font-display text-3xl sm:text-5xl">You have the questions. <span class="italic text-flare">VuloPilot has the answers.</span></h2>
<p class="mt-4 text-white/60">Free to start · No credit card required</p>
<a href="<?php echo esc_url( $home ); ?>/#pricing" class="mt-8 inline-flex items-center gap-2 rounded-full bg-bg px-7 py-3.5 font-medium text-ink transition hover:bg-flare hover:text-white">SuperPower your Website <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
</section>

</main>
</div>
<?php
$markup = ob_get_clean();
echo str_replace( "\n<", '<', $markup );
get_footer();
