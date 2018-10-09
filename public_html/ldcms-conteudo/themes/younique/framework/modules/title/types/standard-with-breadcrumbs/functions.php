<?php

if ( ! function_exists( 'eiddo_qodef_set_title_standard_with_breadcrumbs_type_for_options' ) ) {
	/**
	 * This function set standard with breadcrumbs title type value for title options map and meta boxes
	 */
	function eiddo_qodef_set_title_standard_with_breadcrumbs_type_for_options( $type ) {
		$type['standard-with-breadcrumbs'] = esc_html__( 'Standard With Breadcrumbs', 'eiddo' );
		
		return $type;
	}
	
	add_filter( 'eiddo_qodef_title_type_global_option', 'eiddo_qodef_set_title_standard_with_breadcrumbs_type_for_options' );
	add_filter( 'eiddo_qodef_title_type_meta_boxes', 'eiddo_qodef_set_title_standard_with_breadcrumbs_type_for_options' );
}