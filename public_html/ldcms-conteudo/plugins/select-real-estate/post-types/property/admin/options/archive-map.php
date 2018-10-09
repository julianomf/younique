<?php

if ( ! function_exists('qodef_real_estate_archive_options_map') ) {

    function qodef_real_estate_archive_options_map() {

        $panel_archive = eiddo_qodef_add_admin_panel( array(
            'title' => esc_html__('Archive', 'select-real-estate'),
            'name'  => 'panel_archive',
            'page'  => '_real_estate'
        ) );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'show_title_area_property_archive',
                'default_value' => '',
                'label'         => esc_html__( 'Show Title Area', 'select-real-estate' ),
                'description'   => esc_html__( 'Enabling this option will show title area on archive pages', 'select-real-estate' ),
                'parent'        => $panel_archive,
                'options'       => array(
                    ''    => esc_html__( 'Default', 'select-real-estate' ),
                    'yes' => esc_html__( 'Yes', 'select-real-estate' ),
                    'no'  => esc_html__( 'No', 'select-real-estate' )
                ),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );

        eiddo_qodef_add_admin_field( array(
            'name'          => 'real_estate_archive_page_layout',
            'type'          => 'select',
            'label'         => esc_html__( 'Layout', 'select-real-estate' ),
            'default_value' => 'full-width',
            'description'   => esc_html__( 'Set layout. Default is full width.', 'select-real-estate' ),
            'parent'        => $panel_archive,
            'options'       => array(
                'full-width' => esc_html__( 'Full Width', 'select-real-estate' ),
                'in-grid'    => esc_html__( 'In Grid', 'select-real-estate' )
            )
        ) );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_archive,
                'type'			=> 'text',
                'name'			=> 'real_estate_archive_items_per_page',
                'default_value'	=> '',
                'label'			=> esc_html__('Number of properties per page', 'select-real-estate'),
                'args'        => array(
                    'col_width' => 3
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'name'          => 'real_estate_archive_number_of_columns',
                'type'          => 'select',
                'label'         => esc_html__( 'Number of Columns', 'select-real-estate' ),
                'default_value' => '2',
                'description'   => esc_html__( 'Set number of columns for your property list on archive pages. Default value is 4 columns', 'select-real-estate' ),
                'parent'        => $panel_archive,
                'options'       => array(
                    '2' => esc_html__( '2 Columns', 'select-real-estate' ),
                    '3' => esc_html__( '3 Columns', 'select-real-estate' ),
                    '4' => esc_html__( '4 Columns', 'select-real-estate' ),
                    '5' => esc_html__( '5 Columns', 'select-real-estate' )
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'name'          => 'real_estate_archive_space_between_items',
                'type'          => 'select',
                'label'         => esc_html__( 'Space Between Items', 'select-real-estate' ),
                'default_value' => 'medium',
                'description'   => esc_html__( 'Set space size between course items for your property list on archive pages. Default value is normal', 'select-real-estate' ),
                'parent'        => $panel_archive,
                'options'       => eiddo_qodef_get_space_between_items_array()
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'name'          => 'real_estate_archive_image_size',
                'type'          => 'select',
                'label'         => esc_html__( 'Image Proportions', 'select-real-estate' ),
                'default_value' => 'full',
                'description'   => esc_html__( 'Set image proportions for your property list on archive pages. Default value is full', 'select-real-estate' ),
                'parent'        => $panel_archive,
                'options'       => array(
                    'full'      => esc_html__( 'Original', 'select-real-estate' ),
                    'landscape' => esc_html__( 'Landscape', 'select-real-estate' ),
                    'portrait'  => esc_html__( 'Portrait', 'select-real-estate' ),
                    'square'    => esc_html__( 'Square', 'select-real-estate' )
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_archive,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_archive_filter',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Filter on Archive Pages', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_archive,
                'type'			=> 'yesno',
                'name'			=> 'real_estate_archive_map',
                'default_value'	=> 'yes',
                'label'			=> esc_html__('Map on Archive Pages', 'select-real-estate'),
                'description'	=> '',
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'parent'		=> $panel_archive,
                'type'			=> 'select',
                'name'			=> 'real_estate_archive_load_more',
                'default_value'	=> 'no-pagination',
                'label'			=> esc_html__('Pagination', 'select-real-estate'),
                'description'	=> '',
                'options'       => array(
                    'no-pagination'     => esc_html__( 'None', 'select-real-estate' ),
                    'standard'          => esc_html__( 'Standard', 'select-real-estate' ),
                    'load-more'         => esc_html__( 'Load More', 'select-real-estate' ),
                    'infinite-scroll'   => esc_html__( 'Infinite Scroll', 'select-real-estate' )
                )
            )
        );
    }

    add_action( 'eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_archive_options_map', 12);
}