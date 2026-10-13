<?php
/**
 * Template Name: Core Web Vitals in plain English.
 * Template Post Type: page
 * Original route: /solutions/core-web-vitals/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'solutions/[slug]', 'core-web-vitals' );
get_header();
?>
<noscript><style>#vulopilot-root [style*="opacity:0"] { opacity:1 !important; transform:none !important; }</style></noscript>
<?php
ob_start();
?>
<div id="vulopilot-root" class="vulopilot-page grain">
<main>
<section class="relative overflow-hidden px-5 pb-16 pt-36">
<div class="pointer-events-none absolute inset-0 -z-10">
<div class="absolute -left-24 top-10 h-96 w-96 rounded-full bg-sage-soft blur-3xl">
</div>
<div class="absolute -right-20 top-24 h-80 w-80 rounded-full bg-apricot-soft blur-3xl">
</div>
<div class="absolute inset-0 opacity-[.35] [background-image:radial-gradient(var(--line)_1px,transparent_1px)] [background-size:26px_26px] [mask-image:radial-gradient(ellipse_at_top,black,transparent_70%)]">
</div>
</div>
<div class="mx-auto max-w-4xl">
<nav aria-label="Breadcrumb" class="mb-6 flex flex-wrap items-center gap-1.5 text-sm text-muted">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/" class="hover:text-ink">Home</a>
<span class="flex items-center gap-1.5">
<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/" class="hover:text-ink">Solutions</a>
</span>
<span class="flex items-center gap-1.5">
<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
<span class="text-ink">Core Web Vitals</span>
</span>
</nav>
<div style="opacity:0;transform:translateY(20px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Solutions</div>
<h1 class="mt-5 font-display text-4xl leading-[1.06] tracking-tight sm:text-6xl">Core Web Vitals in<!-- --> <span class="italic text-sage">plain English.</span>
</h1>
<p class="mt-6 max-w-2xl text-lg text-muted">VuloPilot shows Google&#x27;s three tests of a good visit and ties each one to the pages and the fix.</p>
<div class="mt-8 flex flex-wrap gap-3">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/#pricing" class="group inline-flex items-center gap-2 rounded-full bg-ink px-6 py-3 font-medium text-bg transition hover:bg-sage">SuperPower your Website <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/pricing/" class="rounded-full border border-line bg-surface/70 px-6 py-3 font-medium transition hover:border-ink">See Free &amp; Pro</a>
</div>
</div>
</div>
</section>
<section class="px-5 pt-2 pb-6">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="rounded-3xl border border-line bg-surface p-7 sm:p-9">
<div class="flex flex-wrap items-center justify-between gap-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Short answer</div>
<span class="text-xs text-muted">Last updated <time dateTime="2026-10-10">October 10, 2026</time>
</span>
</div>
<h2 class="mt-4 font-display text-2xl leading-snug sm:text-3xl">What are Core Web Vitals?</h2>
<div class="mt-3 max-w-3xl text-lg leading-relaxed text-ink/80">
<p>Core Web Vitals are Google&#x27;s three measures of page experience: Largest Contentful Paint (loading, good at 2.5 seconds or less), Interaction to Next Paint (responsiveness, good at 200 milliseconds or less) and Cumulative Layout Shift (visual stability, good at 0.1 or less). VuloPilot shows each one and the pages that fail it.</p>
<p class="mt-4 text-sm text-muted">Sources: <span>
<a href="https://web.dev/articles/vitals" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Web Vitals” on web.dev</a>
</span>
</p>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Sound familiar?</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">The problem you are probably living with</h2>
</div>
<div class="mt-8">
<div class="grid gap-4 md:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-rose/10 text-rose">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert lucide-alert-triangle" aria-hidden="true">
<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
</path>
<path d="M12 9v4">
</path>
<path d="M12 17h.01">
</path>
</svg>
</span>
<p class="mt-4 font-display text-xl leading-snug">Terms like LCP and CLS mean nothing to most owners.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-rose/10 text-rose">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert lucide-alert-triangle" aria-hidden="true">
<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
</path>
<path d="M12 9v4">
</path>
<path d="M12 17h.01">
</path>
</svg>
</span>
<p class="mt-4 font-display text-xl leading-snug">Scores fail but the cause is unclear.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-rose/10 text-rose">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert lucide-alert-triangle" aria-hidden="true">
<path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3">
</path>
<path d="M12 9v4">
</path>
<path d="M12 17h.01">
</path>
</svg>
</span>
<p class="mt-4 font-display text-xl leading-snug">Fixes are scattered across plugins.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>The VuloPilot way</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">From found to fixed, <span class="italic text-sage">and proven.</span>
</h2>
</div>
<div class="mt-8">
<div class="grid gap-4 md:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full overflow-hidden p-7">
<span class="absolute right-5 top-3 font-display text-7xl text-line">1</span>
<div class="relative">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Step <!-- -->1</div>
<h3 class="mt-2 font-display text-3xl">Scan</h3>
<p class="mt-3 text-muted">The Core Web Vitals card measures how fast the main content appears, how quickly the page reacts and whether things jump around.</p>
</div>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full overflow-hidden p-7">
<span class="absolute right-5 top-3 font-display text-7xl text-line">2</span>
<div class="relative">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Step <!-- -->2</div>
<h3 class="mt-2 font-display text-3xl">Fix</h3>
<p class="mt-3 text-muted">Follow the Biggest Speed Opportunity and open affected pages from the finding.</p>
</div>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full overflow-hidden p-7">
<span class="absolute right-5 top-3 font-display text-7xl text-line">3</span>
<div class="relative">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Step <!-- -->3</div>
<h3 class="mt-2 font-display text-3xl">Verify</h3>
<p class="mt-3 text-muted">Scan again and VuloPilot shows whether the problem is gone, with your score history as proof.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>In the product</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">See it <span class="italic text-sage">inside WordPress.</span>
</h2>
</div>
<div class="mt-8">
<div class="" style="opacity:0;transform:translateY(24px)">
<figure class="">
<div class="overflow-hidden rounded-2xl border border-line bg-surface shadow-[0_30px_70px_-36px_rgba(0,41,145,.5)] ">
<div class="flex items-center gap-1.5 border-b border-line bg-bg/80 px-4 py-2.5">
<span class="h-2.5 w-2.5 rounded-full bg-rose/70">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-flare/60">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-sage/70">
</span>
<span class="ml-3 truncate rounded-full bg-surface px-3 py-0.5 font-mono text-[10px] text-muted ring-1 ring-line">wp-admin / VuloPilot / Performance → Overview</span>
</div>
<button type="button" class="group relative block w-full cursor-zoom-in text-left" aria-label="Enlarge screenshot: Performance">
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/performance.jpg" width="1720" height="826" alt="VuloPilot performance overview with speed score, Core Web Vitals and quick actions" loading="lazy" decoding="async" class="block h-auto w-full"/>
<span class="absolute right-3 top-3 grid h-8 w-8 place-items-center rounded-full bg-ink/80 text-bg opacity-0 backdrop-blur transition group-hover:opacity-100">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-maximize-2" aria-hidden="true">
<path d="M15 3h6v6">
</path>
<path d="m21 3-7 7">
</path>
<path d="m3 21 7-7">
</path>
<path d="M9 21H3v-6">
</path>
</svg>
</span>
</button>
</div>
<figcaption class="mt-3 text-center text-sm text-muted">Performance<!-- -->: <!-- -->Performance → Overview</figcaption>
</figure>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>What you get</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Features behind this</h2>
</div>
<div class="mt-8">
<div class="grid gap-5 md:grid-cols-2">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-7">
<div class="flex items-center gap-3">
<span class="grid h-11 w-11 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
</span>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/performance/" class="font-display text-2xl hover:text-sage">Performance</a>
</div>
<ul class="mt-5 space-y-2 text-[15px]">
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Overall speed score, mobile vs desktop</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Core Web Vitals</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Biggest speed opportunity and slow-page finder</li>
</ul>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/performance/" class="mt-5 inline-block text-sm font-medium text-sage hover:underline">Explore <!-- -->Performance<!-- --> →</a>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-7">
<div class="flex items-center gap-3">
<span class="grid h-11 w-11 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
</span>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/website-health/" class="font-display text-2xl hover:text-sage">Website Health</a>
</div>
<ul class="mt-5 space-y-2 text-[15px]">
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>WordPress health checkup: updates, database, scheduled tasks, server</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Manual and automatic backups</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Download, restore or delete backups</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars mt-0.5 shrink-0 text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
<span>
<span class="mr-1.5 rounded-full bg-apricot px-2 py-0.5 font-mono text-[10px] uppercase text-white">Pro</span>Copy backups to Amazon S3 or Google Drive, credentials stored encrypted</span>
</li>
</ul>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/website-health/" class="mt-5 inline-block text-sm font-medium text-sage hover:underline">Explore <!-- -->Website Health<!-- --> →</a>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-7">
<div class="flex items-center gap-3">
<span class="grid h-11 w-11 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
</span>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/search-visibility/" class="font-display text-2xl hover:text-sage">Search Visibility</a>
</div>
<ul class="mt-5 space-y-2 text-[15px]">
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>SEO score and a ranked problem list</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Page titles and descriptions</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Sitemap and instant indexing (IndexNow)</li>
<li class="flex gap-2.5">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars mt-0.5 shrink-0 text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
<span>
<span class="mr-1.5 rounded-full bg-apricot px-2 py-0.5 font-mono text-[10px] uppercase text-white">Pro</span>Technical SEO: schema, sitemap, duplicate descriptions, multiple H1s, focus keywords</span>
</li>
</ul>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/search-visibility/" class="mt-5 inline-block text-sm font-medium text-sage hover:underline">Explore <!-- -->Search Visibility<!-- --> →</a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Questions</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Core Web Vitals: frequently asked questions</h2>
</div>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<div>
<h3 class="text-base">
<button aria-expanded="true" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Which metrics are covered?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition rotate-45" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:auto;opacity:1">
<p class="px-6 pb-5 text-muted">Loading speed, responsiveness and layout stability, the three areas Google groups under Core Web Vitals.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Is anything changed without my approval?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">No. When VuloPilot proposes a change you preview before and after, then approve or reject it. Approved changes can be undone from the History page.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">How much does VuloPilot cost?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">VuloPilot has a free plan with core scans and 100 AI credits. Paid plans start at $19 a month for one site, with a 14-day free trial and no credit card required.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Keep exploring</h2>
</div>
<div class="mt-8">
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/wordpress-seo/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">WordPress SEO</div>
<p class="mt-1.5 text-sm text-muted">VuloPilot scans your whole WordPress site, scores your SEO, and turns a long list of warnings into a ranked to-do list.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/seo-audit/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">SEO Audit</div>
<p class="mt-1.5 text-sm text-muted">Instead of a one-off report that is out of date in a month, VuloPilot audits your whole site on demand or on a schedule and tracks your score over time.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/website-audit/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Website Audit</div>
<p class="mt-1.5 text-sm text-muted">Search, speed, security, accessibility and content are usually checked in five different tools. VuloPilot audits them together and shows six scores on one dashboard.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/ai-search-optimization/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">AI Search Optimization</div>
<p class="mt-1.5 text-sm text-muted">VuloPilot checks how clearly ChatGPT, Claude, Gemini and Perplexity can find, understand and quote your site, and gives you the fixes in order.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/generative-engine-optimization/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Generative Engine Optimization</div>
<p class="mt-1.5 text-sm text-muted">GEO is making your content easy for generative AI to use. VuloPilot turns it into six checks on every page, with a Fix these first card.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/solutions/answer-engine-optimization/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Answer Engine Optimization</div>
<p class="mt-1.5 text-sm text-muted">AEO is about answering questions clearly enough to be picked. VuloPilot checks your pages, and with Pro shows how often AI engines cite you.</p>
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right mt-1 shrink-0 text-muted transition group-hover:translate-x-1 group-hover:text-ink" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</div>
</a>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 pb-24">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="relative mx-auto max-w-5xl overflow-hidden rounded-[36px] bg-ink p-10 text-center text-bg sm:p-16">
<div class="absolute -right-10 -top-10 h-56 w-56 rounded-full bg-flare/30 blur-3xl">
</div>
<div class="absolute -left-10 bottom-0 h-56 w-56 rounded-full bg-sage/40 blur-3xl">
</div>
<div class="relative">
<h2 class="font-display text-3xl sm:text-5xl">You have the questions. <span class="italic text-flare">VuloPilot has the answers.</span>
</h2>
<p class="mt-4 text-white/60">Free to start · No credit card required</p>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/#pricing" class="mt-8 inline-flex items-center gap-2 rounded-full bg-bg px-7 py-3.5 font-medium text-ink transition hover:bg-flare hover:text-white">SuperPower your Website <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</div>
</div>
</div>
</section>
</main>
</div>
<?php
$markup = ob_get_clean();
echo str_replace( "\n<", '<', $markup ); // Keep formatted templates compatible with interactive hydration.
get_footer();
?>
