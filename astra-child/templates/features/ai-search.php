<?php
/**
 * Template Name: AI Search
 * Template Post Type: page
 * Original route: /features/ai-search/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'ai-search' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">AI Search</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>AI search optimization (GEO + AEO)</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Get cited by ChatGPT, <span class="text-sage">not just ranked by Google.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">People now ask ChatGPT, Claude, Gemini and Perplexity instead of searching. The answer names a few businesses. If yours is missing, you never knew you lost.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot checks whether AI can reach, understand and quote your site, then ranks the fixes.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">How is this different from SEO?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">An AI assistant</span><span class="rounded-sm bg-ink px-3 py-1 text-xs font-semibold text-bg">After the fixes</span></div>
<div class="space-y-4 p-5">
<div class="flex justify-end gap-2"><p class="max-w-[80%] rounded-sm rounded-tr-sm bg-ink px-4 py-2.5 text-sm text-bg">Who makes wedding cakes in Leeds?</p></div>
<div class="flex gap-2">
<div class="max-w-[85%] rounded-sm rounded-tl-sm bg-bg px-4 py-3 text-sm leading-relaxed">Sweet Layers Bakery makes hand-made wedding cakes in Leeds, with twelve seasonal flavours. They recommend booking a tasting about two months before the wedding.
<div class="mt-3 inline-flex items-center gap-1.5 rounded-sm bg-sage-soft px-3 py-1 text-[11px] font-semibold text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg>Source: sweetlayers.example/wedding-cakes</div>
</div>
</div>
<p class="text-xs text-muted">A short, direct answer near the top, with the business name spelled out, is easy to quote.</p>
</div>
<div class="border-t border-line px-5 py-3 text-xs text-muted">Nobody can guarantee an AI answer. You can make yourself easy to pick.</div>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Google ranks pages. AI quotes them.</h2>
<p class="mt-5 text-lg text-muted">To be in an AI answer, your site must clear three hurdles: AI has to reach it, understand it and trust it. Miss one and you are left out.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-3">
<a href="#reach" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-door-open" aria-hidden="true"><path d="M13 4h3a2 2 0 0 1 2 2v14"></path><path d="M2 20h3"></path><path d="M13 20h9"></path><path d="M10 12v.01"></path><path d="M13 4.562v16.157a1 1 0 0 1-1.242.97L5 20V5.562a2 2 0 0 1 1.515-1.94l4-1A2 2 0 0 1 13 4.561Z"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">Can AI reach you?</h3>
<p class="relative mt-3 text-muted">Are AI crawlers visiting, or quietly locked out?</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Crawler traffic &amp; llms.txt<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#understand" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-brain" aria-hidden="true"><path d="M12 5a3 3 0 1 0-5.997.125 4 4 0 0 0-2.526 5.77 4 4 0 0 0 .556 6.588A4 4 0 1 0 12 18Z"></path><path d="M12 5a3 3 0 1 1 5.997.125 4 4 0 0 1 2.526 5.77 4 4 0 0 1-.556 6.588A4 4 0 1 1 12 18Z"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">Can AI understand you?</h3>
<p class="relative mt-3 text-muted">Does every page carry a clear, quotable answer?</p>
<p class="relative mt-5 text-sm font-semibold text-sage">GEO checks &amp; business identity<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#pick" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">3</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award" aria-hidden="true"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">Will AI pick you?</h3>
<p class="relative mt-3 text-muted">Do you answer real questions, and look worth citing?</p>
<p class="relative mt-5 text-sm font-semibold text-sage">AEO checks &amp; brand visibility<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scale" aria-hidden="true"><path d="M16 16h6"></path><path d="M2 16h6"></path><path d="m2 16 3.3-8.7a1 1 0 0 1 1.8 0L10.4 16"></path><path d="m14 16 3.3-8.7a1 1 0 0 1 1.8 0L22.4 16"></path><path d="M12 3v18"></path></svg></span><div><div class="font-semibold">Honest about the odds</div><p class="mt-1 text-sm text-muted">No tool can promise a citation. This improves what you control.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><div><div class="font-semibold">Built on what you have</div><p class="mt-1 text-sm text-muted">Most fixes are clearer writing on existing pages.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">No AI account needed</div><p class="mt-1 text-sm text-muted">Scans run in WordPress. Engine tests use credits.</p></div></div>
</div>
</div>
</section>

<section id="reach" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Step 1 · Reach</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">One wrong line <span class="text-sage">locks out every AI crawler.</span></h2>
<p class="mt-5 text-lg text-muted">GPTBot, ClaudeBot and PerplexityBot read your pages so AI can use them. One leftover robots.txt rule turns them all away, silently.</p>
<p class="mt-4 text-lg font-medium">VuloPilot shows every AI crawler visit. If they drop to zero, you know why.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: make the common mistake and watch the visits disappear.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">AI crawler visits, last 7 days</span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles text-sage" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path></svg></div>
<ul class="divide-y divide-line">
<li class="flex items-center gap-3 px-5 py-3.5"><span class="min-w-0 flex-1"><span class="block font-semibold">GPTBot</span><span class="text-xs text-muted">OpenAI</span></span><span class="h-2 w-28 overflow-hidden rounded-full bg-line"><span class="block h-full rounded-full bg-sage" style="width:100%"></span></span><span class="w-10 text-right text-sm font-semibold tabular-nums">42</span></li>
<li class="flex items-center gap-3 px-5 py-3.5"><span class="min-w-0 flex-1"><span class="block font-semibold">ClaudeBot</span><span class="text-xs text-muted">Anthropic</span></span><span class="h-2 w-28 overflow-hidden rounded-full bg-line"><span class="block h-full rounded-full bg-sage" style="width:64%"></span></span><span class="w-10 text-right text-sm font-semibold tabular-nums">27</span></li>
<li class="flex items-center gap-3 px-5 py-3.5"><span class="min-w-0 flex-1"><span class="block font-semibold">PerplexityBot</span><span class="text-xs text-muted">Perplexity</span></span><span class="h-2 w-28 overflow-hidden rounded-full bg-line"><span class="block h-full rounded-full bg-sage" style="width:43%"></span></span><span class="w-10 text-right text-sm font-semibold tabular-nums">18</span></li>
</ul>
<div class="border-t border-line bg-bg/40 px-5 py-4"><div class="flex items-center justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">robots.txt</span></div><pre class="mt-2 overflow-x-auto rounded-sm bg-ink p-3 font-mono text-[12px] leading-relaxed text-white/80">User-agent: *
Disallow: /wp-admin/</pre></div>
<div class="flex items-center gap-2 border-t border-line px-5 py-3 text-xs text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path></svg>Your llms.txt, the reading list for AI, is editable from the same screen.</div>
</div>
</div>
</section>

<section id="understand" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Step 2 · Understand</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">GEO: six checks for content <span class="text-sage">AI can use.</span></h2>
<p class="mt-5 text-lg text-muted">Generative engine optimization means writing so AI can lift one clear paragraph, know who it is about and trust it is current. VuloPilot scores every page on six signals.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: tick off the checks and watch the score climb.</p>
</div>
<div class="order-2 card p-6 sm:p-8 lg:order-1">
<div class="flex items-end justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">GEO score</span><span class="text-3xl font-semibold tabular-nums">64<span class="text-sm text-muted"> / 100</span></span></div>
<div class="mt-3 h-3 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:64%;background:var(--flare)"></div></div>
<div class="mt-6 grid gap-2 sm:grid-cols-2">
<div class="flex gap-3 rounded-sm border border-sage bg-sage-soft/50 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-sage bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg></span><span><span class="block text-sm font-semibold">AI summary</span><span class="text-xs text-muted">A short, quotable answer near the top of the page.</span></span></div>
<div class="flex gap-3 rounded-sm border border-line bg-bg/60 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-line"></span><span><span class="block text-sm font-semibold">Question coverage</span><span class="text-xs text-muted">The questions people actually ask, answered on the page.</span></span></div>
<div class="flex gap-3 rounded-sm border border-line bg-bg/60 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-line"></span><span><span class="block text-sm font-semibold">Evidence</span><span class="text-xs text-muted">Numbers, sources and specifics an assistant can trust.</span></span></div>
<div class="flex gap-3 rounded-sm border border-sage bg-sage-soft/50 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-sage bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true"><path d="M20 6 9 17l-5-5"></path></svg></span><span><span class="block text-sm font-semibold">Structure</span><span class="text-xs text-muted">Clear headings and short sections, easy to pull apart.</span></span></div>
<div class="flex gap-3 rounded-sm border border-line bg-bg/60 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-line"></span><span><span class="block text-sm font-semibold">Entity clarity</span><span class="text-xs text-muted">Your business name, place and services said plainly.</span></span></div>
<div class="flex gap-3 rounded-sm border border-line bg-bg/60 p-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full border-2 border-line"></span><span><span class="block text-sm font-semibold">Freshness</span><span class="text-xs text-muted">Recently updated, so it does not look out of date.</span></span></div>
</div>
<p class="mt-4 text-xs text-muted">VuloPilot checks all six on every page and shows a "Fix these first" card for the weakest.</p>
</div>
</div>
</section>

<section id="pick" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Step 3 · Pick</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">AEO and brand trust: become the answer.</h2>
<p class="mt-5 text-lg text-muted">Answer engine optimization makes your words the ones AI picks. Brand scores show whether you look trustworthy enough to cite.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$ai_tools = array(
	array( 'sparkles', 'GEO checks', 'Six signals AI looks for, on every page.', 'Free' ),
	array( 'message-square-quote', 'AEO checks and engine testing', 'Is each page the answer? Test it against AI engines.', 'Free' ),
	array( 'badge-check', 'Brand trust scores', 'Trust and Authority, from authors, About and Contact.', 'Free' ),
	array( 'radar', 'AI crawler traffic', 'Visits from GPTBot, ClaudeBot and PerplexityBot.', 'Free' ),
	array( 'file-text', 'llms.txt editor', 'Your reading list for AI, no FTP needed.', 'Free' ),
	array( 'building', 'Schema and business identity', 'What machines know about you, and what is missing.', 'Free' ),
	array( 'quote', 'Citation coverage', 'How often AI cites you, plus stale-content flags.', 'Pro' ),
	array( 'bell-ring', 'Crawler alerts', 'Know when an AI crawler stops or gets blocked.', 'Pro' ),
	array( 'network', 'Knowledge graph insights', 'Deeper brand findings and what to strengthen.', 'Pro' ),
);
foreach ( $ai_tools as $t ) :
	$tag_class = 'Pro' === $t[3] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles" aria-hidden="true"><path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[1] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[2] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[3] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Test it</div><h3 class="mt-1 text-2xl font-semibold">Did the fix work? Ask the engines.</h3><p class="mt-2 max-w-2xl text-white/70">AEO engine testing checks whether AI now recognizes a page you fixed. It uses AI credits; the free plan includes 100.</p></div>
<a href="<?php echo esc_url( $home ); ?>/docs/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">Run my first check<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/geo.jpg" width="1760" height="727" alt="VuloPilot GEO score view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full max-w-3xl rounded-sm border border-line"/></div>
<div class="mt-8"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/brand.jpg" width="1760" height="727" alt="VuloPilot brand visibility view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"A search engine lets the reader choose. <span class="text-sage">An AI assistant chooses for them.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$ai_faq = array(
	array( 'What is the difference between GEO and AEO?', 'GEO (generative engine optimization) makes content easy for AI to use. AEO (answer engine optimization) makes it the answer to a specific question. VuloPilot checks both.' ),
	array( 'How do I get my website to show up in ChatGPT?', 'Let AI crawlers in, put a clear answer near the top of each page, and make your business details consistent. No tool can guarantee a citation; VuloPilot improves the signals you control.' ),
	array( 'What is llms.txt?', 'A plain text file that points AI tools to your most important pages, like a reading list. Edit yours from the VuloPilot dashboard.' ),
	array( 'Do I need an AI account?', 'No. The checks run inside WordPress. Testing pages against AI engines uses credits via VuloCloud; the free plan includes 100.' ),
	array( 'Is AI search optimization free?', 'Yes. GEO and AEO checks, engine testing, brand scores, AI crawler traffic, llms.txt and schema coverage are free. Pro adds citation coverage, crawler alerts and deeper brand findings.' ),
);
foreach ( $ai_faq as $i => $f ) :
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
<a href="<?php echo esc_url( $home ); ?>/features/search-visibility/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Search Visibility</div><p class="mt-1.5 text-sm text-muted">Titles, sitemap, redirects and the per-page SEO panel.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/content/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Content</div><p class="mt-1.5 text-sm text-muted">Write the clear, quotable pages AI looks for.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/ai-search/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">AI Search guide</div><p class="mt-1.5 text-sm text-muted">How AI assistants find and choose sources.</p></div></div></a>
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
echo str_replace( "\n<", '<', $markup ); // Keep formatted templates compatible with interactive hydration.
get_footer();
