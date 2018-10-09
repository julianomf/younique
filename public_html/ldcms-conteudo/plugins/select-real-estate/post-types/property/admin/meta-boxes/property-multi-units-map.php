<?php
if(!function_exists('qodef_re_map_property_multi_units_meta')) {
    function qodef_re_map_property_multi_units_meta($meta_box) {

        $property_multi_units_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_multi_units_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Multi Units / Sub Properties', 'select-real-estate'),
            'name'            => 'property_multi_units_container_title',
            'parent'          => $property_multi_units_container
        ));

        eiddo_qodef_add_repeater_field(
            array(
                'name'        => 'qodef_multi_units_meta',
                'parent'      => $property_multi_units_container,
                'button_text' => '',
                'fields'      => array_merge(
                    array(
                        array(
                            'type'        => 'text',
                            'name'        => 'title',
                            'label'       => esc_html__('Title', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'type',
                            'label'       => esc_html__('Type', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'price',
                            'label'       => esc_html__('Price', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'bedrooms',
                            'label'       => esc_html__('Quartos', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'bathrooms',
                            'label'       => esc_html__('Bathrooms', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'size',
                            'label'       => esc_html__('Size', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'text',
                            'name'        => 'availability',
                            'label'       => esc_html__('Availability Date', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                    )
                )
            )
        );
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_multi_units_meta', 15, 1);
}