<?php
/**
 * Plugin Name: Select Membership
 * Description: Plugin that adds social login and user dashboard page
 * Author: Select Themes
 * Version: 1.0
 */

require_once 'load.php';

if ( ! function_exists( 'qodef_membership_text_domain' ) ) {
	/**
	 * Loads plugin text domain so it can be used in translation
	 */
	function qodef_membership_text_domain() {
		load_plugin_textdomain( 'select-membership', false, QODE_MEMBERSHIP_REL_PATH . '/languages' );
	}
	
	add_action( 'plugins_loaded', 'qodef_membership_text_domain' );
}

if ( ! function_exists( 'qodef_membership_scripts' ) ) {
	/**
	 * Loads plugin scripts
	 */
	function qodef_membership_scripts() {
		wp_enqueue_style( 'qodef_membership_style', plugins_url( QODE_MEMBERSHIP_REL_PATH . '/assets/css/membership.min.css' ) );
		if ( function_exists( 'eiddo_qodef_is_responsive_on' ) && eiddo_qodef_is_responsive_on() ) {
			wp_enqueue_style( 'qodef_membership_responsive_style', plugins_url( QODE_MEMBERSHIP_REL_PATH . '/assets/css/membership-responsive.min.css' ) );
		}
		
		//include google+ api
		wp_enqueue_script( 'qodef_membership_google_plus_api', 'https://apis.google.com/js/platform.js', array(), null, false );
		
		//underscore for facebook and google login
		//tabs for login widget
		$array_deps = array(
			'underscore',
			'jquery-ui-tabs'
		);
		
		if ( qodef_membership_theme_installed() ) {
			$array_deps[] = 'eiddo_qodef_modules';
		}
		
		wp_enqueue_script( 'qodef_membership_script', plugins_url( QODE_MEMBERSHIP_REL_PATH . '/assets/js/membership.min.js' ), $array_deps, false, true );
	}
	
	add_action( 'wp_enqueue_scripts', 'qodef_membership_scripts' );
}

if ( ! function_exists( 'qodef_membership_style_dynamics_deps' ) ) {
	function qodef_membership_style_dynamics_deps( $deps ) {
		$style_dynamic_deps_array   = array();
		$style_dynamic_deps_array[] = 'qodef_membership_style';
		
		if ( function_exists( 'eiddo_qodef_is_responsive_on' ) && eiddo_qodef_is_responsive_on() ) {
			$style_dynamic_deps_array[] = 'qodef_membership_responsive_style';
		}
		
		return array_merge( $deps, $style_dynamic_deps_array );
	}
	
	add_filter( 'eiddo_qodef_style_dynamic_deps', 'qodef_membership_style_dynamics_deps' );
}

if ( ! function_exists( 'qodef_membership_render_login_form' ) ) {
	function qodef_membership_render_login_form() {
		
		if ( ! is_user_logged_in() ) {
			//Render modal with login and register forms
			echo qodef_membership_get_module_template_part( 'widgets', 'login-widget', 'login-modal-template' );
		}
	}
	
	add_action( 'wp_footer', 'qodef_membership_render_login_form' );
}

