<?php
if(!function_exists('qodef_re_map_property_meta')) {
    function qodef_re_map_property_meta() {

        $meta_box = eiddo_qodef_add_meta_box( array(
            'scope' => 'property',
            'title' => esc_html__( 'Property Settings', 'select-real-estate' ),
            'name'  => 'property_settings_meta_box'
        ) );

        $property_general_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_general_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('General', 'select-real-estate'),
            'name'            => 'property_general_container_title',
            'parent'          => $property_general_container
        ));

        eiddo_qodef_add_meta_box_field(
            array(
                'type'          => 'select',
                'name'          => 'qodef_property_single_layout_meta',
                'default_value' => '',
                'label'         => esc_html__( 'Single Property Layout', 'select-real-estate' ),
                'description'   => esc_html__( 'Choose default layout for your single property page', 'select-real-estate' ),
                'parent'        => $property_general_container,
                'options'       => array(
                    ''              => esc_html__( 'Default', 'select-real-estate' ),
                    'advanced'      => esc_html__( 'Advanced Gallery', 'select-real-estate' ),
                    'thumbnails'    => esc_html__( 'Gallery with Thumbnails', 'select-real-estate' )
                )
            )
        );

        eiddo_qodef_add_meta_box_field(
            array(
                'name'          => 'qodef_show_title_area_property_single_meta',
                'type'          => 'select',
                'default_value' => '',
                'label'         => esc_html__( 'Show Title Area', 'select-real-estate' ),
                'description'   => esc_html__( 'Enabling this option will show title area on your single property page', 'select-real-estate' ),
                'parent'        => $property_general_container,
                'options'       => eiddo_qodef_get_yes_no_select_array()
            )
        );

        do_action('qodef_re_action_property_meta_fields', $meta_box);
    }

    add_action('eiddo_qodef_meta_boxes_map', 'qodef_re_map_property_meta');
}