<?php

if ( ! function_exists( 'eiddo_qodef_centered_title_type_options_meta_boxes' ) ) {
	function eiddo_qodef_centered_title_type_options_meta_boxes( $show_title_area_meta_container ) {
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_subtitle_side_padding_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Subtitle Side Padding', 'eiddo' ),
				'description' => esc_html__( 'Set left/right padding for subtitle area', 'eiddo' ),
				'parent'      => $show_title_area_meta_container,
				'args'        => array(
					'col_width' => 2,
					'suffix'    => 'px or %'
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_title_area_meta_boxes', 'eiddo_qodef_centered_title_type_options_meta_boxes', 5 );
}