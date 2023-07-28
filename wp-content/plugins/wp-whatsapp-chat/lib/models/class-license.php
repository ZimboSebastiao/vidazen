<?php

namespace QuadLayers\QLWAPP\Models;

class License extends Base {

  protected $table = 'license';

	public function get_args() {

	  $args = array(
		  'market' => 'quadlayers',
		  'key'    => '',
		  'email'  => '',
	  );
	  return $args;
	}

}
