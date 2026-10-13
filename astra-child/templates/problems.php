<?php
/**
 * Template Name: Problems
 * Template Post Type: page
 * Original route: /problems/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'problems', '' );
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
<span class="text-ink">Problems</span>
</span>
</nav>
<div style="opacity:0;transform:translateY(20px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Problems</div>
<h1 class="mt-5 font-display text-4xl leading-[1.06] tracking-tight sm:text-6xl">Start from the<!-- --> <span class="italic text-sage">problem you have.</span>
</h1>
<p class="mt-6 max-w-2xl text-lg text-muted">Describe what is going wrong and find the fix.</p>
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
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">
</h2>
</div>
<div class="mt-8">
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/not-showing-on-google/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Not Showing on Google</div>
<p class="mt-1.5 text-sm text-muted">Usually a blocked crawler, a missing sitemap or thin pages. VuloPilot checks the usual suspects in one scan.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/website-too-slow/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Website Too Slow</div>
<p class="mt-1.5 text-sm text-muted">Find whether the cause is the server, images, scripts, caching or fonts.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/not-appearing-in-ai-search/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Not Appearing in AI Search</div>
<p class="mt-1.5 text-sm text-muted">Check crawler access, llms.txt, schema, brand trust and whether pages carry quotable answers.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/pages-not-indexed/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Pages Not Indexed</div>
<p class="mt-1.5 text-sm text-muted">Check the sitemap, robots.txt, redirects and noindex settings, then notify search engines.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/poor-core-web-vitals/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Poor Core Web Vitals</div>
<p class="mt-1.5 text-sm text-muted">See which of the three vitals fails and the pages behind it.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/low-search-traffic/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Low Search Traffic</div>
<p class="mt-1.5 text-sm text-muted">Find whether visibility, content or speed is the cause.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/poor-search-rankings/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Poor Search Rankings</div>
<p class="mt-1.5 text-sm text-muted">Fix on-page problems and, with Pro, track keyword rankings and near-the-top opportunities.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/website-security-issues/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Website Security Issues</div>
<p class="mt-1.5 text-sm text-muted">Rank issues by severity, close exposure and block repeated login attempts.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/website-health-issues/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Website Health Issues</div>
<p class="mt-1.5 text-sm text-muted">Updates, database, cron and server setup in one checkup, plus backups for safety.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/slow-woocommerce-store/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Slow WooCommerce Store</div>
<p class="mt-1.5 text-sm text-muted">Slow pages cost orders. Find the bottleneck and the product issues.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/problems/manual-website-management/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Too Much Manual Website Work</div>
<p class="mt-1.5 text-sm text-muted">Replace repeated checks with scheduled scans, emailed reports and logged workflows.</p>
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
