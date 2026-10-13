<?php
/**
 * Template Name: Technical SEO
 * Template Post Type: page
 * Original route: /guides/technical-seo/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'guides/[slug]', 'technical-seo' );
get_header();
?>
<noscript><style>#vulopilot-root [style*="opacity:0"] { opacity:1 !important; transform:none !important; }</style></noscript>
<?php
ob_start();
?>
<div id="vulopilot-root" class="vulopilot-page grain">
<main>
<article class="px-5 pb-10 pt-36">
<div class="mx-auto max-w-3xl">
<nav aria-label="Breadcrumb" class="mb-6 flex flex-wrap items-center gap-1.5 text-sm text-muted">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/" class="hover:text-ink">Home</a>
<span class="flex items-center gap-1.5">
<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/" class="hover:text-ink">Guides</a>
</span>
<span class="flex items-center gap-1.5">
<svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
<span class="text-ink">Technical SEO</span>
</span>
</nav>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Guide · <!-- -->6<!-- --> min read</div>
<h1 class="mt-5 font-display text-4xl leading-tight sm:text-6xl">Technical SEO</h1>
<p class="mt-5 text-xl text-muted">The behind-the-scenes checks that decide whether pages can rank at all.</p>
<p class="mt-4 text-sm text-muted">By the <!-- -->Vulo Labs<!-- --> team · <span class="text-xs text-muted">Last updated <time dateTime="2026-10-10">October 10, 2026</time>
</span>
</p>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-10 rounded-3xl border border-line bg-surface p-7">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Short answer</div>
<h2 class="mt-2 font-display text-2xl leading-snug">What is technical SEO?</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Technical SEO is everything about how a site is built and served that affects whether search engines can crawl, index and understand it: robots.txt and noindex rules, XML sitemaps, canonical links, redirects, structured data, duplicate titles, heading structure and page speed. If technical SEO is broken, good content cannot rank.</p>
</div>
</div>
<nav aria-label="On this page" class="mt-10 rounded-2xl bg-bg/70 p-5 text-sm">
<div class="font-medium">On this page</div>
<ol class="mt-2 list-decimal space-y-1 pl-5 text-muted">
<li>
<a href="#s1" class="hover:text-ink">What technical SEO covers</a>
</li>
<li>
<a href="#s2" class="hover:text-ink">Crawlability and indexing</a>
</li>
<li>
<a href="#s3" class="hover:text-ink">Structured data</a>
</li>
<li>
<a href="#s4" class="hover:text-ink">Duplicates and headings</a>
</li>
<li>
<a href="#faq" class="hover:text-ink">Frequently asked questions</a>
</li>
</ol>
</nav>
<div class="mt-12 space-y-10">
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s1" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->1</div>
<h2 class="mt-1 font-display text-3xl">What technical SEO covers</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Technical SEO is everything about how your site is built and served rather than what it says: crawlability, indexing, structured data, canonical links, redirects and page speed.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s2" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->2</div>
<h2 class="mt-1 font-display text-3xl">Crawlability and indexing</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">If a crawler cannot reach a page, or is told not to index it, nothing else matters. Check robots.txt, noindex settings, sitemap entries that are broken or redirected, and orphan pages nothing links to.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s3" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->3</div>
<h2 class="mt-1 font-display text-3xl">Structured data</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Schema markup labels your content for machines: products with price and availability, articles, FAQs, organizations. Missing or incomplete schema is a common, fixable gap.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s4" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->4</div>
<h2 class="mt-1 font-display text-3xl">Duplicates and headings</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Duplicate titles and meta descriptions blur which page should rank. Pages with more than one main heading (H1) confuse structure. Each page should have one clear topic.</p>
</section>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-14 rounded-3xl bg-sage-soft/70 p-7">
<h2 class="font-display text-2xl">Key takeaways</h2>
<ul class="mt-4 grid gap-2 sm:grid-cols-2">
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Make sure crawlers can reach important pages</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Add complete schema</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Keep titles and descriptions unique</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>One H1 per page</li>
</ul>
</div>
</div>
<section id="faq" class="mt-14 scroll-mt-28">
<h2 class="mb-6 font-display text-3xl">Technical SEO<!-- -->: frequently asked questions</h2>
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<div>
<h3 class="text-base">
<button aria-expanded="true" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">What is the difference between technical SEO and on-page SEO?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition rotate-45" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:auto;opacity:1">
<p class="px-6 pb-5 text-muted">Technical SEO is about the site&#x27;s infrastructure: crawling, indexing, speed and structured data. On-page SEO is about the content of each page: titles, headings, copy and internal links. Both are needed.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">How often should I run a technical SEO audit?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">Run a full audit at least monthly and after any major change such as a redesign, migration or new plugin. Scheduled weekly scans catch problems earlier.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Does structured data improve rankings?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">Structured data is not a direct ranking factor, but it helps search engines understand a page and makes it eligible for rich results such as product prices and ratings.</p>
</div>
</div>
</div>
</section>
<section class="mt-10">
<h2 class="font-display text-xl">Sources and further reading</h2>
<ul class="mt-3 space-y-1.5 text-sm text-muted">
<li>
<a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Introduction to robots.txt”</a>
</li>
<li>
<a href="https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Build and submit a sitemap”</a>
</li>
<li>
<a href="https://developers.google.com/search/docs/appearance/structured-data/intro-structured-data" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Introduction to structured data”</a>
</li>
</ul>
</section>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card mt-10 flex flex-wrap items-center justify-between gap-4 p-7">
<div>
<div class="font-mono text-xs uppercase tracking-widest text-sage">How VuloPilot helps</div>
<p class="mt-1 font-display text-2xl">Search Visibility<!-- -->: <!-- -->get found in google and bing<!-- -->.</p>
</div>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/search-visibility/" class="rounded-full bg-ink px-5 py-2.5 text-sm font-medium text-bg hover:bg-sage">See the feature</a>
</div>
</div>
</div>
</article>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<h2 class="mb-6 font-display text-3xl">More guides</h2>
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/wordpress-seo/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">WordPress SEO</div>
<p class="mt-1.5 text-sm text-muted">What to set up, in what order, and how to know it is working.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/ai-search/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">AI Search</div>
<p class="mt-1.5 text-sm text-muted">How people now use ChatGPT, Claude, Gemini and Perplexity to find businesses.</p>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/geo/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">GEO: Generative Engine Optimization</div>
<p class="mt-1.5 text-sm text-muted">Six checks that make content easy for generative AI to use.</p>
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
