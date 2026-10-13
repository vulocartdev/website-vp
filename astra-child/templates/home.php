<?php
/**
 * Template Name: Home
 * Template Post Type: page
 * Original route: /
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'home', '' );
get_header();
?>
<noscript><style>#vulopilot-root [style*="opacity:0"] { opacity:1 !important; transform:none !important; }</style></noscript>
<?php
ob_start();
?>
<div id="vulopilot-root" class="vulopilot-page grain">
<link rel="preload" as="image" href="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/overview.jpg"/>
<main>
<section id="top" class="relative overflow-hidden px-5 pb-28 pt-40">
<div class="pointer-events-none absolute inset-0 -z-10">
<div class="absolute -left-32 top-10 h-[480px] w-[480px] rounded-full bg-sage-soft blur-3xl" style="transform:none">
</div>
<div class="absolute -right-24 top-40 h-[420px] w-[420px] rounded-full bg-apricot-soft blur-3xl" style="transform:none">
</div>
<div class="absolute left-1/2 top-0 h-[380px] w-[380px] -translate-x-1/2 rounded-full bg-lilac-soft/70 blur-3xl">
</div>
<div class="absolute inset-0 opacity-[.35] [background-image:radial-gradient(var(--line)_1px,transparent_1px)] [background-size:26px_26px] [mask-image:radial-gradient(ellipse_at_center,black,transparent_70%)]">
</div>
</div>
<div class="mx-auto max-w-5xl text-center">
<div class="mb-7 inline-flex items-center gap-2 rounded-full border border-line bg-surface/80 px-4 py-1.5 text-sm text-muted backdrop-blur" style="opacity:0;transform:translateY(12px)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg> The WordPress Growth Operating System</div>
<h1 class="font-display text-5xl leading-[1.04] tracking-tight sm:text-7xl" style="opacity:0;transform:translateY(24px)">Stop collecting warnings.<br/>Your website should <span class="relative inline-block min-w-[6ch] text-sage italic">
<span class="inline-block" style="opacity:0;transform:translateY(24px) rotateX(-60deg)">improve itself.</span>
</span>
</h1>
<p class="mx-auto mt-7 max-w-2xl text-lg text-muted" style="opacity:0">VuloPilot looks across your entire WordPress website, finds what is holding it back, explains why it matters, and helps you improve it.</p>
<div class="mt-9 flex flex-wrap items-center justify-center gap-3" style="opacity:0;transform:translateY(12px)">
<a href="/docs/" class="group inline-flex items-center gap-2 rounded-full bg-ink px-7 py-3.5 font-medium text-bg shadow-[0_14px_30px_-12px_rgba(22,26,34,.6)] transition hover:bg-sage">Connect your WordPress site <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
<a href="#how" class="rounded-full border border-line bg-surface/70 px-7 py-3.5 font-medium transition hover:border-ink">See how it works</a>
</div>
<p class="mt-4 text-sm text-muted">Free to start · No credit card required</p>
</div>
<div class="relative mx-auto mt-20 max-w-4xl" style="opacity:0;transform:perspective(1200px) translateY(60px)">
<div class="absolute z-10 hidden md:block" style="left:-8%;top:6%;opacity:0;transform:scale(0.6)">
<div class="floaty flex items-center gap-2 rounded-full border border-line bg-surface px-3.5 py-2 text-xs font-medium shadow-lg" style="animation-delay:0s">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true" style="color:var(--rose)">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="m9 12 2 2 4-4">
</path>
</svg>3 plugins outdated</div>
</div>
<div class="absolute z-10 hidden md:block" style="left:78%;top:-4%;opacity:0;transform:scale(0.6)">
<div class="floaty flex items-center gap-2 rounded-full border border-line bg-surface px-3.5 py-2 text-xs font-medium shadow-lg" style="animation-delay:0.8s">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true" style="color:var(--apricot)">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>Homepage 2.1s slower</div>
</div>
<div class="absolute z-10 hidden md:block" style="left:84%;top:62%;opacity:0;transform:scale(0.6)">
<div class="floaty flex items-center gap-2 rounded-full border border-line bg-surface px-3.5 py-2 text-xs font-medium shadow-lg" style="animation-delay:1.6s">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true" style="color:var(--lilac)">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>14 pages missing titles</div>
</div>
<div class="absolute z-10 hidden md:block" style="left:-10%;top:70%;opacity:0;transform:scale(0.6)">
<div class="floaty flex items-center gap-2 rounded-full border border-line bg-surface px-3.5 py-2 text-xs font-medium shadow-lg" style="animation-delay:2.2s">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text" aria-hidden="true" style="color:var(--sage)">
<path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
</path>
<path d="M14 2v5a1 1 0 0 0 1 1h5">
</path>
<path d="M10 9H8">
</path>
<path d="M16 13H8">
</path>
<path d="M16 17H8">
</path>
</svg>Stale: /pricing</div>
</div>
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
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/overview.jpg" width="1760" height="727" alt="VuloPilot visibility overview with an overall score of 96 and a 30-day trend chart" loading="eager" decoding="async" class="block h-auto w-full"/>
</div>
</figure>
</div>
</section>
<section id="problem" class="relative px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>The problem</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">Your website keeps changing. <span class="italic text-muted">Are you keeping up?</span>
</h2>
</div>
<div class="mt-12 flex flex-wrap justify-center gap-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card cursor-default px-5 py-3 text-sm sm:text-base">“<!-- -->I have three tools and a hundred warnings. What do I fix?<!-- -->”</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card cursor-default px-5 py-3 text-sm sm:text-base">“<!-- -->Does ChatGPT even know my business exists?<!-- -->”</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card cursor-default px-5 py-3 text-sm sm:text-base">“<!-- -->Is my website even okay? I can’t tell.<!-- -->”</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card cursor-default px-5 py-3 text-sm sm:text-base">“<!-- -->I fixed it last week. Did it help?<!-- -->”</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card cursor-default px-5 py-3 text-sm sm:text-base">“<!-- -->My visitors dropped. Why?<!-- -->”</div>
</div>
</div>
<div class="mt-16" style="opacity:0;transform:translateY(24px)">
<div class="card overflow-hidden">
<div class="flex flex-wrap items-center gap-4 border-b border-line px-6 py-4">
<div class="flex items-baseline gap-2">
<span class="min-w-[3ch] text-4xl font-semibold tabular-nums tracking-tight" style="color:var(--rose)">100</span>
<span class="text-sm text-muted">warnings, zero direction</span>
</div>
<div class="ml-auto flex w-full items-center gap-3 sm:w-auto">
<span class="text-xs font-semibold uppercase tracking-widest text-rose">Noise</span>
<input aria-label="Noise to signal" type="range" min="0" max="100" class="h-2 w-full min-w-[180px] cursor-pointer appearance-none rounded-full sm:w-64 [&amp;::-moz-range-thumb]:h-5 [&amp;::-moz-range-thumb]:w-5 [&amp;::-moz-range-thumb]:rounded-full [&amp;::-moz-range-thumb]:border-0 [&amp;::-moz-range-thumb]:bg-ink [&amp;::-webkit-slider-thumb]:h-5 [&amp;::-webkit-slider-thumb]:w-5 [&amp;::-webkit-slider-thumb]:appearance-none [&amp;::-webkit-slider-thumb]:rounded-full [&amp;::-webkit-slider-thumb]:bg-ink [&amp;::-webkit-slider-thumb]:shadow-lg" style="background:linear-gradient(90deg, var(--sage) 0%, var(--line) 0%)" value="0"/>
<span class="text-xs font-semibold uppercase tracking-widest text-sage">Signal</span>
<button aria-label="Replay" class="grid h-9 w-9 shrink-0 place-items-center rounded-full border border-line transition hover:bg-bg">
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
<path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z">
</path>
</svg>
</button>
</div>
</div>
<div class="relative h-[430px] bg-[radial-gradient(circle_at_50%_100%,var(--sage-soft),transparent_65%)] sm:h-[400px]">
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:3%;top:6%;opacity:1;transform:rotate(-6deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->SSL warning</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:30%;top:3%;opacity:1;transform:rotate(4deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Missing alt text ×48</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:60%;top:8%;opacity:1;transform:rotate(-3deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Slow LCP</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:82%;top:4%;opacity:1;transform:rotate(7deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Broken link /about</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:8%;top:24%;opacity:1;transform:rotate(-8deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Plugin outdated</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:38%;top:22%;opacity:1;transform:rotate(3deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->No meta desc</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:66%;top:26%;opacity:1;transform:rotate(-5deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Duplicate H1</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:86%;top:22%;opacity:1;transform:rotate(6deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->404 ×12</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:2%;top:42%;opacity:1;transform:rotate(-2deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Large images</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:28%;top:40%;opacity:1;transform:rotate(5deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Weak schema</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:54%;top:44%;opacity:1;transform:rotate(-7deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->XML sitemap?</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:80%;top:40%;opacity:1;transform:rotate(2deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Thin content</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:10%;top:60%;opacity:1;transform:rotate(6deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Mixed content</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:36%;top:62%;opacity:1;transform:rotate(-4deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Core Web Vitals</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:62%;top:58%;opacity:1;transform:rotate(3deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Orphan pages</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:84%;top:60%;opacity:1;transform:rotate(-6deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Cache off</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:22%;top:78%;opacity:1;transform:rotate(5deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Old PHP</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:50%;top:80%;opacity:1;transform:rotate(-3deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Low contrast</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:72%;top:76%;opacity:1;transform:rotate(4deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->No llms.txt</span>
<span class="absolute whitespace-nowrap rounded-lg border border-rose/30 bg-rose/10 px-3 py-1.5 text-xs font-medium text-rose will-change-transform sm:text-sm" style="left:6%;top:88%;opacity:1;transform:rotate(-5deg) scale(1);filter:blur(0px);pointer-events:none">⚠ <!-- -->Debug mode on</span>
<div class="absolute inset-0 flex flex-col justify-center gap-2.5 px-5 sm:px-24" style="pointer-events:none">
<div class="flex items-center justify-between rounded-2xl border border-line bg-surface px-5 py-3.5 shadow-sm" style="opacity:0;transform:translateY(24px) scale(0.94)">
<span class="flex items-center gap-4">
<span class="grid h-9 w-9 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--rose) 14%, white);color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="M12 8v4">
</path>
<path d="M12 16h.01">
</path>
</svg>
</span>
<span class="font-semibold">Update 2 vulnerable plugins</span>
</span>
<span class="hidden rounded-full px-3 py-1 text-xs font-semibold sm:block" style="background:color-mix(in srgb, var(--rose) 14%, white);color:var(--rose)">Critical</span>
</div>
<div class="flex items-center justify-between rounded-2xl border border-line bg-surface px-5 py-3.5 shadow-sm" style="opacity:0;transform:translateY(24px) scale(0.94)">
<span class="flex items-center gap-4">
<span class="grid h-9 w-9 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--apricot) 14%, white);color:var(--apricot)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
</span>
<span class="font-semibold">Fix the slow homepage hero image</span>
</span>
<span class="hidden rounded-full px-3 py-1 text-xs font-semibold sm:block" style="background:color-mix(in srgb, var(--apricot) 14%, white);color:var(--apricot)">High</span>
</div>
<div class="flex items-center justify-between rounded-2xl border border-line bg-surface px-5 py-3.5 shadow-sm" style="opacity:0;transform:translateY(24px) scale(0.94)">
<span class="flex items-center gap-4">
<span class="grid h-9 w-9 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--lilac) 14%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link-2" aria-hidden="true">
<path d="M9 17H7A5 5 0 0 1 7 7h2">
</path>
<path d="M15 7h2a5 5 0 1 1 0 10h-2">
</path>
<line x1="8" x2="16" y1="12" y2="12">
</line>
</svg>
</span>
<span class="font-semibold">Repair 12 broken links</span>
</span>
<span class="hidden rounded-full px-3 py-1 text-xs font-semibold sm:block" style="background:color-mix(in srgb, var(--lilac) 14%, white);color:var(--lilac)">Medium</span>
</div>
<div class="flex items-center justify-between rounded-2xl border border-line bg-surface px-5 py-3.5 shadow-sm" style="opacity:0;transform:translateY(24px) scale(0.94)">
<span class="flex items-center gap-4">
<span class="grid h-9 w-9 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--sage) 14%, white);color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>
<span class="font-semibold">Everything else can wait</span>
</span>
<span class="hidden rounded-full px-3 py-1 text-xs font-semibold sm:block" style="background:color-mix(in srgb, var(--sage) 14%, white);color:var(--sage)">Later</span>
</div>
</div>
<div class="pointer-events-none absolute inset-x-0 bottom-3 text-center text-sm font-semibold text-muted" style="opacity:1">Drag the slider to let VuloPilot sort it out</div>
</div>
</div>
</div>
<div class="mt-14 text-center" style="opacity:0;transform:translateY(24px)">
<p class="text-3xl font-semibold leading-tight tracking-tight sm:text-4xl">What if your website could answer these questions <span class="italic text-sage">and act on them?</span>
</p>
</div>
</div>
</section>
<section class="px-5 py-24">
<div class="mx-auto grid max-w-6xl gap-12 lg:grid-cols-[0.8fr_1.2fr]">
<div class="lg:sticky lg:top-32 lg:self-start">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Meet VuloPilot</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-5xl">Every problem deserves <span class="italic text-sage">a next step.</span>
</h2>
<p class="mt-5 text-lg text-muted">One WordPress plugin that understands your entire website, tells you what matters, and helps you act – automatically.</p>
<div class="relative mt-8 hidden overflow-hidden rounded-3xl bg-ink p-6 text-bg lg:block">
<div class="absolute -right-8 -top-8 h-36 w-36 rounded-full bg-sage blur-2xl">
</div>
<div class="relative">
<div class="text-xs font-semibold uppercase tracking-widest text-white/50">Your question</div>
<div class="mt-2 text-xl font-semibold">becomes a clear next step.</div>
<div class="mt-4 flex items-center gap-2 text-sm text-white/70">
<span class="rounded-full bg-white/10 px-3 py-1">Question</span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
<span class="rounded-full bg-white/10 px-3 py-1">Answer</span>
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
<span class="rounded-full bg-flare px-3 py-1 font-semibold text-white">Action</span>
</div>
</div>
</div>
</div>
<div class="space-y-4">
<article class="group relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-[0_20px_50px_-32px_rgba(0,41,145,.3)] transition-colors hover:border-sage/40" style="opacity:0;transform:translateY(28px)">
<span class="absolute inset-y-0 left-0 w-1 origin-top scale-y-0 transition-transform duration-500 group-hover:scale-y-100" style="background:var(--rose)">
</span>
<div class="flex items-center gap-4">
<span class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl transition-transform duration-300 group-hover:rotate-[-6deg] group-hover:scale-110" style="background:color-mix(in srgb, var(--rose) 12%, white);color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>
<h3 class="text-2xl font-semibold tracking-tight">Is my website okay?</h3>
<span class="ml-auto font-mono text-sm text-line">0<!-- -->1</span>
</div>
<div class="mt-5 grid gap-4 sm:grid-cols-2">
<div class="rounded-2xl bg-bg/70 p-4">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">What VuloPilot does</div>
<p class="mt-1.5 text-[15px]">Checks your whole site and tells you what is fine and what needs attention.</p>
</div>
<div class="rounded-2xl p-4" style="background:color-mix(in srgb, var(--rose) 7%, white)">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">Where it checks</div>
<div class="mt-1.5 flex items-center gap-2 font-semibold" style="color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="m9 12 2 2 4-4">
</path>
</svg>Security &amp; health</div>
<p class="mt-0.5 text-sm text-muted">Old software, risky settings and broken links.</p>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-[0_20px_50px_-32px_rgba(0,41,145,.3)] transition-colors hover:border-sage/40" style="opacity:0;transform:translateY(28px)">
<span class="absolute inset-y-0 left-0 w-1 origin-top scale-y-0 transition-transform duration-500 group-hover:scale-y-100" style="background:var(--sage)">
</span>
<div class="flex items-center gap-4">
<span class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl transition-transform duration-300 group-hover:rotate-[-6deg] group-hover:scale-110" style="background:color-mix(in srgb, var(--sage) 12%, white);color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw-clock lucide-history" aria-hidden="true">
<path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8">
</path>
<path d="M3 3v5h5">
</path>
<path d="M12 7v5l4 2">
</path>
</svg>
</span>
<h3 class="text-2xl font-semibold tracking-tight">Why did my visitors drop?</h3>
<span class="ml-auto font-mono text-sm text-line">0<!-- -->2</span>
</div>
<div class="mt-5 grid gap-4 sm:grid-cols-2">
<div class="rounded-2xl bg-bg/70 p-4">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">What VuloPilot does</div>
<p class="mt-1.5 text-[15px]">Finds the likely cause and shows you the exact pages.</p>
</div>
<div class="rounded-2xl p-4" style="background:color-mix(in srgb, var(--sage) 7%, white)">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">Where it checks</div>
<div class="mt-1.5 flex items-center gap-2 font-semibold" style="color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-check" aria-hidden="true">
<path d="m8 11 2 2 4-4">
</path>
<circle cx="11" cy="11" r="8">
</circle>
<path d="m21 21-4.3-4.3">
</path>
</svg>Search · Content · Performance</div>
<p class="mt-0.5 text-sm text-muted">Spot critical issues and make your site safer.</p>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-[0_20px_50px_-32px_rgba(0,41,145,.3)] transition-colors hover:border-sage/40" style="opacity:0;transform:translateY(28px)">
<span class="absolute inset-y-0 left-0 w-1 origin-top scale-y-0 transition-transform duration-500 group-hover:scale-y-100" style="background:var(--lilac)">
</span>
<div class="flex items-center gap-4">
<span class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl transition-transform duration-300 group-hover:rotate-[-6deg] group-hover:scale-110" style="background:color-mix(in srgb, var(--lilac) 12%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-link-2" aria-hidden="true">
<path d="M9 17H7A5 5 0 0 1 7 7h2">
</path>
<path d="M15 7h2a5 5 0 1 1 0 10h-2">
</path>
<line x1="8" x2="16" y1="12" y2="12">
</line>
</svg>
</span>
<h3 class="text-2xl font-semibold tracking-tight">What do I fix first?</h3>
<span class="ml-auto font-mono text-sm text-line">0<!-- -->3</span>
</div>
<div class="mt-5 grid gap-4 sm:grid-cols-2">
<div class="rounded-2xl bg-bg/70 p-4">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">What VuloPilot does</div>
<p class="mt-1.5 text-[15px]">Puts the important things first, so you know where to start.</p>
</div>
<div class="rounded-2xl p-4" style="background:color-mix(in srgb, var(--lilac) 7%, white)">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">Where it checks</div>
<div class="mt-1.5 flex items-center gap-2 font-semibold" style="color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered" aria-hidden="true">
<path d="M11 5h10">
</path>
<path d="M11 12h10">
</path>
<path d="M11 19h10">
</path>
<path d="M4 4h1v5">
</path>
<path d="M4 9h2">
</path>
<path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02">
</path>
</svg>All six areas, ranked</div>
<p class="mt-0.5 text-sm text-muted">By what matters most.</p>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-[0_20px_50px_-32px_rgba(0,41,145,.3)] transition-colors hover:border-sage/40" style="opacity:0;transform:translateY(28px)">
<span class="absolute inset-y-0 left-0 w-1 origin-top scale-y-0 transition-transform duration-500 group-hover:scale-y-100" style="background:var(--rose)">
</span>
<div class="flex items-center gap-4">
<span class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl transition-transform duration-300 group-hover:rotate-[-6deg] group-hover:scale-110" style="background:color-mix(in srgb, var(--rose) 12%, white);color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-grid" aria-hidden="true">
<rect width="7" height="7" x="3" y="3" rx="1">
</rect>
<rect width="7" height="7" x="14" y="3" rx="1">
</rect>
<rect width="7" height="7" x="14" y="14" rx="1">
</rect>
<rect width="7" height="7" x="3" y="14" rx="1">
</rect>
</svg>
</span>
<h3 class="text-2xl font-semibold tracking-tight">Did my fix work?</h3>
<span class="ml-auto font-mono text-sm text-line">0<!-- -->4</span>
</div>
<div class="mt-5 grid gap-4 sm:grid-cols-2">
<div class="rounded-2xl bg-bg/70 p-4">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">What VuloPilot does</div>
<p class="mt-1.5 text-[15px]">Checks again and tells you if the problem is gone.</p>
</div>
<div class="rounded-2xl p-4" style="background:color-mix(in srgb, var(--rose) 7%, white)">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">Where it checks</div>
<div class="mt-1.5 flex items-center gap-2 font-semibold" style="color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-repeat" aria-hidden="true">
<path d="m17 2 4 4-4 4">
</path>
<path d="M3 11v-1a4 4 0 0 1 4-4h14">
</path>
<path d="m7 22-4-4 4-4">
</path>
<path d="M21 13v1a4 4 0 0 1-4 4H3">
</path>
</svg>Automation</div>
<p class="mt-0.5 text-sm text-muted">Checks that run on their own, so nothing is forgotten.</p>
</div>
</div>
</article>
<article class="group relative overflow-hidden rounded-3xl border border-line bg-surface p-6 shadow-[0_20px_50px_-32px_rgba(0,41,145,.3)] transition-colors hover:border-sage/40" style="opacity:0;transform:translateY(28px)">
<span class="absolute inset-y-0 left-0 w-1 origin-top scale-y-0 transition-transform duration-500 group-hover:scale-y-100" style="background:var(--lilac)">
</span>
<div class="flex items-center gap-4">
<span class="grid h-12 w-12 shrink-0 place-items-center rounded-2xl transition-transform duration-300 group-hover:rotate-[-6deg] group-hover:scale-110" style="background:color-mix(in srgb, var(--lilac) 12%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot" aria-hidden="true">
<path d="M12 8V4H8">
</path>
<rect width="16" height="12" x="4" y="8" rx="2">
</rect>
<path d="M2 14h2">
</path>
<path d="M20 14h2">
</path>
<path d="M15 13v2">
</path>
<path d="M9 13v2">
</path>
</svg>
</span>
<h3 class="text-2xl font-semibold tracking-tight">Does AI know my business?</h3>
<span class="ml-auto font-mono text-sm text-line">0<!-- -->5</span>
</div>
<div class="mt-5 grid gap-4 sm:grid-cols-2">
<div class="rounded-2xl bg-bg/70 p-4">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">What VuloPilot does</div>
<p class="mt-1.5 text-[15px]">Shows how clearly tools like ChatGPT and Gemini understand what you do.</p>
</div>
<div class="rounded-2xl p-4" style="background:color-mix(in srgb, var(--lilac) 7%, white)">
<div class="text-[11px] font-semibold uppercase tracking-widest text-muted">Where it checks</div>
<div class="mt-1.5 flex items-center gap-2 font-semibold" style="color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radar" aria-hidden="true">
<path d="M19.07 4.93A10 10 0 0 0 6.99 3.34">
</path>
<path d="M4 6h.01">
</path>
<path d="M2.29 9.62A10 10 0 1 0 21.31 8.35">
</path>
<path d="M16.24 7.76A6 6 0 1 0 8.23 16.67">
</path>
<path d="M12 18h.01">
</path>
<path d="M17.99 11.66A6 6 0 0 1 15.77 16.67">
</path>
<circle cx="12" cy="12" r="2">
</circle>
<path d="m13.41 10.59 5.66-5.66">
</path>
</svg>AI Visibility</div>
<p class="mt-0.5 text-sm text-muted">And how to improve it.</p>
</div>
</div>
</article>
</div>
</div>
</section>
<section id="how" class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>How VuloPilot works</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">“What’s wrong?” becomes <span class="italic text-sage">“We’ve got this.”</span>
</h2>
<p class="mt-4 text-lg text-muted">Every problem goes from found to fixed, and proven.</p>
</div>
<div class="mt-14">
<div class="relative grid grid-cols-5">
<div class="absolute left-[10%] right-[10%] top-6 h-1 rounded-full bg-line">
<div class="absolute inset-y-0 left-0 rounded-full bg-sage">
</div>
<div class="absolute inset-y-0 rounded-full bg-sage/40" style="left:0%;width:0px">
</div>
</div>
<button class="group relative flex flex-col items-center gap-2.5 text-center" aria-current="true">
<span class="relative grid h-12 w-12 place-items-center rounded-2xl border-2 transition-colors border-sage bg-sage text-white shadow-[0_10px_30px_-8px_rgba(0,41,145,.6)]">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-search" aria-hidden="true">
<path d="M3 7V5a2 2 0 0 1 2-2h2">
</path>
<path d="M17 3h2a2 2 0 0 1 2 2v2">
</path>
<path d="M21 17v2a2 2 0 0 1-2 2h-2">
</path>
<path d="M7 21H5a2 2 0 0 1-2-2v-2">
</path>
<circle cx="12" cy="12" r="3">
</circle>
<path d="m16 16-1.9-1.9">
</path>
</svg>
<span class="absolute -inset-1.5 rounded-[20px] border border-sage/30">
</span>
</span>
<span class="font-mono text-[10px] text-sage">0<!-- -->1</span>
<span class="-mt-1.5 text-sm font-semibold sm:text-base text-ink">Find</span>
</button>
<button class="group relative flex flex-col items-center gap-2.5 text-center" aria-current="false">
<span class="relative grid h-12 w-12 place-items-center rounded-2xl border-2 transition-colors border-line bg-surface text-muted group-hover:border-sage/50">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye" aria-hidden="true">
<path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0">
</path>
<circle cx="12" cy="12" r="3">
</circle>
</svg>
</span>
<span class="font-mono text-[10px] text-muted">0<!-- -->2</span>
<span class="-mt-1.5 text-sm font-semibold sm:text-base text-muted">Understand</span>
</button>
<button class="group relative flex flex-col items-center gap-2.5 text-center" aria-current="false">
<span class="relative grid h-12 w-12 place-items-center rounded-2xl border-2 transition-colors border-line bg-surface text-muted group-hover:border-sage/50">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered" aria-hidden="true">
<path d="M11 5h10">
</path>
<path d="M11 12h10">
</path>
<path d="M11 19h10">
</path>
<path d="M4 4h1v5">
</path>
<path d="M4 9h2">
</path>
<path d="M6.5 20H3.4c0-1 2.6-1.925 2.6-3.5a1.5 1.5 0 0 0-2.6-1.02">
</path>
</svg>
</span>
<span class="font-mono text-[10px] text-muted">0<!-- -->3</span>
<span class="-mt-1.5 text-sm font-semibold sm:text-base text-muted">Prioritize</span>
</button>
<button class="group relative flex flex-col items-center gap-2.5 text-center" aria-current="false">
<span class="relative grid h-12 w-12 place-items-center rounded-2xl border-2 transition-colors border-line bg-surface text-muted group-hover:border-sage/50">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wand-sparkles lucide-wand-2" aria-hidden="true">
<path d="m21.64 3.64-1.28-1.28a1.21 1.21 0 0 0-1.72 0L2.36 18.64a1.21 1.21 0 0 0 0 1.72l1.28 1.28a1.2 1.2 0 0 0 1.72 0L21.64 5.36a1.2 1.2 0 0 0 0-1.72">
</path>
<path d="m14 7 3 3">
</path>
<path d="M5 6v4">
</path>
<path d="M19 14v4">
</path>
<path d="M10 2v2">
</path>
<path d="M7 8H3">
</path>
<path d="M21 16h-4">
</path>
<path d="M11 3H9">
</path>
</svg>
</span>
<span class="font-mono text-[10px] text-muted">0<!-- -->4</span>
<span class="-mt-1.5 text-sm font-semibold sm:text-base text-muted">Fix</span>
</button>
<button class="group relative flex flex-col items-center gap-2.5 text-center" aria-current="false">
<span class="relative grid h-12 w-12 place-items-center rounded-2xl border-2 transition-colors border-line bg-surface text-muted group-hover:border-sage/50">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check lucide-verified" aria-hidden="true">
<path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z">
</path>
<path d="m16 9-5.5 5.5L8 12">
</path>
</svg>
</span>
<span class="font-mono text-[10px] text-muted">0<!-- -->5</span>
<span class="-mt-1.5 text-sm font-semibold sm:text-base text-muted">Verify</span>
</button>
</div>
<div class="relative mt-10 overflow-hidden rounded-[32px] border border-line bg-surface shadow-[0_40px_90px_-50px_rgba(0,41,145,.4)]">
<div class="grid lg:grid-cols-[0.85fr_1.15fr]">
<div class="relative p-8 sm:p-10">
<div style="opacity:0;transform:translateY(16px)">
<div class="select-none text-8xl font-semibold leading-none tracking-tighter text-transparent [-webkit-text-stroke:1.5px_var(--line)]">0<!-- -->1</div>
<h3 class="mt-4 text-4xl font-semibold tracking-tight">Find</h3>
<p class="mt-3 text-lg text-muted">One scan looks at your whole website.</p>
<ul class="mt-6 space-y-2.5">
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Pages, plugins, speed, search, content and AI visibility</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Runs from your WordPress dashboard</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Re-run any time, or on a schedule</li>
</ul>
</div>
<div class="mt-8 flex items-center gap-2">
<button aria-label="Previous step" class="grid h-10 w-10 place-items-center rounded-full border border-line transition hover:border-ink">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left" aria-hidden="true">
<path d="m12 19-7-7 7-7">
</path>
<path d="M19 12H5">
</path>
</svg>
</button>
<button aria-label="Next step" class="grid h-10 w-10 place-items-center rounded-full bg-ink text-bg transition hover:bg-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</button>
<span class="ml-2 text-xs text-muted">Auto-playing</span>
</div>
</div>
<div class="relative overflow-hidden bg-gradient-to-br from-sage-soft/70 via-bg to-apricot-soft/60 p-6 sm:p-9">
<div class="absolute inset-0 opacity-40 [background-image:radial-gradient(var(--line)_1px,transparent_1px)] [background-size:22px_22px]">
</div>
<div class="relative min-h-[340px]">
<div style="opacity:0;transform:translateY(24px) scale(0.97)">
<div class="overflow-hidden rounded-2xl border border-line bg-surface shadow-[0_24px_60px_-34px_rgba(0,41,145,.45)]">
<div class="flex items-center gap-1.5 border-b border-line bg-bg/70 px-4 py-2.5">
<span class="h-2 w-2 rounded-full bg-rose/70">
</span>
<span class="h-2 w-2 rounded-full bg-flare/60">
</span>
<span class="h-2 w-2 rounded-full bg-sage/70">
</span>
<span class="ml-2 truncate font-mono text-[10px] text-muted">yourstore.com · scanning</span>
</div>
<div class="p-5">
<div class="relative overflow-hidden rounded-xl bg-bg/60 p-4">
<div class="mb-2.5 h-2.5 rounded-full bg-line" style="width:90%">
</div>
<div class="mb-2.5 h-2.5 rounded-full bg-line" style="width:70%">
</div>
<div class="mb-2.5 h-2.5 rounded-full bg-line" style="width:82%">
</div>
<div class="mb-2.5 h-2.5 rounded-full bg-line" style="width:55%">
</div>
<div class="mb-2.5 h-2.5 rounded-full bg-line" style="width:76%">
</div>
<div class="absolute inset-x-0 h-10 -translate-y-1/2 bg-gradient-to-b from-transparent via-sage/25 to-transparent">
</div>
<div class="absolute inset-x-0 h-px bg-sage">
</div>
</div>
<div class="mt-4 grid grid-cols-2 gap-2.5 sm:grid-cols-3">
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">Pages</span>
<span class="text-muted">128</span>
</span>
</div>
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">Plugins</span>
<span class="text-muted">24</span>
</span>
</div>
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">Speed</span>
<span class="text-muted">6 tests</span>
</span>
</div>
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">Search</span>
<span class="text-muted">41 checks</span>
</span>
</div>
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">Content</span>
<span class="text-muted">52 posts</span>
</span>
</div>
<div class="flex items-center gap-2 rounded-xl border border-line bg-surface px-3 py-2.5 text-xs" style="opacity:0;transform:translateY(10px)">
<span class="grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white" style="transform:scale(0)">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>
<span>
<span class="block font-semibold">AI visibility</span>
<span class="text-muted">9 signals</span>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="automation" class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Automation</div>
<h2 class="mt-5 font-display text-4xl leading-tight sm:text-6xl">Set up VuloPilot. <span class="italic text-sage">It keeps working.</span>
</h2>
<p class="mt-4 text-lg text-muted">Free covers scheduled scans, reports and backups. Pro adds rules, security watch and scheduled audits.</p>
</div>
<div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--sage) 16%, white);color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-check" aria-hidden="true">
<path d="M8 2v3">
</path>
<path d="M16 2v3">
</path>
<rect x="3" y="3" width="18" height="18" rx="2">
</rect>
<path d="M3 9h18">
</path>
<path d="m9 15 2 2 4-4">
</path>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-sage-soft text-sage">Free</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--sage)">
</span>daily, weekly or monthly</span>
</div>
<h3 class="mt-5 font-display text-2xl">Run Full Site Scan</h3>
<p class="mt-1 text-muted">Every scanner runs on a schedule and every score refreshes.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Scan</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Score</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Compare</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--sage)">Result:</span> <!-- -->The dashboard stays honest without you.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--lilac) 16%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-plus-corner lucide-file-plus-2" aria-hidden="true">
<path d="M11.35 22H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.706.706l3.588 3.588A2.4 2.4 0 0 1 20 8v5.35">
</path>
<path d="M14 2v5a1 1 0 0 0 1 1h5">
</path>
<path d="M14 19h6">
</path>
<path d="M17 16v6">
</path>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-sage-soft text-sage">Free</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--lilac)">
</span>on your schedule</span>
</div>
<h3 class="mt-5 font-display text-2xl">Send Visibility Report</h3>
<p class="mt-1 text-muted">A summary of visibility, issues and opportunities, emailed to you.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Check</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Summarize</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Email you</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--lilac)">Result:</span> <!-- -->Start the week knowing what needs you.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--apricot) 16%, white);color:var(--apricot)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true">
<path d="M5 22h14">
</path>
<path d="M5 2h14">
</path>
<path d="M17 22v-4.172a2 2 0 0 0-.586-1.414L12 12l-4.414 4.414A2 2 0 0 0 7 17.828V22">
</path>
<path d="M7 2v4.172a2 2 0 0 0 .586 1.414L12 12l4.414-4.414A2 2 0 0 0 17 6.172V2">
</path>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-sage-soft text-sage">Free</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--apricot)">
</span>automatic backups</span>
</div>
<h3 class="mt-5 font-display text-2xl">Backups that run themselves</h3>
<p class="mt-1 text-muted">Save a copy of your site, then download, restore or delete it.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Back up</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Store</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Restore if needed</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--apricot)">Result:</span> <!-- -->Recover from any mistake or hack.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--apricot) 16%, white);color:var(--apricot)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-timer" aria-hidden="true">
<line x1="10" x2="14" y1="2" y2="2">
</line>
<line x1="12" x2="15" y1="14" y2="11">
</line>
<circle cx="12" cy="14" r="8">
</circle>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-apricot text-white">Pro</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--apricot)">
</span>if / then rules</span>
</div>
<h3 class="mt-5 font-display text-2xl">Workflow automation</h3>
<p class="mt-1 text-muted">Run a rule only when conditions are true, such as the score dropping below 70.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Condition</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Step</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Retry</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Log</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--apricot)">Result:</span> <!-- -->Every run is logged, so you see why it did or didn’t fire.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--rose) 16%, white);color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-alert" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="M12 8v4">
</path>
<path d="M12 16h.01">
</path>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-apricot text-white">Pro</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--rose)">
</span>always on</span>
</div>
<h3 class="mt-5 font-display text-2xl">Security watch</h3>
<p class="mt-1 text-muted">Vulnerabilities, file changes, exposed files and debug mode.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Notice</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Check the risk</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Alert you</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--rose)">Result:</span> <!-- -->You hear about it before it becomes a problem.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card group h-full p-6">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2">
<span class="grid h-11 w-11 place-items-center rounded-xl" style="background:color-mix(in srgb, var(--lilac) 16%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen-line lucide-edit-3" aria-hidden="true">
<path d="M13 21h8">
</path>
<path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z">
</path>
</svg>
</span>
<span class="rounded-full px-2.5 py-0.5 font-mono text-[10px] uppercase tracking-widest bg-apricot text-white">Pro</span>
</span>
<span class="flex items-center gap-1.5 font-mono text-[11px] uppercase tracking-wider text-muted">
<span class="h-1.5 w-1.5 animate-pulse rounded-full" style="background:var(--lilac)">
</span>scheduled</span>
</div>
<h3 class="mt-5 font-display text-2xl">Audits, rankings &amp; reports</h3>
<p class="mt-1 text-muted">Hourly-to-weekly accessibility audits, daily keyword sync and scheduled PDF reports.</p>
<div class="mt-5 flex flex-wrap items-center gap-1.5">
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Audit</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Sync</span>
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right text-muted" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</span>
<span class="flex items-center gap-1.5" style="opacity:0;transform:translateX(-8px)">
<span class="rounded-full border border-line bg-bg px-3 py-1 text-xs">Report</span>
</span>
</div>
<p class="mt-5 border-t border-line pt-4 text-sm">
<span class="font-medium" style="color:var(--lilac)">Result:</span> <!-- -->History shows whether you’re improving.</p>
</div>
</div>
</div>
<div class="mt-14" style="opacity:0;transform:translateY(24px)">
<figure class="">
<div class="overflow-hidden rounded-2xl border border-line bg-surface shadow-[0_30px_70px_-36px_rgba(0,41,145,.5)] ">
<div class="flex items-center gap-1.5 border-b border-line bg-bg/80 px-4 py-2.5">
<span class="h-2.5 w-2.5 rounded-full bg-rose/70">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-flare/60">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-sage/70">
</span>
<span class="ml-3 truncate rounded-full bg-surface px-3 py-0.5 font-mono text-[10px] text-muted ring-1 ring-line">wp-admin / VuloPilot / Automations</span>
</div>
<button type="button" class="group relative block w-full cursor-zoom-in text-left" aria-label="Enlarge screenshot: Automations">
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/automations.jpg" width="1718" height="876" alt="VuloPilot automations for scheduled scans and email visibility reports" loading="lazy" decoding="async" class="block h-auto w-full"/>
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
<figcaption class="mt-3 text-center text-sm text-muted">Automations<!-- -->: <!-- -->Automations</figcaption>
</figure>
</div>
</div>
</section>
<section id="ai" class="px-5 py-28">
<div class="mx-auto grid max-w-6xl items-center gap-14 lg:grid-cols-2">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Looking ahead</div>
<h2 class="mt-5 font-display text-4xl leading-tight sm:text-5xl">People now ask AI, not just Google. <span class="italic text-sage">Be the answer.</span>
</h2>
<p class="mt-4 text-lg text-muted">VuloPilot helps your website explain itself clearly, so tools like ChatGPT and Gemini understand what you do.</p>
<div class="mt-6 flex flex-wrap gap-2">
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">GPTBot</span>
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">ClaudeBot</span>
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">PerplexityBot</span>
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">llms.txt</span>
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">FAQ schema</span>
<span class="rounded-full border border-line bg-surface px-3 py-1 font-mono text-xs">Knowledge graph</span>
</div>
<ol class="mt-8 space-y-3">
<li class="flex gap-4" style="opacity:0;transform:translateX(-20px)">
<span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-lilac-soft font-mono text-xs text-lilac">1</span>
<span>Make your business easier to understand.</span>
</li>
<li class="flex gap-4" style="opacity:0;transform:translateX(-20px)">
<span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-lilac-soft font-mono text-xs text-lilac">2</span>
<span>Strengthen information and entities that explain your business.</span>
</li>
<li class="flex gap-4" style="opacity:0;transform:translateX(-20px)">
<span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-lilac-soft font-mono text-xs text-lilac">3</span>
<span>Help AI and search tools find the right information.</span>
</li>
<li class="flex gap-4" style="opacity:0;transform:translateX(-20px)">
<span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-lilac-soft font-mono text-xs text-lilac">4</span>
<span>Monitor the signals you can improve.</span>
</li>
<li class="flex gap-4" style="opacity:0;transform:translateX(-20px)">
<span class="grid h-7 w-7 shrink-0 place-items-center rounded-full bg-lilac-soft font-mono text-xs text-lilac">5</span>
<span>Track what’s working and where to make your website stronger.</span>
</li>
</ol>
</div>
<div class="relative">
<div class="absolute -inset-6 -z-10 rounded-[48px] bg-gradient-to-br from-lilac-soft via-apricot-soft to-sage-soft opacity-80 blur-2xl">
</div>
<div class="card p-6">
<div class="ml-auto w-fit max-w-[85%] rounded-2xl rounded-br-md bg-ink px-4 py-3 text-sm text-bg">Best bakery near me for a custom birthday cake?</div>
<div class="mt-4 max-w-[92%] rounded-2xl rounded-bl-md border border-line bg-bg/70 px-4 py-3 text-sm leading-relaxed">
<span class="caret">▍</span>
</div>
<div class="mt-6 grid grid-cols-3 gap-3 border-t border-line pt-6">
<div class="flex flex-col items-center gap-2">
<div class="relative" style="width:92px;height:92px">
<svg width="92" height="92" class="-rotate-90">
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8">
</circle>
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--lilac)" stroke-width="8" stroke-linecap="round" stroke-dasharray="238.76104167282426" stroke-dashoffset="238.76104167282426">
</circle>
</svg>
<div class="absolute inset-0 grid place-items-center text-center">
<div>
<div class="font-display text-3xl leading-none">
<span>0</span>
</div>
</div>
</div>
</div>
<span class="text-xs text-muted">AI Search</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="relative" style="width:92px;height:92px">
<svg width="92" height="92" class="-rotate-90">
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8">
</circle>
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--apricot)" stroke-width="8" stroke-linecap="round" stroke-dasharray="238.76104167282426" stroke-dashoffset="238.76104167282426">
</circle>
</svg>
<div class="absolute inset-0 grid place-items-center text-center">
<div>
<div class="font-display text-3xl leading-none">
<span>0</span>
</div>
</div>
</div>
</div>
<span class="text-xs text-muted">Entities</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="relative" style="width:92px;height:92px">
<svg width="92" height="92" class="-rotate-90">
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--line)" stroke-width="8">
</circle>
<circle cx="46" cy="46" r="38" fill="none" stroke="var(--sage)" stroke-width="8" stroke-linecap="round" stroke-dasharray="238.76104167282426" stroke-dashoffset="238.76104167282426">
</circle>
</svg>
<div class="absolute inset-0 grid place-items-center text-center">
<div>
<div class="font-display text-3xl leading-none">
<span>0</span>
</div>
</div>
</div>
</div>
<span class="text-xs text-muted">Clarity</span>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Inside VuloPilot</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">Finally, see what’s <span class="italic text-sage">really happening.</span>
</h2>
<p class="mt-4 text-lg text-muted">Six scores, a health timeline, a needs-your-attention list and recent changes you can undo. Try it: switch tabs, run a scan, approve a fix.</p>
</div>
<div class="mt-14" style="opacity:0;transform:translateY(24px)">
<div class="relative">
<div class="absolute -inset-4 -z-10 rounded-[44px] bg-gradient-to-br from-sage-soft via-lilac-soft to-apricot-soft opacity-70 blur-2xl">
</div>
<div class="overflow-hidden rounded-[28px] border border-line bg-surface shadow-[0_40px_90px_-40px_rgba(0,41,145,.45)]">
<div class="flex items-center gap-2 border-b border-line bg-bg/60 px-5 py-3">
<span class="h-2.5 w-2.5 rounded-full bg-rose/70">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-flare/60">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-sage/70">
</span>
<span class="ml-3 rounded-full bg-surface px-4 py-1 font-mono text-[11px] text-muted ring-1 ring-line">yourstore.com / wp-admin / vulopilot</span>
</div>
<div class="grid lg:grid-cols-[64px_1fr]">
<div class="hidden flex-col items-center gap-2 border-r border-line bg-bg/40 py-5 lg:flex">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-sage text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard" aria-hidden="true">
<rect width="7" height="9" x="3" y="3" rx="1">
</rect>
<rect width="7" height="5" x="14" y="3" rx="1">
</rect>
<rect width="7" height="9" x="14" y="12" rx="1">
</rect>
<rect width="7" height="5" x="3" y="16" rx="1">
</rect>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot" aria-hidden="true">
<path d="M12 8V4H8">
</path>
<rect width="16" height="12" x="4" y="8" rx="2">
</rect>
<path d="M2 14h2">
</path>
<path d="M20 14h2">
</path>
<path d="M15 13v2">
</path>
<path d="M9 13v2">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen-line lucide-edit-3" aria-hidden="true">
<path d="M13 21h8">
</path>
<path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="m9 12 2 2 4-4">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag" aria-hidden="true">
<path d="M16 10a4 4 0 0 1-8 0">
</path>
<path d="M3.103 6.034h17.794">
</path>
<path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
</path>
</svg>
</span>
<span class="grid h-10 w-10 place-items-center rounded-xl text-muted hover:bg-sage-soft hover:text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-clock" aria-hidden="true">
<path d="M16 14v2.2l1.6 1">
</path>
<path d="M16 2v3">
</path>
<path d="M21 7.338V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h2.338">
</path>
<path d="M3 9h5.859">
</path>
<path d="M8 2v3">
</path>
<circle cx="16" cy="16" r="6">
</circle>
</svg>
</span>
</div>
<div class="p-5 sm:p-7">
<div class="flex flex-wrap items-center justify-between gap-3">
<div class="flex flex-wrap gap-1.5">
<button class="relative rounded-full px-4 py-1.5 text-sm font-medium">
<span class="absolute inset-0 rounded-full bg-ink">
</span>
<span class="relative text-bg">SEO</span>
</button>
<button class="relative rounded-full px-4 py-1.5 text-sm font-medium">
<span class="relative text-muted hover:text-ink">GEO</span>
</button>
<button class="relative rounded-full px-4 py-1.5 text-sm font-medium">
<span class="relative text-muted hover:text-ink">AEO</span>
</button>
<button class="relative rounded-full px-4 py-1.5 text-sm font-medium">
<span class="relative text-muted hover:text-ink">Brand</span>
</button>
<button class="relative rounded-full px-4 py-1.5 text-sm font-medium">
<span class="relative text-muted hover:text-ink">Knowledge Graph</span>
</button>
</div>
<button class="inline-flex items-center gap-2 rounded-full bg-sage px-4 py-2 text-sm font-semibold text-white transition hover:bg-ink">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-play" aria-hidden="true">
<path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z">
</path>
</svg>Run scan</button>
</div>
<div class="relative mt-6 grid gap-5 lg:grid-cols-[1.35fr_1fr]">
<div class="rounded-2xl border border-line p-5">
<div class="flex items-center justify-between">
<div>
<div class="text-xs font-semibold uppercase tracking-widest text-muted">Health timeline</div>
<div class="mt-0.5 text-sm text-muted">SEO<!-- --> score, last 9 scans</div>
</div>
<div class="flex items-center gap-3">
<div class="text-right text-[11px] font-semibold uppercase text-sage">Good</div>
<div class="relative" style="width:76px;height:76px">
<svg width="76" height="76" class="-rotate-90">
<circle cx="38" cy="38" r="30" fill="none" stroke="var(--line)" stroke-width="8">
</circle>
<circle cx="38" cy="38" r="30" fill="none" stroke="var(--sage)" stroke-width="8" stroke-linecap="round" stroke-dasharray="188.49555921538757" stroke-dashoffset="188.49555921538757">
</circle>
</svg>
<div class="absolute inset-0 grid place-items-center text-center">
<div>
<div class="font-display text-3xl leading-none">
<span>0</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="mt-2" style="opacity:0">
<svg viewBox="0 0 520 150" class="h-40 w-full" preserveAspectRatio="none">
<defs>
<linearGradient id="g-SEO" x1="0" y1="0" x2="0" y2="1">
<stop offset="0" stop-color="var(--sage)" stop-opacity=".28">
</stop>
<stop offset="1" stop-color="var(--sage)" stop-opacity="0">
</stop>
</linearGradient>
</defs>
<line x1="0" x2="520" y1="8" y2="8" stroke="var(--line)" stroke-dasharray="3 5">
</line>
<line x1="0" x2="520" y1="45.5" y2="45.5" stroke="var(--line)" stroke-dasharray="3 5">
</line>
<line x1="0" x2="520" y1="83" y2="83" stroke="var(--line)" stroke-dasharray="3 5">
</line>
<line x1="0" x2="520" y1="120.5" y2="120.5" stroke="var(--line)" stroke-dasharray="3 5">
</line>
<path d="M0.0,95.1 L65.0,88.4 L130.0,91.8 L195.0,78.3 L260.0,70.0 L325.0,73.3 L390.0,58.3 L455.0,48.2 L520.0,38.1 L520,150 L0,150 Z" fill="url(#g-SEO)" style="opacity:0">
</path>
<path d="M0.0,95.1 L65.0,88.4 L130.0,91.8 L195.0,78.3 L260.0,70.0 L325.0,73.3 L390.0,58.3 L455.0,48.2 L520.0,38.1" fill="none" stroke="var(--sage)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" pathLength="1" stroke-dashoffset="0" stroke-dasharray="0 1">
</path>
<circle cx="0" cy="95.1" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="65" cy="88.4" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="130" cy="91.75" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="195" cy="78.35" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="260" cy="69.97500000000001" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="325" cy="73.325" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="390" cy="58.25" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="455" cy="48.2" r="3" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
<circle cx="520" cy="38.14999999999999" r="5" fill="var(--surface)" stroke="var(--sage)" stroke-width="2" style="transform:scale(0);transform-origin:50% 50%;transform-box:fill-box">
</circle>
</svg>
</div>
</div>
<div class="rounded-2xl border border-line p-5">
<div class="flex items-center justify-between text-xs font-semibold uppercase tracking-widest text-muted">
<span>Needs your attention</span>
<span class="rounded-full bg-rose/10 px-2 py-0.5 text-rose">3<!-- --> open</span>
</div>
<ul class="mt-3 space-y-2">
<li class="flex items-center gap-3 rounded-xl bg-bg/70 px-3 py-2.5 text-sm">
<span class="h-2 w-2 shrink-0 rounded-full" style="background:var(--rose)">
</span>
<span class="min-w-0 flex-1 ">Update 2 outdated plugins<span class="block text-[11px] text-muted">Security</span>
</span>
<button class="inline-flex shrink-0 items-center gap-1 rounded-full px-3 py-1 text-xs font-semibold transition bg-ink text-bg hover:bg-sage" tabindex="0">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Fix with AI</button>
</li>
<li class="flex items-center gap-3 rounded-xl bg-bg/70 px-3 py-2.5 text-sm">
<span class="h-2 w-2 shrink-0 rounded-full" style="background:var(--flare)">
</span>
<span class="min-w-0 flex-1 ">Compress the homepage hero image<span class="block text-[11px] text-muted">Speed</span>
</span>
<button class="inline-flex shrink-0 items-center gap-1 rounded-full px-3 py-1 text-xs font-semibold transition bg-ink text-bg hover:bg-sage" tabindex="0">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Fix with AI</button>
</li>
<li class="flex items-center gap-3 rounded-xl bg-bg/70 px-3 py-2.5 text-sm">
<span class="h-2 w-2 shrink-0 rounded-full" style="background:var(--lilac)">
</span>
<span class="min-w-0 flex-1 ">Add FAQ schema to /services<span class="block text-[11px] text-muted">AI visibility</span>
</span>
<button class="inline-flex shrink-0 items-center gap-1 rounded-full px-3 py-1 text-xs font-semibold transition bg-ink text-bg hover:bg-sage" tabindex="0">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Fix with AI</button>
</li>
</ul>
<p class="mt-3 text-[11px] text-muted">Nothing changes until you approve. Approved changes can be undone.</p>
</div>
</div>
<div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--sage) 14%, white);color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
</span>Visibility<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">84</span>
</div>
<p class="mt-1 text-xs text-muted">Can people and AI find you?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--sage);width:0px">
</div>
</div>
</div>
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--lilac) 14%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text" aria-hidden="true">
<path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z">
</path>
<path d="M14 2v5a1 1 0 0 0 1 1h5">
</path>
<path d="M10 9H8">
</path>
<path d="M16 13H8">
</path>
<path d="M16 17H8">
</path>
</svg>
</span>Content<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">71</span>
</div>
<p class="mt-1 text-xs text-muted">Are you answering them?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--lilac);width:0px">
</div>
</div>
</div>
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--flare) 14%, white);color:var(--flare)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
</span>Performance<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">92</span>
</div>
<p class="mt-1 text-xs text-muted">How slow, really?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--flare);width:0px">
</div>
</div>
</div>
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--sage) 14%, white);color:var(--sage)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
</span>Health<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">97</span>
</div>
<p class="mt-1 text-xs text-muted">How are WordPress and your server?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--sage);width:0px">
</div>
</div>
</div>
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--rose) 14%, white);color:var(--rose)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag" aria-hidden="true">
<path d="M16 10a4 4 0 0 1-8 0">
</path>
<path d="M3.103 6.034h17.794">
</path>
<path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
</path>
</svg>
</span>Commerce<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">76</span>
</div>
<p class="mt-1 text-xs text-muted">Is my store doing okay?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--rose);width:0px">
</div>
</div>
</div>
<div class="rounded-2xl border border-line bg-bg/40 p-4">
<div class="flex items-center justify-between">
<span class="flex items-center gap-2 text-sm font-semibold">
<span class="grid h-7 w-7 place-items-center rounded-lg" style="background:color-mix(in srgb, var(--lilac) 14%, white);color:var(--lilac)">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-megaphone" aria-hidden="true">
<path d="M11 6a13 13 0 0 0 8.4-2.8A1 1 0 0 1 21 4v12a1 1 0 0 1-1.6.8A13 13 0 0 0 11 14H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z">
</path>
<path d="M6 14a12 12 0 0 0 2.4 7.2 2 2 0 0 0 3.2-2.4A8 8 0 0 1 10 14">
</path>
<path d="M8 6v8">
</path>
</svg>
</span>Brand<!-- --> Score</span>
<span class="text-2xl font-semibold tabular-nums" style="opacity:0;transform:translateY(6px)">68</span>
</div>
<p class="mt-1 text-xs text-muted">Does your brand look trustworthy?</p>
<div class="mt-3 h-1.5 overflow-hidden rounded-full bg-line">
<div class="h-full rounded-full" style="background:var(--lilac);width:0px">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="tour" class="relative overflow-hidden px-5 py-28">
<div class="pointer-events-none absolute inset-x-0 top-1/3 -z-10 h-[70%] bg-[radial-gradient(ellipse_at_center,var(--sage-soft),transparent_70%)] opacity-70">
</div>
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>See the real thing</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">Inside your <span class="italic text-sage">WordPress dashboard.</span>
</h2>
<p class="mt-4 text-lg text-muted">Real screens from the plugin, not mock-ups. Pick a screen, follow the numbered markers, or click the screenshot to enlarge it.</p>
</div>
<div class="mt-14" style="opacity:0;transform:translateY(24px)">
<div class="grid gap-6 lg:grid-cols-[280px_1fr]">
<div class="flex gap-2 overflow-x-auto pb-2 lg:flex-col lg:overflow-visible lg:pb-0">
<div class="shrink-0 rounded-2xl border transition-colors lg:shrink border-sage/30 bg-surface shadow-[0_18px_40px_-28px_rgba(0,41,145,.5)]">
<button class="flex w-full items-center gap-3 px-3.5 py-3 text-left">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl transition-colors bg-sage text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
</span>
<span class="min-w-0 flex-1">
<span class="block whitespace-nowrap text-sm font-semibold lg:whitespace-normal">Search &amp; AI visibility</span>
<span class="hidden text-xs text-muted lg:block">SEO, GEO, AEO, brand, crawl and schema</span>
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right hidden shrink-0 text-muted transition-transform lg:block rotate-90 text-sage" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</button>
<ul class="hidden overflow-hidden px-3 pb-3 lg:block" style="height:auto;opacity:1">
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="absolute inset-0 rounded-lg bg-sage-soft">
</span>
<span class="relative h-1.5 w-1.5 rounded-full bg-sage">
</span>
<span class="relative font-semibold text-sage">Visibility Overview</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">SEO Health</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">GEO Score</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">AEO Score</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">Brand Visibility</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">Crawl &amp; URLs</span>
</button>
</li>
<li>
<button class="relative flex w-full items-center gap-2.5 rounded-lg px-3 py-1.5 text-left text-[13px]">
<span class="relative h-1.5 w-1.5 rounded-full bg-line">
</span>
<span class="relative text-muted">Business Identity &amp; Schema</span>
</button>
</li>
</ul>
</div>
<div class="shrink-0 rounded-2xl border transition-colors lg:shrink border-transparent hover:bg-surface/70">
<button class="flex w-full items-center gap-3 px-3.5 py-3 text-left">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl transition-colors bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot" aria-hidden="true">
<path d="M12 8V4H8">
</path>
<rect width="16" height="12" x="4" y="8" rx="2">
</rect>
<path d="M2 14h2">
</path>
<path d="M20 14h2">
</path>
<path d="M15 13v2">
</path>
<path d="M9 13v2">
</path>
</svg>
</span>
<span class="min-w-0 flex-1">
<span class="block whitespace-nowrap text-sm font-semibold lg:whitespace-normal">Copilot &amp; content</span>
<span class="hidden text-xs text-muted lg:block">Chat with your site, write with AI</span>
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right hidden shrink-0 text-muted transition-transform lg:block" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</button>
</div>
<div class="shrink-0 rounded-2xl border transition-colors lg:shrink border-transparent hover:bg-surface/70">
<button class="flex w-full items-center gap-3 px-3.5 py-3 text-left">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl transition-colors bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
</span>
<span class="min-w-0 flex-1">
<span class="block whitespace-nowrap text-sm font-semibold lg:whitespace-normal">Performance</span>
<span class="hidden text-xs text-muted lg:block">Speed score and Core Web Vitals</span>
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right hidden shrink-0 text-muted transition-transform lg:block" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</button>
</div>
<div class="shrink-0 rounded-2xl border transition-colors lg:shrink border-transparent hover:bg-surface/70">
<button class="flex w-full items-center gap-3 px-3.5 py-3 text-left">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl transition-colors bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
</span>
<span class="min-w-0 flex-1">
<span class="block whitespace-nowrap text-sm font-semibold lg:whitespace-normal">Site care</span>
<span class="hidden text-xs text-muted lg:block">Health, accessibility and security</span>
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right hidden shrink-0 text-muted transition-transform lg:block" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</button>
</div>
<div class="shrink-0 rounded-2xl border transition-colors lg:shrink border-transparent hover:bg-surface/70">
<button class="flex w-full items-center gap-3 px-3.5 py-3 text-left">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl transition-colors bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-clock" aria-hidden="true">
<path d="M16 14v2.2l1.6 1">
</path>
<path d="M16 2v3">
</path>
<path d="M21 7.338V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h2.338">
</path>
<path d="M3 9h5.859">
</path>
<path d="M8 2v3">
</path>
<circle cx="16" cy="16" r="6">
</circle>
</svg>
</span>
<span class="min-w-0 flex-1">
<span class="block whitespace-nowrap text-sm font-semibold lg:whitespace-normal">Automation</span>
<span class="hidden text-xs text-muted lg:block">Scheduled scans and reports</span>
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right hidden shrink-0 text-muted transition-transform lg:block" aria-hidden="true">
<path d="m9 18 6-6-6-6">
</path>
</svg>
</button>
</div>
<div class="flex shrink-0 gap-1.5 lg:hidden">
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold bg-ink text-bg">Visibility Overview</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">SEO Health</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">GEO Score</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">AEO Score</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">Brand Visibility</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">Crawl &amp; URLs</button>
<button class="whitespace-nowrap rounded-full px-3 py-2 text-xs font-semibold border border-line text-muted">Business Identity &amp; Schema</button>
</div>
</div>
<div>
<div class="relative rounded-[32px] bg-ink p-4 sm:p-6">
<div class="pointer-events-none absolute inset-0 overflow-hidden rounded-[32px]">
<div class="absolute -left-10 -top-16 h-72 w-72 rounded-full bg-sage blur-3xl">
</div>
<div class="absolute -bottom-20 -right-10 h-72 w-72 rounded-full bg-flare/40 blur-3xl">
</div>
<div class="absolute inset-0 opacity-20 [background-image:radial-gradient(white_1px,transparent_1px)] [background-size:24px_24px]">
</div>
</div>
<div class="relative" style="transform:perspective(1400px)">
<div class="relative " style="opacity:0;transform:translateY(24px) scale(0.97)">
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
<button type="button" class="group relative block w-full cursor-zoom-in" aria-label="Enlarge screenshot: Visibility Overview">
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/overview.jpg" width="1760" height="727" alt="VuloPilot visibility overview with an overall score of 96 and a 30-day trend chart" class="block h-auto w-full" loading="eager" decoding="async"/>
<span class="absolute right-3 top-3 grid h-8 w-8 place-items-center rounded-full bg-ink/80 text-bg opacity-0 transition group-hover:opacity-100">
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
<div class="pointer-events-none absolute inset-x-0 bottom-0 top-10 hidden sm:block">
<div class="absolute" style="left:19%;top:37%">
<button aria-label="Combined visibility score" class="pointer-events-auto relative -ml-3.5 -mt-3.5 grid h-7 w-7 place-items-center">
<span class="absolute inset-0 rounded-full bg-flare" style="opacity:0.5;transform:none">
</span>
<span class="relative grid h-7 w-7 place-items-center rounded-full text-[11px] font-bold text-white shadow-lg ring-2 ring-white transition-colors bg-flare">1</span>
</button>
<div class="absolute z-20 w-60 rounded-2xl bg-surface p-3.5 text-left shadow-[0_20px_50px_-12px_rgba(0,0,0,.45)] ring-1 ring-line left-5 top-5" style="opacity:0;transform:translateY(-6px) scale(0.9)">
<div class="text-sm font-semibold leading-tight">Combined visibility score</div>
<p class="mt-1 text-xs leading-snug text-muted">Brand, SEO, GEO and Crawl scores rolled into one number.</p>
</div>
</div>
<div class="absolute" style="left:74%;top:44%">
<button aria-label="30-day trend" class="pointer-events-auto relative -ml-3.5 -mt-3.5 grid h-7 w-7 place-items-center">
<span class="relative grid h-7 w-7 place-items-center rounded-full text-[11px] font-bold text-white shadow-lg ring-2 ring-white transition-colors bg-sage">2</span>
</button>
</div>
<div class="absolute" style="left:28%;top:84%">
<button aria-label="Traffic by source" class="pointer-events-auto relative -ml-3.5 -mt-3.5 grid h-7 w-7 place-items-center">
<span class="relative grid h-7 w-7 place-items-center rounded-full text-[11px] font-bold text-white shadow-lg ring-2 ring-white transition-colors bg-sage">3</span>
</button>
</div>
</div>
</div>
</div>
<div class="relative mt-5 flex flex-wrap items-center justify-between gap-3 text-bg">
<div>
<div class="text-lg font-semibold leading-tight">Visibility Overview</div>
<div class="text-sm text-white/60">SEO &amp; Visibility → Overview</div>
</div>
<div class="flex items-center gap-2">
<span class="mr-1 font-mono text-xs text-white/50">1<!-- --> / <!-- -->14</span>
<button aria-label="Previous screen" class="grid h-10 w-10 place-items-center rounded-full border border-white/20 transition hover:bg-white/10">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left" aria-hidden="true">
<path d="m12 19-7-7 7-7">
</path>
<path d="M19 12H5">
</path>
</svg>
</button>
<button aria-label="Next screen" class="grid h-10 w-10 place-items-center rounded-full bg-bg text-ink transition hover:bg-flare hover:text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</button>
</div>
</div>
</div>
<ol class="mt-5 grid gap-3 sm:grid-cols-3">
<li>
<button class="flex h-full w-full gap-3 rounded-2xl border p-4 text-left transition border-sage/40 bg-surface shadow-[0_16px_36px_-26px_rgba(0,41,145,.6)]">
<span class="grid h-6 w-6 shrink-0 place-items-center rounded-full text-[11px] font-bold text-white bg-flare">1</span>
<span>
<span class="block text-sm font-semibold leading-tight">Combined visibility score</span>
<span class="mt-1 block text-xs leading-snug text-muted">Brand, SEO, GEO and Crawl scores rolled into one number.</span>
</span>
</button>
</li>
<li>
<button class="flex h-full w-full gap-3 rounded-2xl border p-4 text-left transition border-line bg-surface/50 hover:bg-surface">
<span class="grid h-6 w-6 shrink-0 place-items-center rounded-full text-[11px] font-bold text-white bg-sage">2</span>
<span>
<span class="block text-sm font-semibold leading-tight">30-day trend</span>
<span class="mt-1 block text-xs leading-snug text-muted">See whether your visibility is rising or falling.</span>
</span>
</button>
</li>
<li>
<button class="flex h-full w-full gap-3 rounded-2xl border p-4 text-left transition border-line bg-surface/50 hover:bg-surface">
<span class="grid h-6 w-6 shrink-0 place-items-center rounded-full text-[11px] font-bold text-white bg-sage">3</span>
<span>
<span class="block text-sm font-semibold leading-tight">Traffic by source</span>
<span class="mt-1 block text-xs leading-snug text-muted">Connect Google Analytics to see sessions here.</span>
</span>
</button>
</li>
</ol>
</div>
</div>
</div>
</div>
</section>
<section id="features" class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Everything inside</div>
<h2 class="mt-5 font-display text-4xl leading-tight sm:text-6xl">Eleven areas. <span class="italic text-sage">One plugin.</span>
</h2>
<p class="mt-4 text-lg text-muted">Free gives you the insight. Pro adds the action. Pick an area to see exactly what you get in each.</p>
</div>
<div class="mt-12 grid gap-6 lg:grid-cols-[260px_1fr]">
<div class="flex gap-2 overflow-x-auto pb-2 lg:flex-col lg:overflow-visible">
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-layout-dashboard relative" aria-hidden="true">
<rect width="7" height="9" x="3" y="3" rx="1">
</rect>
<rect width="7" height="5" x="14" y="3" rx="1">
</rect>
<rect width="7" height="9" x="14" y="12" rx="1">
</rect>
<rect width="7" height="5" x="3" y="16" rx="1">
</rect>
</svg>
<span class="relative whitespace-nowrap">Dashboard</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bot relative" aria-hidden="true">
<path d="M12 8V4H8">
</path>
<rect width="16" height="12" x="4" y="8" rx="2">
</rect>
<path d="M2 14h2">
</path>
<path d="M20 14h2">
</path>
<path d="M15 13v2">
</path>
<path d="M9 13v2">
</path>
</svg>
<span class="relative whitespace-nowrap">AI Copilot</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-bg">
<span class="absolute inset-0 rounded-2xl bg-ink">
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search relative" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
<span class="relative whitespace-nowrap">SEO</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radar relative" aria-hidden="true">
<path d="M19.07 4.93A10 10 0 0 0 6.99 3.34">
</path>
<path d="M4 6h.01">
</path>
<path d="M2.29 9.62A10 10 0 1 0 21.31 8.35">
</path>
<path d="M16.24 7.76A6 6 0 1 0 8.23 16.67">
</path>
<path d="M12 18h.01">
</path>
<path d="M17.99 11.66A6 6 0 0 1 15.77 16.67">
</path>
<circle cx="12" cy="12" r="2">
</circle>
<path d="m13.41 10.59 5.66-5.66">
</path>
</svg>
<span class="relative whitespace-nowrap">AI Visibility</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pen-line lucide-edit-3 relative" aria-hidden="true">
<path d="M13 21h8">
</path>
<path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z">
</path>
</svg>
<span class="relative whitespace-nowrap">Content</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge relative" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
<span class="relative whitespace-nowrap">Performance</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse relative" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
<span class="relative whitespace-nowrap">Site Health &amp; Backups</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-accessibility relative" aria-hidden="true">
<circle cx="16" cy="4" r="1">
</circle>
<path d="m18 19 1-7-6 1">
</path>
<path d="m5 8 3-3 5.5 3-2.36 3.5">
</path>
<path d="M4.24 14.5a5 5 0 0 0 6.88 6">
</path>
<path d="M13.76 17.5a5 5 0 0 0-6.88-6">
</path>
</svg>
<span class="relative whitespace-nowrap">Accessibility</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check relative" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="m9 12 2 2 4-4">
</path>
</svg>
<span class="relative whitespace-nowrap">Security</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag relative" aria-hidden="true">
<path d="M16 10a4 4 0 0 1-8 0">
</path>
<path d="M3.103 6.034h17.794">
</path>
<path d="M3.4 5.467a2 2 0 0 0-.4 1.2V20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6.667a2 2 0 0 0-.4-1.2l-2-2.667A2 2 0 0 0 17 2H7a2 2 0 0 0-1.6.8z">
</path>
</svg>
<span class="relative whitespace-nowrap">Commerce</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
<button class="relative flex shrink-0 items-center gap-3 rounded-2xl px-4 py-3 text-left text-sm font-medium transition text-muted hover:bg-surface">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-clock relative" aria-hidden="true">
<path d="M16 14v2.2l1.6 1">
</path>
<path d="M16 2v3">
</path>
<path d="M21 7.338V5a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2h2.338">
</path>
<path d="M3 9h5.859">
</path>
<path d="M8 2v3">
</path>
<circle cx="16" cy="16" r="6">
</circle>
</svg>
<span class="relative whitespace-nowrap">Automations &amp; Reports</span>
<span class="relative ml-auto hidden h-1.5 w-1.5 rounded-full lg:block bg-apricot/70">
</span>
</button>
</div>
<div class="card min-h-[420px] p-6 sm:p-9">
<div style="opacity:0;transform:translateY(16px)">
<div class="flex items-center gap-3">
<span class="grid h-12 w-12 place-items-center rounded-2xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search" aria-hidden="true">
<path d="m21 21-4.34-4.34">
</path>
<circle cx="11" cy="11" r="8">
</circle>
</svg>
</span>
<div>
<h3 class="font-display text-3xl">SEO</h3>
<p class="text-muted">Get found in search</p>
</div>
</div>
<div class="mt-8 grid gap-6 md:grid-cols-2">
<div>
<div class="mb-3 inline-flex rounded-full bg-sage-soft px-3 py-1 font-mono text-[11px] uppercase tracking-widest text-sage">Free</div>
<ul class="space-y-2.5">
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>SEO score and a ranked problem list</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Page titles and descriptions</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Sitemap and instant indexing (IndexNow)</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Redirects, 404 tracking and robots.txt</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Per-page SEO panel in the post editor</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Table of Contents and FAQ blocks</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(-10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check mt-0.5 shrink-0 text-sage" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>Site verification and Google Search Console connection</li>
</ul>
</div>
<div class="rounded-2xl bg-apricot-soft/60 p-5">
<div class="mb-3 inline-flex items-center gap-1.5 rounded-full bg-apricot px-3 py-1 font-mono text-[11px] uppercase tracking-widest text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Pro</div>
<ul class="space-y-2.5">
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars mt-0.5 shrink-0 text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Technical SEO: schema, sitemap, duplicate descriptions, multiple H1s, focus keywords</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars mt-0.5 shrink-0 text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>Keyword rank tracking, opportunities and groups</li>
<li class="flex gap-3 text-[15px]" style="opacity:0;transform:translateX(10px)">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars mt-0.5 shrink-0 text-apricot" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>One-click fixes, single or in bulk</li>
</ul>
</div>
</div>
<div class="mt-8 ">
<figure class="">
<div class="overflow-hidden rounded-2xl border border-line bg-surface shadow-[0_30px_70px_-36px_rgba(0,41,145,.5)] ">
<div class="flex items-center gap-1.5 border-b border-line bg-bg/80 px-4 py-2.5">
<span class="h-2.5 w-2.5 rounded-full bg-rose/70">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-flare/60">
</span>
<span class="h-2.5 w-2.5 rounded-full bg-sage/70">
</span>
<span class="ml-3 truncate rounded-full bg-surface px-3 py-0.5 font-mono text-[10px] text-muted ring-1 ring-line">wp-admin / VuloPilot / SEO &amp; Visibility → SEO</span>
</div>
<button type="button" class="group relative block w-full cursor-zoom-in text-left" aria-label="Enlarge screenshot: SEO Health">
<img src="<?php echo esc_url( vulopilot_asset_base() ); ?>/screens/seo.jpg" width="1750" height="670" alt="VuloPilot SEO Health score with titles, content structure, images and linking breakdown" loading="lazy" decoding="async" class="block h-auto w-full"/>
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
<figcaption class="mt-3 text-center text-sm text-muted">SEO Health<!-- -->: <!-- -->SEO &amp; Visibility → SEO</figcaption>
</figure>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="compare" class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>WordPress, compared</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">One plugin where you might <span class="italic text-sage">need five.</span>
</h2>
<p class="mt-4 text-lg text-muted">Popular WordPress plugins are excellent at one job. VuloPilot looks across the whole site and tells you what to do next.</p>
</div>
<div class="mt-14" style="opacity:0;transform:translateY(24px)">
<div class="card overflow-x-auto">
<table class="w-full min-w-[860px] border-collapse text-sm">
<thead>
<tr>
<th class="sticky left-0 z-10 w-[210px] bg-surface p-4 text-left text-xs font-semibold uppercase tracking-widest text-muted">Core focus</th>
<th class="p-3 text-center align-bottom transition-colors bg-sage text-white">
<div class="text-[13px] font-semibold leading-tight ">VuloPilot</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-white/70">Site-wide growth OS</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">Yoast SEO</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">On-page SEO</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">Rank Math</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">On-page SEO</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">All in One SEO</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">On-page SEO</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">SEOPress</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">On-page SEO</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">The SEO Framework</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">On-page SEO</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">WP Rocket</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">Caching &amp; speed</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">Wordfence</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">Security</div>
</th>
<th class="p-3 text-center align-bottom transition-colors ">
<div class="text-[13px] font-semibold leading-tight text-ink">Jetpack</div>
<div class="mt-0.5 text-[10px] font-medium uppercase tracking-wide text-muted">Multi-purpose suite</div>
</th>
</tr>
</thead>
<tbody>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">On-page SEO</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">AI search (GEO / AEO)</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">Speed &amp; Core Web Vitals</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">Security</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">Backups &amp; site health</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-ink" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">Accessibility</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">WooCommerce checks</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3 font-medium">Site-wide scoring</td>
<td class="px-3 py-3 text-center transition-colors bg-sage-soft/60">
<span class="inline-block h-3.5 w-3.5 rounded-full bg-sage ring-4 ring-sage/15" aria-label="Core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
<td class="px-3 py-3 text-center transition-colors ">
<span class="inline-block h-3.5 w-3.5 rounded-full border border-line bg-transparent" aria-label="Not a core focus" style="transform:scale(0)">
</span>
</td>
</tr>
<tr class="border-t border-line">
<td class="sticky left-0 z-10 bg-surface px-4 py-3">
</td>
<td class="px-2 py-3 text-center bg-sage-soft/60">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/pricing/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">See plans <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-yoast-seo/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs Yoast<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-rank-math/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs Rank Math<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-all-in-one-seo/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs AIOSEO<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-seopress/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs SEOPress<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-the-seo-framework/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs SEO Framework<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-wp-rocket/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs WP Rocket<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-wordfence/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs Wordfence<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
<td class="px-2 py-3 text-center ">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/vulopilot-vs-jetpack/" class="inline-flex items-center gap-1 text-xs font-semibold text-sage hover:underline">vs Jetpack<!-- --> <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</td>
</tr>
</tbody>
</table>
</div>
<div class="mt-4 flex flex-wrap items-center gap-x-6 gap-y-2 px-1 text-xs text-muted">
<span class="flex items-center gap-2">
<span class="h-3 w-3 rounded-full bg-ink">
</span>Core focus of the product</span>
<span class="flex items-center gap-2">
<span class="h-3 w-3 rounded-full border border-line">
</span>Not its core focus (it may still offer extras)</span>
<span class="sm:ml-auto">Based on each product’s main purpose, not an exhaustive feature list. Check each vendor for current features.</span>
</div>
</div>
<div class="mt-8 text-center" style="opacity:0;transform:translateY(24px)">
<p class="text-muted">They can work side by side. Keep one plugin in charge of meta tags and sitemaps, and let VuloPilot audit, prioritize and verify. <a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/" class="font-semibold text-sage hover:underline">See all comparisons</a>
</p>
</div>
</div>
</section>
<section id="pricing" class="px-5 py-28">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-3xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Plans for your next step</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-6xl">Start with insight. <span class="italic text-sage">Upgrade to action.</span>
</h2>
<p class="mt-4 text-lg text-muted">Start free to discover what’s holding your website back. Upgrade when you’re ready to let AI fix, create and improve it automatically.</p>
</div>
<div class="mt-12" style="opacity:0;transform:translateY(24px)">
<div>
<div class="flex flex-col items-center gap-3">
<div class="relative inline-flex rounded-full border border-line bg-surface p-1 shadow-sm" role="group" aria-label="Billing period">
<button aria-pressed="true" class="relative rounded-full px-6 py-2 text-sm font-semibold">
<span class="absolute inset-0 rounded-full bg-ink">
</span>
<span class="relative flex items-center gap-2 text-bg">Monthly</span>
</button>
<button aria-pressed="false" class="relative rounded-full px-6 py-2 text-sm font-semibold">
<span class="relative flex items-center gap-2 text-muted">Yearly<span class="rounded-full bg-flare px-2 py-0.5 text-[10px] font-bold text-white">-<!-- -->35<!-- -->%</span>
</span>
</button>
</div>
<p class="text-sm text-muted">
<span class="font-semibold text-sage">14<!-- -->-day free trial.</span> <!-- -->No credit card required. Full access to your selected plan.</p>
</div>
<div class="mt-12 grid items-stretch gap-5 md:grid-cols-2 lg:grid-cols-3">
<div class="relative flex flex-col overflow-hidden rounded-3xl p-7 card">
<div class="relative flex flex-1 flex-col">
<div class="flex items-start justify-between">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
<path d="M15.914 4a1.5 1.5 0 00-2.474-1.561l-9 9A1.5 1.5 0 005.5 14h4.002a.5.5 0 01.471.666L8.086 20a1.5 1.5 0 002.475 1.56l9-9A1.5 1.5 0 0018.5 10h-3.997a.5.5 0 01-.472-.667z">
</path>
</svg>
</span>
</div>
<div class="mt-4 text-sm font-semibold text-muted">Go</div>
<div class="mt-1 flex items-baseline gap-1.5">
<span class="text-5xl font-semibold tracking-tight">
<span class="tabular-nums">$<!-- -->19</span>
</span>
<span class="text-sm text-muted">/<!-- -->month</span>
</div>
<div class="mt-2 min-h-[2.5rem] text-xs">
<span class="text-muted">or $<!-- -->149<!-- --> billed yearly</span>
</div>
<div class="mt-4 grid grid-cols-2 gap-2">
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-bg">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server text-sage" aria-hidden="true">
<rect width="20" height="8" x="2" y="2" rx="2" ry="2">
</rect>
<rect width="20" height="8" x="2" y="14" rx="2" ry="2">
</rect>
<line x1="6" x2="6.01" y1="6" y2="6">
</line>
<line x1="6" x2="6.01" y1="18" y2="18">
</line>
</svg>
<b>1</b>
<span class="text-muted">site</span>
</div>
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-bg">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins text-sage" aria-hidden="true">
<path d="M13.744 17.736a6 6 0 1 1-7.48-7.48">
</path>
<path d="M15 6h1v4">
</path>
<path d="m6.134 14.768.866-.5 2 3.464">
</path>
<circle cx="16" cy="8" r="6">
</circle>
</svg>
<b>1k</b>
<span class="text-muted">credits</span>
</div>
</div>
<ul class="mt-6 flex-1 space-y-3 text-sm">
<li class="flex gap-3 font-semibold">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>Everything in Free</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI-powered fixes</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Custom workflow automation</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Advanced AI search optimization</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI content creation and refresh</li>
</ul>
<a href="https://store.vulolabs.com/checkout?org=9a1e8c91-bbb9-4f7b-b4f1-b5f1190287d3&amp;offering=b692d772-c968-4b25-ac3c-a33feec3f81f" target="_blank" rel="noopener noreferrer" class="group mt-8 flex items-center justify-center gap-2 rounded-full py-3 text-sm font-semibold transition bg-sage text-white hover:bg-ink">Get <!-- -->Go<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</div>
</div>
<div class="relative flex flex-col overflow-hidden rounded-3xl p-7 bg-gradient-to-b from-ink to-[#14246b] text-bg shadow-[0_40px_80px_-30px_rgba(0,41,145,.65)] ring-1 ring-sage/40 lg:-my-3">
<div class="pointer-events-none absolute -right-16 -top-16 h-52 w-52 rounded-full bg-sage blur-3xl">
</div>
<div class="pointer-events-none absolute -bottom-20 -left-10 h-44 w-44 rounded-full bg-flare/30 blur-3xl">
</div>
<div class="relative flex flex-1 flex-col">
<div class="flex items-start justify-between">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-white/10 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>
<span class="rounded-full bg-flare px-3 py-1 text-[11px] font-bold text-white">Most Popular</span>
</div>
<div class="mt-4 text-sm font-semibold text-white/60">Plus</div>
<div class="mt-1 flex items-baseline gap-1.5">
<span class="text-5xl font-semibold tracking-tight">
<span class="tabular-nums">$<!-- -->49</span>
</span>
<span class="text-sm text-white/60">/<!-- -->month</span>
</div>
<div class="mt-2 min-h-[2.5rem] text-xs">
<span class="text-white/60">or $<!-- -->399<!-- --> billed yearly</span>
</div>
<div class="mt-4 grid grid-cols-2 gap-2">
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-white/10">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server text-flare" aria-hidden="true">
<rect width="20" height="8" x="2" y="2" rx="2" ry="2">
</rect>
<rect width="20" height="8" x="2" y="14" rx="2" ry="2">
</rect>
<line x1="6" x2="6.01" y1="6" y2="6">
</line>
<line x1="6" x2="6.01" y1="18" y2="18">
</line>
</svg>
<b>5</b>
<span class="text-white/60">sites</span>
</div>
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-white/10">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins text-flare" aria-hidden="true">
<path d="M13.744 17.736a6 6 0 1 1-7.48-7.48">
</path>
<path d="M15 6h1v4">
</path>
<path d="m6.134 14.768.866-.5 2 3.464">
</path>
<circle cx="16" cy="8" r="6">
</circle>
</svg>
<b>5k</b>
<span class="text-white/60">credits</span>
</div>
</div>
<ul class="mt-6 flex-1 space-y-3 text-sm">
<li class="flex gap-3 font-semibold">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-white/15 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>Everything in Free</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-white/15 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI-powered fixes</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-white/15 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Custom workflow automation</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-white/15 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Advanced AI search optimization</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-white/15 text-flare">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI content creation and refresh</li>
</ul>
<button class="group mt-8 flex items-center justify-center gap-2 rounded-full py-3 text-sm font-semibold transition bg-bg text-ink hover:bg-flare hover:text-white">Talk to us<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</button>
</div>
</div>
<div class="relative flex flex-col overflow-hidden rounded-3xl p-7 card">
<div class="relative flex flex-1 flex-col">
<div class="flex items-start justify-between">
<span class="grid h-10 w-10 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-crown" aria-hidden="true">
<path d="M11.562 3.266a.5.5 0 0 1 .876 0L15.39 8.87a1 1 0 0 0 1.516.294L21.183 5.5a.5.5 0 0 1 .798.519l-2.834 10.246a1 1 0 0 1-.956.734H5.81a1 1 0 0 1-.957-.734L2.02 6.02a.5.5 0 0 1 .798-.519l4.276 3.664a1 1 0 0 0 1.516-.294z">
</path>
<path d="M5 21h14">
</path>
</svg>
</span>
</div>
<div class="mt-4 text-sm font-semibold text-muted">Pro</div>
<div class="mt-1 flex items-baseline gap-1.5">
<span class="text-5xl font-semibold tracking-tight">
<span class="tabular-nums">$<!-- -->99</span>
</span>
<span class="text-sm text-muted">/<!-- -->month</span>
</div>
<div class="mt-2 min-h-[2.5rem] text-xs">
<span class="text-muted">or $<!-- -->799<!-- --> billed yearly</span>
</div>
<div class="mt-4 grid grid-cols-2 gap-2">
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-bg">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-server text-sage" aria-hidden="true">
<rect width="20" height="8" x="2" y="2" rx="2" ry="2">
</rect>
<rect width="20" height="8" x="2" y="14" rx="2" ry="2">
</rect>
<line x1="6" x2="6.01" y1="6" y2="6">
</line>
<line x1="6" x2="6.01" y1="18" y2="18">
</line>
</svg>
<b>25</b>
<span class="text-muted">sites</span>
</div>
<div class="flex items-center gap-2 rounded-xl px-3 py-2 text-sm bg-bg">
<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-coins text-sage" aria-hidden="true">
<path d="M13.744 17.736a6 6 0 1 1-7.48-7.48">
</path>
<path d="M15 6h1v4">
</path>
<path d="m6.134 14.768.866-.5 2 3.464">
</path>
<circle cx="16" cy="8" r="6">
</circle>
</svg>
<b>10k</b>
<span class="text-muted">credits</span>
</div>
</div>
<ul class="mt-6 flex-1 space-y-3 text-sm">
<li class="flex gap-3 font-semibold">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles lucide-stars" aria-hidden="true">
<path d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
</path>
<path d="M20 2v4">
</path>
<path d="M22 4h-4">
</path>
<circle cx="4" cy="20" r="2">
</circle>
</svg>
</span>Everything in Free</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI-powered fixes</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Custom workflow automation</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>Advanced AI search optimization</li>
<li class="flex gap-3">
<span class="mt-0.5 grid h-5 w-5 shrink-0 place-items-center rounded-full bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check" aria-hidden="true">
<path d="M20 6 9 17l-5-5">
</path>
</svg>
</span>AI content creation and refresh</li>
</ul>
<button class="group mt-8 flex items-center justify-center gap-2 rounded-full py-3 text-sm font-semibold transition bg-sage text-white hover:bg-ink">Talk to us<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="mt-10" style="opacity:0;transform:translateY(24px)">
<div class="grid gap-3 rounded-3xl border border-line bg-surface/70 p-3 sm:grid-cols-3">
<div class="flex items-start gap-3 rounded-2xl p-3">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true">
<path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
</path>
<path d="m9 12 2 2 4-4">
</path>
</svg>
</span>
<div>
<div class="text-sm font-semibold">14-day free trial</div>
<div class="text-xs text-muted">No credit card required</div>
</div>
</div>
<div class="flex items-start gap-3 rounded-2xl p-3">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-ccw" aria-hidden="true">
<path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8">
</path>
<path d="M3 3v5h5">
</path>
</svg>
</span>
<div>
<div class="text-sm font-semibold">15-day money-back guarantee</div>
<div class="text-xs text-muted">Risk-free, with a simple refund</div>
</div>
</div>
<div class="flex items-start gap-3 rounded-2xl p-3">
<span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card" aria-hidden="true">
<rect width="20" height="14" x="2" y="5" rx="2">
</rect>
<line x1="2" x2="22" y1="10" y2="10">
</line>
<path d="M6 14h2">
</path>
</svg>
</span>
<div>
<div class="text-sm font-semibold">Secure payments</div>
<div class="text-xs text-muted">Stripe, PayPal and credit cards</div>
</div>
</div>
</div>
<p class="mt-5 text-center text-sm text-muted">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/pricing/" class="font-semibold text-sage hover:underline">Full pricing and comparison</a>
</p>
</div>
</div>
</section>
<section class="px-5 py-24">
<div class="mx-auto max-w-6xl">
<div class="flex flex-wrap items-end justify-between gap-4" style="opacity:0;transform:translateY(24px)">
<div class="max-w-2xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>From the blog</div>
<h2 class="mt-5 text-4xl font-semibold leading-[1.08] tracking-tight sm:text-5xl">Fresh ideas for a <span class="italic text-sage">better website.</span>
</h2>
</div>
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/blog/" class="group inline-flex items-center gap-2 rounded-full border border-line bg-surface px-5 py-2.5 text-sm font-semibold transition hover:border-ink">View all posts <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
</div>
<div class="mt-12 grid gap-6 md:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/blog/" class="group block h-full">
<article class="card flex h-full flex-col overflow-hidden">
<div class="relative h-48 overflow-hidden" style="background:linear-gradient(135deg, #002991 0%, #3a5bd0 100%)">
<div class="absolute -right-6 -top-6 h-36 w-36 rounded-full bg-white/20 blur-2xl">
</div>
<div class="absolute inset-0 opacity-30 [background-image:radial-gradient(white_1px,transparent_1px)] [background-size:20px_20px]">
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-radar absolute bottom-3 right-5 text-white/30 transition duration-500 group-hover:-rotate-6 group-hover:scale-110" aria-hidden="true">
<path d="M19.07 4.93A10 10 0 0 0 6.99 3.34">
</path>
<path d="M4 6h.01">
</path>
<path d="M2.29 9.62A10 10 0 1 0 21.31 8.35">
</path>
<path d="M16.24 7.76A6 6 0 1 0 8.23 16.67">
</path>
<path d="M12 18h.01">
</path>
<path d="M17.99 11.66A6 6 0 0 1 15.77 16.67">
</path>
<circle cx="12" cy="12" r="2">
</circle>
<path d="m13.41 10.59 5.66-5.66">
</path>
</svg>
<span class="absolute left-5 top-5 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink">AI Search</span>
</div>
<div class="flex flex-1 flex-col p-6">
<div class="text-xs text-muted">Oct 2026<!-- --> · <!-- -->6 min read</div>
<h3 class="mt-2 text-xl font-semibold leading-snug tracking-tight transition-colors group-hover:text-sage">Why your WordPress site isn’t showing up in AI answers</h3>
<p class="mt-2 flex-1 text-muted">Assistants only quote what they can find and understand. Here are the five signals to fix first.</p>
<span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-sage">Read more <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right transition group-hover:-translate-y-0.5 group-hover:translate-x-0.5" aria-hidden="true">
<path d="M7 7h10v10">
</path>
<path d="M7 17 17 7">
</path>
</svg>
</span>
</div>
</article>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/blog/" class="group block h-full">
<article class="card flex h-full flex-col overflow-hidden">
<div class="relative h-48 overflow-hidden" style="background:linear-gradient(135deg, #ff5d50 0%, #f9a59d 100%)">
<div class="absolute -right-6 -top-6 h-36 w-36 rounded-full bg-white/20 blur-2xl">
</div>
<div class="absolute inset-0 opacity-30 [background-image:radial-gradient(white_1px,transparent_1px)] [background-size:20px_20px]">
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart-pulse absolute bottom-3 right-5 text-white/30 transition duration-500 group-hover:-rotate-6 group-hover:scale-110" aria-hidden="true">
<path d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5">
</path>
<path d="M3.22 13H9.5l.5-1 2 4.5 2-7 1.5 3.5h5.27">
</path>
</svg>
<span class="absolute left-5 top-5 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink">Website Health</span>
</div>
<div class="flex flex-1 flex-col p-6">
<div class="text-xs text-muted">Oct 2026<!-- --> · <!-- -->5 min read</div>
<h3 class="mt-2 text-xl font-semibold leading-snug tracking-tight transition-colors group-hover:text-sage">The 10-minute website health check to run every Monday</h3>
<p class="mt-2 flex-1 text-muted">Updates, backups, broken links and speed. A short routine that catches problems before visitors do.</p>
<span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-sage">Read more <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right transition group-hover:-translate-y-0.5 group-hover:translate-x-0.5" aria-hidden="true">
<path d="M7 7h10v10">
</path>
<path d="M7 17 17 7">
</path>
</svg>
</span>
</div>
</article>
</a>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/blog/" class="group block h-full">
<article class="card flex h-full flex-col overflow-hidden">
<div class="relative h-48 overflow-hidden" style="background:linear-gradient(135deg, #0a1230 0%, #2a3d86 100%)">
<div class="absolute -right-6 -top-6 h-36 w-36 rounded-full bg-white/20 blur-2xl">
</div>
<div class="absolute inset-0 opacity-30 [background-image:radial-gradient(white_1px,transparent_1px)] [background-size:20px_20px]">
</div>
<svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-gauge absolute bottom-3 right-5 text-white/30 transition duration-500 group-hover:-rotate-6 group-hover:scale-110" aria-hidden="true">
<path d="m12 14 4-4">
</path>
<path d="M3.34 19a10 10 0 1 1 17.32 0">
</path>
</svg>
<span class="absolute left-5 top-5 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink">Performance</span>
</div>
<div class="flex flex-1 flex-col p-6">
<div class="text-xs text-muted">Sep 2026<!-- --> · <!-- -->7 min read</div>
<h3 class="mt-2 text-xl font-semibold leading-snug tracking-tight transition-colors group-hover:text-sage">Core Web Vitals without the jargon</h3>
<p class="mt-2 flex-1 text-muted">Three tests decide whether a visit feels fast. What each one means and the quickest fix for each.</p>
<span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-sage">Read more <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right transition group-hover:-translate-y-0.5 group-hover:translate-x-0.5" aria-hidden="true">
<path d="M7 7h10v10">
</path>
<path d="M7 17 17 7">
</path>
</svg>
</span>
</div>
</article>
</a>
</div>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>In one paragraph</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">What is VuloPilot?</h2>
</div>
<div class="mt-8">
<div class="" style="opacity:0;transform:translateY(24px)">
<p class="max-w-3xl text-xl leading-relaxed text-ink/80">VuloPilot is a WordPress plugin that audits your whole website for SEO, AI search visibility (GEO and AEO), speed, security, accessibility, content and WooCommerce issues. It scores each area from 0 to 100, ranks what to fix first, proposes fixes you approve before anything changes, and re-scans to prove the fix worked.</p>
</div>
<div class="mt-8">
<dl class="overflow-hidden rounded-3xl border border-line bg-surface">
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Product type</dt>
<dd class="text-muted">WordPress plugin (SEO, AI search, performance, security and site health)</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Made by</dt>
<dd class="text-muted">Vulo Labs</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Works with</dt>
<dd class="text-muted">WordPress 6.7+ and PHP 8.1+, WooCommerce optional</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Scores</dt>
<dd class="text-muted">Visibility, Health, Commerce, Performance, Content and Brand, each 0 to 100</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">AI engines checked</dt>
<dd class="text-muted">ChatGPT, Claude, Gemini and Perplexity</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Free plan</dt>
<dd class="text-muted">Yes. Core scans and reports work without any AI service, plus 100 AI credits</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Paid plans</dt>
<dd class="text-muted">Go $19/mo (1 site), Plus $49/mo (5 sites), Pro $99/mo (25 sites)</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Free trial</dt>
<dd class="text-muted">14 days, no credit card required</dd>
</div>
<div class="grid gap-1 border-t border-line px-6 py-4 first:border-t-0 sm:grid-cols-[200px_1fr] sm:gap-6">
<dt class="font-medium">Changes</dt>
<dd class="text-muted">Nothing changes without your approval, and applied changes can be undone</dd>
</div>
</dl>
</div>
<p class="mt-4 text-sm text-muted">See <a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/how-it-works/" class="underline">how it works</a>, <a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/features/" class="underline">every feature</a> or <a href="<?php echo esc_url( untrailingslashit( home_url( "/" ) ) ); ?>/compare/" class="underline">how it compares</a>.</p>
</div>
</div>
</section>
<section class="px-5 py-14">
<div class="mx-auto max-w-5xl">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Questions</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">VuloPilot: frequently asked questions</h2>
</div>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<div>
<h3 class="text-base">
<button aria-expanded="true" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">What does VuloPilot do?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition rotate-45" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:auto;opacity:1">
<p class="px-6 pb-5 text-muted">VuloPilot is a WordPress plugin that audits your whole website for SEO, AI search visibility (GEO and AEO), speed, security, accessibility, content and WooCommerce issues. It scores each area from 0 to 100, ranks what to fix first, proposes fixes you approve before anything changes, and re-scans to prove the fix worked.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Is VuloPilot free?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">Yes. The free plugin includes SEO, AI search, performance, security, health and content scans with scores and reports, plus 100 AI credits. Paid plans start at $19 a month and include a 14-day free trial with no credit card required.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Does VuloPilot help my site appear in ChatGPT and other AI answers?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">It improves the signals AI assistants use. VuloPilot checks Generative Engine Optimization (GEO) and Answer Engine Optimization (AEO) signals, AI crawler access for GPTBot, ClaudeBot and PerplexityBot, schema, brand trust and llms.txt, then ranks the fixes. No tool can guarantee an AI citation.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Will VuloPilot change my website without asking?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">No. Every proposed change shows a before and after preview, and nothing goes live until you approve it. Applied changes can be undone from the History page.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">Does it replace Yoast SEO or Rank Math?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">It can, since VuloPilot includes titles, descriptions, sitemaps, redirects and robots.txt. If you keep another SEO plugin, let only one of them output meta tags and sitemaps to avoid duplicates.</p>
</div>
</div>
<div>
<h3 class="text-base">
<button aria-expanded="false" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium">What do I need to run VuloPilot?<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="M12 5v14">
</path>
</svg>
</button>
</h3>
<div class="overflow-hidden" style="height:0px;opacity:0">
<p class="px-6 pb-5 text-muted">WordPress 6.7 or newer, PHP 8.1 or newer and an administrator account. AI features, Google Search Console and WooCommerce are optional.</p>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-24">
<div class="mx-auto max-w-6xl">
<div class="mx-auto max-w-2xl text-center" style="opacity:0;transform:translateY(24px)">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage">
<span class="h-1.5 w-1.5 rounded-full bg-apricot">
</span>Getting started</div>
<h2 class="mt-5 font-display text-4xl leading-tight sm:text-5xl">Live in minutes. <span class="italic text-sage">In control always.</span>
</h2>
</div>
<div class="mt-12 grid gap-5 md:grid-cols-3">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full p-7">
<span class="absolute right-6 top-5 font-display text-6xl text-line">1</span>
<span class="grid h-12 w-12 place-items-center rounded-2xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download" aria-hidden="true">
<path d="M12 15V3">
</path>
<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4">
</path>
<path d="m7 10 5 5 5-5">
</path>
</svg>
</span>
<h3 class="mt-5 font-display text-2xl">Install</h3>
<p class="mt-2 text-muted">Add VuloPilot from the WordPress plugin directory, or upload the zip. Needs WordPress 6.7+ and PHP 8.1+.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full p-7">
<span class="absolute right-6 top-5 font-display text-6xl text-line">2</span>
<span class="grid h-12 w-12 place-items-center rounded-2xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-scan-line" aria-hidden="true">
<path d="M3 7V5a2 2 0 0 1 2-2h2">
</path>
<path d="M17 3h2a2 2 0 0 1 2 2v2">
</path>
<path d="M21 17v2a2 2 0 0 1-2 2h-2">
</path>
<path d="M7 21H5a2 2 0 0 1-2-2v-2">
</path>
<path d="M7 12h10">
</path>
</svg>
</span>
<h3 class="mt-5 font-display text-2xl">Run your first scan</h3>
<p class="mt-2 text-muted">Open the Dashboard and click Run scan. Every scanner runs and all six scores refresh.</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card relative h-full p-7">
<span class="absolute right-6 top-5 font-display text-6xl text-line">3</span>
<span class="grid h-12 w-12 place-items-center rounded-2xl bg-sage-soft text-sage">
<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thumbs-up" aria-hidden="true">
<path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
</path>
<path d="M7 10v12">
</path>
</svg>
</span>
<h3 class="mt-5 font-display text-2xl">Approve what helps</h3>
<p class="mt-2 text-muted">AI proposes, you preview before and after, then approve or reject.</p>
</div>
</div>
</div>
<div class="mt-8" style="opacity:0;transform:translateY(24px)">
<div class="grid gap-3 rounded-3xl border border-line bg-surface/70 p-4 sm:grid-cols-2 lg:grid-cols-4">
<div class="flex items-center gap-3 rounded-2xl p-3 text-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-thumbs-up shrink-0 text-apricot" aria-hidden="true">
<path d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2a3.13 3.13 0 0 1 3 3.88Z">
</path>
<path d="M7 10v12">
</path>
</svg>Nothing changes until you approve</div>
<div class="flex items-center gap-3 rounded-2xl p-3 text-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2 shrink-0 text-apricot" aria-hidden="true">
<path d="M9 14 4 9l5-5">
</path>
<path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11">
</path>
</svg>Undo any applied change</div>
<div class="flex items-center gap-3 rounded-2xl p-3 text-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cpu shrink-0 text-apricot" aria-hidden="true">
<path d="M12 20v2">
</path>
<path d="M12 2v2">
</path>
<path d="M17 20v2">
</path>
<path d="M17 2v2">
</path>
<path d="M2 12h2">
</path>
<path d="M2 17h2">
</path>
<path d="M2 7h2">
</path>
<path d="M20 12h2">
</path>
<path d="M20 17h2">
</path>
<path d="M20 7h2">
</path>
<path d="M7 20v2">
</path>
<path d="M7 2v2">
</path>
<rect x="4" y="4" width="16" height="16" rx="2">
</rect>
<rect x="8" y="8" width="8" height="8" rx="1">
</rect>
</svg>Core scans work without any AI service</div>
<div class="flex items-center gap-3 rounded-2xl p-3 text-sm">
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock shrink-0 text-apricot" aria-hidden="true">
<rect width="18" height="11" x="3" y="11" rx="2" ry="2">
</rect>
<path d="M7 11V7a5 5 0 0 1 10 0v4">
</path>
</svg>AI crawler logs store bot name and page, never visitor IPs</div>
</div>
</div>
</div>
</section>
<section class="px-5 py-20">
<div class="mx-auto max-w-6xl">
<div class="mb-10 text-center" style="opacity:0;transform:translateY(24px)">
<h2 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl">Different roles. Different questions. <span class="italic text-sage">One VuloPilot.</span>
</h2>
</div>
<div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<p class="text-2xl font-semibold leading-snug tracking-tight">“<!-- -->What do I need to worry about?<!-- -->”</p>
<p class="mt-5 text-xs font-semibold uppercase tracking-widest text-sage">— <!-- -->Owners</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<p class="text-2xl font-semibold leading-snug tracking-tight">“<!-- -->What’s hurting my sales?<!-- -->”</p>
<p class="mt-5 text-xs font-semibold uppercase tracking-widest text-sage">— <!-- -->Stores</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<p class="text-2xl font-semibold leading-snug tracking-tight">“<!-- -->Where are we losing growth?<!-- -->”</p>
<p class="mt-5 text-xs font-semibold uppercase tracking-widest text-sage">— <!-- -->Marketers</p>
</div>
</div>
<div class="" style="opacity:0;transform:translateY(24px)">
<div class="card h-full p-6">
<p class="text-2xl font-semibold leading-snug tracking-tight">“<!-- -->What needs attention across every site?<!-- -->”</p>
<p class="mt-5 text-xs font-semibold uppercase tracking-widest text-sage">— <!-- -->Agencies</p>
</div>
</div>
</div>
</div>
</section>
<section class="px-5 pb-24 pt-10">
<div class="relative mx-auto max-w-5xl overflow-hidden rounded-[40px] bg-ink p-10 text-center text-bg sm:p-20">
<div class="absolute -left-10 -top-10 h-72 w-72 rounded-full bg-sage blur-3xl">
</div>
<div class="absolute -bottom-16 -right-10 h-72 w-72 rounded-full bg-flare/50 blur-3xl">
</div>
<div class="relative">
<h2 class="text-4xl font-semibold leading-tight tracking-tight sm:text-6xl">You have the questions. <span class="italic text-flare">VuloPilot has the answers.</span>
</h2>
<p class="mx-auto mt-5 max-w-xl text-white/70">Start free to see what is holding your website back. Upgrade when you want AI to fix, create and improve it for you.</p>
<div class="mt-9 flex flex-wrap items-center justify-center gap-3">
<a href="#pricing" class="group inline-flex items-center gap-2 rounded-full bg-bg px-7 py-3.5 font-semibold text-ink transition hover:bg-flare hover:text-white">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap" aria-hidden="true">
<path d="M15.914 4a1.5 1.5 0 00-2.474-1.561l-9 9A1.5 1.5 0 005.5 14h4.002a.5.5 0 01.471.666L8.086 20a1.5 1.5 0 002.475 1.56l9-9A1.5 1.5 0 0018.5 10h-3.997a.5.5 0 01-.472-.667z">
</path>
</svg>SuperPower your Website <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true">
<path d="M5 12h14">
</path>
<path d="m12 5 7 7-7 7">
</path>
</svg>
</a>
<button class="inline-flex items-center gap-2 rounded-full border border-white/25 px-7 py-3.5 font-semibold transition hover:bg-white/10">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-question-mark lucide-message-circle-question" aria-hidden="true">
<path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719">
</path>
<path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3">
</path>
<path d="M12 17h.01">
</path>
</svg>Request a free consultation</button>
</div>
<p class="mt-5 text-sm text-white/50">Free to start · No credit card required</p>
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
