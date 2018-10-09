<?php

if ( ! function_exists( 'eiddo_qodef_sidebar_options_map' ) ) {
	function eiddo_qodef_sidebar_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_sidebar_page',
				'title' => esc_html__( 'Sidebar Area', 'eiddo' ),
				'icon'  => 'fa fa-indent'
			)
		);
		
		$sidebar_panel = eiddo_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Sidebar Area', 'eiddo' ),
				'name'  => 'sidebar',
				'page'  => '_sidebar_page'
			)
		);
		
		eiddo_qodef_add_admin_field( array(
			'name'          => 'sidebar_layout',
			'type'          => 'select',
			'label'         => esc_html__( 'Sidebar Layout', 'eiddo' ),
			'description'   => esc_html__( 'Choose a sidebar layout for pages', 'eiddo' ),
			'parent'        => $sidebar_panel,
			'default_value' => 'no-sidebar',
            'options'       => eiddo_qodef_get_custom_sidebars_options()
		) );
		
		$eiddo_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $eiddo_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_admin_field( array(
				'name'        => 'custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'eiddo' ),
				'description' => esc_html__( 'Choose a sidebar to display on pages. Default sidebar is "Sidebar"', 'eiddo' ),
				'parent'      => $sidebar_panel,
				'options'     => $eiddo_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_sidebar_options_map', 9 );
}