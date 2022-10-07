<?php
/**
 * Title: Footer Text
 * Slug: lincoln/footer-text
 * Inserter: no
*/
?>

<!-- wp:paragraph -->
<p>&copy; <?php echo wp_kses_post( date_i18n( 'Y' ) . ' ' . get_bloginfo( 'name' ) ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"}}}},"className":"flip-link-hover"} -->
<p class="flip-link-hover has-link-color"><a href="#"><?php _e( 'Privacy Policy', 'lincoln' ); ?></a> | <a href="#"><?php _e( 'Imprint', 'lincoln' ); ?></a></p>
<!-- /wp:paragraph -->
