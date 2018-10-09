<?php

if ( ! function_exists( 'eiddo_qodef_breadcrumbs_title_type_options_meta_boxes' ) ) {
	function eiddo_qodef_breadcrumbs_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_breadcrumbs_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Breadcrumbs Color', 'eiddo' ),
				'description' => esc_html__( 'Choose a color for breadcrumbs text', 'eiddo' ),
				'parent'      => $show_title_area_meta_container
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_title_area_meta_boxes', 'eiddo_qodef_breadcrumbs_title_type_options_meta_boxes' );
}