<?php

/*** Post Settings ***/

if ( ! function_exists( 'eiddo_qodef_map_post_meta' ) ) {
	function eiddo_qodef_map_post_meta() {
		
		$post_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'post' ),
				'title' => esc_html__( 'Post', 'eiddo' ),
				'name'  => 'post-meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_single_sidebar_layout_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'eiddo' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog single page', 'eiddo' ),
				'default_value' => '',
				'parent'        => $post_meta_box,
                'options'       => eiddo_qodef_get_custom_sidebars_options( true )
			)
		);
		
		$eiddo_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $eiddo_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_meta_box_field( array(
				'name'        => 'qodef_blog_single_custom_sidebar_area_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'eiddo' ),
				'description' => esc_html__( 'Choose a sidebar to display on Blog single page. Default sidebar is "Sidebar"', 'eiddo' ),
				'parent'      => $post_meta_box,
				'options'     => eiddo_qodef_get_custom_sidebars(),
				'args' => array(
					'select2' => true
				)
			) );
		}
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_list_featured_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Blog List Image', 'eiddo' ),
				'description' => esc_html__( 'Choose an Image for displaying in blog list. If not uploaded, featured image will be shown.', 'eiddo' ),
				'parent'      => $post_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_blog_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show title area on your single post page', 'eiddo' ),
				'parent'        => $post_meta_box,
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);

		do_action('eiddo_qodef_blog_post_meta', $post_meta_box);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_post_meta', 20 );
}
