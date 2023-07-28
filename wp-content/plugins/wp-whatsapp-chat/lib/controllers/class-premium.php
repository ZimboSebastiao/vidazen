<?php

namespace QuadLayers\QLWAPP\Controllers;

class Premium {

	protected static $instance;

	private function __construct() {
	  add_action( 'admin_menu', array( $this, 'add_menu' ) );
	}

	public function add_menu() {
	  add_submenu_page( QLWAPP_DOMAIN, esc_html__( 'Premium', 'wp-whatsapp-chat' ), sprintf( '%s <i class="dashicons dashicons-awards"></i>', esc_html__( 'Premium', 'wp-whatsapp-chat' ) ), 'edit_posts', QLWAPP_DOMAIN . '_premium', array( $this, 'add_panel' ) );
	}

	public function add_panel() {
	  global $submenu;
	  include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/parts/header.php';
	  include QLWAPP_PLUGIN_DIR . '/lib/view/backend/pages/premium.php';
	}

	public static function instance() {
		if ( ! isset( self::$instance ) ) {
		  self::$instance = new self();

		}
	  return self::$instance;
	}

}
