<?php

if ( ! function_exists( 'eiddo_qodef_register_recent_posts_widget' ) ) {
	/**
	 * Function that register search opener widget
	 */
	function eiddo_qodef_register_recent_posts_widget( $widgets ) {
		$widgets[] = 'EiddoQodefRecentPosts';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_recent_posts_widget' );
}