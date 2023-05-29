<?php
/**
 * Title: Postmeta Date
 * Slug: lincoln/postmeta-date
 * Inserter: no
 *
 * @package Lincoln
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"gray","layout":{"type":"flex","allowOrientation":false,"flexWrap":"wrap"},"fontSize":"small"} -->
<div class="wp-block-group has-gray-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500">

	<!-- wp:paragraph -->
	<p><?php esc_html_e( 'Posted on', 'lincoln' ); ?>&nbsp;</p>
	<!-- /wp:paragraph -->

	<!-- wp:post-date {"isLink":true} /-->

</div>
<!-- /wp:group -->
