<?php

if ( ! function_exists( 'eiddo_qodef_register_image_gallery_widget' ) ) {
	/**
	 * Function that register image gallery widget
	 */
	function eiddo_qodef_register_image_gallery_widget( $widgets ) {
		$widgets[] = 'EiddoQodefImageGalleryWidget';
		
		return $widgets;
	}
	
	add_filter( 'eiddo_qodef_register_widgets', 'eiddo_qodef_register_image_gallery_widget' );
}