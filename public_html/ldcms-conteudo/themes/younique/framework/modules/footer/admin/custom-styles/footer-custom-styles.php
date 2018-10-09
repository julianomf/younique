<?php

if ( ! function_exists( 'eiddo_qodef_footer_top_general_styles' ) ) {
	/**
	 * Generates general custom styles for footer top area
	 */
	function eiddo_qodef_footer_top_general_styles() {
		$item_styles      = array();
		$background_color = eiddo_qodef_options()->getOptionValue( 'footer_top_background_color' );
		
		if ( ! empty( $background_color ) ) {
			$item_styles['background-color'] = $background_color;
		}
		
		echo eiddo_qodef_dynamic_css( '.qodef-page-footer .qodef-footer-top-holder', $item_styles );
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_footer_top_general_styles' );
}

if ( ! function_exists( 'eiddo_qodef_footer_bottom_general_styles' ) ) {
	/**
	 * Generates general custom styles for footer bottom area
	 */
	function eiddo_qodef_footer_bottom_general_styles() {
		$item_styles      = array();
		$background_color = eiddo_qodef_options()->getOptionValue( 'footer_bottom_background_color' );
		
		if ( ! empty( $background_color ) ) {
			$item_styles['background-color'] = $background_color;
		}
		
		echo eiddo_qodef_dynamic_css( '.qodef-page-footer .qodef-footer-bottom-holder', $item_styles );
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_footer_bottom_general_styles' );
}