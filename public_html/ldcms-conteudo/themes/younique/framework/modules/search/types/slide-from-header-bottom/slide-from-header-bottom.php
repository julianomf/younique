<?php

if ( ! function_exists( 'eiddo_qodef_search_body_class' ) ) {
	/**
	 * Function that adds body classes for different search types
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function eiddo_qodef_search_body_class( $classes ) {
		$classes[] = 'qodef-slide-from-header-bottom';
		
		return $classes;
	}
	
	add_filter( 'body_class', 'eiddo_qodef_search_body_class' );
}

if ( ! function_exists( 'eiddo_qodef_get_search' ) ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function eiddo_qodef_get_search() {
		eiddo_qodef_load_search_template();
	}
	
	add_action( 'eiddo_qodef_before_page_header_html_close', 'eiddo_qodef_get_search' );
	add_action( 'eiddo_qodef_before_mobile_header_html_close', 'eiddo_qodef_get_search' );
}

if ( ! function_exists( 'eiddo_qodef_load_search_template' ) ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function eiddo_qodef_load_search_template() {
		$parameters = array(
			'search_submit_icon_class' => eiddo_qodef_get_search_submit_icon_class()
		);

        eiddo_qodef_get_module_template_part( 'types/slide-from-header-bottom/templates/slide-from-header-bottom', 'search', '', $parameters );
	}
}