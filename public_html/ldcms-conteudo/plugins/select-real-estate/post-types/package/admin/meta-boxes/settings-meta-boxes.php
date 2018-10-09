<?php

if ( ! function_exists( 'qodef_re_map_package_meta' ) ) {
	function qodef_re_map_package_meta() {
		
		$meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => 'package',
				'title' => esc_html__( 'Package Settings', 'select-real-estate' ),
				'name'  => 'package_settings_meta_box'
			)
		);
		
		$package_general_container = eiddo_qodef_add_admin_container(
			array(
				'type'   => 'container',
				'name'   => 'package_general_container',
				'parent' => $meta_box
			)
		);
		
		eiddo_qodef_add_admin_section_title(
			array(
				'title'  => esc_html__( 'General', 'select-real-estate' ),
				'name'   => 'property_general_container_title',
				'parent' => $package_general_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_package_unlimited_listings_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Unlimited Listings', 'select-real-estate' ),
				'parent'        => $package_general_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'       => 'qodef_package_listings_included_meta',
				'type'       => 'text',
				'label'      => esc_html__( 'Number of Listings Included', 'select-real-estate' ),
				'parent'     => $package_general_container,
				'args'       => array(
					'col_width' => 3
				),
				'dependency' => array(
					'hide' => array(
						'qodef_package_unlimited_listings_meta' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'   => 'qodef_package_featured_listings_included_meta',
				'type'   => 'text',
				'label'  => esc_html__( 'Number of Featured Listings Included', 'select-real-estate' ),
				'parent' => $package_general_container,
				'args'   => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'   => 'qodef_package_price_meta',
				'type'   => 'text',
				'label'  => esc_html__( 'Package Price', 'select-real-estate' ),
				'parent' => $package_general_container,
				'args'   => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_package_featured_meta',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Featured Package', 'select-real-estate' ),
				'default_value' => 'no',
				'parent'        => $package_general_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_package_duration_meta',
				'type'        => 'text',
				'default'     => '12',
				'label'       => esc_html__( 'Package Duration (months)', 'select-real-estate' ),
				'description' => esc_html__( 'Enter how many months the package lasts. Default is 12.', 'select-real-estate' ),
				'parent'      => $package_general_container,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'qodef_re_map_package_meta' );
}