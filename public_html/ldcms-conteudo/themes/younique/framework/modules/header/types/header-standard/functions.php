<?php

if ( ! function_exists( 'eiddo_qodef_register_header_standard_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function eiddo_qodef_register_header_standard_type( $header_types ) {
		$header_type = array(
			'header-standard' => 'EiddoQodef\Modules\Header\Types\HeaderStandard'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'eiddo_qodef_init_register_header_standard_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function eiddo_qodef_init_register_header_standard_type() {
		add_filter( 'eiddo_qodef_register_header_type_class', 'eiddo_qodef_register_header_standard_type' );
	}
	
	add_action( 'eiddo_qodef_before_header_function_init', 'eiddo_qodef_init_register_header_standard_type' );
}