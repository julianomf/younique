<?php

if ( ! function_exists( 'eiddo_qodef_register_separator_widget' ) ) {
	/**
	 * Function that register separator widget
	 */
	function eiddo_qodef_register_separator_widget( $widgets ) {
		$widgets[] = 'EiddoQodefSeparatorWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_separator_widget' );
}