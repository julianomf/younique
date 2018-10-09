<?php

if ( ! function_exists( 'eiddo_qodef_set_header_standard_type_global_option' ) ) {
	/**
	 * This function set header type value for global header option map
	 */
	function eiddo_qodef_set_header_standard_type_global_option( $header_types ) {
		$header_types['header-standard'] = array(
			'image' => QODE_FRAMEWORK_HEADER_TYPES_ROOT . '/header-standard/assets/img/header-standard.png',
			'label' => esc_html__( 'Standard', 'eiddo' )
		);
		
		return $header_types;
	}
	
	add_filter( 'eiddo_qodef_header_type_global_option', 'eiddo_qodef_set_header_standard_type_global_option' );
}

if ( ! function_exists( 'eiddo_qodef_set_header_standard_type_as_global_option' ) ) {
	/**
	 * This function set default header type value for global header option map
	 */
	function eiddo_qodef_set_header_standard_type_as_global_option( $header_type ) {
		$header_type = 'header-standard';
		
		return $header_type;
	}
	
	add_filter( 'eiddo_qodef_default_header_type_global_option', 'eiddo_qodef_set_header_standard_type_as_global_option' );
}

if ( ! function_exists( 'eiddo_qodef_set_header_standard_type_meta_boxes_option' ) ) {
	/**
	 * This function set header type value for header meta boxes map
	 */
	function eiddo_qodef_set_header_standard_type_meta_boxes_option( $header_type_options ) {
		$header_type_options['header-standard'] = esc_html__( 'Standard', 'eiddo' );
		
		return $header_type_options;
	}
	
	add_filter( 'eiddo_qodef_header_type_meta_boxes', 'eiddo_qodef_set_header_standard_type_meta_boxes_option' );
}

if ( ! function_exists( 'eiddo_qodef_set_hide_dep_options_header_standard' ) ) {
	/**
	 * This function is used to hide all containers/panels for admin options when this header type is selected
	 */
	function eiddo_qodef_set_hide_dep_options_header_standard( $hide_dep_options ) {
		$hide_dep_options[] = 'header-standard';
		
		return $hide_dep_options;
	}
	

	// header types panel options
	add_filter( 'eiddo_qodef_full_screen_menu_hide_global_option', 'eiddo_qodef_set_hide_dep_options_header_standard' );
}