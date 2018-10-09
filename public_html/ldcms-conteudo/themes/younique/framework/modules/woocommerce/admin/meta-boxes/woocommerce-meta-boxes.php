<?php

if ( ! function_exists( 'eiddo_qodef_map_woocommerce_meta' ) ) {
	function eiddo_qodef_map_woocommerce_meta() {
		
		$woocommerce_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => array( 'product' ),
				'title' => esc_html__( 'Product Meta', 'eiddo' ),
				'name'  => 'woo_product_meta'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_title_area_woo_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'eiddo' ),
				'description'   => esc_html__( 'Disabling this option will turn off page title area', 'eiddo' ),
				'options'       => eiddo_qodef_get_yes_no_select_array(),
				'parent'        => $woocommerce_meta_box
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_show_new_sign_woo_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show New Sign', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show new sign mark on product', 'eiddo' ),
				'parent'        => $woocommerce_meta_box
			)
		);
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_woocommerce_meta', 99 );
}