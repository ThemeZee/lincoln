<?php
/**
 * Title: Footer Widgets
 * Slug: lincoln/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"2vw","bottom":"2vw"}}}} -->
<div class="wp-block-columns" style="padding-top:2vw;padding-bottom:2vw">

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
			<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'About Lincoln', 'lincoln' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php _e( 'Lincoln is a next generation block theme built for the new WordPress Full-Site-Editing experience. It comes with a clean and modern design and is packed with features, including a huge range of block patterns, multiple header and footer block template parts and support for global style variants.', 'lincoln' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

		<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
		<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Categories', 'lincoln' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:categories {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

		<!-- wp:heading {"level":3,"textColor":"white","fontSize":"large"} -->
		<h3 class="has-white-color has-text-color has-large-font-size"><?php _e( 'Archives', 'lincoln' ); ?></h3>
		<!-- /wp:heading -->

		<!-- wp:archives {"className":"is-style-flip-link-hover"} /-->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->