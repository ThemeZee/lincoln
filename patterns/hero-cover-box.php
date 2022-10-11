<?php
/**
 * Title: Hero Cover Box
 * Slug: lincoln/hero-cover-box
 * Categories: lincoln_hero
*/
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-cover-image.png","dimRatio":0,"contentPosition":"center center","isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0"}}}} -->
<div class="wp-block-cover alignfull is-light" style="margin-top:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/default-cover-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container">

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","right":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)">

		<!-- wp:columns {"style":{"spacing":{"blockGap":"0"}}} -->
		<div class="wp-block-columns">

			<!-- wp:column -->
			<div class="wp-block-column">

			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">

				<!-- wp:spacer {"height":"150px"} -->
				<div style="height:150px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","right":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70"}}},"backgroundColor":"white"} -->
				<div class="wp-block-group has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)">

					<!-- wp:heading {"level":1,"className":"is-style-underlined-heading"} -->
					<h1 class="is-style-underlined-heading">Accounting Services for your company.</h1>
					<!-- /wp:heading -->

					<!-- wp:buttons -->
					<div class="wp-block-buttons">

						<!-- wp:button -->
						<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Our Services</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
						<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color wp-element-button">About us</a></div>
						<!-- /wp:button -->

					</div>
					<!-- /wp:buttons -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

</div></div>
<!-- /wp:cover -->
