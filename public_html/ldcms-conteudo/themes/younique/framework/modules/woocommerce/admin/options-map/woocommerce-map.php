<?php

if ( ! function_exists( 'eiddo_qodef_woocommerce_options_map' ) ) {
	
	/**
	 * Add Woocommerce options page
	 */
	function eiddo_qodef_woocommerce_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_woocommerce_page',
				'title' => esc_html__( 'Woocommerce', 'eiddo' ),
				'icon'  => 'fa fa-shopping-cart'
			)
		);
		
		/**
		 * Product List Settings
		 */
		$panel_product_list = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_product_list',
				'title' => esc_html__( 'Product List', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_product_list_columns',
				'label'         => esc_html__( 'Product List Columns', 'eiddo' ),
				'default_value' => 'qodef-woocommerce-columns-3',
				'description'   => esc_html__( 'Choose number of columns for main shop page', 'eiddo' ),
				'options'       => array(
					'qodef-woocommerce-columns-3' => esc_html__( '3 Columns', 'eiddo' ),
					'qodef-woocommerce-columns-4' => esc_html__( '4 Columns', 'eiddo' )
				),
				'parent'        => $panel_product_list,
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_product_list_columns_space',
				'label'         => esc_html__( 'Space Between Items', 'eiddo' ),
				'description'   => esc_html__( 'Select space between items for product listing and related products on single product', 'eiddo' ),
				'default_value' => 'normal',
				'options'       => eiddo_qodef_get_space_between_items_array(),
				'parent'        => $panel_product_list,
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'qodef_woo_products_per_page',
				'label'         => esc_html__( 'Number of products per page', 'eiddo' ),
				'description'   => esc_html__( 'Set number of products on shop page', 'eiddo' ),
				'parent'        => $panel_product_list,
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_products_list_title_tag',
				'label'         => esc_html__( 'Products Title Tag', 'eiddo' ),
				'default_value' => 'h5',
				'options'       => eiddo_qodef_get_title_tag(),
				'parent'        => $panel_product_list,
			)
		);
		
		/**
		 * Single Product Settings
		 */
		$panel_single_product = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_woocommerce_page',
				'name'  => 'panel_single_product',
				'title' => esc_html__( 'Single Product', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_woo',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single post pages', 'eiddo' ),
				'parent'        => $panel_single_product,
				'options'       => eiddo_qodef_get_yes_no_select_array(),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_single_product_title_tag',
				'default_value' => 'h2',
				'label'         => esc_html__( 'Single Product Title Tag', 'eiddo' ),
				'options'       => eiddo_qodef_get_title_tag(),
				'parent'        => $panel_single_product,
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_number_of_thumb_images',
				'default_value' => '4',
				'label'         => esc_html__( 'Number of Thumbnail Images per Row', 'eiddo' ),
				'options'       => array(
					'4' => esc_html__( 'Four', 'eiddo' ),
					'3' => esc_html__( 'Three', 'eiddo' ),
					'2' => esc_html__( 'Two', 'eiddo' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_thumb_images_position',
				'default_value' => 'below-image',
				'label'         => esc_html__( 'Set Thumbnail Images Position', 'eiddo' ),
				'options'       => array(
					'below-image'  => esc_html__( 'Below Featured Image', 'eiddo' ),
					'on-left-side' => esc_html__( 'On The Left Side Of Featured Image', 'eiddo' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_enable_single_product_zoom_image',
				'default_value' => 'no',
				'label'         => esc_html__( 'Enable Zoom Maginfier', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show magnifier image on featured image hover', 'eiddo' ),
				'parent'        => $panel_single_product,
				'options'       => eiddo_qodef_get_yes_no_select_array( false ),
				'args'          => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'woo_set_single_images_behavior',
				'default_value' => 'pretty-photo',
				'label'         => esc_html__( 'Set Images Behavior', 'eiddo' ),
				'options'       => array(
					'pretty-photo' => esc_html__( 'Pretty Photo Lightbox', 'eiddo' ),
					'photo-swipe'  => esc_html__( 'Photo Swipe Lightbox', 'eiddo' )
				),
				'parent'        => $panel_single_product
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'qodef_woo_related_products_columns',
				'label'         => esc_html__( 'Related Products Columns', 'eiddo' ),
				'default_value' => 'qodef-woocommerce-columns-4',
				'description'   => esc_html__( 'Choose number of columns for related products on single product page', 'eiddo' ),
				'options'       => array(
					'qodef-woocommerce-columns-3' => esc_html__( '3 Columns', 'eiddo' ),
					'qodef-woocommerce-columns-4' => esc_html__( '4 Columns', 'eiddo' )
				),
				'parent'        => $panel_single_product,
			)
		);

		do_action('eiddo_qodef_woocommerce_additional_options_map');
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_woocommerce_options_map', 21 );
}