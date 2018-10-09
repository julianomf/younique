<?php

if ( ! function_exists( 'eiddo_qodef_disable_wpml_css' ) ) {
	function eiddo_qodef_disable_wpml_css() {
		define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true );
	}
	
	add_action( 'after_setup_theme', 'eiddo_qodef_disable_wpml_css' );
}