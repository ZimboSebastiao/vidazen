<?php


namespace QuadLayers\QLWAPP\Models;

class Display extends Base {

	protected $table = 'display';

	// Entries and Taxonomies = array of Display_Component
	public function get_args() {
		$display_component_model = new Display_Component();

		return $display_component_model->get_args();
	}

	public function save( $display_data = null ) {
		return parent::save_data( $this->table, $display_data );
	}

}
