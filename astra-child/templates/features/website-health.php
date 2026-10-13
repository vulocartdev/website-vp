<?php
/**
 * Template Name: Website Health
 * Template Post Type: page
 * Original route: /features/website-health/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'website-health' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Website Health</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress site health check</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Is your WordPress site <span class="text-sage">healthy underneath?</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">WordPress rarely breaks at once. Updates pile up, the database bloats, a task stops running, and the backup is months old. You find out on the worst day.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot checks it all, keeps restorable backups, and gives you one Health Score to watch.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">Not technical?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card p-6 sm:p-8">
<div class="flex items-end justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">Health Score</span><span class="text-3xl font-semibold tabular-nums">91<span class="text-sm text-muted"> / 100</span></span></div>
<div class="mt-3 h-3 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:91%;background:var(--sage)"></div></div>
<ul class="mt-5 space-y-2 text-sm">
<li class="flex items-center justify-between"><span class="text-muted">Updates</span><span class="font-semibold text-sage">Up to date</span></li>
<li class="flex items-center justify-between"><span class="text-muted">Scheduled tasks</span><span class="font-semibold text-sage">Running</span></li>
<li class="flex items-center justify-between"><span class="text-muted">Last backup</span><span class="font-semibold text-sage">6 hours ago</span></li>
</ul>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">No problem. A checkup, a safety net and a ramp.</h2>
<p class="mt-5 text-lg text-muted">You do not need to know what a database is to know yours is healthy. VuloPilot covers what keeps a site okay: the machinery, a way back, and access for everyone.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-3">
<a href="#checkup" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope" aria-hidden="true"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 6 6 6 6 0 0 0 6-6v-2"></path><circle cx="20" cy="10" r="2"></circle></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Checkup</h3>
<p class="relative mt-3 text-muted">Updates, database, tasks and server, scored while problems are small.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">WordPress checkup &amp; Health Score<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#backups" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-life-buoy" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="4.93" x2="9.17" y1="4.93" y2="9.17"></line><line x1="14.83" x2="19.07" y1="14.83" y2="19.07"></line><line x1="14.83" x2="19.07" y1="9.17" y2="4.93"></line><line x1="14.83" x2="18.36" y1="9.17" y2="5.64"></line><line x1="4.93" x2="9.17" y1="19.07" y2="14.83"></line></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Safety Net</h3>
<p class="relative mt-3 text-muted">Automatic backups, restored in one click.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Manual &amp; automatic backups<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#access" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">3</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-accessibility" aria-hidden="true"><circle cx="16" cy="4" r="1"></circle><path d="m18 19 1-7-5.5 1"></path><path d="m5 8 3-3 5.5 3-2.36 3.5"></path><path d="M4.24 14.5a5 5 0 0 0 6.88 6"></path><path d="M13.76 17.5a5 5 0 0 0-6.88-6"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Ramp</h3>
<p class="relative mt-3 text-muted">Find what keeps people out, plus a manual checklist.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Accessibility scan &amp; checklist<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></span><div><div class="font-semibold">Plain-language results</div><p class="mt-1 text-sm text-muted">What is wrong and why it matters. No jargon.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Small problems stay small</div><p class="mt-1 text-sm text-muted">Cheap to fix early, expensive later.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">A way back, always</div><p class="mt-1 text-sm text-muted">A restorable backup turns a disaster into a blip.</p></div></div>
</div>
</div>
</section>

<section id="checkup" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Checkup</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Every WordPress health check, in one list.</h2>
<p class="mt-5 text-lg text-muted">Each area is scored and rolled into one Health Score, with a timeline that shows your fixes working.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$health_tools = array(
	array( 'Updates', 'WordPress, plugins and themes waiting on updates.', 'Free' ),
	array( 'Database', 'Leftovers and bloat that slow the site down.', 'Free' ),
	array( 'Scheduled tasks (WP-Cron)', 'Background jobs that silently stop running.', 'Free' ),
	array( 'Server setup', 'Configured the way WordPress needs.', 'Free' ),
	array( 'Automatic backups', 'Scheduled or on demand. Restore in one click.', 'Free' ),
	array( 'Off-site backups', 'Copies to Amazon S3 or Google Drive.', 'Pro' ),
	array( 'WCAG accessibility scan', 'Structure, images, links, forms, keyboard, readability.', 'Free' ),
	array( 'Manual testing checklist', 'Keyboard, screen reader and zoom checks.', 'Free' ),
	array( 'Scheduled audits', 'Hourly to weekly, with score history.', 'Pro' ),
);
foreach ( $health_tools as $t ) :
	$tag_class = 'Pro' === $t[2] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-database" aria-hidden="true"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5V19A9 3 0 0 0 21 19V5"></path><path d="M3 12A9 3 0 0 0 21 12"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/health.jpg" width="1760" height="727" alt="VuloPilot health score view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
</div>
</section>

<section id="backups" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Safety Net</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">An untested backup <span class="text-sage">is a hope, not a plan.</span></h2>
<p class="mt-5 text-lg text-muted">Most WordPress emergencies start small: an update that clashes with your theme. With automatic backups, the fix is one click back to before it broke.</p>
<p class="mt-4 text-lg font-medium">Turn them on once. Forget them until you need them.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: update a plugin, then restore.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Backups</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>Today, 06:00</span><button class="text-xs font-semibold text-sage hover:underline">Restore</button></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Yesterday, 06:00</span><button class="text-xs font-semibold text-sage hover:underline">Restore</button></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>2 days ago, 06:00</span><button class="text-xs font-semibold text-sage hover:underline">Restore</button></li>
</ul>
</div>
</div>
</section>

<section id="access" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 3 · The Ramp</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Some visitors <span class="text-sage">hear your site, not see it.</span></h2>
<p class="mt-5 text-lg text-muted">Screen readers read pages aloud. Keyboard users skip the mouse. A missing image description or an unreachable button stops them, and search engines too.</p>
<p class="mt-4 text-muted">The scan follows WCAG. A checklist covers what only a person can test.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: ask what a screen reader says, then add a description.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Accessibility finding</span></div>
<div class="p-5 text-sm leading-relaxed">
<p class="text-muted">Image <code class="rounded-sm bg-bg px-1.5 py-0.5">hero-banner.jpg</code> has no alt text.</p>
<p class="mt-3 rounded-sm bg-bg/60 p-3">A screen reader announces: "Unlabeled graphic." Add a short, accurate description so it reads: "Dashboard showing a Visibility score of 96."</p>
</div>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Free plan</div><h3 class="mt-1 text-2xl font-semibold">Health checks, backups and accessibility scans are free</h3><p class="mt-2 max-w-2xl text-white/70">Pro adds off-site backups and scheduled accessibility audits with score history.</p></div>
<a href="<?php echo esc_url( $home ); ?>/docs/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/accessibility.jpg" width="1760" height="727" alt="VuloPilot accessibility scan view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"A website rarely breaks in one go. <span class="text-sage">It wears down, one skipped update at a time.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$health_faq = array(
	array( 'How do I check my WordPress site health?', 'Run a VuloPilot scan. It checks updates, the database, scheduled tasks (WP-Cron) and server setup, and rolls them into one Health Score you can track.' ),
	array( 'Where are WordPress backups stored?', 'On your own server, where you can download, restore or delete them. Pro also copies them to Amazon S3 or Google Drive.' ),
	array( 'Is an accessibility scan enough for WCAG compliance?', 'No automated tool is. The WCAG-based scan catches a lot; a built-in checklist covers keyboard, screen reader and zoom tests a person must do.' ),
	array( 'How is this different from WordPress Site Health?', 'WordPress has a basic screen under Tools. VuloPilot turns it into a score tracked over time, with backups and accessibility alongside.' ),
	array( 'Is it free?', 'Yes. The health check, automatic backups with one-click restore, and the accessibility scan are free. Pro adds off-site backups and scheduled accessibility audits.' ),
);
foreach ( $health_faq as $i => $f ) :
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
<a href="<?php echo esc_url( $home ); ?>/features/security/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Security</div><p class="mt-1.5 text-sm text-muted">Spot weak points and stop password guessing.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/performance/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Performance</div><p class="mt-1.5 text-sm text-muted">A speed score and the one fix that helps most.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/website-health/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Website Health guide</div><p class="mt-1.5 text-sm text-muted">What health covers and how to keep it there.</p></div></div></a>
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
