<?php
/**
 * Template Name: Content
 * Template Post Type: page
 * Original route: /features/content/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'content' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">Content</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>AI content writer + content audit</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Write new content with AI. <span class="text-sage">Audit what is already live.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">Writing takes time you do not have. Meanwhile, published pages quietly go stale or compete with each other for the same ranking.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot drafts the next page and audits the ones you have. Nothing publishes without your say-so.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#two-jobs" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">Wait, is this just an AI writer?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">AI Writer</span><span class="rounded-sm bg-sage-soft px-3 py-1 text-xs font-semibold text-sage">Draft, not published</span></div>
<div class="p-5 text-sm leading-relaxed">
<p class="text-muted">Topic: "Why website speed matters for small business owners"</p>
<p class="mt-3 rounded-sm bg-bg/60 p-3">A first draft, ready to review: 620 words, SEO-friendly heading structure, one FAQ block.</p>
</div>
<div class="flex items-center justify-between border-t border-line px-5 py-3"><span class="text-xs text-muted">Nothing goes live until you approve.</span><span class="text-xs font-semibold text-sage">Approve &amp; apply</span></div>
</div>
</div>
</div>
</section>

<section id="two-jobs" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">No. It writes new pages and checks the ones you have.</h2>
<p class="mt-5 text-lg text-muted">Content is two jobs. One writes what you have not gotten to. The other watches what is live, because content fails quietly: it gets old, thin, or confused with another page.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-2">
<a href="#ghostwriter" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-feather" aria-hidden="true"><path d="M12.67 19a2 2 0 0 0 1.416-.588l6.154-6.172a6 6 0 0 0-8.49-8.49L5.586 9.914A2 2 0 0 0 5 11.328V20a1 1 0 0 0 1 1h8.672a1.998 1.998 0 0 0-.002-2z"></path><path d="m16 8-8 8"></path><path d="M9 9H4v5"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Ghostwriter</h3>
<p class="relative mt-3 text-muted">Give it a topic. Get an SEO-friendly draft before your coffee cools. You decide what happens next.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">AI Writer, Blog Generator &amp; AI Content Assistant<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#doctor" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-stethoscope" aria-hidden="true"><path d="M11 2v2"></path><path d="M5 2v2"></path><path d="M5 3H4a2 2 0 0 0-2 2v4a6 6 0 0 0 12 0V5a2 2 0 0 0-2-2h-1"></path><path d="M8 15a6 6 0 0 0 6 6 6 6 0 0 0 6-6v-2"></path><circle cx="20" cy="10" r="2"></circle></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Doctor</h3>
<p class="relative mt-3 text-muted">Audits everything published and flags pages quietly working against you.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Content Audit, AI Content Audit &amp; Content Quality<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">Nothing goes live uninvited</div><p class="mt-1 text-sm text-muted">Every AI draft waits for your approval.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Hours back every week</div><p class="mt-1 text-sm text-muted">AI drafts save the slow part: writing.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></span><div><div class="font-semibold">Stale pages, caught early</div><p class="mt-1 text-sm text-muted">Before they lose the rankings they had.</p></div></div>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div>
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">The real bottleneck</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">It is rarely ideas. <span class="text-sage">It is almost always the writing.</span></h2>
<p class="mt-5 text-lg text-muted">You know the blog post you should write and the product pages that need real copy. What is missing is the hour to write them.</p>
<p class="mt-4 text-lg font-medium">The Ghostwriter does not give you ideas. It gives you the hour back.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Backlog</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>"Why website speed matters" blog post</span><span class="text-xs text-muted">Idea, 3 weeks</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Rewrite 4 thin product descriptions</span><span class="text-xs text-muted">Idea, 2 months</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>FAQ block for /pricing/</span><span class="text-xs text-muted">Idea, 5 weeks</span></li>
</ul>
</div>
</div>
</section>

<section id="ghostwriter" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Ghostwriter</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">An AI writing tool for every page you need.</h2>
<p class="mt-5 text-lg text-muted">Same safe steps every time: give a topic, review Before and After, approve or reject.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$writer = array(
	array( 'AI Writer', 'Describe the page. Get a first draft.', 'Asks: "What should it write about?"' ),
	array( 'AI Blog Generator', 'A topic in, an SEO-friendly post out.', 'Topic → SEO-friendly post' ),
	array( 'Product Description Creator', 'Turn a one-line spec into persuasive copy.', 'In the AI Content Assistant' ),
	array( 'FAQ Generator', 'Customer questions into a ready FAQ block.', 'In the AI Content Assistant' ),
	array( 'Meta Title Creator', 'The clickable headline in search results.', 'In the AI Content Assistant' ),
	array( 'Call-to-Action Writer', 'The line that gets the click.', 'In the AI Content Assistant' ),
);
foreach ( $writer as $t ) :
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen-line" aria-hidden="true"><path d="M12 20h9"></path><path d="M16.376 3.622a1 1 0 0 1 3.002 3.002L7.368 18.635a2 2 0 0 1-.855.506l-2.872.838a.5.5 0 0 1-.62-.62l.838-2.872a2 2 0 0 1 .506-.854z"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 text-xs text-muted"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Shortcut panel</div><h3 class="mt-1 text-2xl font-semibold">AI Content Assistant</h3><p class="mt-2 max-w-2xl text-white/70">Four writers in one panel, each one question away from a draft. No prompt writing needed.</p></div>
<a href="<?php echo esc_url( $home ); ?>/docs/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">Generate my first draft<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]">
<div>
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Draft first, always</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">You see the Before and After. <span class="text-sage">You decide what happens next.</span></h2>
<p class="mt-5 text-lg text-muted">Every AI post lands as a draft. Approve &amp; apply, reject, or try again. No silent auto-publish, ever.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: approve the draft.</p>
<ul class="mt-6 space-y-3 text-sm">
<li class="flex gap-3"><span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true"><path d="m12 14 4-4"></path><path d="M3.34 19a10 10 0 1 1 17.32 0"></path></svg></span><span><b>Readability.</b> Posts are scored from 0 to 100 against your minimum, so hard-to-read text is flagged.</span></li>
</ul>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Meta description — Before / After</span></div>
<div class="grid gap-px bg-line sm:grid-cols-2">
<div class="bg-surface p-5 text-sm"><span class="text-xs font-semibold uppercase tracking-widest text-muted">Before</span><p class="mt-2 text-muted">VuloPilot is a plugin for WordPress that does lots of things for your site.</p></div>
<div class="bg-surface p-5 text-sm"><span class="text-xs font-semibold uppercase tracking-widest text-sage">After</span><p class="mt-2">Scan your WordPress site for SEO, AI visibility, speed and security issues, then fix them with one click.</p></div>
</div>
<div class="flex items-center justify-between border-t border-line px-5 py-3 text-xs"><span class="text-muted">Readability: 78 / 100</span><span class="font-semibold text-sage">Approve &amp; apply</span></div>
</div>
</div>
</section>

<section id="doctor" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Doctor</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">A content audit for every published page.</h2>
<p class="mt-5 text-lg text-muted">See what works and what quietly does not, without reading every page.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$doctor = array(
	array( 'Run Content Audit', 'Scan every page in one pass.' ),
	array( 'AI Content Audit', 'Score one post before you publish.' ),
	array( 'Content Quality', 'Quality signals, page by page.' ),
	array( 'Content Stats', 'Words written, SEO score and time saved.' ),
	array( 'Recent Content', 'Latest posts, linked to their issues.' ),
	array( 'Duplicate titles', 'Find and fix them in three clicks.' ),
);
foreach ( $doctor as $i => $t ) :
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="absolute right-5 top-3 font-mono text-4xl font-semibold text-line"><?php echo str_pad( (string) ( $i + 1 ), 2, '0', STR_PAD_LEFT ); ?></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-9"><img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/content.jpg" width="1760" height="727" alt="VuloPilot content audit view" loading="lazy" decoding="async" class="mx-auto block h-auto w-full rounded-sm border border-line"/></div>
<div class="mx-auto mt-10 max-w-3xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"Content does not fail with an error message. <span class="text-sage">It fails with a slowly dropping number nobody was watching.</span>"</blockquote></div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">The most common diagnosis</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Readability scores <span class="text-sage">anyone can act on.</span></h2>
<p class="mt-5 text-lg text-muted">Posts are scored 0 to 100 and flagged below your minimum. The culprits are almost always long sentences and complicated words.</p>
<p class="mt-4 text-muted">Raise the minimum for a quick read; lower it for technical content.</p>
</div>
<div class="order-2 card p-6 sm:p-8 lg:order-1">
<div class="flex items-end justify-between"><span class="text-[11px] font-semibold uppercase tracking-widest text-muted">Readability</span><span class="text-3xl font-semibold tabular-nums">82<span class="text-sm text-muted"> / 100</span></span></div>
<div class="mt-3 h-3 overflow-hidden rounded-full bg-line"><div class="h-full rounded-full" style="width:82%;background:var(--sage)"></div></div>
<p class="mt-4 text-sm text-muted">Minimum set to 60. 11 posts are below it and flagged for a rewrite.</p>
</div>
</div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$content_faq = array(
	array( 'Does AI-generated content publish itself?', 'No. Every AI post is saved as a draft and only goes live when you click Approve &amp; apply.' ),
	array( 'What do the AI writing tools need?', 'A VuloCloud connection. The free plan includes 100 AI credits.' ),
	array( 'What is a content audit?', 'A check of every published page for quality problems. Run Content Audit scans the whole site; AI Content Audit scores one post before you publish.' ),
	array( 'How do I improve a readability score?', 'Shorten long sentences and swap complicated words. That fixes most low scores.' ),
	array( 'How do I fix duplicate post titles in WordPress?', 'Open Duplicate Content, pick a post, generate a new title and approve it.' ),
	array( 'Is the AI content writer free?', 'Yes. AI Writer, Blog Generator, content audit, readability checks and the duplicate title fixer are free. Pro adds competitor content gaps and AI drafts for titles, descriptions and summaries.' ),
);
foreach ( $content_faq as $i => $f ) :
	?>
<div>
<h3 class="text-base">
<button aria-expanded="<?php echo 0 === $i ? 'true' : 'false'; ?>" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium"><?php echo wp_kses_post( $f[0] ); ?><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition<?php echo 0 === $i ? ' rotate-45' : ''; ?>" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
</h3>
<div class="overflow-hidden" style="<?php echo 0 === $i ? 'height:auto;opacity:1' : 'height:0px;opacity:0'; ?>">
<p class="px-6 pb-5 text-muted"><?php echo wp_kses_post( $f[1] ); ?></p>
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
<a href="<?php echo esc_url( $home ); ?>/features/ai-search/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">AI Search</div><p class="mt-1.5 text-sm text-muted">GEO and AEO: make content easy for AI assistants to use and quote.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/pricing/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Pricing</div><p class="mt-1.5 text-sm text-muted">What is free, what paid plans add, and how AI credits work.</p></div></div></a>
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
