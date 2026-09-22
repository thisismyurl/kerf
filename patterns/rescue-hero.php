<?php
/**
 * Title: Rescue Hero
 * Slug: kerf/rescue-hero
 * Categories: kerf
 * Viewport Width: 1280
 * Inserter: true
 * Description: Front-page hero — review badge, a chunky rounded headline, and a three-photo overlapping collage. Signature layout for the theme, adapted from a warm cream/rounded-collage reference (Kerf's own, not a copy of any single brand's copy).
 *
 * Photography note: the three collage slots MUST be real before/after or
 * workshop photos of an actual rescued piece — see the theme's "never" rule
 * in the pattern description: no stock or generated photography.
 *
 * @package kerf
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|8"}},"color":{"background":"var:preset|color|base-paper"}},"layout":{"type":"constrained","contentSize":"760px"}} -->
<section class="wp-block-group has-base-paper-background-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--8)">

	<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","className":"is-style-kerf-eyebrow","style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xs"},"border":{"radius":"999px","width":"1px","color":"var:preset|color|base-rule"},"spacing":{"padding":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|4","right":"var:preset|spacing|4"}},"color":{"background":"var:preset|color|base-ground"}},"fontFamily":"mono"} -->
		<p class="has-text-align-center is-style-kerf-eyebrow has-base-ground-background-color has-background has-mono-font-family" style="border-color:var(--wp--preset--color--base-rule);border-width:1px;border-radius:999px;padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--4);font-size:var(--wp--preset--font-size--xs)"><?php echo esc_html__( 'Solid wood, not laminate — every piece checked by hand', 'kerf' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"var:preset|font-size|display","lineHeight":"1.02","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|4"}}},"fontFamily":"serif"} -->
	<h1 class="wp-block-heading has-text-align-center has-serif-font-family" style="margin-top:var(--wp--preset--spacing--5);margin-bottom:var(--wp--preset--spacing--4);font-size:var(--wp--preset--font-size--display);line-height:1.02;letter-spacing:-0.01em"><?php echo esc_html__( 'Give it a second life.', 'kerf' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"var:preset|font-size|md"},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"sans"} -->
	<p class="has-text-align-center has-base-mid-color has-text-color has-sans-font-family" style="font-size:var(--wp--preset--font-size--md)"><?php echo esc_html__( 'Furniture rescue and hand refinishing — every sale funds the cause named on the About page.', 'kerf' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|9"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--9)">

		<!-- wp:image {"aspectRatio":"3/4","width":"200px","style":{"border":{"radius":"32px"},"shadow":"var:preset|shadow|natural"},"className":"kerf-collage-side"} -->
		<figure class="wp-block-image kerf-collage-side" style="width:200px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-1.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Placeholder — replace with a real before photo of a rescued piece', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","width":"260px","style":{"border":{"radius":"32px"},"shadow":"var:preset|shadow|natural"},"className":"kerf-collage-center"} -->
		<figure class="wp-block-image kerf-collage-center" style="width:260px;z-index:2"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Placeholder — replace with a real workshop-in-progress photo', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","width":"200px","style":{"border":{"radius":"32px"},"shadow":"var:preset|shadow|natural"},"className":"kerf-collage-side"} -->
		<figure class="wp-block-image kerf-collage-side" style="width:200px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-3.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Placeholder — replace with a real after/finished photo of the same piece', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
