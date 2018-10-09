<?php

if ( ! function_exists( 'qodef_core_reviews_map' ) ) {
	function qodef_core_reviews_map() {
		
		$reviews_panel = eiddo_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Reviews', 'select-core' ),
				'name'  => 'panel_reviews',
				'page'  => '_page_page'
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $reviews_panel,
				'type'        => 'text',
				'name'        => 'reviews_section_title',
				'label'       => esc_html__( 'Reviews Section Title', 'select-core' ),
				'description' => esc_html__( 'Enter title that you want to show before average rating for each room', 'select-core' ),
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'      => $reviews_panel,
				'type'        => 'textarea',
				'name'        => 'reviews_section_subtitle',
				'label'       => esc_html__( 'Reviews Section Subtitle', 'select-core' ),
				'description' => esc_html__( 'Enter subtitle that you want to show before average rating for each room', 'select-core' ),
			)
		);
		
		do_action( 'qodef_hotel_room_action_single_fields' );
	}
	
	add_action( 'eiddo_qodef_additional_page_options_map', 'qodef_core_reviews_map', 75 ); //one after elements
}