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

}
add_action( 'enqueue_block_editor_assets', 'lincoln_block_scripts' );


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
 * Registers block pattern categories.
 *
 * @return void
 */
function lincoln_register_block_pattern_categories() {
	$block_pattern_categories = array(
		'lincoln_hero'         => array( 'label' => __( 'Lincoln: Hero', 'lincoln' ) ),
		'lincoln_heading'      => array( 'label' => __( 'Lincoln: Heading', 'lincoln' ) ),
		'lincoln_cta'          => array( 'label' => __( 'Lincoln: Call to Action', 'lincoln' ) ),
		'lincoln_features'     => array( 'label' => __( 'Lincoln: Features', 'lincoln' ) ),
		'lincoln_portfolio'    => array( 'label' => __( 'Lincoln: Portfolio', 'lincoln' ) ),
		'lincoln_services'     => array( 'label' => __( 'Lincoln: Services', 'lincoln' ) ),
		'lincoln_testimonials' => array( 'label' => __( 'Lincoln: Testimonials', 'lincoln' ) ),
		'lincoln_team'         => array( 'label' => __( 'Lincoln: Team', 'lincoln' ) ),
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

	// Register Footer Navigation block style.
	register_block_style( 'core/navigation', array(
		'name'         => 'footer-navigation',
		'label'        => esc_html__( 'Footer Navigation', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	) );

	// Register Inherit Colors block style.
	register_block_style( 'core/social-links', array(
		'name'         => 'inherit-colors',
		'label'        => esc_html__( 'Inherit Colors', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	) );

	// Register Primary Hover block style.
	register_block_style( 'core/social-links', array(
		'name'         => 'primary-hover',
		'label'        => esc_html__( 'Primary Hover', 'lincoln' ),
		'style_handle' => 'lincoln-stylesheet',
	) );

	// Register Thin Line block style.
	register_block_style( 'core/separator', array(
		'name'         => 'thin',
		'label'        => esc_html__( 'Thin Line', 'lincoln' ),
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
}
add_action( 'init', 'lincoln_register_block_styles', 9 );
