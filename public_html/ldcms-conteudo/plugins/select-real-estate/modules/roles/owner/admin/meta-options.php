<?php

if (! function_exists('qodef_re_owner_meta_options')) {
	function qodef_re_owner_meta_options(){

		$owner_fields = eiddo_qodef_add_user_fields(
			array(
				'scope' => array('owner'),
				'name'  => 'owner_fields'
			)
		);

		$owner_group = eiddo_qodef_add_user_group(
			array(
				'name'        => 'owner_group',
				'title'       => esc_html__( 'Owner Info', 'select-real-estate' ),
				'parent'      => $owner_fields
			)
		);
		
		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_owner_profile_image',
				'type'        => 'image',
				'label'       => esc_html__( 'Owner Profile Image', 'select-real-estate' ),
				'parent'      => $owner_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_owner_telephone',
				'type'        => 'text',
				'label'       => esc_html__( 'Owner Telephone', 'select-real-estate' ),
				'parent'      => $owner_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_owner_mobile_phone',
				'type'        => 'text',
				'label'       => esc_html__( 'Owner Mobile Phone', 'select-real-estate' ),
				'parent'      => $owner_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_owner_fax_number',
				'type'        => 'text',
				'label'       => esc_html__( 'Owner Fax Number', 'select-real-estate' ),
				'parent'      => $owner_group
			)
		);

		eiddo_qodef_add_user_field(
			array(
				'name'        => 'qodef_owner_address',
				'type'        => 'text',
				'label'       => esc_html__( 'Owner Address', 'select-real-estate' ),
				'parent'      => $owner_group
			)
		);
	}

	add_action( 'eiddo_qodef_custom_user_fields', 'qodef_re_owner_meta_options' );
}