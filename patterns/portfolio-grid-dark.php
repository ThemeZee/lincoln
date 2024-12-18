<?php
/**
 * Title: Portfolio (Grid, dark)
 * Slug: lincoln/portfolio-grid-dark
 * Categories: lincoln_portfolio
 *
 * @package Lincoln
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"},"margin":{"top":"0"}}},"backgroundColor":"darker-gray","textColor":"white","layout":{"contentSize":"1200px","wideSize":"1200px","type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-darker-gray-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">

			<!-- wp:heading {"className":"is-style-underlined-heading"} -->
			<h2 class="is-style-underlined-heading">Portfolio</h2>
			<!-- /wp:heading -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/portfolio-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
					<h3 class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)">Tax Calculator</h3>
					<!-- /wp:heading -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/portfolio-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
					<h3 class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)">Retirement Planner</h3>
					<!-- /wp:heading -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/portfolio-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
					<h3 class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)">Salary Comparison Tool</h3>
					<!-- /wp:heading -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/portfolio-image.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"large"} -->
					<h3 class="has-large-font-size" style="margin-top:var(--wp--preset--spacing--40)">Checkbook Balancer</h3>
					<!-- /wp:heading -->

				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->
