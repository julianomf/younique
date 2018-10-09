<?php

if ( ! function_exists('qodef_real_estate_map_options_map') ) {

    function qodef_real_estate_map_options_map() {

        $panel_maps = eiddo_qodef_add_admin_panel( array(
            'title' => 'Maps',
            'name'  => 'panel_maps',
            'page'  => '_real_estate'
        ) );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'textarea',
                'name'			=> 'real_estate_map_style',
                'default_value'	=> '',
                'label'			=> esc_html__('Maps Style', 'select-real-estate'),
                'description'	=> esc_html__('Insert map style json', 'select-real-estate'),
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_maps_scrollable',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Scrollable Maps', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_maps_draggable',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Draggable Maps', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_maps_street_view_control',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Maps Street View Controls', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_maps_zoom_control',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Maps Zoom Control', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_maps,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_maps_type_control',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Maps Type Control', 'select-real-estate'),
                'description'	=> '',
            )
        );
    }

    add_action('eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_map_options_map', 13);
}