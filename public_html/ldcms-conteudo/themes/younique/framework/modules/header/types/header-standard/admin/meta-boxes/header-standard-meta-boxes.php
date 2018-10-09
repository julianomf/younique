<?php

if ( ! function_exists( 'eiddo_qodef_get_hide_dep_for_header_standard_meta_boxes' ) ) {
	function eiddo_qodef_get_hide_dep_for_header_standard_meta_boxes() {
		$hide_dep_options = apply_filters( 'eiddo_qodef_header_standard_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_header_standard_meta_map' ) ) {
	function eiddo_qodef_header_standard_meta_map( $parent ) {
		$hide_dep_options = eiddo_qodef_get_hide_dep_for_header_standard_meta_boxes();
		
		eiddo_qodef_add_meta_box_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'qodef_set_menu_area_position_meta',
				'default_value'   => '',
				'label'           => esc_html__( 'Choose Menu Area Position', 'eiddo' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'eiddo' ),
				'options'         => array(
					''       => esc_html__( 'Default', 'eiddo' ),
					'left'   => esc_html__( 'Left', 'eiddo' ),
					'right'  => esc_html__( 'Right', 'eiddo' ),
					'center' => esc_html__( 'Center', 'eiddo' )
				),
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_header_area_meta_boxes_map', 'eiddo_qodef_header_standard_meta_map' );
}