<?php
/**
 * Title: 404 message (hidden)
 * Slug: kerf/hidden-404-message
 * Categories: kerf
 * Inserter: false
 * Description: Not for the pattern picker — a translation-string carrier only.
 *
 * Referenced by templates/404.html purely so the message is extracted by
 * wp i18n make-pot — block template HTML files aren't scanned for
 * translatable strings, but pattern PHP files are.
 *
 * @package kerf
 */

?>
<!-- wp:paragraph {"style":{"color":{"text":"var:preset|color|base-mid"}}} -->
<p class="has-base-mid-color has-text-color"><?php echo esc_html__( "This page doesn't exist. Try searching, or return to the front page.", 'kerf' ); ?></p>
<!-- /wp:paragraph -->
