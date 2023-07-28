<?php

namespace QuadLayers\QLWAPP\Controllers;

class Welcome {

	protected static $instance;

	private function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
	}

	public function add_menu() {
		add_menu_page( QLWAPP_PLUGIN_NAME, QLWAPP_PLUGIN_NAME, 'edit_posts', QLWAPP_DOMAIN, array( $this, 'add_panel' ), 'dashicons-whatsapp' );
		add_submenu_page( QLWAPP_DOMAIN, esc_html__( 'Welcome', 'wp-whatsapp-chat' ), esc_html__( 'Welcome', 'wp-whatsapp-chat' ), 'edit_posts', QLWAPP_DOMAIN, array( $this, 'add_panel' ) );
	}

	public function add_panel() {
		global $submenu;
		include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/parts/header.php';
		include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/welcome.php';
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}
