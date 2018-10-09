<?php

if ( ! function_exists( 'eiddo_qodef_map_post_gallery_meta' ) ) {
	
	function eiddo_qodef_map_post_gallery_meta() {
		$gallery_post_format_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Gallery Post Format', 'eiddo' ),
				'name'  => 'post_format_gallery_meta'
			)
		);
		
		eiddo_qodef_add_multiple_images_field(
			array(
				'name'        => 'qodef_post_gallery_images_meta',
				'label'       => esc_html__( 'Gallery Images', 'eiddo' ),
				'description' => esc_html__( 'Choose your gallery images', 'eiddo' ),
				'parent'      => $gallery_post_format_meta_box,
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_post_gallery_meta', 21 );
}
