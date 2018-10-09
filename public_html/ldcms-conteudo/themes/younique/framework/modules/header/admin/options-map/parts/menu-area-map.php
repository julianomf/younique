<?php

if ( ! function_exists( 'eiddo_qodef_get_hide_dep_for_header_menu_area_options' ) ) {
	function eiddo_qodef_get_hide_dep_for_header_menu_area_options() {
		$hide_dep_options = apply_filters( 'eiddo_qodef_header_menu_area_hide_global_option', $hide_dep_options = array() );
		
		return $hide_dep_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_header_menu_area_options_map' ) ) {
	function eiddo_qodef_header_menu_area_options_map( $panel_header ) {
		$hide_dep_options = eiddo_qodef_get_hide_dep_for_header_menu_area_options();
		
		$menu_area_container = eiddo_qodef_add_admin_container_no_style(
			array(
				'parent'          => $panel_header,
				'name'            => 'menu_area_container',
				'dependency' => array(
					'hide' => array(
						'header_options'  => $hide_dep_options
					)
				),
			)
		);
		
		eiddo_qodef_add_admin_section_title(
			array(
				'parent' => $menu_area_container,
				'name'   => 'menu_area_style',
				'title'  => esc_html__( 'Menu Area Style', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area In Grid', 'eiddo' ),
				'description'   => esc_html__( 'Set menu area content to be in grid', 'eiddo' ),
			)
		);
		
		$menu_area_in_grid_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $menu_area_container,
				'name'            => 'menu_area_in_grid_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_in_grid'  => 'no'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'color',
				'name'          => 'menu_area_grid_background_color',
				'default_value' => '',
				'label'         => esc_html__( 'Grid Background Color', 'eiddo' ),
				'description'   => esc_html__( 'Set grid background color for menu area', 'eiddo' ),
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'text',
				'name'          => 'menu_area_grid_background_transparency',
				'default_value' => '',
				'label'         => esc_html__( 'Grid Background Transparency', 'eiddo' ),
				'description'   => esc_html__( 'Set grid background transparency for menu area', 'eiddo' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Grid Area Shadow', 'eiddo' ),
				'description'   => esc_html__( 'Set shadow on grid area', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_in_grid_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Grid Area Border', 'eiddo' ),
				'description'   => esc_html__( 'Set border on grid area', 'eiddo' )
			)
		);
		
		$menu_area_in_grid_border_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $menu_area_in_grid_container,
				'name'            => 'menu_area_in_grid_border_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_in_grid_border'  => 'no'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_in_grid_border_container,
				'type'          => 'color',
				'name'          => 'menu_area_in_grid_border_color',
				'default_value' => '',
				'label'         => esc_html__( 'Border Color', 'eiddo' ),
				'description'   => esc_html__( 'Set border color for menu area', 'eiddo' ),
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'color',
				'name'          => 'menu_area_background_color',
				'default_value' => '',
				'label'         => esc_html__( 'Background Color', 'eiddo' ),
				'description'   => esc_html__( 'Set background color for menu area', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'text',
				'name'          => 'menu_area_background_transparency',
				'default_value' => '',
				'label'         => esc_html__( 'Background Transparency', 'eiddo' ),
				'description'   => esc_html__( 'Set background transparency for menu area', 'eiddo' ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $menu_area_container,
				'type'          => 'yesno',
				'name'          => 'menu_area_shadow',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area Area Shadow', 'eiddo' ),
				'description'   => esc_html__( 'Set shadow on menu area', 'eiddo' ),
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'menu_area_border',
				'default_value' => 'no',
				'label'         => esc_html__( 'Menu Area Border', 'eiddo' ),
				'description'   => esc_html__( 'Set border on menu area', 'eiddo' ),
				'parent'        => $menu_area_container
			)
		);
		
		$menu_area_border_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $menu_area_container,
				'name'            => 'menu_area_border_container',
				'dependency' => array(
					'hide' => array(
						'menu_area_border'  => 'no'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'        => 'color',
				'name'        => 'menu_area_border_color',
				'label'       => esc_html__( 'Border Color', 'eiddo' ),
				'description' => esc_html__( 'Set border color for menu area', 'eiddo' ),
				'parent'      => $menu_area_border_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'        => 'text',
				'name'        => 'menu_area_height',
				'label'       => esc_html__( 'Height', 'eiddo' ),
				'description' => esc_html__( 'Enter header height', 'eiddo' ),
				'parent'      => $menu_area_container,
				'args'        => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'   => 'text',
				'name'   => 'menu_area_side_padding',
				'label'  => esc_html__( 'Menu Area Side Padding', 'eiddo' ),
				'parent' => $menu_area_container,
				'args'   => array(
					'col_width' => 2,
					'suffix'    => esc_html__( 'px or %', 'eiddo' )
				)
			)
		);
		
		do_action( 'eiddo_qodef_header_menu_area_additional_options', $panel_header );
	}
	
	add_action( 'eiddo_qodef_header_menu_area_options_map', 'eiddo_qodef_header_menu_area_options_map', 10, 1 );
}