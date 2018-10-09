<?php

if ( ! function_exists( 'eiddo_qodef_get_blog_list_types_options' ) ) {
	function eiddo_qodef_get_blog_list_types_options() {
		$blog_list_type_options = apply_filters( 'eiddo_qodef_blog_list_type_global_option', $blog_list_type_options = array() );
		
		return $blog_list_type_options;
	}
}

if ( ! function_exists( 'eiddo_qodef_blog_options_map' ) ) {
	function eiddo_qodef_blog_options_map() {
		$blog_list_type_options = eiddo_qodef_get_blog_list_types_options();
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_blog_page',
				'title' => esc_html__( 'Blog', 'eiddo' ),
				'icon'  => 'fa fa-files-o'
			)
		);
		
		/**
		 * Blog Lists
		 */
		$panel_blog_lists = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_blog_page',
				'name'  => 'panel_blog_lists',
				'title' => esc_html__( 'Blog Lists', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_list_type',
				'type'          => 'select',
				'label'         => esc_html__( 'Blog Layout for Archive Pages', 'eiddo' ),
				'description'   => esc_html__( 'Choose a default blog layout for archived blog post lists', 'eiddo' ),
				'default_value' => 'standard',
				'parent'        => $panel_blog_lists,
				'options'       => $blog_list_type_options
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'archive_sidebar_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout for Archive Pages', 'eiddo' ),
				'description'   => esc_html__( 'Choose a sidebar layout for archived blog post lists', 'eiddo' ),
				'default_value' => '',
				'parent'        => $panel_blog_lists,
                'options'       => eiddo_qodef_get_custom_sidebars_options(),
			)
		);
		
		$eiddo_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $eiddo_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_admin_field(
				array(
					'name'        => 'archive_custom_sidebar_area',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Sidebar to Display for Archive Pages', 'eiddo' ),
					'description' => esc_html__( 'Choose a sidebar to display on archived blog post lists. Default sidebar is "Sidebar Page"', 'eiddo' ),
					'parent'      => $panel_blog_lists,
					'options'     => eiddo_qodef_get_custom_sidebars(),
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_pagination_type',
				'type'          => 'select',
				'label'         => esc_html__( 'Pagination Type', 'eiddo' ),
				'description'   => esc_html__( 'Choose a pagination layout for Blog Lists', 'eiddo' ),
				'parent'        => $panel_blog_lists,
				'default_value' => 'standard',
				'options'       => array(
					'standard'        => esc_html__( 'Standard', 'eiddo' ),
					'load-more'       => esc_html__( 'Load More', 'eiddo' ),
					'infinite-scroll' => esc_html__( 'Infinite Scroll', 'eiddo' ),
					'no-pagination'   => esc_html__( 'No Pagination', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'number_of_chars',
				'default_value' => '40',
				'label'         => esc_html__( 'Number of Words in Excerpt', 'eiddo' ),
				'description'   => esc_html__( 'Enter a number of words in excerpt (article summary). Default value is 40', 'eiddo' ),
				'parent'        => $panel_blog_lists,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		/**
		 * Blog Single
		 */
		$panel_blog_single = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_blog_page',
				'name'  => 'panel_blog_single',
				'title' => esc_html__( 'Blog Single', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_single_sidebar_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'eiddo' ),
				'description'   => esc_html__( 'Choose a sidebar layout for Blog Single pages', 'eiddo' ),
				'default_value' => '',
				'parent'        => $panel_blog_single,
                'options'       => eiddo_qodef_get_custom_sidebars_options()
			)
		);
		
		if ( count( $eiddo_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_admin_field(
				array(
					'name'        => 'blog_single_custom_sidebar_area',
					'type'        => 'selectblank',
					'label'       => esc_html__( 'Sidebar to Display', 'eiddo' ),
					'description' => esc_html__( 'Choose a sidebar to display on Blog Single pages. Default sidebar is "Sidebar"', 'eiddo' ),
					'parent'      => $panel_blog_single,
					'options'     => eiddo_qodef_get_custom_sidebars(),
					'args'        => array(
						'select2' => true
					)
				)
			);
		}
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_blog',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single post pages', 'eiddo' ),
				'parent'        => $panel_blog_single,
				'options'       => eiddo_qodef_get_yes_no_select_array(),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_single_title_in_title_area',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Post Title in Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show post title in title area on single post pages', 'eiddo' ),
				'parent'        => $panel_blog_single,
				'dependency' => array(
					'hide' => array(
						'show_title_area_blog' => 'no'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_single_related_posts',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Related Posts', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show related posts on single post pages', 'eiddo' ),
				'parent'        => $panel_blog_single,
				'default_value' => 'yes'
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'blog_single_comments',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Comments Form', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show comments form on single post pages', 'eiddo' ),
				'parent'        => $panel_blog_single,
				'default_value' => 'yes'
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_single_navigation',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Prev/Next Single Post Navigation Links', 'eiddo' ),
				'description'   => esc_html__( 'Enable navigation links through the blog posts (left and right arrows will appear)', 'eiddo' ),
				'parent'        => $panel_blog_single
			)
		);
		
		$blog_single_navigation_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'qodef_blog_single_navigation_container',
				'parent'          => $panel_blog_single,
				'dependency' => array(
					'show' => array(
						'blog_single_navigation' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_navigation_through_same_category',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Navigation Only in Current Category', 'eiddo' ),
				'description'   => esc_html__( 'Limit your navigation only through current category', 'eiddo' ),
				'parent'        => $blog_single_navigation_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_author_info',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Author Info Box', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will display author name and descriptions on single post pages', 'eiddo' ),
				'parent'        => $panel_blog_single
			)
		);
		
		$blog_single_author_info_container = eiddo_qodef_add_admin_container(
			array(
				'name'            => 'qodef_blog_single_author_info_container',
				'parent'          => $panel_blog_single,
				'dependency' => array(
					'show' => array(
						'blog_author_info' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_author_info_email',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Author Email', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show author email', 'eiddo' ),
				'parent'        => $blog_single_author_info_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'blog_single_author_social',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Author Social Icons', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show author social icons on single post pages', 'eiddo' ),
				'parent'        => $blog_single_author_info_container,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		do_action( 'eiddo_qodef_blog_single_options_map', $panel_blog_single );
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_blog_options_map', 13 );
}