<?php

if ( ! function_exists( 'eiddo_qodef_register_custom_font_widget' ) ) {
	/**
	 * Function that register custom font widget
	 */
	function eiddo_qodef_register_custom_font_widget( $widgets ) {
		$widgets[] = 'EiddoQodefCustomFontWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_custom_font_widget' );
}