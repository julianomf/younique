<?php

if ( ! function_exists( 'eiddo_qodef_include_search_types_before_load' ) ) {
    /**
     * Load's all header types before load files by going through all folders that are placed directly in header types folder.
     * Functions from this files before-load are used to set all hooks and variables before global options map are init
     */
    function eiddo_qodef_include_search_types_before_load() {
        foreach ( glob( QODE_FRAMEWORK_SEARCH_ROOT_DIR . '/types/*/before-load.php' ) as $module_load ) {
            include_once $module_load;
        }
    }

    add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_include_search_types_before_load', 1 ); // 1 is set to just be before header option map init
}

if ( ! function_exists( 'eiddo_qodef_load_search' ) ) {
	function eiddo_qodef_load_search() {
		$search_type_meta = eiddo_qodef_options()->getOptionValue( 'search_type' );
		$search_type      = ! empty( $search_type_meta ) ? $search_type_meta : 'fullscreen';
		
		if ( eiddo_qodef_active_widget( false, false, 'qodef_search_opener' ) ) {
			include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/search/types/' . $search_type . '/' . $search_type . '.php';
		}
	}
	
	add_action( 'init', 'eiddo_qodef_load_search' );
}

if ( ! function_exists( 'eiddo_qodef_get_holder_params_search' ) ) {
	/**
	 * Function which return holder class and holder inner class for blog pages
	 */
	function eiddo_qodef_get_holder_params_search() {
		$params_list = array();
		
		$layout = eiddo_qodef_options()->getOptionValue( 'search_page_layout' );
		if ( $layout == 'in-grid' ) {
			$params_list['holder'] = 'qodef-container';
			$params_list['inner']  = 'qodef-container-inner clearfix';
		} else {
			$params_list['holder'] = 'qodef-full-width';
			$params_list['inner']  = 'qodef-full-width-inner';
		}
		
		/**
		 * Available parameters for holder params
		 * -holder
		 * -inner
		 */
		return apply_filters( 'eiddo_qodef_search_holder_params', $params_list );
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_page' ) ) {
	function eiddo_qodef_get_search_page() {
		$sidebar_layout = eiddo_qodef_sidebar_layout();
		
		$params = array(
			'sidebar_layout' => $sidebar_layout
		);
		
		eiddo_qodef_get_module_template_part( 'templates/holder', 'search', '', $params );
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_page_layout' ) ) {
	/**
	 * Function which create query for blog lists
	 */
	function eiddo_qodef_get_search_page_layout() {
		global $wp_query;
		$path   = apply_filters( 'eiddo_qodef_search_page_path', 'templates/page' );
		$type   = apply_filters( 'eiddo_qodef_search_page_layout', 'default' );
		$module = apply_filters( 'eiddo_qodef_search_page_module', 'search' );
		$plugin = apply_filters( 'eiddo_qodef_search_page_plugin_override', false );
		
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		
		$params = array(
			'type'          => $type,
			'query'         => $wp_query,
			'paged'         => $paged,
			'max_num_pages' => eiddo_qodef_get_max_number_of_pages(),
		);
		
		$params = apply_filters( 'eiddo_qodef_search_page_params', $params );
		
		eiddo_qodef_get_module_template_part( $path . '/' . $type, $module, '', $params, $plugin );
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_submit_icon_class' ) ) {
	/**
	 * Loads search submit icon class
	 */
	function eiddo_qodef_get_search_submit_icon_class() {

		$search_icon_source	= eiddo_qodef_options()->getOptionValue( 'search_icon_source' );

		$search_close_icon_class_array = array(
			'qodef-search-submit'
		);

		$search_close_icon_class_array[] = $search_icon_source == 'icon_pack' ? 'qodef-search-submit-icon-pack' : 'qodef-search-submit-svg-path';

		return $search_close_icon_class_array;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_close_icon_class' ) ) {
	/**
	 * Loads search close icon class
	 */
	function eiddo_qodef_get_search_close_icon_class() {

		$search_icon_source	= eiddo_qodef_options()->getOptionValue( 'search_icon_source' );

		$search_close_icon_class_array = array(
			'qodef-search-close'
		);

		$search_close_icon_class_array[] = $search_icon_source == 'icon_pack' ? 'qodef-search-close-icon-pack' : 'qodef-search-close-svg-path';

		return $search_close_icon_class_array;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_icon_html' ) ) {
	/**
	 * Loads search close icon HTML
	 */
	function eiddo_qodef_get_search_icon_html() {

		$search_icon_source 			= eiddo_qodef_options()->getOptionValue( 'search_icon_source' );
		$search_icon_pack 				= eiddo_qodef_options()->getOptionValue( 'search_icon_pack' );
		$search_icon_svg_path 			= eiddo_qodef_options()->getOptionValue( 'search_icon_svg_path' );

		$search_icon_html = '';

		if ( ( $search_icon_source == 'icon_pack' ) && isset( $search_icon_pack ) ) {
			$search_icon_html .= eiddo_qodef_icon_collections()->getSearchIcon( $search_icon_pack, false );
		} else if ( isset( $search_icon_svg_path ) ) {
			$search_icon_html .= $search_icon_svg_path; 
		}

		return $search_icon_html;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_search_close_icon_html' ) ) {
	/**
	 * Loads search close icon HTML
	 */
	function eiddo_qodef_get_search_close_icon_html() {

		$search_icon_source 			= eiddo_qodef_options()->getOptionValue( 'search_icon_source' );
		$search_icon_pack 				= eiddo_qodef_options()->getOptionValue( 'search_icon_pack' );
		$search_close_icon_svg_path 	= eiddo_qodef_options()->getOptionValue( 'search_close_icon_svg_path' );

		$search_close_icon_html = '';

		if ( ( $search_icon_source == 'icon_pack' ) && isset( $search_icon_pack ) ) {
			$search_close_icon_html .= eiddo_qodef_icon_collections()->getSearchClose( $search_icon_pack, false );
		} else if ( isset( $search_close_icon_svg_path ) ) {
			$search_close_icon_html .= $search_close_icon_svg_path; 
		}

		return $search_close_icon_html;
	}
}