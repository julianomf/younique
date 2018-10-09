<?php

if ( ! function_exists( 'qodef_real_estate_roles_options_map' ) ) {
	function qodef_real_estate_roles_options_map( $panel ) {
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_registration_role_enabled',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Registration Role', 'select-real-estate' ),
				'description'   => esc_html__( 'Enable this if you want to allow users to choose role upon registration. Otherwise, default role from WP Settings -> General will be used.', 'select-real-estate' ),
				'parent'        => $panel
			)
		);
		
		$role_settings_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'role_settings_container',
				'parent'     => $panel,
				'dependency' => array(
					'show' => array(
						'real_estate_registration_role_enabled' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_enable_owner_role',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Owner/Buyer Role', 'select-real-estate' ),
				'parent'        => $role_settings_container
			)
		);
		
		$owner_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'owner_container',
				'parent'     => $role_settings_container,
				'dependency' => array(
					'show' => array(
						'real_estate_enable_owner_role' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_owner_adding_property',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Adding Property for Owner/Buyer', 'select-real-estate' ),
				'parent'        => $owner_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_enable_agent_role',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Agent Role', 'select-real-estate' ),
				'parent'        => $role_settings_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_enable_agency_role',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Agency Role', 'select-real-estate' ),
				'parent'        => $role_settings_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_enable_publish_from_user',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Publishing Properties for Users', 'select-real-estate' ),
				'parent'        => $role_settings_container
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_roles_options_map' );
}