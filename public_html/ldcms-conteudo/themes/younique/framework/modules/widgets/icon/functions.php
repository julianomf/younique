<?php

if ( ! function_exists( 'eiddo_qodef_register_icon_widget' ) ) {
	/**
	 * Function that register icon widget
	 */
	function eiddo_qodef_register_icon_widget( $widgets ) {
		$widgets[] = 'EiddoQodefIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_icon_widget' );
}