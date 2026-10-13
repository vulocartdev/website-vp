VULOPILOT ASTRA CHILD THEME

INSTALLATION
1. Install the Astra parent theme. Leave it installed.
2. Upload this ZIP in Appearance > Themes > Add New > Upload Theme.
3. Activate VuloPilot Astra Child.
4. Open Appearance > VuloPilot pages and click Create missing pages.
   This publishes missing pages; it never overwrites existing pages.
   For existing pages, select the matching template in the page editor.
5. Under Settings > Reading select the Home page as the static homepage.
6. Under Settings > Permalinks click Save Changes.
7. Configure your header, footer and navigation using Astra.

CONTENTS
95 page templates, grouped by their original route/menu section.
Each template calls get_header() and get_footer().
No duplicate VuloPilot header or footer is included.
See routes.json for the full page-to-template mapping.
All PHP, CSS and JavaScript files are readable and unminified.
No TSX, Next.js server, npm install or build command is needed on WordPress.

DESIGN AND INTERACTIONS
The supplied ZIP is the design source. Original page markup, colors,
responsive utilities, inline SVG icons and product screenshots are retained.
The JavaScript includes React and Motion to retain the original stateful tabs,
pricing toggles, rotating hero text, counters, tours, lightboxes and animations.
Page content is pre-rendered in PHP; JavaScript activates the interactive UI.
Do not disable or delay the VuloPilot script without testing those controls.
Plus Jakarta Sans loads from Google Fonts.

EDITING
These are PHP templates, not Kadence/Gutenberg editable block pages.
WordPress page editor content does not replace the template design.
CSS can be edited in assets/css/vulopilot.css.
Dynamic content and interactions are also present in assets/js/vulopilot.js.
When changing template copy, update its matching JavaScript copy as well,
otherwise hydration can restore the original content.
Do not edit bundled third-party library sections.

IMAGES
Original screenshots are included in assets/media/screens so images work
immediately without dependence on the Vercel site.
To host them through WordPress Media, upload the screenshots preserving names,
then use the vulopilot_asset_base filter to return the folder URL whose
screens subfolder contains those images. Clear caching after changing URLs.

CONSULTATION
The source project has no configured consultation API endpoint. The preserved
form uses the original mailto fallback to hello@vulopilot.com; it does not send
mail through a WordPress backend. Configure your own form for server delivery.

VERIFICATION
All 95 routes were rendered from the supplied source without Next.js.
PHP syntax was checked with a PHP parser.
All 95 routes passed JavaScript activation checks in a DOM test environment.
A browser screenshot comparison could not be performed in this environment.
The installation must still be checked on your WordPress/Astra environment,
including your header/footer settings and any caching or optimization plugins.
