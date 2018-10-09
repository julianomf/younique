<?php
/*
Plugin Name: Select Real Estate
Description: Plugin that adds post types for Real Estate extension
Author: Select Themes
Version: 1.0
*/

require_once 'load.php';

add_action( 'after_setup_theme', array( QodefRE\CPT\PostTypesRegister::getInstance(), 'register' ) );

if ( ! function_exists( 'qodef_re_activation' ) ) {
	/**
	 * Triggers when plugin is activated. It calls flush_rewrite_rules
	 * and defines eiddo_qodef_re_on_activate action
	 */
	function qodef_re_activation() {
		do_action( 'eiddo_qodef_re_on_activate' );
		
		QodefRE\CPT\PostTypesRegister::getInstance()->register();
		flush_rewrite_rules();
	}
	
	register_activation_hook( __FILE__, 'qodef_re_activation' );
}

if ( ! function_exists( 'qodef_re_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qodef_re_text_domain() {
		load_plugin_textdomain( 'select-real-estate', false, QODE_RE_REL_PATH . '/languages' );
	}
	
	add_action( 'plugins_loaded', 'qodef_re_text_domain' );
}

if ( ! function_exists( 'qodef_re_scripts' ) ) {
	/**
	 * Loads plugin scripts
	 */
	function qodef_re_scripts() {
		$array_deps_css            = array();
		$array_deps_css_responsive = array();
		$array_deps_js             = array();
		
		if ( qodef_re_theme_installed() ) {
			$array_deps_css[]            = 'eiddo_qodef_modules';
			$array_deps_css_responsive[] = 'eiddo_qodef_modules_responsive';
			$array_deps_js[]             = 'eiddo_qodef_modules';
			$array_deps_js[]             = 'eiddo_qodef_google_map_api';
		}
		
		wp_enqueue_style( 'qodef_re_style', plugins_url( QODE_RE_REL_PATH . '/assets/css/real-estate.min.css' ), $array_deps_css );
		if ( function_exists( 'eiddo_qodef_is_responsive_on' ) && eiddo_qodef_is_responsive_on() ) {
			wp_enqueue_style( 'qodef_re_responsive_style', plugins_url( QODE_RE_REL_PATH . '/assets/css/real-estate-responsive.min.css' ), $array_deps_css_responsive );
		}
		
		wp_enqueue_script( 'jquery-ui-slider' );
		if ( wp_is_mobile() ) {
			wp_enqueue_script( 'jquery-touch-punch' );
		}
		
		wp_enqueue_script( 'qodef_re_script', plugins_url( QODE_RE_REL_PATH . '/assets/js/real-estate.min.js' ), $array_deps_js, false, true );
	}
	
	add_action( 'wp_enqueue_scripts', 'qodef_re_scripts' );
}

if ( ! function_exists( 'qodef_re_style_dynamics_deps' ) ) {
	function qodef_re_style_dynamics_deps( $deps ) {
		$style_dynamic_deps_array   = array();
		$style_dynamic_deps_array[] = 'qodef_re_style';
		
		if ( function_exists( 'eiddo_qodef_is_responsive_on' ) && eiddo_qodef_is_responsive_on() ) {
			$style_dynamic_deps_array[] = 'qodef_re_responsive_style';
		}
		
		return array_merge( $deps, $style_dynamic_deps_array );
	}
	
	add_filter( 'eiddo_qodef_style_dynamic_deps', 'qodef_re_style_dynamics_deps' );
}

if ( ! function_exists( 'qodef_re_modules_css_deps' ) ) {
	function qodef_re_modules_css_deps( $deps ) {
		$modules_css_deps_array = array();
		
		if ( wp_style_is( 'select2', 'registered' ) ) {
			$modules_css_deps_array[] = 'select2';
		}
		
		return array_merge( $deps, $modules_css_deps_array );
	}
	
	add_filter( 'eiddo_qodef_modules_css_deps', 'qodef_re_modules_css_deps' );
}

if ( ! function_exists( 'qodef_re_version_class' ) ) {
	/**
	 * Adds plugins version class to body
	 *
	 * @param $classes
	 *
	 * @return array
	 */
	function qodef_re_version_class( $classes ) {
		$classes[] = 'qodef-re-' . QODE_RE_VERSION;
		
		return $classes;
	}
	
	add_filter( 'body_class', 'qodef_re_version_class' );
}

if ( ! function_exists( 'qodef_re_add_maps_extensions' ) ) {
	function qodef_re_add_maps_extensions( $extensions ) {
		$items      = array(
			'geometry',
			'places'
		);
		$extensions = array_unique( array_merge( $extensions, $items ) );
		
		return $extensions;
	}
	
	add_filter( 'eiddo_qodef_google_maps_extensions_array', 'qodef_re_add_maps_extensions', 10, 1 );
}

if ( ! function_exists( 'qodef_re_enable_maps_in_admin' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qodef_re_enable_maps_in_admin() {
		return true;
	}
	
	add_action( 'eiddo_qodef_google_maps_in_backend', 'qodef_re_enable_maps_in_admin' );
}

if ( ! function_exists( 'qodef_re_theme_installed' ) ) {
	/**
	 * Checks whether theme is installed or not
	 * @return bool
	 */
	function qodef_re_theme_installed() {
		return defined( 'QODE_ROOT' );
	}
}

if ( ! function_exists( 'qodef_re_is_woocommerce_installed' ) ) {
	/**
	 * Function that checks if woocommerce is installed
	 * @return bool
	 */
	function qodef_re_is_woocommerce_installed() {
		return function_exists( 'is_woocommerce' );
	}
}

if ( ! function_exists( 'qodef_re_is_revolution_slider_installed' ) ) {
	function qodef_re_is_revolution_slider_installed() {
		return class_exists( 'RevSliderFront' );
	}
}

if ( ! function_exists( 'qodef_re_qodef_woocommerce_integration_installed' ) ) {
	//is Qode Woocommerce Integration?
	function qodef_re_qodef_woocommerce_integration_installed() {
		return defined( 'QODE_WOOCOMMERCE_CHECKOUT_INTEGRATION' );
	}
}

if ( ! function_exists( 'qodef_re_qodef_membership_installed' ) ) {
	/**
	 * Function that checks if Qode Membership plugin installed
	 * @return bool
	 */
	function qodef_re_qodef_membership_installed() {
		return defined( 'QODE_MEMBERSHIP_VERSION' );
	}
}

if ( ! function_exists( 'qodef_re_qodef_core_plugin_installed' ) ) {
	/**
	 * Function that checks if Qode Membership plugin installed
	 * @return bool
	 */
	function qodef_re_qodef_core_plugin_installed() {
		return defined( 'QODE_CORE_VERSION' );
	}
}