<?php
/**
 * Title: Workshop Intro
 * Slug: kerf/workshop-intro
 * Categories: kerf
 * Viewport Width: 1280
 * Inserter: true
 * Description: Two-column intro panel — a workshop photo beside a short mission statement and a pill CTA. Rounded card treatment on a deep-cream band.
 *
 * The photo ships as a demo image; replace it with your own bench or workshop
 * and rewrite the alt attribute to describe what your photo shows. The button
 * ships pointing at "#" so it is keyboard-reachable out of the box — give it a
 * real destination before you publish.
 *
 * @package kerf
 */

?>
<!-- wp:group {"tagName":"section","layout":{"type":"constrained","contentSize":"1100px"},"backgroundColor":"base-ground","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}},"border":{"radius":"28px"}}} -->
<section class="wp-block-group has-base-ground-background-color has-background" style="border-radius:28px;padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--5)">

	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
			<!-- wp:image {"aspectRatio":"4/5","style":{"border":{"radius":"24px"}}} -->
			<figure class="wp-block-image"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/workshop-interior.jpg' ) ); ?>" alt="<?php esc_attr_e( 'A hand plane resting in a pile of curled wood shavings on a workbench.', 'kerf' ); ?>" style="aspect-ratio:4/5;object-fit:cover;border-radius:24px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|2xl"}},"fontFamily":"serif"} -->
			<h2 class="wp-block-heading has-serif-font-family" style="font-size:var(--wp--preset--font-size--2-xl)"><?php echo esc_html__( 'We rescue what still has good bones.', 'kerf' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"base-mid","fontFamily":"sans"} -->
			<p class="has-base-mid-color has-text-color has-sans-font-family"><?php echo esc_html__( 'Solid wood furniture headed for the curb gets stripped, repaired, and refinished to the same standard as commercial work — no shortcuts because it was free. Every sale funds the cause on our About page, named exactly, every time.', 'kerf' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|sm"},"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"fontFamily":"mono"} -->
			<p class="has-mono-font-family" style="margin-top:var(--wp--preset--spacing--5);font-size:var(--wp--preset--font-size--sm)"><?php echo esc_html__( 'Pickup and drop-off details on the Services page.', 'kerf' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--5)">
				<!-- wp:button {"url":"#","style":{"typography":{"fontSize":"var:preset|font-size|sm"}},"fontFamily":"sans"} -->
				<div class="wp-block-button has-custom-font-size has-sans-font-family" style="font-size:var(--wp--preset--font-size--sm)"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'See what’s been saved', 'kerf' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
