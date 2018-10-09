<?php

if ( ! function_exists( 'qodef_re_map_property_contact_meta' ) ) {
	function qodef_re_map_property_contact_meta( $meta_box ) {
		
		$property_contact_container = eiddo_qodef_add_admin_container(
			array(
				'type'   => 'container',
				'name'   => 'property_contact_container',
				'parent' => $meta_box
			)
		);
		
		eiddo_qodef_add_admin_section_title(
			array(
				'title'  => esc_html__( 'Contact Information', 'select-real-estate' ),
				'name'   => 'property_contact_container_title',
				'parent' => $property_contact_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_contact_info_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Contact Info to Display', 'select-real-estate' ),
				'description' => esc_html__( 'Chose what info will be displayed', 'select-real-estate' ),
				'parent'      => $property_contact_container,
				'options'     => array(
					''       => esc_html__( 'None', 'select-real-estate' ),
					'agency' => esc_html__( 'Agency Info', 'select-real-estate' ),
					'agent'  => esc_html__( 'Agent Info', 'select-real-estate' ),
					'owner'  => esc_html__( 'Owner Info', 'select-real-estate' )
				)
			)
		);
		
		$property_contact_agency_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'property_contact_agency_container',
				'parent'     => $property_contact_container,
				'dependency' => array(
					'show' => array(
						'qodef_property_contact_info_meta' => 'agency'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_contact_agency_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Agency', 'select-real-estate' ),
				'description' => esc_html__( 'Chose agency to be displayed', 'select-real-estate' ),
				'parent'      => $property_contact_agency_container,
				'options'     => qodef_re_get_user_agency_options(),
			)
		);
		
		$property_contact_agent_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'property_contact_agent_container',
				'parent'     => $property_contact_container,
				'dependency' => array(
					'show' => array(
						'qodef_property_contact_info_meta' => 'agent'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_contact_agent_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Agent', 'select-real-estate' ),
				'description' => esc_html__( 'Chose agent to be displayed', 'select-real-estate' ),
				'parent'      => $property_contact_agent_container,
				'options'     => qodef_re_get_user_agent_options(),
			)
		);
		
		$property_contact_owner_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'property_contact_owner_container',
				'parent'     => $property_contact_container,
				'dependency' => array(
					'show' => array(
						'qodef_property_contact_info_meta' => 'owner'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_contact_owner_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Owner', 'select-real-estate' ),
				'description' => esc_html__( 'Chose owner to be displayed', 'select-real-estate' ),
				'parent'      => $property_contact_owner_container,
				'options'     => qodef_re_get_user_owner_options(),
			)
		);
	}
	
	add_action( 'qodef_re_action_property_meta_fields', 'qodef_re_map_property_contact_meta', 17, 1 );
}