<?php

if ( ! function_exists( 'eiddo_qodef_register_header_minimal_type' ) ) {
	/**
	 * This function is used to register header type class for header factory file
	 */
	function eiddo_qodef_register_header_minimal_type( $header_types ) {
		$header_type = array(
			'header-minimal' => 'EiddoQodef\Modules\Header\Types\HeaderMinimal'
		);
		
		$header_types = array_merge( $header_types, $header_type );
		
		return $header_types;
	}
}

if ( ! function_exists( 'eiddo_qodef_init_register_header_minimal_type' ) ) {
	/**
	 * This function is used to wait header-function.php file to init header object and then to init hook registration function above
	 */
	function eiddo_qodef_init_register_header_minimal_type() {
		add_filter( 'eiddo_qodef_register_header_type_class', 'eiddo_qodef_register_header_minimal_type' );
	}
	
	add_action( 'eiddo_qodef_before_header_function_init', 'eiddo_qodef_init_register_header_minimal_type' );
}

if ( ! function_exists( 'eiddo_qodef_include_header_minimal_full_screen_menu' ) ) {
	/**
	 * Registers additional menu navigation for theme
	 */
	function eiddo_qodef_include_header_minimal_full_screen_menu( $menus ) {
		$menus['popup-navigation'] = esc_html__( 'Full Screen Navigation', 'eiddo' );
		
		return $menus;
	}
	
	if ( eiddo_qodef_check_is_header_type_enabled( 'header-minimal' ) ) {
		add_filter( 'eiddo_qodef_register_headers_menu', 'eiddo_qodef_include_header_minimal_full_screen_menu' );
	}
}

if ( ! function_exists( 'eiddo_qodef_get_fullscreen_menu_icon_class' ) ) {
	/**
	 * Loads full screen menu icon class
	 */
	function eiddo_qodef_get_fullscreen_menu_icon_class() {

		$fullscreen_menu_icon_source = eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_source' );

		$fullscreen_menu_icon_class_array = array(
			'qodef-fullscreen-menu-opener'
		);

		$fullscreen_menu_icon_class_array[] = $fullscreen_menu_icon_source == 'icon_pack' ? 'qodef-fullscreen-menu-opener-icon-pack' : 'qodef-fullscreen-menu-opener-svg-path';

		return $fullscreen_menu_icon_class_array;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_fullscreen_menu_icon_html' ) ) {
	/**
	 * Loads fullscreen menu icon HTML
	 */
	function eiddo_qodef_get_fullscreen_menu_icon_html() {

		$fullscreen_menu_icon_source	= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_source' );
		$fullscreen_menu_icon_pack		= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_pack' );
		$fullscreen_menu_icon_svg_path 	= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_svg_path' );

		$fullscreen_menu_icon_html = '';

		if ( ( $fullscreen_menu_icon_source == 'icon_pack' ) && ( isset( $fullscreen_menu_icon_pack ) ) ) {
			$fullscreen_menu_icon_html .= eiddo_qodef_icon_collections()->getMenuIcon($fullscreen_menu_icon_pack);
		} else if ( isset( $fullscreen_menu_icon_svg_path ) ) {
			$fullscreen_menu_icon_html .= $fullscreen_menu_icon_svg_path; 
		}

		return $fullscreen_menu_icon_html;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_fullscreen_menu_close_icon_html' ) ) {
	/**
	 * Loads fullscreen menu close icon HTML
	 */
	function eiddo_qodef_get_fullscreen_menu_close_icon_html() {

		$fullscreen_menu_icon_source			= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_source' );
		$fullscreen_menu_icon_pack				= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_icon_pack' );
		$fullscreen_menu_close_icon_svg_path 	= eiddo_qodef_options()->getOptionValue( 'fullscreen_menu_close_icon_svg_path' );

		$fullscreen_menu_close_icon_html = '';

		if ( ( $fullscreen_menu_icon_source == 'icon_pack' ) && ( isset( $fullscreen_menu_icon_pack ) ) ) {
			$fullscreen_menu_close_icon_html .= eiddo_qodef_icon_collections()->getMenuCloseIcon($fullscreen_menu_icon_pack);
		} else if ( isset( $fullscreen_menu_close_icon_svg_path ) ) {
			$fullscreen_menu_close_icon_html .= $fullscreen_menu_close_icon_svg_path; 
		}

		return $fullscreen_menu_close_icon_html;
	}
}

if ( ! function_exists( 'eiddo_qodef_register_header_minimal_full_screen_menu_widgets' ) ) {
	/**
	 * Registers additional widget areas for this header type
	 */
	function eiddo_qodef_register_header_minimal_full_screen_menu_widgets() {
		register_sidebar(
			array(
				'id'            => 'fullscreen_menu_above',
				'name'          => esc_html__( 'Fullscreen Menu Top', 'eiddo' ),
				'description'   => esc_html__( 'This widget area is rendered above full screen menu', 'eiddo' ),
				'before_widget' => '<div class="%2$s qodef-fullscreen-menu-above-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="qodef-widget-title">',
				'after_title'   => '</h5>'
			)
		);
		
		register_sidebar(
			array(
				'id'            => 'fullscreen_menu_below',
				'name'          => esc_html__( 'Fullscreen Menu Bottom', 'eiddo' ),
				'description'   => esc_html__( 'This widget area is rendered below full screen menu', 'eiddo' ),
				'before_widget' => '<div class="%2$s qodef-fullscreen-menu-below-widget">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="qodef-widget-title">',
				'after_title'   => '</h5>'
			)
		);
	}
	
	if ( eiddo_qodef_check_is_header_type_enabled( 'header-minimal' ) ) {
		add_action( 'widgets_init', 'eiddo_qodef_register_header_minimal_full_screen_menu_widgets' );
	}
}