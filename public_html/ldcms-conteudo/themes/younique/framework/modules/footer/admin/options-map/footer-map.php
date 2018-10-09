<?php

if (!function_exists('eiddo_qodef_footer_options_map')) {
    function eiddo_qodef_footer_options_map() {

        eiddo_qodef_add_admin_page(
            array(
                'slug'  => '_footer_page',
                'title' => esc_html__('Footer', 'eiddo'),
                'icon'  => 'fa fa-sort-amount-asc'
            )
        );

        $footer_panel = eiddo_qodef_add_admin_panel(
            array(
                'title' => esc_html__('Footer', 'eiddo'),
                'name'  => 'footer',
                'page'  => '_footer_page'
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'footer_in_grid',
                'default_value' => 'yes',
                'label'         => esc_html__('Footer in Grid', 'eiddo'),
                'description'   => esc_html__('Enabling this option will place Footer content in grid', 'eiddo'),
                'parent'        => $footer_panel
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'show_footer_top',
                'default_value' => 'yes',
                'label'         => esc_html__('Show Footer Top', 'eiddo'),
                'description'   => esc_html__('Enabling this option will show Footer Top area', 'eiddo'),
                'parent'        => $footer_panel,
            )
        );

        $show_footer_top_container = eiddo_qodef_add_admin_container(
            array(
                'name'       => 'show_footer_top_container',
                'parent'     => $footer_panel,
                'dependency' => array(
                    'show' => array(
                        'show_footer_top' => 'yes'
                    )
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_top_columns',
                'parent'        => $show_footer_top_container,
                'default_value' => '3 3 3 3',
                'label'         => esc_html__('Footer Top Columns', 'eiddo'),
                'description'   => esc_html__('Choose number of columns for Footer Top area', 'eiddo'),
                'options'       => array(
                    '12' => '1',
                    '6 6' => '2',
                    '4 4 4' => '3',
                    '3 3 6' => '3 (25% + 25% + 50%)',
                    '3 3 3 3' => '4'
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_top_columns_alignment',
                'default_value' => 'left',
                'label'         => esc_html__('Footer Top Columns Alignment', 'eiddo'),
                'description'   => esc_html__('Text Alignment in Footer Columns', 'eiddo'),
                'options'       => array(
                    ''       => esc_html__('Default', 'eiddo'),
                    'left'   => esc_html__('Left', 'eiddo'),
                    'center' => esc_html__('Center', 'eiddo'),
                    'right'  => esc_html__('Right', 'eiddo')
                ),
                'parent'        => $show_footer_top_container,
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'name'        => 'footer_top_background_color',
                'type'        => 'color',
                'label'       => esc_html__('Background Color', 'eiddo'),
                'description' => esc_html__('Set background color for top footer area', 'eiddo'),
                'parent'      => $show_footer_top_container
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'show_footer_bottom',
                'default_value' => 'yes',
                'label'         => esc_html__('Show Footer Bottom', 'eiddo'),
                'description'   => esc_html__('Enabling this option will show Footer Bottom area', 'eiddo'),
                'parent'        => $footer_panel,
            )
        );

        $show_footer_bottom_container = eiddo_qodef_add_admin_container(
            array(
                'name'       => 'show_footer_bottom_container',
                'parent'     => $footer_panel,
                'dependency' => array(
                    'show' => array(
                        'show_footer_bottom' => 'yes'
                    )
                )
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'footer_bottom_columns',
                'default_value' => '6 6',
                'label'         => esc_html__('Footer Bottom Columns', 'eiddo'),
                'description'   => esc_html__('Choose number of columns for Footer Bottom area', 'eiddo'),
                'options'       => array(
                    '12' => '1',
                    '6 6' => '2',
                    '4 4 4' => '3'
                ),
                'parent'        => $show_footer_bottom_container,
            )
        );

        eiddo_qodef_add_admin_field(
            array(
                'name'        => 'footer_bottom_background_color',
                'type'        => 'color',
                'label'       => esc_html__('Background Color', 'eiddo'),
                'description' => esc_html__('Set background color for bottom footer area', 'eiddo'),
                'parent'      => $show_footer_bottom_container
            )
        );
    }

    add_action('eiddo_qodef_options_map', 'eiddo_qodef_footer_options_map', 11);
}