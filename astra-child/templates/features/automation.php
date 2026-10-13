<?php
/**
 * Template Name: Automation
 * Template Post Type: page
 * Original route: /features/automation/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'automation' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Automation</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress automation</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">WordPress maintenance <span class="text-sage">that runs itself.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">You fixed it, the score went up, then life happened. Months later an update has slowed everything, and nobody noticed.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot scans on a schedule, emails what changed and logs every change, so you do not have to remember.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">Did my last fix actually work?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Schedule</span></div>
<ul class="divide-y divide-line">
<li class="flex items-center justify-between px-5 py-4"><span class="font-semibold">Run Full Site Scan</span><span class="rounded-sm bg-sage-soft px-3 py-1 text-xs font-semibold text-sage">Weekly</span></li>
<li class="flex items-center justify-between px-5 py-4"><span class="font-semibold">Send Visibility Report</span><span class="rounded-sm bg-sage-soft px-3 py-1 text-xs font-semibold text-sage">Weekly</span></li>
</ul>
<div class="border-t border-line bg-bg/40 px-5 py-4 text-xs text-muted">Last run: Monday 06:00 · All automations active</div>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Your site changes daily. Your scores should too.</h2>
<p class="mt-5 text-lg text-muted">Scheduled scans keep every score current, reports tell you what moved, and History shows what changed, so you can prove a fix worked or undo one that did not.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-2">
<a href="#routine" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-clock" aria-hidden="true"><path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5"></path><path d="M16 2v4"></path><path d="M8 2v4"></path><path d="M3 10h18"></path><circle cx="18" cy="18" r="4"></circle><path d="M18 16.5v1.5l1 1"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Routine</h3>
<p class="relative mt-3 text-muted">Scans on your schedule, with an emailed summary.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Scheduled scan &amp; visibility report<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#logbook" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history" aria-hidden="true"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M12 7v5l4 2"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Logbook</h3>
<p class="relative mt-3 text-muted">Every change in one timeline. Search, export, undo.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">History, reports &amp; undo<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell-off" aria-hidden="true"><path d="M8.7 3A6 6 0 0 1 18 8a21.3 21.3 0 0 0 .6 5"></path><path d="M17 17H3s3-2 3-9a4.67 4.67 0 0 1 .3-1.7"></path><path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path><path d="m2 2 20 20"></path></svg></span><div><div class="font-semibold">No dashboard to babysit</div><p class="mt-1 text-sm text-muted">The report comes to you.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2" aria-hidden="true"><path d="M9 14 4 9l5-5"></path><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5v0a5.5 5.5 0 0 1-5.5 5.5H11"></path></svg></span><div><div class="font-semibold">Every change can be undone</div><p class="mt-1 text-sm text-muted">Did not help? Undo it from History.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path><path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22"></path><path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2"></path></svg></span><div><div class="font-semibold">Set once, runs for good</div><p class="mt-1 text-sm text-muted">Two switches. Routine work, gone.</p></div></div>
</div>
</div>
</section>

<section id="routine" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Routine</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Pick a schedule. <span class="text-sage">Get the summary by email.</span></h2>
<p class="mt-5 text-lg text-muted">A short email after each scan: scores, what was fixed, what is new and the best opportunities. When something slips, you hear first.</p>
<p class="mt-4 text-lg font-medium">Weekly suits most sites.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Weekly Visibility Report</span></div>
<div class="p-5 text-sm leading-relaxed">
<p class="font-semibold">Your scores this week</p>
<ul class="mt-3 space-y-2">
<li class="flex items-center justify-between"><span class="text-muted">Visibility</span><span class="font-semibold text-sage">86 <span class="text-xs">(+4)</span></span></li>
<li class="flex items-center justify-between"><span class="text-muted">Health</span><span class="font-semibold text-sage">92 <span class="text-xs">(+1)</span></span></li>
<li class="flex items-center justify-between"><span class="text-muted">Performance</span><span class="font-semibold text-flare">71 <span class="text-xs">(-3)</span></span></li>
</ul>
<p class="mt-4 text-muted">3 fixes applied · 1 new opportunity: compress the homepage hero image.</p>
</div>
</div>
</div>
</section>

<section id="logbook" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Logbook</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Everything that changed, <span class="text-sage">and a way to take it back.</span></h2>
<p class="mt-5 text-lg text-muted">Every scan, change and AI conversation in one timeline. Search it, export it, and undo any change from the same place.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: search for "redirect", or undo a change.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">History</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>Added redirect: /old-page → /new-page</span><button class="text-xs font-semibold text-sage hover:underline">Undo</button></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Scheduled scan completed</span><span class="text-xs text-muted">2h ago</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>AI drafted meta description for /pricing/</span><button class="text-xs font-semibold text-sage hover:underline">Undo</button></li>
</ul>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress automation tools</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">The routine is free. Pro lets you build your own.</h2>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$auto_tools = array(
	array( 'Scheduled site scan', 'Daily, weekly or monthly. Every score refreshed.', 'Free' ),
	array( 'Emailed visibility report', 'What changed, after every scan.', 'Free' ),
	array( 'History with undo', 'Every scan and change, searchable.', 'Free' ),
	array( 'PDF and CSV reports', 'Share with clients or your boss.', 'Free' ),
	array( 'Automation status', 'See errors and retry in one click.', 'Free' ),
	array( 'Workflow builder', 'Visual workflows with conditions, retries and logs.', 'Pro' ),
	array( 'Custom reports', 'Built your way, scheduled as PDF.', 'Pro' ),
	array( 'AI credit analytics', 'See where your credits go.', 'Pro' ),
);
foreach ( $auto_tools as $t ) :
	$tag_class = 'Pro' === $t[2] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-clock" aria-hidden="true"><path d="M21 7.5V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h3.5"></path><circle cx="18" cy="18" r="4"></circle></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Workflow automation · Pro</div><h3 class="mt-1 text-2xl font-semibold">When the built-in routine is not enough</h3><p class="mt-2 max-w-2xl text-white/70">Visual workflows with conditions, retries and run logs, plus scheduled custom reports.</p></div>
<a href="<?php echo esc_url( $home ); ?>/pricing/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">See plans<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/automations.jpg" width="1760" height="727" alt="VuloPilot automations view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"A score you checked three months ago <span class="text-sage">is a memory, not a measurement.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$auto_faq = array(
	array( 'What can I automate in WordPress with VuloPilot?', 'A full-site scan and an emailed visibility report, on a schedule. Pro adds custom workflows.' ),
	array( 'How often should I scan my site?', 'Weekly for most sites, daily if you publish often, monthly if it rarely changes.' ),
	array( 'Can I undo a change?', 'Yes. Every change is logged in History, where you can search, export and undo it.' ),
	array( 'What if an automation fails?', 'Its status shows the error, and you can retry it in one click.' ),
	array( 'Is WordPress automation free?', 'Yes. Scheduled scans, emailed reports, History with undo and PDF or CSV exports are free. Pro adds the workflow builder, custom reports and AI credit analytics.' ),
);
foreach ( $auto_faq as $i => $f ) :
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
<a href="<?php echo esc_url( $home ); ?>/features/website-health/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Website Health</div><p class="mt-1.5 text-sm text-muted">Automatic backups and a Health Score over time.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/search-visibility/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Search Visibility</div><p class="mt-1.5 text-sm text-muted">The SEO score the weekly scan keeps current.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/pricing/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Pricing</div><p class="mt-1.5 text-sm text-muted">What is free, and what the workflow builder adds.</p></div></div></a>
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
