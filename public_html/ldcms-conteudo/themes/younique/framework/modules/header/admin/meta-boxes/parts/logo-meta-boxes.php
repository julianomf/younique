<?php

if ( ! function_exists( 'eiddo_qodef_logo_meta_box_map' ) ) {
	function eiddo_qodef_logo_meta_box_map() {
		
		$logo_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'logo_meta' ),
				'title' => esc_html__( 'Logo', 'eiddo' ),
				'name'  => 'logo_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Default', 'eiddo' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'eiddo' ),
				'parent'      => $logo_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_dark_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Dark', 'eiddo' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'eiddo' ),
				'parent'      => $logo_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_light_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Light', 'eiddo' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'eiddo' ),
				'parent'      => $logo_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_sticky_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Sticky', 'eiddo' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'eiddo' ),
				'parent'      => $logo_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_logo_image_mobile_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Logo Image - Mobile', 'eiddo' ),
				'description' => esc_html__( 'Choose a default logo image to display ', 'eiddo' ),
				'parent'      => $logo_meta_box
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_logo_meta_box_map', 47 );
}