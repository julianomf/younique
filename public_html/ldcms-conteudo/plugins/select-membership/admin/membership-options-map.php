<?php
/**
 * Options map file
 */

if ( ! function_exists( 'qodef_membership_membership_options_map' ) ) {
	function qodef_membership_membership_options_map( $page ) {
		
		if ( qodef_membership_theme_installed() ) {
			
			$panel_social_login = eiddo_qodef_add_admin_panel(
				array(
					'page'  => $page,
					'name'  => 'panel_social_login',
					'title' => esc_html__( 'Enable Social Login', 'select-membership' )
				)
			);
			
			eiddo_qodef_add_admin_field(
				array(
					'type'          => 'yesno',
					'name'          => 'enable_social_login',
					'default_value' => 'no',
					'label'         => esc_html__( 'Enable Social Login', 'select-membership' ),
					'description'   => esc_html__( 'Enabling this option will allow login from social networks of your choice', 'select-membership' ),
					'parent'        => $panel_social_login
				)
			);
			
			$panel_enable_social_login = eiddo_qodef_add_admin_panel(
				array(
					'page'       => $page,
					'name'       => 'panel_enable_social_login',
					'title'      => esc_html__( 'Enable Login via', 'select-membership' ),
					'dependency' => array(
						'show' => array(
							'enable_social_login' => 'yes'
						)
					)
				)
			);
			
			eiddo_qodef_add_admin_field(
				array(
					'type'          => 'yesno',
					'name'          => 'enable_facebook_social_login',
					'default_value' => 'no',
					'label'         => esc_html__( 'Facebook', 'select-membership' ),
					'description'   => esc_html__( 'Enabling this option will allow login via Facebook', 'select-membership' ),
					'parent'        => $panel_enable_social_login
				)
			);
			
			$enable_facebook_social_login_container = eiddo_qodef_add_admin_container(
				array(
					'name'       => 'enable_facebook_social_login_container',
					'parent'     => $panel_enable_social_login,
					'dependency' => array(
						'show' => array(
							'enable_facebook_social_login' => 'yes'
						)
					)
				)
			);
			
			eiddo_qodef_add_admin_field(
				array(
					'type'          => 'text',
					'name'          => 'enable_facebook_login_fbapp_id',
					'default_value' => '',
					'label'         => esc_html__( 'Facebook App ID', 'select-membership' ),
					'description'   => esc_html__( 'Copy your application ID form created Facebook Application', 'select-membership' ),
					'parent'        => $enable_facebook_social_login_container
				)
			);
			
			eiddo_qodef_add_admin_field(
				array(
					'type'          => 'yesno',
					'name'          => 'enable_google_social_login',
					'default_value' => 'no',
					'label'         => esc_html__( 'Google+', 'select-membership' ),
					'description'   => esc_html__( 'Enabling this option will allow login via Google+', 'select-membership' ),
					'parent'        => $panel_enable_social_login
				)
			);
			
			$enable_google_social_login_container = eiddo_qodef_add_admin_container(
				array(
					'name'       => 'enable_google_social_login_container',
					'parent'     => $panel_enable_social_login,
					'dependency' => array(
						'show' => array(
							'enable_google_social_login' => 'yes'
						)
					)
				)
			);
			
			eiddo_qodef_add_admin_field(
				array(
					'type'          => 'text',
					'name'          => 'enable_google_login_client_id',
					'default_value' => '',
					'label'         => esc_html__( 'Client ID', 'select-membership' ),
					'description'   => esc_html__( 'Copy your Client ID form created Google Application', 'select-membership' ),
					'parent'        => $enable_google_social_login_container
				)
			);
		}
	}
	
	add_action( 'eiddo_qodef_social_options', 'qodef_membership_membership_options_map' );
}
