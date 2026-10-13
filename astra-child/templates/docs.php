<?php
/**
 * Template Name: Documentation
 * Template Post Type: page
 * Original route: /docs/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'docs', '' );
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
<span class="text-ink">Docs</span>
</span>
</nav>
<div style="opacity:0;transform:translateY(20px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Docs</div>
<h1 class="mt-5 font-display text-4xl leading-[1.06] tracking-tight sm:text-6xl">Everything you need to<!-- --> <span class="italic text-sage">get going.</span>
</h1>
<p class="mt-6 max-w-2xl text-lg text-muted">Requirements, installation, your first scan and a map of the menu. Full guides for each area live in the plugin documentation.</p>
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
<a href="https://github.com/vulolabs/vulolabs/tree/main/plugins/vulopilot/docs/user" target="_blank" rel="noreferrer" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-sage hover:underline">Full user guides on GitHub <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link" aria-hidden="true">
<path d="M15 3h6v6">
</path>
<path d="M10 14 21 3">
</path>
<path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6">
</path>
</svg>
</a>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>1</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Requirements</h2>
</div>
<div class="mt-8">
<div class="card p-7">
<ul class="grid gap-3 sm:grid-cols-2">
<li>WordPress 6.7 or greater</li>
<li>PHP 8.1 or greater</li>
<li>Site administrator access</li>
<li>VuloPilot Pro needs the free plugin installed first, plus a licence key</li>
</ul>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>2</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Install and activate</h2>
</div>
<div class="mt-8">
<div class="grid gap-4 md:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<h3 class="font-display text-xl">From the plugin directory</h3>
<p class="mt-2 text-muted">Plugins, Add New Plugin, search for VuloPilot, Install Now, then Activate.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<h3 class="font-display text-xl">Upload the zip</h3>
<p class="mt-2 text-muted">Plugins, Add New Plugin, Upload Plugin, choose the zip, Install Now, then Activate Plugin.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<h3 class="font-display text-xl">On the server</h3>
<p class="mt-2 text-muted">Upload the vulopilot folder to /wp-content/plugins/ and activate it from Plugins.</p>
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
</span>3</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Your first scan</h2>
</div>
<div class="mt-8">
<ol class="max-w-2xl space-y-3 text-lg">
<li>Open <b>VuloPilot, Dashboard</b>.</li>
<li>Click <b>Run scan</b> in the header. Every scanner runs and all scores refresh.</li>
<li>Read the score cards, then open the areas that need work.</li>
</ol>
<div class="mt-8" style="opacity:0;transform:translateY(24px)">
<figure class="">
<div class="overflow-hidden rounded-2xl border border-line bg-surface shadow-[0_30px_70px_-36px_rgba(0,41,145,.5)] ">
<div class="flex items-center gap-1.5 border-b border-line bg-bg/80 px-4 py-2.5">
<span class="h-2.5 w-2.5 rounded-full bg-rose/70">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-flare/60">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-sage/70">
</span>
<span class="ml-3 truncate rounded-full bg-surface px-3 py-0.5 font-mono text-[10px] text-muted ring-1 ring-line">wp-admin / VuloPilot / SEO &amp; Visibility → Overview</span>
</div>
<button type="button" class="group relative block w-full cursor-zoom-in text-left" aria-label="Enlarge screenshot: Visibility Overview">
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/overview.jpg" width="1760" height="727" alt="VuloPilot visibility overview with an overall score of 96 and a 30-day trend chart" loading="lazy" decoding="async" class="block h-auto w-full"/>
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
<figcaption class="mt-3 text-center text-sm text-muted">Visibility Overview<!-- -->: <!-- -->SEO &amp; Visibility → Overview</figcaption>
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
</span>4</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Find your way around</h2>
</div>
<div class="mt-8">
<div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Dashboard</div>
<p class="mt-1 text-sm text-muted">Overall health, needs-attention list, recent activity</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">AI Copilot</div>
<p class="mt-1 text-sm text-muted">Chat with an assistant that knows your scan data</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">SEO &amp; Visibility</div>
<p class="mt-1 text-sm text-muted">SEO score, robots.txt, redirects, 404s, AI visibility, schema</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Content</div>
<p class="mt-1 text-sm text-muted">AI content tools and content quality</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Performance</div>
<p class="mt-1 text-sm text-muted">Speed score, slow pages, caching and asset checks</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Site Health</div>
<p class="mt-1 text-sm text-muted">WordPress health checks and backups</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Accessibility</div>
<p class="mt-1 text-sm text-muted">WCAG-based checks</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Security</div>
<p class="mt-1 text-sm text-muted">Malware, firewall, login protection, vulnerabilities</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Commerce</div>
<p class="mt-1 text-sm text-muted">WooCommerce store checks</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Automations</div>
<p class="mt-1 text-sm text-muted">Scheduled scans and reports</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Reports</div>
<p class="mt-1 text-sm text-muted">Generated reports and the change history</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-5">
<div class="font-display text-xl">Settings</div>
<p class="mt-1 text-sm text-muted">Every setting, grouped by topic</p>
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
</span>5</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Optional services</h2>
</div>
<div class="mt-8">
<div class="card p-7">
<ul class="space-y-3">
<li>
<b>VuloCloud:</b> AI features, content generation, AI Copilot and credits (Settings, Integrations).</li>
<li>
<b>Google:</b> Search Console, Analytics and AdSense data inside VuloPilot.</li>
<li>
<b>PageSpeed Insights:</b> real Mobile and Desktop speed scores.</li>
<li>
<b>IndexNow:</b> tell search engines about new content immediately.</li>
</ul>
<p class="mt-4 text-sm text-muted">None are required. Only the features you turn on contact outside services. Stuck? Start with the <a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/how-it-works/" class="underline">How it works</a> page.</p>
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
