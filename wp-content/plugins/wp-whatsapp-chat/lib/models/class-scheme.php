<?php

namespace QuadLayers\QLWAPP\Models;

class Scheme extends Base {


	protected $table = 'scheme';

	public function get_args() {
		$args = array(
			'font-family'                => 'inherit',
			'font-size'                  => '18',
			'icon-size'                  => '60',
			'icon-font-size'             => '24',
			'brand'                      => '',
			'text'                       => '',
			'link'                       => '',
			'message'                    => '',
			'label'                      => '',
			'name'                       => '',
			'contact-role-color'         => '',
			'contact-name-color'         => '',
			'contact-availability-color' => '',
		);
		return $args;
	}

	public function save( $scheme = null ) {
		return parent::save_data( $this->table, $scheme );
	}
}
