# VuloPilot theme — build notes

Custom WordPress theme + custom blocks replicating the VuloPilot Next.js
marketing site. No page builder, no build step — plain enqueued CSS/JS.

## Editor vs front end tradeoff

Every section block is **dynamic** (`render.php` driven). The block editor
(`edit.js`) intentionally renders a **simplified, static preview**: the
heading/subhead/CTA text fields are editable in the sidebar (real block
attributes, not hardcoded strings), but the live preview does not replay the
scroll-reveals, gauge animation, rotating headline, sticky stepper or tab
switching — those only run on the front end via each block's `view.js` +
`reveal.js`. This was a deliberate simplification to prioritize (1) front-end
visual/animation fidelity and (2) genuinely WP-editable content, over a full
WYSIWYG animated editor experience.

## Fonts

No woff2 files were extractable from the captured site (the CSS referenced
hashed Next.js font URLs that weren't present in the export), so Plus Jakarta
Sans is enqueued from Google Fonts (400/500/600/700/800 + italic 500/600)
instead of self-hosted.

## Content judgment calls

- The hero's rotating headline only had one phrase visible in the captured
  DOM snapshot (mid-animation). Two additional plausible phrases were added
  ("be understood by AI.", "prove it worked.") as a stored block attribute
  (`headlineRotating`) so the rotation effect has something to cycle through;
  edit/replace via the block's attributes if the real copy list differs.
- The "Features" block's 11 feature areas were only partially visible in the
  captured chunks (Dashboard, AI Copilot, SEO, AI Visibility, Content,
  Performance, Site Health & Backups, Accessibility were confirmed from the
  sidebar icons; the remaining 3 — likely WooCommerce, Integrations and
  Reporting — were not visible in the captured markup) so the block ships
  with the 8 confirmed areas. Add more by extending the `$areas` array in
  `blocks/features/render.php`.
- The dashboard-preview block's "With VuloPilot" tab content in the Problem
  section (`blocks/problem/render.php`) is an invented short "fixed" list,
  since the live site's "With VuloPilot" tab panel content was not present
  in the captured DOM (only the "Without" scattered-warnings panel was
  rendered server-side at capture time).
- Marquee/logo-strip: no distinct marquee/testimonial section with that
  `@keyframes marquee` was found in the captured chunks; the keyframe is kept
  in `base.css` (`.marquee`/`.marquee-track`) for reuse but no section
  currently uses it.

## What's left / possible follow-ups

- Dropdown mega-menus for Features/Solutions/Compare/Resources in the header
  are stubbed as single links (`#features`, `#automation`, etc.) rather than
  full flyout menus — the captured DOM only showed collapsed
  `aria-expanded="false"` buttons with no open-state markup to copy.
- No WordPress install was available in this environment to visually test;
  all PHP files were validated with `php -l` and all `block.json` files were
  validated as JSON, but there was no live render-check.
