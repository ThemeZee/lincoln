<?php
/**
 * Title: Sidebar Widgets
 * Slug: lincoln/sidebar-widgets
 * Inserter: no
*/
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
	<h2 class="is-style-underlined-heading has-large-font-size"><?php _e( 'Categories', 'lincoln' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
	<h2 class="is-style-underlined-heading has-large-font-size"><?php _e( 'Archives', 'lincoln' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","right":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"backgroundColor":"white","className":"widget"} -->
<div class="wp-block-group widget has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

	<!-- wp:heading {"className":"is-style-underlined-heading","fontSize":"large"} -->
	<h2 class="is-style-underlined-heading has-large-font-size"><?php _e( 'Tags', 'lincoln' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:tag-cloud {"className":"is-style-flip-link-hover"} /-->

</div>
<!-- /wp:group -->
