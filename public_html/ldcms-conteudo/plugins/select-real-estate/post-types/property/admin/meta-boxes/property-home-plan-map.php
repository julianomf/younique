<?php
if(!function_exists('qodef_re_map_property_home_plans_meta')) {
    function qodef_re_map_property_home_plans_meta($meta_box) {

        $property_home_plans_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_home_plans_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Home Plans', 'select-real-estate'),
            'name'            => 'property_home_plans_container_title',
            'parent'          => $property_home_plans_container
        ));

        eiddo_qodef_add_repeater_field(
            array(
                'name'        => 'qodef_home_plans_meta',
                'parent'      => $property_home_plans_container,
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
                            'type'        => 'image',
                            'name'        => 'image',
                            'label'       => esc_html__('Image', 'select-real-estate'),
                            'col_width'   => '6'
                        ),
                        array(
                            'type'        => 'textarea',
                            'name'        => 'description',
                            'label'       => esc_html__('Description', 'select-real-estate'),
                            'col_width'    => '12'
                        ),
                    )
                )
            )
        );
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_home_plans_meta', 16, 1);
}