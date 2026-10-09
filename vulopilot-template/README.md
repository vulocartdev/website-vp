# VuloPilot Landing — WordPress Page Template

Converted from the exported VuloPilot site (Next.js/Tailwind) into a static
WordPress page template, **without a site header or footer** — drop this on
a blank page and it renders only the marketing sections (hero through the
final "scan" CTA, 12 sections total, matching the original design 1:1).

## Files

- `page-vulopilot.php` — WordPress page template (`Template Name: VuloPilot Landing (No Header/Footer)`).
  Does **not** call `get_header()` / `get_footer()`; it's a self-contained
  `<html>` document so it can also be dropped in standalone outside WordPress
  if needed.
- `content.html` — the extracted page markup (hero, problem, how-it-works,
  automation, AI, features, pricing, FAQ-style sections, final CTA). Loaded
  via `include` from the template.
- `assets/css/vulopilot.css` — the site's compiled Tailwind CSS (utility
  classes used by the page, custom color tokens like `bg-ink`/`text-sage`/
  `bg-sage-soft`, etc.), with the self-hosted font-face rules swapped for a
  Google Fonts `@import` of **Plus Jakarta Sans** (same family used on the
  live site — the original's self-hosted `.woff2` files weren't included in
  the exported archive, so this is the closest same-to-same substitute).
- `assets/js/vulopilot.js` — small vanilla-JS layer for the interactive bits
  (tab/stepper highlighting, sidebar selection, pricing/before-after pill
  toggle, FAQ accordion).

## Install

1. Copy the `vulopilot-template` folder into your active theme (e.g.
   `wp-content/themes/your-theme/vulopilot-template/`).
2. In WordPress admin, create a new Page → under "Page Attributes" choose
   template **"VuloPilot Landing (No Header/Footer)"** → Publish.
3. All icons are inline SVG (Lucide icon set) and all visuals are pure
   CSS/HTML — there are no raster images to upload.

## Notes / limitations

- The source was a static HTML snapshot of the live React app. All visible
  content and styling was captured faithfully and reproduced exactly.
- A few widgets (the "Without VuloPilot / With VuloPilot" comparison pill,
  the 5-step process stepper, the "Eleven areas" sidebar) are driven by
  React state in the original, and only the **default/first state's markup**
  existed in the snapshot — the alternate panels' content wasn't present to
  extract. `vulopilot.js` still wires up click/active-state behavior on
  these so they don't feel dead, but the panel content itself won't swap
  unless you add that markup (it wasn't available in the source export).
- Internal nav links (`#how`, `#features`, `#scan`, etc.) were rewritten
  from absolute `vulopilotcom.vercel.app` URLs to same-page anchors.
