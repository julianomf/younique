<?php
if ( ! function_exists( 'eiddo_qodef_register_side_area_sidebar' ) ) {
	/**
	 * Register side area sidebar
	 */
	function eiddo_qodef_register_side_area_sidebar() {
		register_sidebar(
			array(
				'id'            => 'sidearea',
				'name'          => esc_html__( 'Side Area', 'eiddo' ),
				'description'   => esc_html__( 'Side Area', 'eiddo' ),
				'before_widget' => '<div id="%1$s" class="widget qodef-sidearea %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="qodef-widget-title-holder"><h5 class="qodef-widget-title">',
				'after_title'   => '</h5></div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'eiddo_qodef_register_side_area_sidebar' );
}

if ( ! function_exists( 'eiddo_qodef_side_menu_body_class' ) ) {
	/**
	 * Function that adds body classes for different side menu styles
	 *
	 * @param $classes array original array of body classes
	 *
	 * @return array modified array of classes
	 */
	function eiddo_qodef_side_menu_body_class( $classes ) {
		
		if ( is_active_widget( false, false, 'qodef_side_area_opener' ) ) {
			
			$classes[] = 'qodef-side-menu-slide-from-right';
		}
		
		return $classes;
	}
	
	add_filter( 'body_class', 'eiddo_qodef_side_menu_body_class' );
}

if ( ! function_exists( 'eiddo_qodef_get_side_area' ) ) {
	/**
	 * Loads side area HTML
	 */
	function eiddo_qodef_get_side_area() {
		
		if ( is_active_widget( false, false, 'qodef_side_area_opener' ) ) {

			$parameters = array(
				'side_area_close_icon_class' => eiddo_qodef_get_side_area_close_icon_class()
			);
			
			eiddo_qodef_get_module_template_part( 'templates/sidearea', 'sidearea', '', $parameters);
		}
	}
	
	add_action( 'eiddo_qodef_after_body_tag', 'eiddo_qodef_get_side_area', 10 );
}

if ( ! function_exists( 'eiddo_qodef_get_side_area_close_class' ) ) {
	/**
	 * Loads side area close icon class
	 */
	function eiddo_qodef_get_side_area_close_icon_class() {

		$side_area_icon_source	= eiddo_qodef_options()->getOptionValue( 'side_area_icon_source' );

		$side_area_close_icon_class_array = array(
			'qodef-close-side-menu'
		);

		$side_area_close_icon_class_array[] = $side_area_icon_source == 'icon_pack' ? 'qodef-close-side-menu-icon-pack' : 'qodef-close-side-menu-svg-path';

		return $side_area_close_icon_class_array;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_side_area_close_icon_html' ) ) {
	/**
	 * Loads side area close icon HTML
	 */
	function eiddo_qodef_get_side_area_close_icon_html() {

		$side_area_icon_source 			= eiddo_qodef_options()->getOptionValue( 'side_area_icon_source' );
		$side_area_icon_pack 			= eiddo_qodef_options()->getOptionValue( 'side_area_icon_pack' );
		$side_area_close_icon_svg_path 	= eiddo_qodef_options()->getOptionValue( 'side_area_close_icon_svg_path' );

		$side_area_close_icon_html = '';

		if ( ( $side_area_icon_source == 'icon_pack' ) && isset( $side_area_icon_pack ) ) {
			$side_area_close_icon_html .= eiddo_qodef_icon_collections()->getMenuCloseIcon( $side_area_icon_pack );
		} else if ( isset( $side_area_close_icon_svg_path ) ) {
			$side_area_close_icon_html .= $side_area_close_icon_svg_path; 
		}

		return $side_area_close_icon_html;
	}
}