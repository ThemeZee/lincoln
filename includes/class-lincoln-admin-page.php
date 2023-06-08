<?php
/**
 * Lincoln Admin Page
 *
 * @package Lincoln
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Admin Page class
 */
class Lincoln_Admin_Page {

	/**
	 * Setup the Lincoln Admin Page class
	 *
	 * @return void
	 */
	public static function setup() {

		// Add settings page.
		add_action( 'admin_menu', array( __CLASS__, 'add_settings_page' ), 9 );

		// Register settings.
		add_action( 'admin_init', array( __CLASS__, 'register_settings' ), 9 );

		// Add Admin notices.
		add_action( 'admin_notices', array( __CLASS__, 'admin_notices' ) );
	}

	/**
	 * Add Settings Page to Admin menu
	 */
	public static function add_settings_page() {
		add_theme_page(
			esc_html__( 'Theme Setup', 'lincoln' ),
			esc_html__( 'Theme Setup', 'lincoln' ),
			'manage_options',
			'lincoln-theme',
			array( __CLASS__, 'render_settings_page' )
		);
	}

	/**
	 * Display settings page
	 */
	public static function render_settings_page() {
		ob_start();
		?>

		<div class="wrap">

			<h1><?php esc_html_e( 'Lincoln', 'lincoln' ); ?> <?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?></h1>

			<form method="post" action="options.php">
				<?php
					do_settings_sections( 'lincoln_theme_settings' );
					settings_fields( 'lincoln_theme_settings' );
					submit_button();
				?>
			</form>

		</div>

		<?php
		// phpcs:ignore
		echo ob_get_clean();
	}

	/**
	 * Register all settings sections and fields
	 */
	public static function register_settings() {

		// Make sure that options exist in database.
		if ( false === get_option( 'lincoln_theme_settings' ) ) {
			add_option( 'lincoln_theme_settings' );
		}

		// Add Demo Section.
		add_settings_section(
			'lincoln_demo_section',
			esc_html__( 'Demo Content', 'lincoln' ),
			array( __CLASS__, 'demo_section_intro' ),
			'lincoln_theme_settings'
		);

		// Creates our settings in the options table.
		register_setting(
			'lincoln_theme_settings',
			'lincoln_theme_settings',
			array( __CLASS__, 'sanitize_settings' )
		);
	}

	/**
	 * Demo Section Intro
	 */
	public static function demo_section_intro() {
		esc_html_e( 'Import the demo content into your website to get started quickly.', 'lincoln' );
	}

	/**
	 * Sanitize the Plugin Settings
	 *
	 * @param array $input User Input.
	 * @return array
	 */
	public static function sanitize_settings( $input = array() ) {
		// phpcs:ignore
		if ( empty( $_POST['_wp_http_referer'] ) ) {
			return $input;
		}

		$saved = get_option( 'lincoln_theme_settings', array() );
		if ( ! is_array( $saved ) ) {
			$saved = array();
		}

		$input = $input ? $input : array();

		// Loop through each setting being saved and pass it through a sanitization filter.
		foreach ( $input as $key => $value ) :
			if ( is_array( $value ) ) :
				foreach ( $value as $checkbox => $bool ) :
					$input[ $key ][ $checkbox ] = ! empty( $bool );
				endforeach;
			else :
				$input[ $key ] = sanitize_text_field( $value );
			endif;
		endforeach;

		return array_merge( $saved, $input );
	}

	/**
	 * Show success and error notices when saving settings.
	 */
	public static function admin_notices() {
		settings_errors( 'lincoln_theme_settings_notices' );
	}
}

// Run Class.
Lincoln_Admin_Page::setup();
