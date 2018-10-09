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
		$classes[] = 'qodef-fullscreen-search-with-sidebar';
		$classes[] = 'qodef-search-fade';
		
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
	
	add_action( 'eiddo_qodef_before_page_header', 'eiddo_qodef_get_search' );
}

if ( ! function_exists( 'eiddo_qodef_load_search_template' ) ) {
	/**
	 * Loads search HTML based on search type option.
	 */
	function eiddo_qodef_load_search_template() {
        $parameters = array();

        $parameters['search_in_grid'] 			= eiddo_qodef_options()->getOptionValue( 'search_in_grid' ) == 'yes' ? 'qodef-grid' : '';
        $parameters['search_close_icon_class'] 	= eiddo_qodef_get_search_close_icon_class();
        $parameters['search_submit_icon_class'] = eiddo_qodef_get_search_submit_icon_class();

        eiddo_qodef_get_module_template_part( 'types/fullscreen-with-sidebar/templates/fullscreen-with-sidebar', 'search', '', $parameters );
	}
}

if ( ! function_exists( 'eiddo_qodef_get_fullscreen_sidebar' ) ) {
    /**
     * Return footer top HTML
     */
    function eiddo_qodef_get_fullscreen_sidebar() {
        $parameters = array();

        //get number of top footer columns
        $parameters['search_sidebar_columns'] = eiddo_qodef_options()->getOptionValue( 'search_sidebar_columns' );


        eiddo_qodef_get_module_template_part( 'types/fullscreen-with-sidebar/templates/parts/fullscreen-sidebar', 'search', '', $parameters );
    }
}
