<?php

if ( ! function_exists( 'eiddo_qodef_register_search_opener_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function eiddo_qodef_register_search_opener_widget( $widgets ) {
		$widgets[] = 'EiddoQodefSearchOpener';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_search_opener_widget' );
}