<?php
/**
 * Lincoln functions and definitions
 *
 * @package Lincoln
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function lincoln_setup() {

	// Set default Post Thumbnail size.
	set_post_thumbnail_size( 1530, 765 );

	// Enqueue editor styles.
	add_editor_style( 'style.css' );

	// Remove Core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', 'lincoln_setup' );


/**
 * Enqueue scripts and styles.
 */
function lincoln_scripts() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'lincoln-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'lincoln_scripts' );


/**
 * Enqueue block styles and scripts for Gutenberg Editor.
 */
function lincoln_block_scripts() {

	// Enqueue Editor Styling.
	wp_enqueue_style( 'lincoln-editor-styles', get_theme_file_uri( '/assets/css/editor-styles.css' ), array(), wp_get_theme()->get( 'Version' ), 'all' );

	// Get current screen.
	$current_screen = get_current_screen();

	// Enqueue Page Template Switcher Editor plugin.
	if ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) {
		wp_enqueue_script( 'lincoln-page-template-switcher', get_theme_file_uri( '/assets/js/page-template-switcher.js' ), array( 'wp-blocks', 'wp-element', 'wp-edit-post' ), '2022-06-01' );
	}
}
add_action( 'enqueue_block_editor_assets', 'lincoln_block_scripts' );


/**
* Enqueue theme fonts.
*/
function lincoln_theme_fonts() {
	$fonts_url = lincoln_get_fonts_url();

	// Load Fonts if necessary.
	if ( $fonts_url ) {
		require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
		wp_enqueue_style( 'lincoln-theme-fonts', wptt_get_webfont_url( $fonts_url ), array(), '20201110' );
	}
}
add_action( 'wp_enqueue_scripts', 'lincoln_theme_fonts', 1 );
add_action( 'enqueue_block_editor_assets', 'lincoln_theme_fonts', 1 );


/**
 * Retrieve webfont URL to load fonts locally.
 */
function lincoln_get_fonts_url() {
	$font_families = array(
		'Roboto:400,400italic,700,700italic',
	);

	$query_args = array(
		'family'  => urlencode( implode( '|', $font_families ) ),
		'subset'  => urlencode( 'latin,latin-ext' ),
		'display' => urlencode( 'swap' ),
	);

	return apply_filters( 'lincoln_get_fonts_url', add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ) );
}


/**
 * Change excerpt length for default posts
 *
 * @param int $length Length of excerpt in number of words.
 * @return int
 */
function lincoln_excerpt_length( $length ) {
	if ( is_admin() ) {
		return $length;
	}

	return apply_filters( 'lincoln_excerpt_length', 20 );
}
add_filter( 'excerpt_length', 'lincoln_excerpt_length' );


/**
 * Add body classes in Gutenberg Editor.
 */
function lincoln_block_editor_body_classes( $classes ) {
	global $post;
	$current_screen = get_current_screen();

	// Return early if we are not in the Gutenberg Editor.
	if ( ! ( method_exists( $current_screen, 'is_block_editor' ) && $current_screen->is_block_editor() && 'post' === $current_screen->base ) ) {
		return $classes;
	}

	// Fullwidth Page Template?
	if ( 'page-fullwidth' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' lincoln-fullwidth-page';
	}

	// No Title Page Template?
	if ( 'page-no-title' === get_page_template_slug( $post->ID ) or 'page-no-title-fullwidth' === get_page_template_slug( $post->ID ) or 'blank' === get_page_template_slug( $post->ID ) ) {
		$classes .= ' lincoln-no-title-page';
	}

	return $classes;
}
add_filter( 'admin_body_class', 'lincoln_block_editor_body_classes' );


/**
 * Registers block pattern categories.
 *
 * @return void
 */
function lincoln_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'lincoln_hero'         => array( 'label' => __( 'Lincoln: Hero', 'lincoln' ) ),
		'lincoln_cta'          => array( 'label' => __( 'Lincoln: Call to Action', 'lincoln' ) ),
		'lincoln_features'     => array( 'label' => __( 'Lincoln: Features', 'lincoln' ) ),
		'lincoln_portfolio'    => array( 'label' => __( 'Lincoln: Portfolio', 'lincoln' ) ),
		'lincoln_services'     => array( 'label' => __( 'Lincoln: Services', 'lincoln' ) ),
		'lincoln_testimonials' => array( 'label' => __( 'Lincoln: Testimonials', 'lincoln' ) ),
		'lincoln_team'         => array( 'label' => __( 'Lincoln: Team', 'lincoln' ) ),
		'lincoln_page_layouts' => array( 'label' => __( 'Lincoln: Full Page Layouts', 'lincoln' ) ),
		'lincoln_blog'         => array( 'label' => __( 'Lincoln: Blog Posts', 'lincoln' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 */
	$block_pattern_categories = apply_filters( 'lincoln_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'lincoln_register_block_pattern_categories', 9 );


/**
 * Registers block styles.
 *
 * @return void
 */
function lincoln_register_block_styles() {

	// Register Main Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	) );

	// Register Underlined Heading block style.
	$underlined_heading_style = array(
		'name'         => 'underlined-heading',
		'label'        => esc_html__( 'Underlined', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	);

	register_block_style( 'core/heading', $underlined_heading_style );
	register_block_style( 'core/post-title', $underlined_heading_style );
	register_block_style( 'core/query-title', $underlined_heading_style );

	// Register Flip Link Hover block style.
	$link_hover_style = array(
		'name'         => 'flip-link-hover',
		'label'        => esc_html__( 'Flip Link Hover', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	);

	register_block_style( 'core/archives', $link_hover_style );
	register_block_style( 'core/categories', $link_hover_style );
	register_block_style( 'core/latest-posts', $link_hover_style );
	register_block_style( 'core/page-list', $link_hover_style );
	register_block_style( 'core/tag-cloud', $link_hover_style );
	register_block_style( 'core/site-title', $link_hover_style );
}
add_action( 'init', 'lincoln_register_block_styles', 9 );
