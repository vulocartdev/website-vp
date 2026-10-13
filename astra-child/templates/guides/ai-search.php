<?php
/**
 * Template Name: AI Search
 * Template Post Type: page
 * Original route: /guides/ai-search/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'guides/[slug]', 'ai-search' );
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
<span class="text-ink">AI Search</span>
</span>
</nav>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Guide · <!-- -->5<!-- --> min read</div>
<h1 class="mt-5 font-display text-4xl leading-tight sm:text-6xl">AI Search</h1>
<p class="mt-5 text-xl text-muted">How people now use ChatGPT, Claude, Gemini and Perplexity to find businesses.</p>
<p class="mt-4 text-sm text-muted">By the <!-- -->Vulo Labs<!-- --> team · <span class="text-xs text-muted">Last updated <time dateTime="2026-10-10">October 10, 2026</time>
</span>
</p>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-10 rounded-3xl border border-line bg-surface p-7">
<div class="font-mono text-xs uppercase tracking-widest text-sage">Short answer</div>
<h2 class="mt-2 font-display text-2xl leading-snug">How do AI assistants like ChatGPT decide which websites to mention?</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">AI assistants mention websites they can crawl and understand. They favor pages with a clear, direct answer near the top, logical headings, FAQs, cited facts, structured data and strong trust signals such as an About page, author details and consistent brand naming. If AI crawlers are blocked in robots.txt, the assistant cannot read the page at all.</p>
</div>
</div>
<nav aria-label="On this page" class="mt-10 rounded-2xl bg-bg/70 p-5 text-sm">
<div class="font-medium">On this page</div>
<ol class="mt-2 list-decimal space-y-1 pl-5 text-muted">
<li>
<a href="#s1" class="hover:text-ink">What changed</a>
</li>
<li>
<a href="#s2" class="hover:text-ink">How assistants learn about you</a>
</li>
<li>
<a href="#s3" class="hover:text-ink">Make it easy to read</a>
</li>
<li>
<a href="#s4" class="hover:text-ink">Do not block the readers</a>
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
<h2 class="mt-1 font-display text-3xl">What changed</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">More people ask AI assistants to recommend businesses and answer questions instead of typing queries into a search box. The answers cite or paraphrase websites they can understand.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s2" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->2</div>
<h2 class="mt-1 font-display text-3xl">How assistants learn about you</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">They read your pages, your structured data and signals of trust such as an About page, a Contact page, author information and consistent naming. If those are thin or contradictory, the assistant may describe you wrongly or not at all.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s3" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->3</div>
<h2 class="mt-1 font-display text-3xl">Make it easy to read</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Put a short, direct answer near the top of key pages. Use clear headings, short paragraphs and a FAQ. Back claims with sources. Publish an llms.txt that lists your key pages.</p>
</section>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<section id="s4" class="scroll-mt-28">
<div class="font-mono text-xs text-sage">0<!-- -->4</div>
<h2 class="mt-1 font-display text-3xl">Do not block the readers</h2>
<p class="mt-3 text-lg leading-relaxed text-ink/80">Check robots.txt so important AI crawlers such as GPTBot, ClaudeBot and PerplexityBot are not blocked by accident, unless you deliberately want that.</p>
</section>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="mt-14 rounded-3xl bg-sage-soft/70 p-7">
<h2 class="font-display text-2xl">Key takeaways</h2>
<ul class="mt-4 grid gap-2 sm:grid-cols-2">
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Answer questions clearly and early</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Strengthen trust signals</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Add llms.txt and FAQ schema</li>
<li class="flex gap-2.5">
<span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-sage">
</span>Check crawler access</li>
</ul>
</div>
</div>
<section id="faq" class="mt-14 scroll-mt-28">
<h2 class="mb-6 font-display text-3xl">AI Search<!-- -->: frequently asked questions</h2>
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<div>
<h3 class="text-base">
<button aria-expanded="true" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Which crawlers do AI assistants use?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition rotate-45" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:auto;opacity:1">
<p class="px-6 pb-5 text-muted">The main ones are GPTBot, OAI-SearchBot and ChatGPT-User (OpenAI), ClaudeBot (Anthropic), PerplexityBot (Perplexity) and Google-Extended (Google&#x27;s AI products). Each can be allowed or blocked in robots.txt.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Does Google need special markup for AI Overviews?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">No. Google says normal SEO best practices apply to AI Overviews and AI Mode, and no special markup or AI files are required. Clear, helpful, well-structured content is what counts.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Can I pay to appear in AI answers?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">No. Organic AI answers cannot be bought. You can only improve the signals AI systems use to choose and trust sources.</p>
</div>
</div>
</div>
</section>
<section class="mt-10">
<h2 class="font-display text-xl">Sources and further reading</h2>
<ul class="mt-3 space-y-1.5 text-sm text-muted">
<li>
<a href="https://developers.google.com/search/docs/appearance/ai-features" target="_blank" rel="noopener" class="underline hover:text-ink">Google, “AI features and your website”</a>
</li>
<li>
<a href="https://platform.openai.com/docs/bots" target="_blank" rel="noopener" class="underline hover:text-ink">OpenAI, “Overview of OpenAI crawlers”</a>
</li>
<li>
<a href="https://llmstxt.org/" target="_blank" rel="noopener" class="underline hover:text-ink">llms.txt proposal</a>
</li>
</ul>
</section>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card mt-10 flex flex-wrap items-center justify-between gap-4 p-7">
<div>
<div class="font-mono text-xs uppercase tracking-widest text-sage">How VuloPilot helps</div>
<p class="mt-1 font-display text-2xl">AI Search<!-- -->: <!-- -->be understood by chatgpt, claude, gemini and perplexity<!-- -->.</p>
</div>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/ai-search/" class="rounded-full bg-ink px-5 py-2.5 text-sm font-medium text-bg hover:bg-sage">See the feature</a>
</div>
</div>
</div>
</article>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<h2 class="mb-6 font-display text-3xl">More guides</h2>
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
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
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/guides/aeo/">
<div class="card group flex h-full items-start justify-between gap-3 p-6">
<div>
<div class="font-display text-xl">AEO: Answer Engine Optimization</div>
<p class="mt-1.5 text-sm text-muted">Be the answer an assistant picks for a specific question.</p>
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
