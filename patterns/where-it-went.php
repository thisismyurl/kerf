<?php
/**
 * Title: Where It Went
 * Slug: kerf/where-it-went
 * Categories: kerf
 * Viewport Width: 1280
 * Inserter: true
 * Description: The transparency-ledger signature pattern — a plain tally of piece, sale figure, and destination. No adjectives, no thermometer graphic, just numbers stated as plainly as a materials list.
 *
 * @package kerf
 */

?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8"}}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group" style="padding-top:var(--wp--preset--spacing--8);padding-bottom:var(--wp--preset--spacing--8)">

	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|xl"}},"fontFamily":"serif"} -->
	<h2 class="wp-block-heading has-serif-font-family" style="font-size:var(--wp--preset--font-size--xl)"><?php echo esc_html__( 'Where it went', 'kerf' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:group {"style":{"border":{"top":{"width":"1px","color":"var:preset|color|base-rule"}},"spacing":{"margin":{"top":"var:preset|spacing|4"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--base-rule);border-top-width:1px;margin-top:var(--wp--preset--spacing--4)">

		<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"var:preset|color|base-rule"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-rule);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
			<!-- wp:paragraph {"fontFamily":"sans"} -->
			<p class="has-sans-font-family"><?php echo esc_html__( 'Maple dresser, drawer boxes intact', 'kerf' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono"},"color":{"text":"var:preset|color|base-accent"}},"fontFamily":"mono"} -->
			<p class="has-base-accent-color has-text-color has-mono-font-family"><?php
			/* translators: demo ledger figure. $140 is an illustrative sale amount; site owners replace the whole row with their own. Adapt the currency symbol and the arrow to local convention. */
			echo esc_html__( '$140 → cause', 'kerf' );
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"border":{"bottom":{"width":"1px","color":"var:preset|color|base-rule"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base-rule);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--4);padding-bottom:var(--wp--preset--spacing--4)">
			<!-- wp:paragraph {"fontFamily":"sans"} -->
			<p class="has-sans-font-family"><?php echo esc_html__( 'Oak side table, refinished top', 'kerf' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono"},"color":{"text":"var:preset|color|base-accent"}},"fontFamily":"mono"} -->
			<p class="has-base-accent-color has-text-color has-mono-font-family"><?php
			/* translators: demo ledger figure. $65 is an illustrative sale amount; site owners replace the whole row with their own. Adapt the currency symbol and the arrow to local convention. */
			echo esc_html__( '$65 → cause', 'kerf' );
			?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"style":{"typography":{"fontFamily":"var:preset|font-family|mono","fontSize":"var:preset|font-size|xs"},"color":{"text":"var:preset|color|base-mid"}},"fontFamily":"mono"} -->
	<p class="has-base-mid-color has-text-color has-mono-font-family" style="font-size:var(--wp--preset--font-size--xs)"><?php echo esc_html__( 'The two rows above are demo content. Replace them with real pieces, real figures and real dates before you publish — a ledger only counts if every line in it is true.', 'kerf' ); ?></p>
	<!-- /wp:paragraph -->

</section>
<!-- /wp:group -->
