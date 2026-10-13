<?php
/**
 * Template Name: WooCommerce
 * Template Post Type: page
 * Original route: /features/woocommerce/
 */
defined( 'ABSPATH' ) || exit;
vulopilot_set_page( 'features/[slug]', 'woocommerce' );
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
<span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right" aria-hidden="true"><path d="m9 18 6-6-6-6"></path></svg><span class="text-ink">WooCommerce</span></span>
</nav>
<div class="grid items-center gap-10 lg:grid-cols-[1.05fr_0.95fr]">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>WooCommerce store audit</div>
<h1 class="mt-5 text-4xl font-semibold leading-[1.05] tracking-tight sm:text-6xl">Find what is costing <span class="text-sage">your WooCommerce store sales.</span></h1>
<p class="mt-6 max-w-xl text-lg text-muted">A product with no photo. A failed payment. A full cart, forgotten. None show up as errors, just as a quieter month.</p>
<p class="mt-4 max-w-xl text-lg font-medium">VuloPilot puts every sales leak in one ranked list and helps you fix it, with your approval.</p>
<div class="mt-8 flex flex-wrap items-center gap-3">
<a href="<?php echo esc_url( $home ); ?>/docs/" class="group inline-flex items-center gap-2 rounded-sm bg-ink px-6 py-3 font-semibold text-bg transition hover:bg-sage">Install free<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
<a href="#start" class="inline-flex items-center gap-2 rounded-sm border border-line bg-surface/70 px-6 py-3 font-semibold transition hover:border-ink">What would it find?<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down" aria-hidden="true"><path d="M12 5v14"></path><path d="m19 12-7 7-7-7"></path></svg></a>
</div>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Store issues</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>3 products missing images</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">High</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>2 payments failed this week</span><span class="rounded-sm bg-rose/10 px-2 py-0.5 text-xs font-semibold text-rose">High</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Checkout page slow on mobile</span><span class="rounded-sm bg-flare/15 px-2 py-0.5 text-xs font-semibold text-flare">Medium</span></li>
</ul>
</div>
</div>
</div>
</section>

<section id="start" class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>New to this? Start here</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Sales leaks are small, quiet and spread out.</h2>
<p class="mt-5 text-lg text-muted">They hide in product pages, the checkout and store settings. VuloPilot checks them all and ranks what is most likely to cost an order.</p>
</div>
<div class="mt-9 grid gap-5 md:grid-cols-2">
<a href="#stocktake" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">1</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list" aria-hidden="true"><rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><path d="M12 11h4"></path><path d="M12 16h4"></path><path d="M8 11h.01"></path><path d="M8 16h.01"></path></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Stock-take</h3>
<p class="relative mt-3 text-muted">Every store issue in one list, explained by AI.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Store issues &amp; AI sales assistant<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
<a href="#till" class="card group relative block h-full overflow-hidden p-8 transition-transform hover:-translate-y-1">
<span class="absolute right-6 top-4 select-none text-8xl font-semibold text-line">2</span>
<span class="relative grid h-12 w-12 place-items-center rounded-sm bg-sage text-white"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up" aria-hidden="true"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline><polyline points="16 7 22 7 22 13"></polyline></svg></span>
<h3 class="relative mt-5 text-3xl font-semibold tracking-tight">The Till</h3>
<p class="relative mt-3 text-muted">Revenue, best sellers and abandoned carts.</p>
<p class="relative mt-5 text-sm font-semibold text-sage">Revenue &amp; abandoned carts (Pro)<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-1 inline transition group-hover:translate-x-1" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></p>
</a>
</div>
<div class="mt-6 grid gap-4 md:grid-cols-3">
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg></span><div><div class="font-semibold">You approve every change</div><p class="mt-1 text-sm text-muted">AI suggestions stay drafts until you say so.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-off" aria-hidden="true"><path d="M10.733 5.076a10.744 10.744 0 0 1 11.205 6.575 1 1 0 0 1 0 .696 10.747 10.747 0 0 1-1.444 2.49"></path><path d="M14.084 14.158a3 3 0 0 1-4.242-4.242"></path><path d="M17.479 17.499a10.75 10.75 0 0 1-15.417-5.151 1 1 0 0 1 0-.696 10.75 10.75 0 0 1 4.446-5.143"></path><path d="m2 2 20 20"></path></svg></span><div><div class="font-semibold">Only when you need it</div><p class="mt-1 text-sm text-muted">Appears only when WooCommerce is active.</p></div></div>
<div class="flex h-full gap-4 rounded-sm border border-line bg-surface/70 p-5"><span class="grid h-10 w-10 shrink-0 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-hourglass" aria-hidden="true"><path d="M5 22h14"></path><path d="M5 2h14"></path></svg></span><div><div class="font-semibold">Costliest first</div><p class="mt-1 text-sm text-muted">Failed payments before missing photos.</p></div></div>
</div>
</div>
</section>

<section id="stocktake" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div>
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 1 · The Stock-take</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">Price and stock, <span class="text-sage">right in the search result.</span></h2>
<p class="mt-5 text-lg text-muted">Product schema lets Google show price and stock before anyone clicks, so shoppers comparing options see yours first. VuloPilot checks every product.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: switch product schema on.</p>
</div>
<div class="card overflow-hidden">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Product schema</span><span class="rounded-sm bg-sage-soft px-3 py-1 text-xs font-semibold text-sage">On</span></div>
<div class="p-5 text-sm">
<p class="font-semibold">Handmade Oak Coffee Table</p>
<p class="mt-1 text-sage">$249.00 · In stock</p>
<p class="mt-1 text-xs text-muted">★★★★★ 4.8 (32 reviews)</p>
</div>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl">
<div class="max-w-3xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">What the WooCommerce audit checks</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">From a single product to the whole store.</h2>
<p class="mt-5 text-lg text-muted">Free finds and explains issues. Pro adds payments, revenue and bulk AI writing.</p>
</div>
<div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
<?php
$wc_tools = array(
	array( 'Store issue list', 'Products, checkout and settings in one list.', 'Free' ),
	array( 'AI sales assistant', 'Explains issues and suggests fixes you review.', 'Free' ),
	array( 'Product schema checks', 'Price and stock, ready for Google.', 'Free' ),
	array( 'Product and payment checks', 'Missing images, duplicate SKUs, low stock, failed payments.', 'Pro' ),
	array( 'Revenue and top products', 'What sells, and what never does.', 'Pro' ),
	array( 'Abandoned cart tracking', 'Idle carts and the revenue at risk.', 'Pro' ),
	array( 'Daily store trends', 'Your store, day by day.', 'Pro' ),
	array( 'Bulk AI product writing', 'Up to 50 products at a time.', 'Pro' ),
);
foreach ( $wc_tools as $t ) :
	$tag_class = 'Pro' === $t[2] ? 'bg-apricot-soft text-rose' : 'bg-bg text-muted';
	?>
<div class="card relative h-full overflow-hidden p-6">
<span class="relative grid h-11 w-11 place-items-center rounded-sm bg-sage-soft text-sage"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag" aria-hidden="true"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"></path><path d="M3 6h18"></path><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
<h3 class="relative mt-4 text-xl font-semibold"><?php echo esc_html( $t[0] ); ?></h3>
<p class="relative mt-2 text-sm text-muted"><?php echo esc_html( $t[1] ); ?></p>
<p class="relative mt-4 inline-block rounded-sm px-3 py-1 text-[11px] font-semibold <?php echo esc_attr( $tag_class ); ?>"><?php echo esc_html( $t[2] ); ?></p>
</div>
<?php endforeach; ?>
</div>
<div class="mt-6 relative overflow-hidden rounded-sm bg-ink p-8 text-bg sm:p-10">
<div class="absolute -right-10 -top-10 h-52 w-52 rounded-full bg-sage blur-3xl"></div>
<div class="relative grid items-center gap-6 md:grid-cols-[1fr_auto]">
<div><div class="text-xs font-semibold uppercase tracking-widest text-white/60">Bulk AI product actions · Pro</div><h3 class="mt-1 text-2xl font-semibold">Forty products, still one-liners?</h3><p class="mt-2 max-w-2xl text-white/70">Up to 50 products at once: titles, descriptions, meta, schema, FAQs and cross-sells, each reviewed before saving.</p></div>
<a href="<?php echo esc_url( $home ); ?>/pricing/" class="inline-flex items-center gap-2 rounded-sm bg-bg px-6 py-3 font-semibold text-ink transition hover:bg-flare hover:text-white">See plans<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right" aria-hidden="true"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg></a>
</div>
</div>
</div>
</section>

<section id="till" class="px-5 py-14">
<div class="mx-auto grid max-w-6xl items-center gap-10 lg:grid-cols-2">
<div class="order-1 lg:order-2">
<div class="inline-flex items-center gap-2 rounded-full border border-line bg-surface/70 px-3 py-1 font-mono text-[11px] uppercase tracking-[0.14em] text-sage"><span class="h-1.5 w-1.5 rounded-full bg-apricot"></span>Pillar 2 · The Till</div>
<h2 class="mt-5 text-3xl font-semibold leading-tight tracking-tight sm:text-5xl">A full cart left behind <span class="text-sage">is a sale that almost happened.</span></h2>
<p class="mt-5 text-lg text-muted">With Pro, see idle carts and the revenue at risk, alongside earnings, best sellers and daily trends.</p>
<p class="mt-4 text-lg font-medium">Just the numbers that show where the money goes.</p>
<p class="mt-6 text-sm font-semibold text-sage">Try it: let another cart go idle.</p>
</div>
<div class="order-2 card overflow-hidden lg:order-1">
<div class="flex items-center justify-between border-b border-line bg-bg/60 px-5 py-3"><span class="text-sm font-semibold">Abandoned carts</span><span class="rounded-sm bg-apricot-soft px-2 py-0.5 text-xs font-semibold text-rose">Pro</span></div>
<ul class="divide-y divide-line text-sm">
<li class="flex items-center justify-between px-5 py-3.5"><span>Cart #1042 · 3 items</span><span class="font-semibold">$184.00 at risk</span></li>
<li class="flex items-center justify-between px-5 py-3.5"><span>Cart #1039 · 1 item</span><span class="font-semibold">$42.00 at risk</span></li>
</ul>
</div>
</div>
</section>

<section class="px-5 py-14">
<div class="mx-auto max-w-6xl text-center"><blockquote class="text-2xl font-semibold leading-snug tracking-tight sm:text-3xl">"Stores rarely lose sales all at once. <span class="text-sage">They lose them one missing photo at a time.</span>"</blockquote></div>
</section>

<section class="px-5 py-10">
<div class="mx-auto max-w-6xl">
<div class="font-mono text-[11px] uppercase tracking-[0.14em] text-sage">Questions you might have</div>
<h2 class="mt-4 font-display text-3xl leading-tight sm:text-4xl">Still have a question?</h2>
<div class="mt-8">
<div class="divide-y divide-line rounded-3xl border border-line bg-surface">
<?php
$wc_faq = array(
	array( 'Do I need WooCommerce for this?', 'Yes. The store tools appear only when WooCommerce is active. Everything else works without it.' ),
	array( 'Will the AI change my products by itself?', 'No. It proposes changes; nothing is saved until you approve.' ),
	array( 'What is WooCommerce product schema?', 'Hidden labels that tell Google a product\'s price and stock, so they can appear in search results. VuloPilot checks every product has them.' ),
	array( 'Can AI write WooCommerce product descriptions in bulk?', 'Yes, with Pro: up to 50 products at a time, covering titles, descriptions, meta, schema, FAQs and cross-sells.' ),
	array( 'Is the WooCommerce audit free?', 'Yes. The store issue list, AI sales assistant and product schema checks are free. Pro adds payment and stock checks, revenue, abandoned carts, daily trends and bulk AI writing.' ),
);
foreach ( $wc_faq as $i => $f ) :
	?>
<div>
<h3 class="text-base">
<button aria-expanded="<?php echo 0 === $i ? 'true' : 'false'; ?>" class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left font-medium"><?php echo esc_html( $f[0] ); ?><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-plus shrink-0 transition<?php echo 0 === $i ? ' rotate-45' : ''; ?>" aria-hidden="true"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg></button>
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
<a href="<?php echo esc_url( $home ); ?>/features/performance/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Performance</div><p class="mt-1.5 text-sm text-muted">Slow pages cost orders. Find the one fix that helps most.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/features/content/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">Content</div><p class="mt-1.5 text-sm text-muted">AI product descriptions, reviewed before they go live.</p></div></div></a>
<a href="<?php echo esc_url( $home ); ?>/guides/woocommerce-seo/"><div class="card group flex h-full items-start justify-between gap-3 p-6"><div><div class="font-display text-xl">WooCommerce SEO guide</div><p class="mt-1.5 text-sm text-muted">Get products found, and keep them selling.</p></div></div></a>
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
