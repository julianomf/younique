<?php

if ( ! function_exists( 'eiddo_qodef_register_widgets' ) ) {
	function eiddo_qodef_register_widgets() {
		$widgets = apply_filters( 'eiddo_qodef_register_widgets', $widgets = array() );
		
		foreach ( $widgets as $widget ) {
			register_widget( $widget );
		}
	}
	
	add_action( 'widgets_init', 'eiddo_qodef_register_widgets' );
}