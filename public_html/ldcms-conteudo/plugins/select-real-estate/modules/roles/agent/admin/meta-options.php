<?php

if (! function_exists('qodef_re_agent_meta_options')) {
	function qodef_re_agent_meta_options(){

		$agent_fields = eiddo_qodef_add_user_fields(
			array(
				'scope' => array('agent'),
				'name'  => 'agent_fields'
			)
		);

		$agencies_array = qodef_re_get_user_agency_options();

		$agent_group = eiddo_qodef_add_user_group(
			array(
				'name'        => 'agent_group',
				'title'       => esc_html__( 'Agent Info', 'select-real-estate' ),
				'parent'      => $agent_fields
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_belonging_agency',
				'type'        => 'select',
				'label'       => esc_html__( 'Agency', 'select-real-estate' ),
				'options'     => $agencies_array,
				'parent'      => $agent_group
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_profile_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Agent Profile Image', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_position',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Position', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_licence',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Licence', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_telephone',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Telephone', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_mobile_phone',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Mobile Phone', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_fax_number',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Fax Number', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agent_address',
				'type'        => 'text',
				'label'       => esc_html__( 'Agent Address', 'select-real-estate' ),
				'parent'      => $agent_group
			)
		);
	}

	add_action( 'eiddo_qodef_custom_user_fields', 'qodef_re_agent_meta_options' );
}