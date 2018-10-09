<?php

if ( ! function_exists( 'eiddo_qodef_map_content_bottom_meta' ) ) {
	function eiddo_qodef_map_content_bottom_meta() {
		
		$content_bottom_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'content_bottom_meta' ),
				'title' => esc_html__( 'Content Bottom', 'eiddo' ),
				'name'  => 'content_bottom_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_enable_content_bottom_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Enable Content Bottom Area', 'eiddo' ),
				'description'   => esc_html__( 'This option will enable Content Bottom area on pages', 'eiddo' ),
				'parent'        => $content_bottom_meta_box,
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		$show_content_bottom_meta_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $content_bottom_meta_box,
				'name'            => 'qodef_show_content_bottom_meta_container',
				'dependency' => array(
					'show' => array(
						'qodef_enable_content_bottom_area_meta' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_content_bottom_sidebar_custom_display_meta',
				'type'          => 'selectblank',
				'default_value' => '',
				'label'         => esc_html__( 'Sidebar to Display', 'eiddo' ),
				'description'   => esc_html__( 'Choose a content bottom sidebar to display', 'eiddo' ),
				'options'       => eiddo_qodef_get_custom_sidebars(),
				'parent'        => $show_content_bottom_meta_container,
				'args'          => array(
					'select2' => true
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_content_bottom_in_grid_meta',
				'default_value' => '',
				'label'         => esc_html__( 'Display in Grid', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will place content bottom in grid', 'eiddo' ),
				'options'       => eiddo_qodef_get_yes_no_select_array(),
				'parent'        => $show_content_bottom_meta_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'type'        => 'color',
				'name'        => 'qodef_content_bottom_background_color_meta',
				'label'       => esc_html__( 'Background Color', 'eiddo' ),
				'description' => esc_html__( 'Choose a background color for content bottom area', 'eiddo' ),
				'parent'      => $show_content_bottom_meta_container
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_content_bottom_meta', 71 );
}