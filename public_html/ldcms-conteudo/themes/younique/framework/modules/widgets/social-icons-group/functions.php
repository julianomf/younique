<?php

if ( ! function_exists( 'eiddo_qodef_register_social_icons_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function eiddo_qodef_register_social_icons_widget( $widgets ) {
		$widgets[] = 'EiddoQodefClassIconsGroupWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_social_icons_widget' );
}