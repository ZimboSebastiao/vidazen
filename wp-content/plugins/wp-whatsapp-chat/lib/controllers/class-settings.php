<?php

namespace QuadLayers\QLWAPP\Controllers;

class Settings extends Base {

	protected static $instance;

	private function __construct() {
		add_action( 'wp_ajax_qlwapp_save_settings', array( $this, 'ajax_qlwapp_save_settings' ) );
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
	}

	public function add_menu() {
		add_submenu_page( QLWAPP_DOMAIN, esc_html__( 'Settings', 'wp-whatsapp-chat' ), esc_html__( 'Settings', 'wp-whatsapp-chat' ), 'manage_options', QLWAPP_DOMAIN . '_settings', array( $this, 'add_panel' ) );
	}

	public function add_panel() {
		global $submenu;

		$settings_model = new \QuadLayers\QLWAPP\Models\Settings();
		$settings       = $settings_model->get();

		include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/parts/header.php';
		include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/settings.php';
	}

	public function ajax_qlwapp_save_settings() {
		$settings_model = new \QuadLayers\QLWAPP\Models\Settings();
		if ( current_user_can( 'manage_options' ) ) {
			if ( check_ajax_referer( 'qlwapp_save_settings', 'nonce', false ) && isset( $_REQUEST['form_data'] ) ) {
				$form_data = array();
				parse_str( $_REQUEST['form_data'], $form_data );
				if ( is_array( $form_data ) ) {
					$settings_model->save( $form_data );
					return parent::success_save( $form_data );
				}
				return parent::error_reload_page();
			}
			return parent::error_access_denied();
		}
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
