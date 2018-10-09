<?php
/**
 * Functions for Google login
 */

if ( ! function_exists( 'qodef_membership_get_google_social_login' ) ) {
	/**
	 * Render form for google login
	 */
	function qodef_membership_get_google_social_login() {
		
		$social_login_enabled = eiddo_qodef_options()->getOptionValue( 'enable_social_login' ) == 'yes' ? true : false;
		$google_login_enabled = eiddo_qodef_options()->getOptionValue( 'enable_google_social_login' ) == 'yes' ? true : false;
		$enabled              = ( $social_login_enabled && $google_login_enabled ) ? true : false;
		
		if ( ! is_user_logged_in() && $enabled ) {
			$html = '<form class="qodef-google-login-holder">'
			        . wp_nonce_field( 'qodef_validate_googleplus_login', 'qodef_nonce_google_login_' . rand(), true, false ) .
			        eiddo_qodef_get_button_html( array(
				        'html_type'        => 'button',
				        'custom_class'     => 'qodef-google-login',
				        'icon_pack'        => 'font_awesome',
				        'fa_icon'          => 'fa-google-plus',
                        'background_color' => '#1b1b1b'
			        ) ) .
			        '</form>';
			print $html;
		}
	}
	
	add_action( 'qodef_membership_social_network_login', 'qodef_membership_get_google_social_login' );
}

if ( ! function_exists( 'qodef_membership_check_google_user' ) ) {
	/**
	 * Function for getting google user data.
	 * Checks for user mail and register or log in user
	 */
	function qodef_membership_check_google_user() {
		
		if ( isset( $_POST['response'] ) ) {
			$response            = $_POST['response'];
			$user_email          = $response['email'];
			$network             = 'googleplus';
			$response['network'] = $network;
			$nonce               = $response['nonce'];
			
			if ( email_exists( $user_email ) ) {
				//User already exist, log in user
				qodef_membership_login_user_from_social_network( $user_email, $nonce, $network );
			} else {
				//Register new user
				qodef_membership_register_user_from_social_network( $response );
			}
			$url = qodef_membership_get_dashboard_page_url();
			if ( $url == '' ) {
				$url = esc_url( home_url( '/' ) );
			}
			qodef_membership_ajax_response( 'success', esc_html__( 'Login successful, redirecting...', 'select-membership' ), $url );
		}
		
		wp_die();
	}
	
	add_action( 'wp_ajax_qodef_membership_check_google_user', 'qodef_membership_check_google_user' );
	add_action( 'wp_ajax_nopriv_qodef_membership_check_google_user', 'qodef_membership_check_google_user' );
}