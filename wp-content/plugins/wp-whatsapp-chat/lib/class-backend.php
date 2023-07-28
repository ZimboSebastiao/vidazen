<?php

namespace QuadLayers\QLWAPP;

class Backend {

	protected static $instance;

	private function __construct() {
		Controllers\Welcome::instance();
		Controllers\Button::instance();
		Controllers\Box::instance();
		Controllers\Contact::instance();
		Controllers\Display::instance();
		Controllers\Settings::instance();
		Controllers\WooCommerce::instance();
		Controllers\Scheme::instance();
		Controllers\Premium::instance();
		add_filter( 'default_option_qlwapp', array( $this, 'generate_db' ) );
		add_filter( 'sanitize_option_qlwapp', 'wp_unslash' );
		add_action( 'admin_enqueue_scripts', array( $this, 'add_js' ) );
		add_action( 'admin_head', array( $this, 'add_css' ) );
	}

	public function generate_db() {
		$db = new Models\Base();
		return $db->options();
	}

	public function add_css() {
		?>
			<style>
				@font-face {
					font-family: 'qlwf-whatsapp';
					src: url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff');
					font-weight: normal;
					font-style: normal;
				}

				#toplevel_page_qlwapp .wp-menu-image img {
					height: 16px;
				}
			</style>
		<?php

	}

	public function add_js() {
		if ( isset( $_GET['page'] ) && strpos( $_GET['page'], QLWAPP_DOMAIN ) !== false ) {
			wp_register_style( 'qlwapp-select2', plugins_url( '/assets/select2/css/select2.css', QLWAPP_PLUGIN_FILE ), array( 'wp-color-picker' ), QLWAPP_PLUGIN_VERSION, 'all' );

			$admin = include QLWAPP_PLUGIN_DIR . 'build/backend/js/index.asset.php';

			wp_enqueue_style( 'qlwapp-admin', plugins_url( '/build/backend/css/style.css', QLWAPP_PLUGIN_FILE ), array( 'wp-color-picker', 'qlwapp-select2' ), QLWAPP_PLUGIN_VERSION, 'all' );

			wp_register_script( 'qlwapp-select2', plugins_url( '/assets/select2/js/select2.min.js', QLWAPP_PLUGIN_FILE ), array( 'jquery' ), QLWAPP_PLUGIN_VERSION );

			wp_enqueue_script( 'qlwapp-admin', plugins_url( '/build/backend/js/index.js', QLWAPP_PLUGIN_FILE ), $admin['dependencies'], $admin['version'], true );

			wp_localize_script(
				'qlwapp-admin',
				'qlwapp',
				array(
					'nonce' => array(
						'qlwapp_get_posts' => wp_create_nonce( 'qlwapp_get_posts' ),
					),
				)
			);
		}
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}

