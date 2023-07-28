<?php

namespace QuadLayers\QLWAPP\Models;

class Chat extends Base {

	protected $table = 'chat';

	public function get_args() {

		$args = array(
			// 'contact' => $contact,
						'emoji' => 'no',
		);
		return $args;
	}

}
