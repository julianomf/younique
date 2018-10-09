<?php

foreach ( glob( QODE_FRAMEWORK_MODULES_ROOT_DIR . '/blog/admin/meta-boxes/*/*.php' ) as $meta_box_load ) {
	include_once $meta_box_load;
}

if ( ! function_exists( 'eiddo_qodef_map_blog_meta' ) ) {
	function eiddo_qodef_map_blog_meta() {
		$qodef_blog_categories = array();
		$categories           = get_categories();
		foreach ( $categories as $category ) {
			$qodef_blog_categories[ $category->slug ] = $category->name;
		}
		
		$blog_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'page' ),
				'title' => esc_html__( 'Blog', 'eiddo' ),
				'name'  => 'blog_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_blog_category_meta',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Blog Category', 'eiddo' ),
				'description' => esc_html__( 'Choose category of posts to display (leave empty to display all categories)', 'eiddo' ),
				'parent'      => $blog_meta_box,
				'options'     => $qodef_blog_categories
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_show_posts_per_page_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Number of Posts', 'eiddo' ),
				'description' => esc_html__( 'Enter the number of posts to display', 'eiddo' ),
				'parent'      => $blog_meta_box,
				'options'     => $qodef_blog_categories,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_blog_pagination_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Pagination Type', 'eiddo' ),
				'description'   => esc_html__( 'Choose a pagination layout for Blog Lists', 'eiddo' ),
				'parent'        => $blog_meta_box,
				'default_value' => '',
				'options'       => array(
					''                => esc_html__( 'Default', 'eiddo' ),
					'standard'        => esc_html__( 'Standard', 'eiddo' ),
					'load-more'       => esc_html__( 'Load More', 'eiddo' ),
					'infinite-scroll' => esc_html__( 'Infinite Scroll', 'eiddo' ),
					'no-pagination'   => esc_html__( 'No Pagination', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'type'          => 'text',
				'name'          => 'qodef_number_of_chars_meta',
				'default_value' => '',
				'label'         => esc_html__( 'Number of Words in Excerpt', 'eiddo' ),
				'description'   => esc_html__( 'Enter a number of words in excerpt (article summary). Default value is 40', 'eiddo' ),
				'parent'        => $blog_meta_box,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_blog_meta', 30 );
}