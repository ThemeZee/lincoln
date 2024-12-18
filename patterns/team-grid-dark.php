<?php
/**
 * Title: Team (Grid, dark)
 * Slug: lincoln/team-grid-dark
 * Categories: lincoln_team
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
			<h2 class="is-style-underlined-heading">Our Team</h2>
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
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p><strong>John Doe</strong><br>Founder &amp; CEO</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-primary-hover"} -->
					<ul class="wp-block-social-links has-normal-icon-size is-style-primary-hover" style="margin-top:var(--wp--preset--spacing--20)">

						<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
						<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

					</ul>
					<!-- /wp:social-links -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p><strong>Jane Smith</strong><br>Tax Consultant</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-primary-hover"} -->
					<ul class="wp-block-social-links has-normal-icon-size is-style-primary-hover" style="margin-top:var(--wp--preset--spacing--20)">

						<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
						<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

					</ul>
					<!-- /wp:social-links -->

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
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p><strong>Mark Miller</strong><br>Accountant</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-primary-hover"} -->
					<ul class="wp-block-social-links has-normal-icon-size is-style-primary-hover" style="margin-top:var(--wp--preset--spacing--20)">

						<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
						<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

					</ul>
					<!-- /wp:social-links -->

				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">

					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full is-style-default">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/team-member.png" alt="">
					</figure>
					<!-- /wp:image -->

					<!-- wp:paragraph -->
					<p><strong>Jill Baker</strong><br>Financial Planner</p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"size":"has-normal-icon-size","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"className":"is-style-primary-hover"} -->
					<ul class="wp-block-social-links has-normal-icon-size is-style-primary-hover" style="margin-top:var(--wp--preset--spacing--20)">

						<!-- wp:social-link {"url":"mailto://example@email.com","service":"mail"} /-->
						<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->

					</ul>
					<!-- /wp:social-links -->

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
