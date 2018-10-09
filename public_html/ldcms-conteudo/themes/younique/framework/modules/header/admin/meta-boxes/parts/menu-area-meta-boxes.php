<?php

if ( ! function_exists( 'eiddo_qodef_get_hide_dep_for_header_menu_area_meta_boxes' ) ) {
	function eiddo_qodef_get_hide_dep_for_header_menu_area_meta_boxes() {
		$hide_dep_options = apply_filters( 'eiddo_qodef_header_menu_area_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes' ) ) {
	function eiddo_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes() {
		$hide_dep_options = apply_filters( 'eiddo_qodef_header_menu_area_widgets_hide_meta_boxes', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_header_menu_area_meta_options_map' ) ) {
	function eiddo_qodef_header_menu_area_meta_options_map( $header_meta_box ) {
		$hide_dep_options = eiddo_qodef_get_hide_dep_for_header_menu_area_meta_boxes();
		$hide_dep_widgets = eiddo_qodef_get_hide_dep_for_header_menu_area_widgets_meta_boxes();
		
		$menu_area_container = eiddo_qodef_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'menu_area_container',
				'parent'     => $header_meta_box,
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta' => $hide_dep_options
					)
				),
				'args'       => array(
					'enable_panels_for_default_value' => true
				)
			)
		);
		
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $menu_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Menu Area Style', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_disable_header_widget_menu_area_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Disable Header Menu Area Widget', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will hide widget area from the menu area', 'eiddo' ),
				'parent'        => $menu_area_container,
				'dependency' => array(
					'hide' => array(
						'qodef_header_type_meta' => $hide_dep_widgets
					)
				)
			)
		);
		
		$eiddo_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $eiddo_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_meta_box_field(
				array(
					'name'        => 'qodef_custom_menu_area_sidebar_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Custom Widget Area In Menu Area', 'eiddo' ),
					'description' => esc_html__( 'Choose custom widget area to display in header menu area"', 'eiddo' ),
					'parent'      => $menu_area_container,
					'options'     => $eiddo_custom_sidebars,
					'dependency' => array(
						'hide' => array(
							'qodef_header_type_meta' => $hide_dep_widgets
						)
					)
				)
			);
		}
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area In Grid', 'eiddo' ),
				'description'   => esc_html__( 'Set menu area content to be in grid', 'eiddo' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_in_grid_container = eiddo_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_in_grid_container',
				'parent'          => $menu_area_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_in_grid_meta'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_grid_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Grid Background Color', 'eiddo' ),
				'description' => esc_html__( 'Set grid background color for menu area', 'eiddo' ),
				'parent'      => $menu_area_in_grid_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_grid_background_transparency_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Grid Background Transparency', 'eiddo' ),
				'description' => esc_html__( 'Set grid background transparency for menu area (0 = fully transparent, 1 = opaque)', 'eiddo' ),
				'parent'      => $menu_area_in_grid_container,
				'args'        => array(
					'col_width' => 2
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Grid Area Shadow', 'eiddo' ),
				'description'   => esc_html__( 'Set shadow on grid menu area', 'eiddo' ),
				'parent'        => $menu_area_in_grid_container,
				'default_value' => '',
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_in_grid_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Grid Area Border', 'eiddo' ),
				'description'   => esc_html__( 'Set border on grid menu area', 'eiddo' ),
				'parent'        => $menu_area_in_grid_container,
				'default_value' => '',
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_in_grid_border_container = eiddo_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_in_grid_border_container',
				'parent'          => $menu_area_in_grid_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_in_grid_border_meta'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_in_grid_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'eiddo' ),
				'description' => esc_html__( 'Set border color for grid area', 'eiddo' ),
				'parent'      => $menu_area_in_grid_border_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Background Color', 'eiddo' ),
				'description' => esc_html__( 'Choose a background color for menu area', 'eiddo' ),
				'parent'      => $menu_area_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_background_transparency_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Transparency', 'eiddo' ),
				'description' => esc_html__( 'Choose a transparency for the menu area background color (0 = fully transparent, 1 = opaque)', 'eiddo' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 2
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_shadow_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area Shadow', 'eiddo' ),
				'description'   => esc_html__( 'Set shadow on menu area', 'eiddo' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_menu_area_border_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Menu Area Border', 'eiddo' ),
				'description'   => esc_html__( 'Set border on menu area', 'eiddo' ),
				'parent'        => $menu_area_container,
				'default_value' => '',
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		$menu_area_border_bottom_color_container = eiddo_qodef_add_admin_container(
			array(
				'type'            => 'container',
				'name'            => 'menu_area_border_bottom_color_container',
				'parent'          => $menu_area_container,
				'dependency' => array(
					'show' => array(
						'qodef_menu_area_border_meta'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_menu_area_border_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Border Color', 'eiddo' ),
				'description' => esc_html__( 'Choose color of header bottom border', 'eiddo' ),
				'parent'      => $menu_area_border_bottom_color_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'type'        => 'text',
				'name'        => 'qodef_menu_area_side_padding_meta',
				'label'       => esc_html__( 'Menu Area Side Padding', 'eiddo' ),
				'description' => esc_html__( 'Enter value in px or percentage to define menu area side padding', 'eiddo' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => esc_html__( 'px or %', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'text',
				'name'          => 'qodef_dropdown_top_position_meta',
				'label'         => esc_html__( 'Dropdown Position', 'eiddo' ),
				'description'   => esc_html__( 'Enter value in percentage of entire header height', 'eiddo' ),
				'args'          => array(
					'col_width' => 3,
					'suffix'    => '%'
				)
			)
		);
		
		do_action( 'eiddo_qodef_header_menu_area_additional_meta_boxes_map', $menu_area_container );
	}
	
	add_action( 'eiddo_qodef_header_menu_area_meta_boxes_map', 'eiddo_qodef_header_menu_area_meta_options_map', 10, 1 );
}