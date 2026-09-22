<?php
/**
 * Title: No search results (hidden)
 * Slug: kerf/hidden-no-search-results
 * Categories: kerf
 * Inserter: false
 * Description: Not for the pattern picker — a translation-string carrier only.
 *
 * Referenced by templates/search.html's query-no-results purely so the
 * message is extracted by wp i18n make-pot — block template HTML files
 * aren't scanned for translatable strings, but pattern PHP files are.
 *
 * @package kerf
 */

?>
<!-- wp:paragraph {"textColor":"base-mid"} -->
<p class="has-base-mid-color has-text-color"><?php echo esc_html__( 'No results found. Try a different search term.', 'kerf' ); ?></p>
<!-- /wp:paragraph -->
