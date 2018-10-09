<?php

if(!function_exists('eiddo_qodef_register_sticky_sidebar_widget')) {
	/**
	 * Function that register sticky sidebar widget
	 */
	function eiddo_qodef_register_sticky_sidebar_widget($widgets) {
		$widgets[] = 'EiddoQodefStickySidebar';
		
		return $widgets;
	}
	
	add_filter('eiddo_qodef_register_widgets', 'eiddo_qodef_register_sticky_sidebar_widget');
}