=== Kerf ===

Contributors: thisismyurl
Tags: blog, full-site-editing, block-patterns, custom-colors, custom-logo, custom-menu, editor-style, featured-images, rtl-language-support, translation-ready, wide-blocks
Requires at least: 6.7
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.6265.1511
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A warm, rounded FSE theme for furniture rescue, repair, and cause-funded resale — built on the Colophon core.

== Description ==

Kerf is built for the practitioner who rescues solid wood furniture headed for the curb, refinishes it to the same standard as paid commercial work, and sells it to fund a cause — not to grow a business. The name comes from the width of material a saw blade removes in a cut: the material lost in the act of making something, the same idea this niche runs on in reverse, turning what would otherwise be lost into something that funds a different kind of saving.

The front page is a signature layout, not the generic post index: a review-style trust badge, a rounded three-photo before/after/after collage, a workshop-photo mission panel, and a plain transparency ledger — "Where it went" — stating exactly what a piece raised and where the money went, with no adjectives and no thermometer graphic.

Kerf is built on the Colophon core: the CORE/SKIN architecture separates portable infrastructure (accessibility scaffolding, WooCommerce compatibility, the onboarding flow) from this theme's own personality (its palette, its type pairing, its patterns), so updates to the shared foundation never touch the design.

Features:

* Full Site Editing — every element customisable in the Site Editor
* Self-hosted typefaces — Baloo 2, Mulish, and IBM Plex Mono ship with the theme and are served from your own domain; no request ever reaches a font host
* Built to WCAG 2.2 AA guidelines — visible focus rings, screen-reader utilities, semantic landmark elements
* RTL-ready — all layout written with CSS logical properties
* Core Web Vitals optimised — zero render-blocking JavaScript, cascade-ordered CSS, no dead weight
* Reduced-motion support — all decorative animation is governed by a single global guard
* Block patterns — starter patterns for hero, content, and navigation layouts
* WooCommerce compatible — declares support automatically when the plugin is active
* Zero plugin dependencies

== The CORE/SKIN split ==

Every file in inc/ is labelled [CORE] or [SKIN].

[CORE] files are the portable infrastructure: theme supports, a11y scaffolding, the block-bindings copyright footer, and the WP.org-compliant onboarding flow. These are the same across every theme in the collection.

[SKIN] is inc/skin.php — the one file that carries your theme's personality: image crop sizes, bundled fonts, block style registrations, pattern categories, and the onboarding copy. The Colophon CLI (`colophon sync`) never overwrites skin.php, so you can rebuild or update the core without losing your customisations.

== Installation ==

1. In your WordPress admin, go to Appearance → Themes → Add New.
2. Search for "Kerf" or upload the theme zip.
3. Activate the theme.
4. Go to Appearance → Kerf: Get started for optional setup steps.

== Frequently Asked Questions ==

= Is this theme free? =

Yes. Licensed GPLv2 or later, with no upsells or required paid extensions.

= What is it for? =

A furniture-rescue, repair, or cause-funded-resale practice — anyone refinishing solid wood pieces and wanting a plain, honest way to show before/after proof and exactly where sale proceeds went. It also works as a general warm, rounded blog or small-business theme.

= Is Kerf part of a collection? =

Yes. Kerf is one of the Colophon collection's niche editorial themes — each is a full standalone theme on WordPress.org, built on the shared Colophon core and independently maintained.

= How do I add my own fonts? =

Register them in theme.json under settings.typography.fontFamilies, add the font files to assets/fonts/, and update inc/skin.php to preload the LCP-critical font via the kerf/preload_fonts filter. That filter takes a theme-root-relative path (assets/fonts/family/file.woff2), not a URL — entries containing "://" are dropped so a filter can never trigger an off-origin fetch. No other file needs editing.

= How do I add custom block styles? =

Register them in the kerf_skin_block_styles() function in inc/skin.php and add the CSS treatment in assets/css/skin.css. The CORE files do not need editing.

= Is it compatible with page builders? =

Kerf is a block theme built for the WordPress Site Editor. Page builders that support the block editor work alongside it; legacy drag-and-drop builders that bypass the block system are not supported.

== Changelog ==

= 1.6265.1511 =
Version numbering switches to the collection-wide scheme (1.Y{DDD}.{HHMM},
Toronto time) from this release forward, matching the Colophon core and every
other theme in the line.

* Corrected the Resources section's image-provenance statement: the four demo
  photographs are AI-generated (FLUX.1 [schnell], Apache 2.0, via Cloudflare
  Workers AI, prompted and selected by Christopher Ross), not photographed
  originals as the 1.0.0 text implied. Ownership and GPLv2+ licensing are
  unaffected; the origin statement is now accurate.
* Removed the five inherited style variations (Focus, Forest, Midnight, Slate,
  Warm). They were untouched Colophon-core greys and blues that reverted
  Kerf's entire warm identity on selection and were never part of this
  theme's own design — shipping them implied a design choice nobody made.

Corrections made during pre-submission review, before this release was
distributed anywhere:

* WordPress kebab-cases every preset slug before it becomes a CSS custom
  property, so the "2xl" and "3xl" font sizes are emitted as
  --wp--preset--font-size--2-xl and --3-xl. Seven hand-written references
  used the un-kebabed name and resolved to nothing: theme.json's h1 and h2
  (every heading on the site fell back to the body size) and the headings in
  feature-section, hidden-latest-posts-heading, pull-quote, subscribe-cta and
  workshop-intro. The "var:preset|font-size|2xl" form inside the block
  comments was always correct — core kebab-cases that one on the way out —
  which is why the mismatch was invisible in the JSON.
* 48 blocks declared their colour through style.color.text / style.color.
  background while the saved HTML carried the preset-class form
  (has-base-mid-color has-text-color). Core only emits those classes for the
  textColor / backgroundColor attributes, so the block comment and its markup
  disagreed and the editor would have flagged every one of them as invalid
  the first time a pattern was re-saved. The attributes now match the markup
  that was already there; no visual change.
* Five paragraphs set style.typography.fontFamily alongside the fontFamily
  attribute that already produces the class, and one set a font size that was
  never serialised into the markup. Both were dropped as redundant.
* assets/css/skin.css still explained the light-only colour scheme by
  referring to the Midnight style variation, removed earlier in this same
  release.
* readme.txt named the block-style registration function as
  skin_block_styles(); it is kerf_skin_block_styles().
* languages/kerf.pot still carried Project-Id-Version 1.0.0.

= 1.0.0 =
Initial release. Reskinned from the Colophon core with:

* Palette, type pairing (Baloo 2 + Mulish + IBM Plex Mono), and button treatment
  reworked for a warm, rounded, workshop-honest register — see the design brief
  for the full etymology and precedent list.
* New signature front-page template composing three new patterns: rescue-hero
  (review-badge + three-photo collage), workshop-intro (photo + mission panel),
  and where-it-went (the transparency-ledger signature feature).
* Real self-hosted OFL font files (Baloo 2 and Mulish variable, IBM Plex Mono
  400/500 static) replacing the core's system-font fallback.
* Demo photography is placeholder work created for the theme. Each pattern's
  description says what a real deployment must replace it with before shipping
  to a live site claiming real before/after results; the alt attributes
  describe the demo photographs themselves, because alt text is read by
  visitors, not by the person installing the theme.

Corrections made during pre-submission review, before this release was
distributed anywhere:

* Six wp:pattern references in templates/ still pointed at the core's
  `colophon/` pattern namespace rather than `kerf/`, so the 404 message, the
  404 home link, the "Latest posts" heading on the blog index, and the three
  no-results messages (index, archive, search) all rendered nothing. The blog
  index shipped with no h1 as a result. The footer's copyright binding had the
  same leaked namespace and rendered an empty paragraph.
* Every pattern in patterns/ declared `Categories: colophon`, a category this
  theme never registers, so the whole pattern library landed uncategorised in
  the inserter.
* `parts/footer.html` bound its credit line to a `footer-credit` block-bindings
  source that was never registered in any theme in the line. The source now
  exists (inc/bindings.php), composes "Built with {theme}" from the style.css
  header, and is removable through the `kerf/footer_credit_text` filter.
* The LCP font preload was silently dead: inc/skin.php passed a full URL to a
  filter that takes a theme-root-relative path and drops anything containing
  "://", so no preload tag was ever emitted.
* WCAG 1.4.3: the accent (Shellac Amber) was 3.4:1 on paper, 3.1:1 on the
  ground tone and 3.0:1 on the accent tint — below the 4.5:1 floor everywhere
  it is used, and it is the global link colour, the ledger figure colour and
  the button background in two core patterns. Darkened to #8d5c1d, which
  clears 4.5:1 on all three backgrounds (5.2 / 4.7 / 4.5) and keeps the hue.
  The focus ring inherits the same token and improves with it.
* The Rescue Hero collage referenced .kerf-collage-side / .kerf-collage-center
  classes that no stylesheet defined, so the signature overlapping layout
  rendered as three plain images in a row. The CSS now exists in skin.css, and
  the pattern markup no longer carries a hand-written z-index and a shadow
  attribute the image block does not serialise — both would have tripped a
  block-validation warning the first time an editor re-saved the pattern.
* Alt text on all four demo photographs was an instruction to the site owner
  ("Placeholder — replace with…"), which is what a screen reader would have
  read aloud on any site that published before swapping the images. It now
  describes the photographs.
* The Workshop Intro call-to-action was an anchor with no href: not focusable,
  not reachable by keyboard. It ships pointing at "#" so it is reachable, and
  the pattern description says to give it a real destination.
* readme.txt claimed a system font stack (the theme bundles three families),
  told users to search WordPress.org for "Colophon", and declared only one of
  its five bundled resources. All three fixed; the Resources section now
  declares every font and image with its licence and source.
* inc/cli.php was never loaded — functions.php had no require for it, despite
  the file's own docblock and .distignore both describing a guarded load.
* Removed two dead design tokens added during the reskin: a `base-signal`
  palette colour used by nothing and absent from all five style variations,
  and a `kerf-button-radius` custom property no rule referenced.

The CORE history below (1.6252.1241 and earlier) is Kerf's inherited
foundation, kept for the archaeological record per the collection's own
documentation doctrine — it predates Kerf's existence as a theme.

= 1.6252.1241 =
Fixes for WordPress.org theme review ticket #276778 (closed not-approved):

* Removed inc/github-updater.php entirely — not merely excluded from the WP.org
  build. Colophon's own submission zip had leaked the file even with the prior
  .distignore-based exclusion, because a build-time step is one more thing that
  can fail. A theme still wanting a GitHub-release self-updater can keep its own
  copy; core no longer tracks or syncs the path.
* Fixed Theme URI — it pointed to a page that 404s; now points to the theme's
  actual download page (thisismyurl.com/downloads/colophon/).
* Fixed a real PHP warning the reviewer caught under WP_DEBUG: theme.json's
  settings.blocks.core/navigation.typography used the plural preset-list key
  ("fontSizes": false) where the singular UI-toggle key was intended
  ("fontSize": false). The plural key holds an array of preset objects; setting
  it to a boolean made WordPress core try to foreach() over false. Confirmed
  fixed by activating the theme with WP_DEBUG on and rendering front page,
  single, page, search, and 404 templates with a clean debug.log.
* readme.txt already carried the required copyright/license sections and the
  accessibility-ready tag was already removed as of 1.6201.1029 — both were
  cited in the same rejection but were fixed before this release; noted here
  for the record.
* tools/bump-version.sh: fixed a stale sed pattern (const VERSION → the actual
  define('KERF_VERSION', ...)) that had been silently failing to update
  inc/bootstrap.php on every release since the namespace-to-prefix migration,
  and a missing-jq code path that silently no-opted colophon.json's version
  bump. update_file() now fails loudly instead of reporting success on a
  no-op match.
* Removed templates/front-page.html. It always wins over index.html when
  WordPress considers the request the front page — including the default
  "Your latest posts" configuration, not only a static front page — and a
  front-page.html built around wp:post-content alone has no post context to
  render there, so it shipped blank. The front page now falls through to
  index.html (posts-on-front) or page.html (a static page assigned as front
  page); both already had working content.
* i18n: block-template HTML isn't scanned by wp i18n make-pot. Several
  hardcoded strings across templates/ and parts/header.html — a "Latest
  posts" heading, three query-no-results messages, a 404 message, the skip
  link, and several block-attribute overrides (post-excerpt's "Read more",
  the search block's label/button text, home-link's label, the post
  navigation labels) — are now either backed by a small hidden pattern
  (Inserter: false, translation-string carrier only) or simply no longer
  overridden, so WordPress core's own already-translated default applies.
  The hand-rolled skip link is gone entirely: core injects an equivalent one.
* templates/404.html: replaced wp:home-link (invalid outside core/navigation,
  and its rendered li was sitting inside a hand-written p) with a plain,
  translatable link.
* patterns/content-grid.php and feature-section.php: the four unconfigured
  wp:image blocks had no src attribute, so inserting either pattern and
  publishing without swapping the image shipped three or four broken images.
  They now reference a bundled placeholder.png.
* Accessibility: fixed real WCAG 1.4.3 contrast failures, not just claims
  about them. The 404 page's oversized "404" used base-rule as a text colour
  — a border/separator tint never meant to carry text, ~1.4:1 in every style
  variation — swapped for base-mid. patterns/site-footer.php's dark, inverted
  layout used base-mid (tuned for light backgrounds) for muted text on a dark
  background, failing everywhere; swapped for base-rule, which was already
  the right shade for a dark background and needed no new colour. base-mid
  itself was independently too light against its light backgrounds in the
  Forest, Slate, and Warm style variations, and base-accent too dark (Warm)
  or too dark for a dark theme (Midnight) against the backgrounds it
  actually appears on; all four are now within their real contrast floor,
  verified by direct WCAG relative-luminance calculation across every text/
  background pair actually used, not spot-checked.
* Regenerated languages/colophon.pot and reconciled a duplicate msgid: the
  copyright block binding (inc/bindings.php) and the Site Footer pattern
  share one "© %1$s %2$s. All rights reserved." string with two different
  translator comments, which is a make-pot warning; both now read the same.
* Replaced screenshot.png. The previous file was an unmodified copy of a
  preview/ mockup render using fonts and features (a display serif, a
  category eyebrow, a reading-time label, header buttons) that don't exist
  in the shipped theme. The current one is a real render of the actual
  theme with real demo content.
* Normalised line endings to LF across every shipped file type and added
  .gitattributes so a future edit on Windows doesn't reintroduce CRLF.

= 1.6201.1029 =
The theme line moves off a PHP namespace and onto a per-theme function prefix.
This is a breaking change for anyone building on Colophon, and it is not optional.
It is what the WordPress.org Theme Review Team requires.

WHY: ticket #280625 closed Masthead as not-approved. A namespace is accepted only
at the class level, because a WordPress site loads a large number of vendor
functions into the global scope, so a bare `function setup()` inside
`namespace Masthead;` still reads as unprefixed to the review tooling. Every
function, constant and class defined in the global scope needs the theme's own
prefix, no abbreviations. Colophon shipped the namespace pattern into every theme
generated from it, so the fix belongs here rather than in each theme.

* Core: removed `namespace Colophon;` from all eight files in inc/. 28 functions
  are now `kerf_*`, 8 constants are `KERF_*` (file-scope `const` converted
  to `define()`, since a bare global `const SLUG` is itself an unprefixed global
  symbol), and the WP-CLI class is `Kerf_CLI_Command`. Hook names are
  unchanged, so a theme's filters keep working across the upgrade.
* Core: 17 translated strings converted from `__()` to `esc_html__()`. Six keep
  bare `__()` deliberately, because they are escaped with `esc_html()` at the point of
  echo, and converting them would escape twice and render an apostrophe as a
  literal `&#039;`. Each carries an inline comment so the exception is not read as
  an oversight.
* CLI: the substitution that rewrote `namespace Colophon;` is replaced by three
  prefix rules: `KERF_` to `{SLUG}_`, `Kerf_` to `{Studly}_`, and
  `kerf_` to `{slug}_`, applied before the quote-anchored rules so a callback
  string like `'kerf_setup'` is rewritten as one symbol. The one-place-to-
  re-prefix property is preserved.
* CLI: version injection matched `const VERSION = '...';` and would have silently
  stopped working now that bootstrap.php uses `define()`. It matches the renamed
  constant instead. Caught before release; no generated theme shipped with a stale
  version because of it.
* CLI: `--namespace` was left with nothing to do by the change above. It now sets
  the class prefix (defaulting, as before, to the slug), so the flag means
  something again rather than being silently ignored.
* CLI: `colophon doctor`'s stray-identity check still grepped for
  `namespace Colophon;`, a string that no longer exists, so it would have
  reported a clean bill of health on a theme with a leaked core prefix. It now
  checks the three prefix forms.
* Tooling: `package-theme.sh` cloned `thisismyurl/kerf-<slug>`, which matches
  no repository that exists, because published theme repos are named for the theme alone.
  Every packaging run failed at the clone step. It also gained a
  `KERF_REPO_REF` override, because a theme's shipped line is not always its
  default branch.
* Docs: ARCHITECTURE.md §4 and GUIDE.md described the namespace mechanism as the
  design. Both now describe the prefix rules, and say plainly why the namespace
  was rejected, so nobody rediscovers it the hard way.

= 1.6160.1430 =
Submitted to WordPress.org (themes.trac ticket #276778); closed not-approved.
See 1.6252.1241 above for the fixes made in response.

= 1.6159.0900 =
* Expanded templates: added archive, front-page, page (wide), and page (blank).
* Added a block-pattern library: page hero, feature section, content grid, post list, pull quote, subscribe CTA, site footer, and main navigation.
* Added five style variations: Focus, Forest, Midnight, Slate, and Warm.
* Accessibility: explicit h1 on the blog index; archive and search titles set to heading level 1.
* Internationalisation: all block-pattern copy wrapped for translation.
* Prepared for the WordPress.org directory: removed development tooling and the optional GitHub self-updater; footer credit line bound to a filterable, translatable source.

= 1.6148 =
* Initial release.
* Templates: index, single, page, 404, search.
* Parts: header, footer.
* CORE/SKIN architecture with documented extension points.
* WCAG 2.2 AA scaffolding in base.css.
* Block bindings: copyright year and footer credit.

== Resources ==

Bundled fonts — all three are self-hosted WOFF2 subsets under the SIL Open Font
License 1.1 (https://openfontlicense.org/), which is GPL-compatible:

* Baloo 2 — Copyright Ek Type. Source: https://fonts.google.com/specimen/Baloo+2
  Files: assets/fonts/baloo-2/baloo-2-variable.woff2
* Mulish — Copyright Vernon Adams, Cyreal, Jacques Le Bailly.
  Source: https://fonts.google.com/specimen/Mulish
  Files: assets/fonts/mulish/mulish-variable.woff2,
  assets/fonts/mulish/mulish-variable-italic.woff2
* IBM Plex Mono — Copyright IBM Corp. Source: https://github.com/IBM/plex
  Files: assets/fonts/ibm-plex-mono/ibm-plex-mono-400.woff2,
  assets/fonts/ibm-plex-mono/ibm-plex-mono-500.woff2

Bundled images — none is stock photography and none is third-party work.
`placeholder.png` is an original flat-colour PNG. The four demo photographs
were AI-generated using FLUX.1 [schnell] (Black Forest Labs, Apache License
2.0 — https://github.com/black-forest-labs/flux/blob/main/model_licenses/LICENSE-FLUX1-schnell)
via Cloudflare Workers AI, prompted and selected by Christopher Ross. No real
person, real piece of furniture, or third-party photograph was used as input.
All five files are Copyright 2026 Christopher Ross and licensed GPLv2 or
later, the same as the rest of the theme:

* assets/images/placeholder.png — a flat, solid-colour PNG (no photographic or
  third-party content), used only as the default image in the Content Grid and
  Feature Section patterns so an unconfigured block never ships as a bare
  `<img>` with no `src`.
* assets/images/rescue-collage-1.jpg, rescue-collage-2.jpg,
  rescue-collage-3.jpg — AI-generated demo before / in-progress / after images
  of a dresser, used by the Rescue Hero pattern. Not a real rescued piece.
* assets/images/workshop-interior.jpg — an AI-generated demo close-up of a
  hand plane in wood shavings, used by the Workshop Intro pattern.
* screenshot.png — a render of the theme's own front page with the demo
  content above.

The four demo photographs and the screenshot are placeholders, not
documentation of real work. They exist so the front page is coherent the
moment the theme is activated. A live site making real before/after or
funds-raised claims — the theme's own signature feature — is expected to
replace every one of them with real photographs and real figures, as each
pattern's description already says. Shipping the AI-generated demo images
unreplaced on a live site making those specific claims would misrepresent
the transparency the theme exists to demonstrate.

== License ==

Kerf WordPress Theme is licensed under the GNU General Public License v2 or later.

This program is free software: you can redistribute it and/or modify it under the
terms of the GNU General Public License as published by the Free Software Foundation,
either version 2 of the License, or (at your option) any later version.

Bundled fonts (Baloo 2, Mulish, IBM Plex Mono) are licensed under the SIL Open
Font License 1.1: https://openfontlicense.org/

== Copyright ==

Kerf WordPress Theme, Copyright 2026 Christopher Ross
Kerf is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
