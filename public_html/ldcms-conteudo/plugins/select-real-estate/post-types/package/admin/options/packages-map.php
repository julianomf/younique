<?php

if ( ! function_exists( 'qodef_real_estate_packages_options_map' ) ) {
	
	function qodef_real_estate_packages_options_map() {
		$pages       = get_all_page_ids();
		$pages_array = array();
		foreach ( $pages as $page ) {
			if ( get_post_status( $page ) == 'publish' ) {
				$pages_array[ $page ] = get_the_title( $page );
			}
		}
		
		$panel_packages = eiddo_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Pricing Packages', 'select-real-estate' ),
				'name'  => 'panel_packages',
				'page'  => '_real_estate'
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'enable_packages_necessity',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Enable Pricing Package Necessity for Adding Property', 'select-real-estate' ),
				'description'   => esc_html__( 'Enable this option in order to make packages necessary for adding property', 'select-real-estate' ),
				'parent'        => $panel_packages
			)
		);
		
		$enabled_package_container = eiddo_qodef_add_admin_container(
			array(
				'parent'     => $panel_packages,
				'name'       => 'enabled_package',
				'dependency' => array(
					'show' => array(
						'enable_packages_necessity' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'packages_default_page',
				'type'        => 'select',
				'label'       => esc_html__( 'Pricing Packages Page', 'select-real-estate' ),
				'description' => esc_html__( 'Choose a page to be default for displaying pricing packages. (You should add pricing package shortcode on that page)', 'select-real-estate' ),
				'parent'      => $enabled_package_container,
				'options'     => $pages_array,
				'args'        => array(
					'select2' => true
				)
			)
		);

        eiddo_qodef_add_admin_field(
            array(
                'name'          => 'enable_payment_autocomplete',
                'type'          => 'yesno',
                'label'         => esc_html__( 'Payment Autocomplete', 'select-real-estate' ),
                'parent'        => $enabled_package_container,
                'default_value' => 'no',
                'description'	=> esc_html__('Use this option if your are using non-card payment methods to enable autocomplete of user purchases.','select-real-estate')
            )
        );
	}
	
	add_action( 'eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_packages_options_map', 14 );
}