<?php
/**
 * Template Name: Performance
 * Template Post Type: page
 * Original route: /features/performance/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'performance' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Performance</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress speed test</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">A faster WordPress site, <span class="text-sage">one fix at a time.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">Your site feels fast on your laptop. Customers arrive on a phone. Google found over half of mobile visits are abandoned after three seconds.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot measures real speed, finds the slow pages and names the fix that matters most.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">What do speed scores mean?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card p-6 sm:p-8">
<div class="flex items-end justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">Speed score · mobile</span><span class="text-3xl font-semibold tabular-nums">58<span class="text-sm text-muted"> / 100</span></span></div>
<div class="mt-3 h-3 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:58%;background:var(--flare)"></div></div>
<div class="mt-4 flex items-end justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">Speed score · desktop</span><span class="text-3xl font-semibold tabular-nums">89<span class="text-sm text-muted"> / 100</span></span></div>
<div class="mt-3 h-3 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:89%;background:var(--sage)"></div></div>
<p class="mt-4 text-xs text-muted">Biggest opportunity: compress the homepage hero image (-1.4s).</p>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Three answers, not thirty numbers.</h2>
<p class="mt-5 text-lg text-muted">How fast is it, what is slowing it down, and what do I do? VuloPilot answers in that order.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-3">
<a href="#vitals" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Speedometer</h3>
<p class="relative mt-3 text-muted">A score out of 100 and Core Web Vitals.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Speed score &amp; Core Web Vitals<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#diagnosis" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crosshair" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="22" x2="18" y1="12" y2="12"></line><line x1="6" x2="2" y1="12" y2="12"></line><line x1="12" x2="12" y1="6" y2="2"></line><line x1="12" x2="12" y1="22" y2="18"></line></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Diagnosis</h3>
<p class="relative mt-3 text-muted">The biggest opportunity and slow pages by cause.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Biggest opportunity &amp; slow-page finder<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#fixes" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">3</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94z"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Toolbox</h3>
<p class="relative mt-3 text-muted">Caching, minifying, images and database, one click each.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Quick fixes<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smartphone" aria-hidden="true"><rect width="14" height="20" x="5" y="2" rx="2" ry="2"></rect><path d="M12 18h.01"></path></svg></span><div><div class="font-semibold">Mobile first</div><p class="mt-1 text-sm text-muted">The score most visitors actually feel.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Biggest win first</div><p class="mt-1 text-sm text-muted">Fix what helps most, then test again.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">100% free</div><p class="mt-1 text-sm text-muted">Every Performance tool is in the free plan.</p></div></div>
</div>
</div>
</section>

<section id="vitals" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Speedometer</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Core Web Vitals: <span class="text-sage">three things you can feel.</span></h2>
<p class="mt-5 text-lg text-muted">A page slow to appear. A button slow to respond. A link that jumps as you tap. Google measures all three, and so does VuloPilot.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: switch between a slow and a fast site on each tab.</p>
</div>
<div class="card p-6 sm:p-8">
<ul class="space-y-4">
<li><div class="flex items-center justify-between text-sm"><span class="font-semibold">Largest Contentful Paint</span><span class="font-semibold text-sage">2.1s</span></div><div class="mt-2 h-2 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full bg-sage" style="width:76%"></div></div></li>
<li><div class="flex items-center justify-between text-sm"><span class="font-semibold">Interaction to Next Paint</span><span class="font-semibold text-sage">140ms</span></div><div class="mt-2 h-2 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full bg-sage" style="width:82%"></div></div></li>
<li><div class="flex items-center justify-between text-sm"><span class="font-semibold">Cumulative Layout Shift</span><span class="font-semibold text-flare">0.18</span></div><div class="mt-2 h-2 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:40%;background:var(--flare)"></div></div></li>
</ul>
<p class="mt-4 text-xs text-muted">Good at 2.5s (LCP), 200ms (INP) and 0.1 (CLS) or less.</p>
</div>
</div>
</section>

<section id="diagnosis" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Diagnosis</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Which pages are slow, and why.</h2>
<p class="mt-5 text-lg text-muted">Speed leaks in five places: server, images, code, caching and fonts. Grouping slow pages by cause means one fix speeds up many.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$perf_tools = array(
	array( 'Speed score', 'One number out of 100, mobile vs desktop.' ),
	array( 'Core Web Vitals', 'Loading, responsiveness and layout stability.' ),
	array( 'Biggest speed opportunity', 'The one change that helps most, and where.' ),
	array( 'Slow-page finder', 'Grouped by server, images, code, caching and fonts.' ),
	array( 'AI speed assistant', 'Ask why a page is slow. Get a plain answer.' ),
	array( 'Speed monitoring', 'Spot the moment something slowed you down.' ),
);
foreach ( $perf_tools as $t ) :
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm bg-bg px-3 py-1 text-[11px] font-semibold text-muted">Free</p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/performance.jpg" width="1760" height="727" alt="VuloPilot performance view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
</div>
</section>

<section id="fixes" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 3 · The Toolbox</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Speed fixes, <span class="text-sage">one click each.</span></h2>
<p class="mt-5 text-lg text-muted">Clear caches, minify CSS and JavaScript, optimize images, clean the database and turn on browser caching. No developer needed.</p>
<p class="mt-4 text-lg font-medium">Test again. If the number moved, it worked.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: run the fixes and watch the mobile score.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Quick fixes</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>Clear caches</span><span class="text-xs font-semibold text-sage">Applied</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Minify CSS &amp; JS</span><span class="text-xs font-semibold text-sage">Applied</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Optimize images</span><span class="text-xs font-semibold text-sage">Applied</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Database cleanup</span><span class="text-xs text-muted">Not run</span></li>
</ul>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Free plan</div><h3 class="mt-1 text-2xl font-semibold">Everything in Performance is free</h3><p class="mt-2 max-w-2xl text-white/70">Speed score, Core Web Vitals, slow-page finder, AI assistant, monitoring and every quick fix. No upgrade needed.</p></div>
<a href="<?php echo esc_url( $home ); ?>/docs/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">Test my site's speed<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"You test your site on fast Wi-Fi. <span class="text-sage">Your customers do not.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$perf_faq = array(
	array( 'Is the WordPress speed test free?', 'Yes. Everything in Performance is included in the free plan.' ),
	array( 'Do I need Google PageSpeed Insights?', 'It is optional. Connect it under Settings for real mobile and desktop scores.' ),
	array( 'What are good Core Web Vitals scores?', 'Largest Contentful Paint (loading) at 2.5 seconds or less, Interaction to Next Paint (responsiveness) at 200 ms or less, and Cumulative Layout Shift (stability) at 0.1 or less.' ),
	array( 'Why is my mobile speed score lower than desktop?', 'Phones have slower processors and connections. Most visitors use phones, so the mobile score is the one to watch.' ),
	array( 'Will a caching plugin make WordPress fast?', 'Only partly. Caching will not fix oversized images, heavy scripts or a slow database. Measure first, then fix the biggest cause.' ),
);
foreach ( $perf_faq as $i => $f ) :
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
<a href="<?php echo esc_url( $home ); ?>/features/website-health/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Website Health</div><p class="mt-1.5 text-sm text-muted">Updates, database, tasks and server in one checkup.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/core-web-vitals/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Core Web Vitals guide</div><p class="mt-1.5 text-sm text-muted">Google's three tests, and what good scores look like.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/search-visibility/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Search Visibility</div><p class="mt-1.5 text-sm text-muted">Speed is part of how Google judges a good visit.</p></div></div></a>
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
