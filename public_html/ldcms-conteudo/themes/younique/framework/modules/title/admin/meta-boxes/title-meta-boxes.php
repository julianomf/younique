<?php

if ( ! function_exists( 'eiddo_qodef_get_title_types_meta_boxes' ) ) {
	function eiddo_qodef_get_title_types_meta_boxes() {
		$title_type_options = apply_filters( 'eiddo_qodef_title_type_meta_boxes', $title_type_options = array( '' => esc_html__( 'Default', 'eiddo' ) ) );
		
		return $title_type_options;
	}
}

foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/title/types/*/admin/meta-boxes/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'eiddo_qodef_map_title_meta' ) ) {
	function eiddo_qodef_map_title_meta() {
		$title_type_meta_boxes = eiddo_qodef_get_title_types_meta_boxes();
		
		$title_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'title_meta' ),
				'title' => esc_html__( 'Title', 'eiddo' ),
				'name'  => 'title_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'eiddo' ),
				'parent'        => $title_meta_box,
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
			$show_title_area_meta_container = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $title_meta_box,
					'name'            => 'qodef_show_title_area_meta_container',
					'dependency' => array(
						'hide' => array(
							'qodef_show_title_area_meta' => 'no'
						)
					)
				)
			);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_type_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area Type', 'eiddo' ),
						'description'   => esc_html__( 'Choose title type', 'eiddo' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => $title_type_meta_boxes
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_in_grid_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Area In Grid', 'eiddo' ),
						'description'   => esc_html__( 'Set title area content to be in grid', 'eiddo' ),
						'options'       => eiddo_qodef_get_yes_no_select_array(),
						'parent'        => $show_title_area_meta_container
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_height_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Height', 'eiddo' ),
						'description' => esc_html__( 'Set a height for Title Area', 'eiddo' ),
						'parent'      => $show_title_area_meta_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px'
						)
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_background_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Background Color', 'eiddo' ),
						'description' => esc_html__( 'Choose a background color for title area', 'eiddo' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_area_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'eiddo' ),
						'description' => esc_html__( 'Choose an Image for title area', 'eiddo' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_background_image_behavior_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Behavior', 'eiddo' ),
						'description'   => esc_html__( 'Choose title area background image behavior', 'eiddo' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''                    => esc_html__( 'Default', 'eiddo' ),
							'hide'                => esc_html__( 'Hide Image', 'eiddo' ),
							'responsive'          => esc_html__( 'Enable Responsive Image', 'eiddo' ),
							'responsive-disabled' => esc_html__( 'Disable Responsive Image', 'eiddo' ),
							'parallax'            => esc_html__( 'Enable Parallax Image', 'eiddo' ),
							'parallax-zoom-out'   => esc_html__( 'Enable Parallax With Zoom Out Image', 'eiddo' ),
							'parallax-disabled'   => esc_html__( 'Disable Parallax Image', 'eiddo' )
						)
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_vertical_alignment_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Vertical Alignment', 'eiddo' ),
						'description'   => esc_html__( 'Specify title area content vertical alignment', 'eiddo' ),
						'parent'        => $show_title_area_meta_container,
						'options'       => array(
							''              => esc_html__( 'Default', 'eiddo' ),
							'header-bottom' => esc_html__( 'From Bottom of Header', 'eiddo' ),
							'window-top'    => esc_html__( 'From Window Top', 'eiddo' )
						)
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_title_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Title Tag', 'eiddo' ),
						'options'       => eiddo_qodef_get_title_tag( true ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_title_text_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Title Color', 'eiddo' ),
						'description' => esc_html__( 'Choose a color for title text', 'eiddo' ),
						'parent'      => $show_title_area_meta_container
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_subtitle_meta',
						'type'          => 'text',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Text', 'eiddo' ),
						'description'   => esc_html__( 'Enter your subtitle text', 'eiddo' ),
						'parent'        => $show_title_area_meta_container,
						'args'          => array(
							'col_width' => 6
						)
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_title_area_subtitle_tag_meta',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Subtitle Tag', 'eiddo' ),
						'options'       => eiddo_qodef_get_title_tag( true, array( 'p' => 'p' ) ),
						'parent'        => $show_title_area_meta_container
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_subtitle_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Subtitle Color', 'eiddo' ),
						'description' => esc_html__( 'Choose a color for subtitle text', 'eiddo' ),
						'parent'      => $show_title_area_meta_container
					)
				);
		
		/***************** Additional Title Area Layout - start *****************/
		
		do_action( 'eiddo_qodef_additional_title_area_meta_boxes', $show_title_area_meta_container );
		
		/***************** Additional Title Area Layout - end *****************/
		
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_title_meta', 60 );
}