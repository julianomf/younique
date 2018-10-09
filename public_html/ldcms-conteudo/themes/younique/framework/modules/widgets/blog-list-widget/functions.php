<?php

if ( ! function_exists( 'eiddo_qodef_register_blog_list_widget' ) ) {
	/**
	 * Function that register blog list widget
	 */
	function eiddo_qodef_register_blog_list_widget( $widgets ) {
		$widgets[] = 'EiddoQodefBlogListWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_blog_list_widget' );
}