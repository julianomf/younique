<?php

if ( ! function_exists('qodef_real_estate_options_map') ) {

	function qodef_real_estate_options_map() {

		eiddo_qodef_add_admin_page( array(
			'slug'  => '_real_estate',
			'title' =>  esc_html__('Real Estate', 'select-real-estate'),
			'icon'  => 'fa fa-camera-retro'
		) );

        $panel_general = eiddo_qodef_add_admin_panel( array(
            'title' => 'General',
            'name'  => 'panel_terms',
            'page'  => '_real_estate'
        ) );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_general,
                'type'			=> 'text',
                'name'			=> 'real_estate_item_terms_link',
                'default_value'	=> '',
                'label'			=> esc_html__('Terms And Conditions Page URL', 'select-real-estate'),
                'description'   => esc_html__('Enter the page URL with terms and conditions.','select-real-estate')
            )
        );

        /***************** Additional Page Layout - start *****************/

        do_action( 'eiddo_qodef_additional_real_estate_options_map', $panel_general );

        /***************** Additional Page Layout - end *****************/

	}

	add_action( 'eiddo_qodef_options_map', 'qodef_real_estate_options_map', 15);
}