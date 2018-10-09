<?php

if ( ! function_exists( 'eiddo_qodef_map_footer_meta' ) ) {
	function eiddo_qodef_map_footer_meta() {
		
		$footer_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'footer_meta' ),
				'title' => esc_html__( 'Footer', 'eiddo' ),
				'name'  => 'footer_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_disable_footer_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Disable Footer for this Page', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will hide footer on this page', 'eiddo' ),
				'options'       => eiddo_qodef_get_yes_no_select_array(),
				'parent'        => $footer_meta_box
			)
		);
		
		$show_footer_meta_container = eiddo_qodef_add_admin_container(
			array(
				'name'       => 'qodef_show_footer_meta_container',
				'parent'     => $footer_meta_box,
				'dependency' => array(
					'hide' => array(
						'qodef_disable_footer_meta' => 'yes'
					)
				)
			)
		);
		
			eiddo_qodef_add_meta_box_field(
				array(
					'name'          => 'qodef_show_footer_top_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Show Footer Top', 'eiddo' ),
					'description'   => esc_html__( 'Enabling this option will show Footer Top area', 'eiddo' ),
					'options'       => eiddo_qodef_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
			
			eiddo_qodef_add_meta_box_field(
				array(
					'name'          => 'qodef_show_footer_bottom_meta',
					'type'          => 'select',
					'default_value' => '',
					'label'         => esc_html__( 'Show Footer Bottom', 'eiddo' ),
					'description'   => esc_html__( 'Enabling this option will show Footer Bottom area', 'eiddo' ),
					'options'       => eiddo_qodef_get_yes_no_select_array(),
					'parent'        => $show_footer_meta_container
				)
			);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_footer_meta', 70 );
}