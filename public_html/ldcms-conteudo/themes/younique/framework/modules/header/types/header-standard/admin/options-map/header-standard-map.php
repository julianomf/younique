<?php

if ( ! function_exists( 'eiddo_qodef_get_hide_dep_for_header_standard_options' ) ) {
	function eiddo_qodef_get_hide_dep_for_header_standard_options() {
		$hide_dep_options = apply_filters( 'eiddo_qodef_header_standard_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_header_standard_map' ) ) {
	function eiddo_qodef_header_standard_map( $parent ) {
		$hide_dep_options = eiddo_qodef_get_hide_dep_for_header_standard_options();
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'          => $parent,
				'type'            => 'select',
				'name'            => 'set_menu_area_position',
				'default_value'   => 'right',
				'label'           => esc_html__( 'Choose Menu Area Position', 'eiddo' ),
				'description'     => esc_html__( 'Select menu area position in your header', 'eiddo' ),
				'options'         => array(
					'right'  => esc_html__( 'Right', 'eiddo' ),
					'left'   => esc_html__( 'Left', 'eiddo' ),
					'center' => esc_html__( 'Center', 'eiddo' )
				),
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_header_menu_area_options_map', 'eiddo_qodef_header_standard_map' );
}