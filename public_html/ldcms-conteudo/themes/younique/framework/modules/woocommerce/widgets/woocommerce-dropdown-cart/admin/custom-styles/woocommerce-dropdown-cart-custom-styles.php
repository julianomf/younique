<?php

if ( ! function_exists( 'eiddo_qodef_dropdown_cart_icon_styles' ) ) {
	/**
	 * Generates styles for dropdown cart icon
	 */
	function eiddo_qodef_dropdown_cart_icon_styles() {
		$icon_color       = eiddo_qodef_options()->getOptionValue( 'dropdown_cart_icon_color' );
		$icon_hover_color = eiddo_qodef_options()->getOptionValue( 'dropdown_cart_hover_color' );
		
		if ( ! empty( $icon_color ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-shopping-cart-holder .qodef-header-cart a', array( 'color' => $icon_color ) );
		}
		
		if ( ! empty( $icon_hover_color ) ) {
			echo eiddo_qodef_dynamic_css( '.qodef-shopping-cart-holder .qodef-header-cart a:hover', array( 'color' => $icon_hover_color ) );
		}
	}
	
	add_action( 'eiddo_qodef_style_dynamic', 'eiddo_qodef_dropdown_cart_icon_styles' );
}