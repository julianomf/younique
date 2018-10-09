<?php

if ( ! function_exists( 'eiddo_qodef_sidearea_options_map' ) ) {
	function eiddo_qodef_sidearea_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_side_area_page',
				'title' => esc_html__( 'Side Area', 'eiddo' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$side_area_panel = eiddo_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Side Area', 'eiddo' ),
				'name'  => 'side_area',
				'page'  => '_side_area_page'
			)
		);

		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $side_area_panel,
				'type'          => 'select',
				'name'          => 'side_area_icon_source',
				'default_value' => 'icon_pack',
				'label'         => esc_html__( 'Select Side Area Icon Source', 'eiddo' ),
				'description'   => esc_html__( 'Choose whether you would like to use icons from an icon pack or SVG icons', 'eiddo' ),
				'options'       => eiddo_qodef_get_icon_sources_array()
			)
		);

		$side_area_icon_pack_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $side_area_panel,
				'name'            => 'side_area_icon_pack_container',
				'dependency' => array(
					'show' => array(
						'side_area_icon_source' => 'icon_pack'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $side_area_icon_pack_container,
				'type'          => 'select',
				'name'          => 'side_area_icon_pack',
				'default_value' => 'font_elegant',
				'label'         => esc_html__( 'Side Area Icon Pack', 'eiddo' ),
				'description'   => esc_html__( 'Choose icon pack for Side Area icon', 'eiddo' ),
				'options'       => eiddo_qodef_icon_collections()->getIconCollectionsExclude( array( 'linea_icons', 'dripicons', 'simple_line_icons' ) )
			)
		);

		$side_area_svg_icons_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $side_area_panel,
				'name'            => 'side_area_svg_icons_container',
				'dependency' => array(
					'show' => array(
						'side_area_icon_source' => 'svg_path'
					)
				)
			)
		);

		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $side_area_svg_icons_container,
				'type'        => 'textarea',
				'name'        => 'side_area_icon_svg_path',
				'label'       => esc_html__( 'Side Area Icon SVG Path', 'eiddo' ),
				'description' => esc_html__( 'Enter your Side Area icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'eiddo' ),
			)
		);

		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $side_area_svg_icons_container,
				'type'        => 'textarea',
				'name'        => 'side_area_close_icon_svg_path',
				'label'       => esc_html__( 'Side Area Close Icon SVG Path', 'eiddo' ),
				'description' => esc_html__( 'Enter your Side Area close icon SVG path here. Please remove version and id attributes from your SVG path because of HTML validation', 'eiddo' ),
			)
		);
		
		$side_area_icon_style_group = eiddo_qodef_add_admin_group(
			array(
				'parent'      => $side_area_panel,
				'name'        => 'side_area_icon_style_group',
				'title'       => esc_html__( 'Side Area Icon Style', 'eiddo' ),
				'description' => esc_html__( 'Define styles for Side Area icon', 'eiddo' )
			)
		);
		
		$side_area_icon_style_row1 = eiddo_qodef_add_admin_row(
			array(
				'parent' => $side_area_icon_style_group,
				'name'   => 'side_area_icon_style_row1'
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type'   => 'colorsimple',
				'name'   => 'side_area_icon_color',
				'label'  => esc_html__( 'Color', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row1,
				'type'   => 'colorsimple',
				'name'   => 'side_area_icon_hover_color',
				'label'  => esc_html__( 'Hover Color', 'eiddo' )
			)
		);
		
		$side_area_icon_style_row2 = eiddo_qodef_add_admin_row(
			array(
				'parent' => $side_area_icon_style_group,
				'name'   => 'side_area_icon_style_row2',
				'next'   => true
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type'   => 'colorsimple',
				'name'   => 'side_area_close_icon_color',
				'label'  => esc_html__( 'Close Icon Color', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent' => $side_area_icon_style_row2,
				'type'   => 'colorsimple',
				'name'   => 'side_area_close_icon_hover_color',
				'label'  => esc_html__( 'Close Icon Hover Color', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $side_area_panel,
				'type'          => 'text',
				'name'          => 'side_area_width',
				'default_value' => '',
				'label'         => esc_html__( 'Side Area Width', 'eiddo' ),
				'description'   => esc_html__( 'Enter a width for Side Area', 'eiddo' ),
				'args'          => array(
					'col_width' => 3,
					'suffix'    => 'px'
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $side_area_panel,
				'type'        => 'color',
				'name'        => 'side_area_background_color',
				'label'       => esc_html__( 'Background Color', 'eiddo' ),
				'description' => esc_html__( 'Choose a background color for Side Area', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $side_area_panel,
				'type'        => 'text',
				'name'        => 'side_area_padding',
				'label'       => esc_html__( 'Padding', 'eiddo' ),
				'description' => esc_html__( 'Define padding for Side Area in format top right bottom left', 'eiddo' ),
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $side_area_panel,
				'type'          => 'selectblank',
				'name'          => 'side_area_aligment',
				'default_value' => '',
				'label'         => esc_html__( 'Text Alignment', 'eiddo' ),
				'description'   => esc_html__( 'Choose text alignment for side area', 'eiddo' ),
				'options'       => array(
					''       => esc_html__( 'Default', 'eiddo' ),
					'left'   => esc_html__( 'Left', 'eiddo' ),
					'center' => esc_html__( 'Center', 'eiddo' ),
					'right'  => esc_html__( 'Right', 'eiddo' )
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_sidearea_options_map', 15 );
}