<?php

if (! function_exists('qodef_re_agency_meta_options')) {
	function qodef_re_agency_meta_options(){

		$agency_fields = eiddo_qodef_add_user_fields(
			array(
				'scope' => array('agency'),
				'name'  => 'agency_fields'
			)
		);

		$agency_group = eiddo_qodef_add_user_group(
			array(
				'name'        => 'agency_group',
				'title'       => esc_html__( 'Agency Info', 'select-real-estate' ),
				'parent'      => $agency_fields
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_name',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Name', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_profile_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Agency Profile Image', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_licence',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Licence', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_telephone',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Telephone', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_mobile_phone',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Mobile Phone', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_fax_number',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Fax Number', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_agency_address',
				'type'        => 'text',
				'label'       => esc_html__( 'Agency Address', 'select-real-estate' ),
				'parent'      => $agency_group
			)
		);
	}

	add_action( 'eiddo_qodef_custom_user_fields', 'qodef_re_agency_meta_options' );
}