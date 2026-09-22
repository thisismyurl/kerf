<?php
/**
 * Title: Rescue Hero
 * Slug: kerf/rescue-hero
 * Categories: kerf
 * Viewport Width: 1280
 * Inserter: true
 * Description: Front-page hero — a review-style badge, a chunky rounded headline, and three overlapping photos reading before, in progress, after.
 *
 * The three photos ship as demo images of a donated dresser. Replace them with
 * your own before/in-progress/after shots of a piece you actually rescued, and
 * rewrite each alt attribute to describe what your photo shows — the theme's
 * whole argument is that the proof is real, and stock photography is the one
 * thing that cannot be.
 *
 * The overlap, stacking and shadow are CSS (.kerf-collage-side /
 * .kerf-collage-center in assets/css/skin.css), not inline styles, so the
 * markup below is exactly what the image block itself saves and an editor can
 * re-save the pattern without a block-validation warning.
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

	<!-- wp:group {"className":"kerf-collage","style":{"spacing":{"margin":{"top":"var:preset|spacing|9"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"center","verticalAlignment":"center"}} -->
	<div class="wp-block-group kerf-collage" style="margin-top:var(--wp--preset--spacing--9)">

		<!-- wp:image {"aspectRatio":"3/4","width":"200px","style":{"border":{"radius":"32px"}},"className":"kerf-collage-side"} -->
		<figure class="wp-block-image kerf-collage-side" style="width:200px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-1.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Before: a four-drawer wooden dresser on a driveway, its finish rubbed through along the drawer edges.', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","width":"260px","style":{"border":{"radius":"32px"}},"className":"kerf-collage-center"} -->
		<figure class="wp-block-image kerf-collage-center" style="width:260px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-2.jpg' ) ); ?>" alt="<?php esc_attr_e( 'In progress: the same dresser on a workshop bench, two drawer boxes pulled out and offcuts stacked behind it.', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

		<!-- wp:image {"aspectRatio":"3/4","width":"200px","style":{"border":{"radius":"32px"}},"className":"kerf-collage-side"} -->
		<figure class="wp-block-image kerf-collage-side" style="width:200px"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/rescue-collage-3.jpg' ) ); ?>" alt="<?php esc_attr_e( 'After: the finished dresser in a sunlit room, the refinished top catching the light.', 'kerf' ); ?>" style="aspect-ratio:3/4;object-fit:cover;border-radius:32px"/></figure>
		<!-- /wp:image -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
