<?php

namespace QuadLayers\QLWAPP\Controllers;

class Base {

	public function success_save( $data ) {
		return wp_send_json_success( $data );
	}

	public function success_ajax( $data ) {
		$this->success_save( $data );
	}

	public function error_reload_page() {
		return wp_send_json_error( esc_html__( 'Please, reload page', 'wp-whatsapp-chat' ) );
	}

	public function error_access_denied() {
		wp_send_json_error( esc_html__( 'Access denied', 'wp-whatsapp-chat' ) );
	}

}
