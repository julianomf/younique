<?php

if ( ! function_exists( 'eiddo_qodef_map_post_link_meta' ) ) {
	function eiddo_qodef_map_post_link_meta() {
		$link_post_format_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Link Post Format', 'eiddo' ),
				'name'  => 'post_format_link_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_link_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Link', 'eiddo' ),
				'description' => esc_html__( 'Enter link', 'eiddo' ),
				'parent'      => $link_post_format_meta_box
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_post_link_meta', 24 );
}