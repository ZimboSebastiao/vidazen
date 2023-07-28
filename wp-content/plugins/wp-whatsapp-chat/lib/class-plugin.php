<?php

namespace QuadLayers\QLWAPP;

final class Plugin {

	protected static $instance;

	private function __construct() {
		load_plugin_textdomain( 'wp-whatsapp-chat', false, QLWAPP_PLUGIN_DIR . '/languages/' );
		Frontend::instance();
		Backend::instance();
		add_action( 'admin_footer', array( __CLASS__, 'add_premium_css' ) );
		do_action( 'qlwapp_init' );
	}

	public static function is_min() {
		return;
		if ( ! defined( 'SCRIPT_DEBUG' ) || ! SCRIPT_DEBUG ) {
			return '.min';
		}
	}

	public static function add_premium_css() {
		?>
		<style>
			.qlwapp-premium-field {
				opacity: 0.5; 
				pointer-events: none;
			}
			.qlwapp-premium-field .description {
				display: block!important;
			}
		</style>
		<?php
	}

	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}

Plugin::instance();
