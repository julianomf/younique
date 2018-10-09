<?php

if ( ! function_exists( 'eiddo_qodef_map_sidebar_meta' ) ) {
	function eiddo_qodef_map_sidebar_meta() {
		$qodef_sidebar_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page' ), 'sidebar_meta' ),
				'title' => esc_html__( 'Sidebar', 'eiddo' ),
				'name'  => 'sidebar_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_sidebar_layout_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Sidebar Layout', 'eiddo' ),
				'description' => esc_html__( 'Choose the sidebar layout', 'eiddo' ),
				'parent'      => $qodef_sidebar_meta_box,
                'options'       => eiddo_qodef_get_custom_sidebars_options( true )
			)
		);
		
		$qodef_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $qodef_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_meta_box_field(
				array(
					'name'        => 'qodef_custom_sidebar_area_meta',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Choose Widget Area in Sidebar', 'eiddo' ),
					'description' => esc_html__( 'Choose Custom Widget area to display in Sidebar"', 'eiddo' ),
					'parent'      => $qodef_sidebar_meta_box,
					'options'     => $qodef_custom_sidebars,
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_sidebar_meta', 31 );
}