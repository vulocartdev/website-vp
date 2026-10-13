<?php
/**
 * Template Name: Search Visibility
 * Template Post Type: page
 * Original route: /features/search-visibility/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'search-visibility' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Search Visibility</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WordPress SEO audit</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Get found on Google. <span class="text-sage">Fix SEO in the right order.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">Most sites do not have one big SEO problem. They have thirty small ones. Each is easy to fix. Finding them is the hard part.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot audits every page, ranks what to fix first, and sets up what search engines expect.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">New to SEO?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Google result preview</span></div>
<div class="p-5">
<p class="text-xs text-sage">vulopilot.com › features › search-visibility</p>
<p class="mt-1 text-lg text-[#1a0dab]">WordPress SEO Audit Plugin: Find and Fix Issues</p>
<p class="mt-1 text-sm text-muted">Run a WordPress SEO audit in one scan. VuloPilot ranks every issue, sets up titles, sitemaps and redirects, and re-scans to prove each fix worked.</p>
</div>
<div class="border-t border-line bg-bg/40 px-5 py-3 text-xs text-muted">Title and description generated and previewed before you publish.</div>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">SEO comes down to two things: clear pages and a site that is easy to crawl.</h2>
<p class="mt-5 text-lg text-muted">Search engines need every page to say what it is about, and every link to lead somewhere. VuloPilot checks both.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-2">
<a href="#inspector" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-telescope" aria-hidden="true"><path d="m10.065 12.493-6.18 1.318a.934.934 0 0 1-1.108-.702l-.537-2.15a1.07 1.07 0 0 1 .691-1.265l13.504-4.44"></path><path d="m13.56 11.747 4.332-.924"></path><path d="m16 21-3.105-6.21"></path><path d="M16.485 5.994a2 2 0 1 0 3.03 2.608"></path><path d="m18.63 16.56-1.471-4.52"></path><path d="m8 15-3 3"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Inspector</h3>
<p class="relative mt-3 text-muted">Reads every page like a search engine and ranks every issue by impact.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">SEO score, ranked problems &amp; per-page panel<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#signposts" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signpost" aria-hidden="true"><path d="M12 3v3"></path><path d="M12 21v-6"></path><path d="M9 6h8.2a2 2 0 0 1 1.4.6l2.1 2.1a1 1 0 0 1 0 1.4L18.6 12a2 2 0 0 1-1.4.6H9"></path><path d="M15 18H6.8a2 2 0 0 1-1.4-.6l-2.1-2.1a1 1 0 0 1 0-1.4L5.4 12"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Signposts</h3>
<p class="relative mt-3 text-muted">Sets up the sitemap, robots.txt, redirects and instant indexing crawlers expect.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Sitemap, robots.txt, redirects &amp; IndexNow<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true"><path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path><circle cx="12" cy="12" r="3"></circle></svg></span><div><div class="font-semibold">See what Google sees</div><p class="mt-1 text-sm text-muted">Preview your search result before it goes live.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Fix in the right order</div><p class="mt-1 text-sm text-muted">Your first hour goes to the biggest win.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">Nothing changes uninvited</div><p class="mt-1 text-sm text-muted">You approve every change. Undo any time.</p></div></div>
</div>
</div>
</section>

<section id="inspector" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Inspector</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Every SEO issue, <span class="text-sage">ranked by impact.</span></h2>
<p class="mt-5 text-lg text-muted">One SEO score out of 100 and a to-do list sorted by severity and pages affected. Each item says what is wrong and why it matters, in plain words.</p>
<p class="mt-4 text-lg font-medium">Fix it. Re-scan. Watch the score move.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: fix a few problems, then re-scan.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">SEO score</span><span class="text-2xl font-semibold tabular-nums">74<span class="text-sm text-muted"> / 100</span></span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>14 pages missing meta descriptions</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">High</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>3 duplicate page titles</span><span class="rounded-sm bg-flare/15 px-2 py-0.5 text-xs font-semibold text-flare">Medium</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Sitemap missing 2 new pages</span><span class="rounded-sm bg-sage-soft px-2 py-0.5 text-xs font-semibold text-sage">Low</span></li>
</ul>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">What the SEO audit checks</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">From the whole site down to a single page.</h2>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$inspector = array(
	array( 'SEO score and ranked issues', 'One score out of 100. Every issue sorted by impact.', 'Free' ),
	array( 'Per-page SEO panel', 'Guides titles, descriptions and structure inside the editor.', 'Free' ),
	array( 'Table of Contents and FAQ blocks', 'Structured the way search engines read them.', 'Free' ),
	array( 'Technical SEO checks', 'Schema, duplicate descriptions, multiple H1s and focus keywords.', 'Pro' ),
	array( 'Keyword rank tracking', 'Track rankings and spot pages close to page one.', 'Pro' ),
	array( 'One-click bulk fixes', 'Fix one page or every page with the same issue.', 'Pro' ),
);
foreach ( $inspector as $t ) :
	$tag_class = 'Pro' === $t[2] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.34-4.34"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/seo.jpg" width="1760" height="727" alt="VuloPilot SEO score view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
</div>
</section>

<section id="signposts" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Signposts</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Pages move. <span class="text-sage">Links should not break.</span></h2>
<p class="mt-5 text-lg text-muted">Rename a page and every old link hits a 404, losing visitors and rankings. VuloPilot tracks the misses so you can redirect each one in a click.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: visit the old link, add the redirect, then visit it again.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">404s tracked</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>/old-pricing/</span><button class="text-xs font-semibold text-sage hover:underline">Add redirect</button></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>/blog/old-post/</span><span class="text-xs text-sage">Redirected</span></li>
</ul>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Technical SEO basics</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Sitemap, robots.txt and redirects, handled.</h2>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$signposts = array(
	array( 'XML sitemap', 'Every page you want found, updated as you publish.' ),
	array( 'robots.txt editor', 'Tell crawlers where to go, without breaking anything.' ),
	array( 'Redirects and 404 tracking', 'Catch broken links and send them to the right page.' ),
	array( 'Instant indexing', 'Notify search engines on publish with IndexNow.' ),
	array( 'Google Search Console', 'Verify your site and see real search data.' ),
);
foreach ( $signposts as $t ) :
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map" aria-hidden="true"><path d="M14.106 5.553a2 2 0 0 0 1.788 0l3.659-1.83A1 1 0 0 1 21 4.619v12.764a1 1 0 0 1-.553.894l-4.553 2.277a2 2 0 0 1-1.788 0l-4.212-2.106a2 2 0 0 0-1.788 0l-3.659 1.83A1 1 0 0 1 3 19.381V6.618a1 1 0 0 1 .553-.894l4.553-2.277a2 2 0 0 1 1.788 0z"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm bg-bg px-3 py-1 text-[11px] font-semibold text-muted">Free</p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Free plan</div><h3 class="mt-1 text-2xl font-semibold">All of the Signposts are free</h3><p class="mt-2 max-w-2xl text-white/70">Sitemap, robots.txt, redirects, 404 tracking, IndexNow and Search Console cost nothing. Pro adds technical checks, rank tracking and bulk fixes.</p></div>
<a href="<?php echo esc_url( $home ); ?>/docs/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/overview.jpg" width="1760" height="727" alt="VuloPilot overview" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"Search engines do not reward the best site. <span class="text-sage">They reward the best site they can understand.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$sv_faq = array(
	array( 'Can VuloPilot replace Yoast or Rank Math?', 'Yes. It covers titles, descriptions, sitemaps, redirects and robots.txt. Just never run two plugins that output the same meta tags.' ),
	array( 'Why is my WordPress site not showing on Google?', 'Usually a blocked crawler, a noindex setting, a missing sitemap or thin pages. One VuloPilot scan checks them all and ranks the fixes.' ),
	array( 'What is IndexNow?', 'A ping that tells search engines a page is new or changed, so they do not wait to notice. VuloPilot sends it when you publish.' ),
	array( 'Do I need Google Search Console?', 'It is optional but worth it. Connect it to verify your site and see which searches you appear for, inside VuloPilot.' ),
	array( 'Is the WordPress SEO audit free?', 'Yes. The SEO score, ranked issues, titles, sitemap, IndexNow, redirects, 404 tracking, robots.txt and Search Console are free. Pro adds technical SEO checks, rank tracking and one-click bulk fixes.' ),
	array( 'Will it change my pages without asking?', 'No. You preview every change, approve or reject it, and can undo it later from History.' ),
);
foreach ( $sv_faq as $i => $f ) :
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
<a href="<?php echo esc_url( $home ); ?>/features/ai-search/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">AI Search</div><p class="mt-1.5 text-sm text-muted">Be understood and quoted by ChatGPT, Claude, Gemini and Perplexity.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/content/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Content</div><p class="mt-1.5 text-sm text-muted">Write new pages with AI and keep existing ones healthy.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/wordpress-seo/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">WordPress SEO guide</div><p class="mt-1.5 text-sm text-muted">The five basics, in plain language.</p></div></div></a>
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
