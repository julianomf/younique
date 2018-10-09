<?php

if ( ! function_exists( 'eiddo_qodef_set_header_minimal_type_global_option' ) ) {
	/**
	 * This function set header type value for global header option map
	 */
	function eiddo_qodef_set_header_minimal_type_global_option( $header_types ) {
		$header_types['header-minimal'] = array(
			'image' => QODE_FRAMEWORK_HEADER_TYPES_ROOT . '/header-minimal/assets/img/header-minimal.png',
			'label' => esc_html__( 'Minimal', 'eiddo' )
		);
		
		return $header_types;
	}
	
	add_filter( 'eiddo_qodef_header_type_global_option', 'eiddo_qodef_set_header_minimal_type_global_option' );
}

if ( ! function_exists( 'eiddo_qodef_set_header_minimal_type_meta_boxes_option' ) ) {
	/**
	 * This function set header type value for header meta boxes map
	 */
	function eiddo_qodef_set_header_minimal_type_meta_boxes_option( $header_type_options ) {
		$header_type_options['header-minimal'] = esc_html__( 'Minimal', 'eiddo' );
		
		return $header_type_options;
	}
	
	add_filter( 'eiddo_qodef_header_type_meta_boxes', 'eiddo_qodef_set_header_minimal_type_meta_boxes_option' );
}

if ( ! function_exists( 'eiddo_qodef_set_hide_dep_options_header_minimal' ) ) {
	/**
	 * This function is used to hide all containers/panels for admin options when this header type is selected
	 */
	function eiddo_qodef_set_hide_dep_options_header_minimal( $hide_dep_options ) {
		$hide_dep_options[] = 'header-minimal';
		
		return $hide_dep_options;
	}
	
	// header types panel options
	add_filter( 'eiddo_qodef_header_standard_hide_global_option', 'eiddo_qodef_set_hide_dep_options_header_minimal' );
	
	// header types panel meta boxes
	add_filter( 'eiddo_qodef_header_standard_hide_meta_boxes', 'eiddo_qodef_set_hide_dep_options_header_minimal' );
	
	// header types panel - widgets area meta boxes
	add_filter( 'eiddo_qodef_header_menu_area_widgets_hide_meta_boxes', 'eiddo_qodef_set_hide_dep_options_header_minimal' );
}