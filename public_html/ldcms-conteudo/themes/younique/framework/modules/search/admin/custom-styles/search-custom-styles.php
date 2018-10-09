<?php

if ( ! function_exists( 'eiddo_qodef_search_opener_icon_size' ) ) {
	function eiddo_qodef_search_opener_icon_size() {
		$icon_size = eiddo_qodef_options()->getOptionValue( 'header_search_icon_size' );
		
		if ( ! empty( $icon_size ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-search-opener', array(
				'font-size' => eiddo_qodef_filter_px( $icon_size ) . 'px'
			) );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_search_opener_icon_size' );
}

if ( ! function_exists( 'eiddo_qodef_search_opener_icon_colors' ) ) {
	function eiddo_qodef_search_opener_icon_colors() {
		$icon_color       = eiddo_qodef_options()->getOptionValue( 'header_search_icon_color' );
		$icon_hover_color = eiddo_qodef_options()->getOptionValue( 'header_search_icon_hover_color' );
		
		if ( ! empty( $icon_color ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-search-opener', array(
				'color' => $icon_color
			) );
		}
		
		if ( ! empty( $icon_hover_color ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-search-opener:hover', array(
				'color' => $icon_hover_color
			) );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_search_opener_icon_colors' );
}

if ( ! function_exists( 'eiddo_qodef_search_opener_text_styles' ) ) {
	function eiddo_qodef_search_opener_text_styles() {
		$item_styles = eiddo_qodef_get_typography_styles( 'search_icon_text' );
		
		$item_selector = array(
			'.qodef-search-icon-text'
		);
		
		echo eiddo_qodef_dynamic_css( $item_selector, $item_styles );
		
		$text_hover_color = eiddo_qodef_options()->getOptionValue( 'search_icon_text_color_hover' );
		
		if ( ! empty( $text_hover_color ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-search-opener:hover .qodef-search-icon-text', array(
				'color' => $text_hover_color
			) );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_search_opener_text_styles' );
}