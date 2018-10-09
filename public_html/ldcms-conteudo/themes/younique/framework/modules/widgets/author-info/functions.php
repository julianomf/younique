<?php

if ( ! function_exists( 'eiddo_qodef_register_author_info_widget' ) ) {
	/**
	 * Function that register author info widget
	 */
	function eiddo_qodef_register_author_info_widget( $widgets ) {
		$widgets[] = 'EiddoQodefAuthorInfoWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_author_info_widget' );
}