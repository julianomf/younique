<?php

if ( ! function_exists( 'eiddo_qodef_register_sidearea_opener_widget' ) ) {
	/**
	 * Function that register sidearea opener widget
	 */
	function eiddo_qodef_register_sidearea_opener_widget( $widgets ) {
		$widgets[] = 'EiddoQodefSideAreaOpener';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_sidearea_opener_widget' );
}