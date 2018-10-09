<?php

if ( ! function_exists( 'eiddo_qodef_register_social_icon_widget' ) ) {
	/**
	 * Function that register social icon widget
	 */
	function eiddo_qodef_register_social_icon_widget( $widgets ) {
		$widgets[] = 'EiddoQodefSocialIconWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_social_icon_widget' );
}