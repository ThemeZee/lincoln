<?php
/**
 * Title: Footer Widgets
 * Slug: lincoln/footer-widgets
 * Inserter: no
*/
?>

<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:site-title {"level":0} /-->

			<!-- wp:paragraph -->
			<p><?php _e( 'Lincoln is a next generation block theme built for the new WordPress Full-Site-Editing experience. It comes with a clean and modern design and is packed with features, including a huge range of block patterns, multiple header and footer block template parts and support for global style variants.', 'lincoln' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">

		<!-- wp:group {"className":"footer-widget"} -->
		<div class="wp-block-group footer-widget">

			<!-- wp:heading {"textAlign":"right","level":4,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"fontSize":"medium"} -->
			<h4 class="has-text-align-right has-medium-font-size" style="margin-top:var(--wp--preset--spacing--50)"><?php _e( 'Get in touch', 'lincoln' ); ?></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"right","className":"flip-link-hover"} -->
			<p class="has-text-align-right flip-link-hover">
				<a href="tel://0123456789">0123-456789</a><br/>
				<a href="mailto:example@domain.com">example@domain.com</a><br/>
				1234 Lincoln Street, California, USA
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"className":"is-style-primary-hover","layout":{"type":"flex","justifyContent":"right"}} -->
			<ul class="wp-block-social-links is-style-primary-hover">

				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://facebook.com/","service":"facebook"} /-->
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->

			</ul>
			<!-- /wp:social-links -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
