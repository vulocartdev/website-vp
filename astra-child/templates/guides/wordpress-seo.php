<?php
/**
 * Template Name: WordPress SEO
 * Template Post Type: page
 * Original route: /guides/wordpress-seo/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'guides/[slug]', 'wordpress-seo' );
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
<span class="text-ink">WordPress SEO</span>
</span>
</nav>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Guide · <!-- -->6<!-- --> min read</div>
<h1 class="mt-5 font-display text-4xl leading-tight sm:text-6xl">WordPress SEO</h1>
<p class="mt-5 text-xl text-muted">What to set up, in what order, and how to know it is working.</p>
<p class="mt-4 text-sm text-muted">By the <!-- -->Vulo Labs<!-- --> team · <span class="text-xs text-muted">Last updated <time dateTime="2026-10-10">October 10, 2026</time>
</span>
</p>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-10 rounded-3xl border border-line bg-surface p-7">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Short answer</div>
<h2 class="mt-2 font-display text-2xl leading-snug">How do you do SEO on a WordPress site?</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">WordPress SEO comes down to five basics: a unique title and meta description on every page, a published XML sitemap, a robots.txt that does not block important pages, redirects for moved URLs, and Google Search Console connected so you can see real queries. Fix the highest-severity problems first, then re-scan to confirm.</p>
</div>
</div>
<nav aria-label="On this page" class="mt-10 rounded-2xl bg-bg/70 p-5 text-sm">
<div class="font-medium">On this page</div>
<ol class="mt-2 list-decimal space-y-1 pl-5 text-muted">
<li>
<a href="#s1" class="hover:text-ink">What WordPress SEO really is</a>
</li>
<li>
<a href="#s2" class="hover:text-ink">Start with the basics</a>
</li>
<li>
<a href="#s3" class="hover:text-ink">Tell search engines when something changes</a>
</li>
<li>
<a href="#s4" class="hover:text-ink">Measure, fix, re-measure</a>
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
<h2 class="mt-1 font-display text-3xl">What WordPress SEO really is</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">SEO is helping Google, Bing and other search engines find your pages, understand them and show them to the right people. On WordPress that comes down to three jobs: checking for problems, setting up what search engines look for, and guiding each page as you write.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s2" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->2</div>
<h2 class="mt-1 font-display text-3xl">Start with the basics</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Give every page a unique title and description, publish an XML sitemap, make sure robots.txt does not block anything important, and redirect moved pages instead of letting them 404. These five items cover most early wins.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s3" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->3</div>
<h2 class="mt-1 font-display text-3xl">Tell search engines when something changes</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">A sitemap is a map, but you can also notify search engines directly. Protocols like IndexNow let supporting engines know about new or updated pages right away rather than waiting to be crawled.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s4" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->4</div>
<h2 class="mt-1 font-display text-3xl">Measure, fix, re-measure</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Connect Google Search Console so you see real queries and impressions. Fix the highest-severity problems first, then scan again. Progress you can see is progress you keep.</p>
</section>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-14 rounded-3xl bg-sage-soft/70 p-7">
<h2 class="font-display text-2xl">Key takeaways</h2>
<ul class="mt-4 grid gap-2 sm:grid-cols-2">
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Unique titles and descriptions on every page</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>A sitemap and a sane robots.txt</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Redirect, do not delete</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Re-scan after each fix</li>
</ul>
</div>
</div>
<section id="faq" class="mt-14 scroll-mt-28">
<h2 class="mb-6 font-display text-3xl">WordPress SEO<!-- -->: frequently asked questions</h2>
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<div>
<h3 class="text-base">
<button aria-expanded="true" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Do I need an SEO plugin for WordPress?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition rotate-45" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:auto;opacity:1">
<p class="px-6 pb-5 text-muted">WordPress does not set custom titles, meta descriptions or redirects on its own, so most sites use a plugin for them. Use only one plugin to output meta tags and sitemaps, or you will get duplicate tags.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">How long does WordPress SEO take to work?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">Technical fixes such as unblocking crawlers can show up within days once pages are recrawled. Content and ranking improvements usually take weeks to months. Search engines decide the timing.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Is WordPress good for SEO?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">Yes. WordPress produces clean, crawlable HTML and supports sitemaps, custom permalinks and structured data. Results depend on your content, speed and setup more than the platform.</p>
</div>
</div>
</div>
</section>
<section class="mt-10">
<h2 class="font-display text-xl">Sources and further reading</h2>
<ul class="mt-3 space-y-1.5 text-sm text-muted">
<li>
<a href="https://developers.google.com/search/docs/fundamentals/seo-starter-guide" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “SEO Starter Guide”</a>
</li>
<li>
<a href="https://developers.google.com/search/docs/crawling-indexing/sitemaps/build-sitemap" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Build and submit a sitemap”</a>
</li>
<li>
<a href="https://developers.google.com/search/docs/crawling-indexing/robots/intro" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “Introduction to robots.txt”</a>
</li>
<li>
<a href="https://www.indexnow.org/" target="_blank" rel="noopener" class="underline hover:text-ink">IndexNow protocol</a>
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
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/technical-seo/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">Technical SEO</div>
<p class="mt-1.5 text-sm text-muted">The behind-the-scenes checks that decide whether pages can rank at all.</p>
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
