<?php

if ( ! function_exists( 'eiddo_qodef_set_title_standard_type_for_options' ) ) {
	/**
	 * This function set standard title type value for title options map and meta boxes
	 */
	function eiddo_qodef_set_title_standard_type_for_options( $type ) {
		$type['standard'] = esc_html__( 'Standard', 'eiddo' );
		
		return $type;
	}
	
	add_filter( 'eiddo_qodef_title_type_global_option', 'eiddo_qodef_set_title_standard_type_for_options' );
	add_filter( 'eiddo_qodef_title_type_meta_boxes', 'eiddo_qodef_set_title_standard_type_for_options' );
}

if ( ! function_exists( 'eiddo_qodef_set_title_standard_type_as_default_options' ) ) {
	/**
	 * This function set default title type value for global title option map
	 */
	function eiddo_qodef_set_title_standard_type_as_default_options( $type ) {
		$type = 'standard';
		
		return $type;
	}
	
	add_filter( 'eiddo_qodef_default_title_type_global_option', 'eiddo_qodef_set_title_standard_type_as_default_options' );
}