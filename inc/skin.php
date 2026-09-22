<?php
/**
 * [SKIN] The skin layer — the one PHP file `colophon sync` never overwrites.
 *
 * Kerf's PHP-side personality: the image crop its patterns use, the two block
 * styles its patterns reference by class, its pattern category, the preload for
 * the display face that paints the front-page headline, and the onboarding copy
 * that speaks to a furniture-rescue practitioner rather than to a developer.
 *
 * Everything else — a11y scaffolding, the WooCommerce guard, block bindings, the
 * admin onboarding mechanism — is CORE and is not edited here. `colophon sync`
 * overwrites those files and never touches this one.
 *
 * Pillar 9 (Archaeological Records): [SKIN] tag marks what belongs to Kerf.
 *
 * @package kerf
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register Kerf's image crop sizes.
 *
 * One 16:9 hero crop for page heroes and featured images. The collage and
 * workshop photography in the front-page patterns is cropped by aspect-ratio in
 * the block itself, so it needs no registered size.
 */
function kerf_skin_image_sizes(): void {
	add_image_size( 'kerf-hero', 1440, 810, true ); // 16:9 page-hero crop.
}
add_action( 'after_setup_theme', 'kerf_skin_image_sizes' );

/**
 * Register Kerf's block styles.
 *
 * Both are referenced by class from the patterns and styled in
 * assets/css/skin.css; registering them here is what puts them in the Styles
 * panel so an editor can apply them to their own blocks.
 */
function kerf_skin_block_styles(): void {

	// Paragraph as an eyebrow label — small, tracked, muted. Useful above headings.
	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'kerf-eyebrow',
			'label' => esc_html__( 'Eyebrow label', 'kerf' ),
		)
	);

	// Group as a full-bleed band — background colour fills the viewport width.
	register_block_style(
		'core/group',
		array(
			'name'  => 'kerf-band',
			'label' => esc_html__( 'Full-bleed band', 'kerf' ),
		)
	);
}
add_action( 'init', 'kerf_skin_block_styles' );

/**
 * Register the Kerf pattern category.
 *
 * Every pattern in patterns/ declares `Categories: kerf`, so this registration
 * is what gives them a named group in the inserter instead of leaving them
 * uncategorised.
 */
function kerf_skin_pattern_categories(): void {
	register_block_pattern_category(
		'kerf',
		array( 'label' => esc_html__( 'Kerf', 'kerf' ) )
	);
}
add_action( 'init', 'kerf_skin_pattern_categories' );

/**
 * Override the Get-started page content with Kerf's own copy.
 *
 * Two keys only. The CORE default `lead` is generic, and the default `optimize`
 * paragraph describes a breaking-news dismiss control that belongs to a sibling
 * theme and does not exist here — a shipped claim about a feature the theme
 * doesn't have is worse than no claim, so it is replaced rather than inherited.
 */
add_filter(
	'kerf/get_started_content', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
	static function ( array $content ): array {
		$content['lead'] = esc_html__( 'Kerf is a warm, rounded full-site-editing theme for furniture rescue, repair, and cause-funded resale — built on the Colophon core.', 'kerf' );

		$content['optimize'] = array(
			esc_html__( 'Kerf ships no front-end JavaScript at all. Its three typefaces are bundled with the theme and served from your own domain, so nothing about a page view is reported to a font host.', 'kerf' ),
			esc_html__( 'It is built to WCAG 2.2 AA guidance — real focus outlines, a skip link, sensible heading order, and motion that respects a reduce-motion setting. Keep your own copy and images to that bar and the whole site stays welcoming.', 'kerf' ),
			esc_html__( 'The front page ships with demo photography and a demo ledger row. Replace both with your own work and your own figures before you publish: the transparency ledger only means anything if every line in it is true.', 'kerf' ),
		);

		return $content;
	}
);

/**
 * Preload the LCP-critical font — the rounded display face carrying the
 * front-page headline ("Give it a second life."). Variable font, single file.
 *
 * The filter takes a theme-root-relative path, not a URL: kerf_preload_fonts()
 * drops any entry containing '://' so a filter can never trigger an off-origin
 * fetch, and prefixes KERF_URI itself.
 */
add_filter(
	'kerf/preload_fonts', // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscores
	static function ( array $fonts ): array {
		$fonts[] = 'assets/fonts/baloo-2/baloo-2-variable.woff2';

		return $fonts;
	}
);
