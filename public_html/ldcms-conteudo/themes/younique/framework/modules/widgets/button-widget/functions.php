<?php

if ( ! function_exists( 'eiddo_qodef_register_button_widget' ) ) {
	/**
	 * Function that register button widget
	 */
	function eiddo_qodef_register_button_widget( $widgets ) {
		$widgets[] = 'EiddoQodefButtonWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_button_widget' );
}