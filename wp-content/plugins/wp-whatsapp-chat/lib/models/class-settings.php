<?php

namespace QuadLayers\QLWAPP\Models;

class Settings extends Base {

	protected $table = 'settings';

	public function get_args() {
		$args = array(
			'googleAnalytics'         => 'disable',
			'googleAnalyticsScript'   => 'no',
			'googleAnalyticsV3Id'     => '',
			'googleAnalyticsV4Id'     => '',
			'googleAnalyticsLabel'    => '',
			'googleAnalyticsCategory' => '',
		);

		return $args;
	}

	public function save( $scheme = null ) {
		return parent::save_data( $this->table, $scheme );
	}
}
