<?php

if ( ! function_exists( 'eiddo_qodef_map_post_quote_meta' ) ) {
	function eiddo_qodef_map_post_quote_meta() {
		$quote_post_format_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Quote Post Format', 'eiddo' ),
				'name'  => 'post_format_quote_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_quote_text_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Text', 'eiddo' ),
				'description' => esc_html__( 'Enter Quote text', 'eiddo' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_post_quote_author_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Quote Author', 'eiddo' ),
				'description' => esc_html__( 'Enter Quote author', 'eiddo' ),
				'parent'      => $quote_post_format_meta_box
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_post_quote_meta', 25 );
}