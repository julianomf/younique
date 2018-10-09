<?php
/* Property Type Custom Fields */
if (!function_exists('qodef_re_property_type_fields')) {
    function qodef_re_property_type_fields() {

        $property_type_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-type',
                'name'  => 'property_type'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_type_icon',
                'type'        => 'icon',
                'label'       => esc_html__( 'Icon', 'select-real-estate' ),
                'description' => esc_html__( 'Choose icon from icon pack for type.', 'select-real-estate' ),
                'parent'      => $property_type_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_type_custom_icon',
                'type'        => 'image',
                'label'       => esc_html__( 'Custom Icon', 'select-real-estate' ),
                'description' => esc_html__( 'Choose custom icon for type.', 'select-real-estate' ),
                'parent'      => $property_type_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_type_custom_icon_light',
                'type'        => 'image',
                'label'       => esc_html__( 'Custom Light Icon', 'select-real-estate' ),
                'description' => esc_html__( 'Choose light custom icon for type.', 'select-real-estate' ),
                'parent'      => $property_type_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_type_featured_image',
                'type'        => 'image',
                'label'       => esc_html__( 'Featured Image', 'select-real-estate' ),
                'description' => esc_html__( 'Choose featured image for type.', 'select-real-estate' ),
                'parent'      => $property_type_fields
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_type_fields');
}

/* Property Feature Custom Fields */
if (!function_exists('qodef_re_property_feature_fields')) {
    function qodef_re_property_feature_fields() {

        $property_feature_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-feature',
                'name'  => 'property_feature'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_feature_icon',
                'type'        => 'icon',
                'label'       => esc_html__( 'Icon', 'select-real-estate' ),
                'description' => esc_html__( 'Choose icon from icon pack for type.', 'select-real-estate' ),
                'parent'      => $property_feature_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_feature_custom_icon',
                'type'        => 'image',
                'label'       => esc_html__( 'Custom Icon', 'select-real-estate' ),
                'description' => esc_html__( 'Choose custom icon for type.', 'select-real-estate' ),
                'parent'      => $property_feature_fields
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_feature_fields');
}

/* Property Feature Custom Fields */
if (!function_exists('qodef_re_property_status_fields')) {
    function qodef_re_property_status_fields() {

        $property_status_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-status',
                'name'  => 'property_status'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_status_background_color',
                'type'        => 'color',
                'label'       => esc_html__( 'Background Color', 'select-real-estate' ),
                'description' => esc_html__( 'Choose background color for status layout on lists.', 'select-real-estate' ),
                'parent'      => $property_status_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_status_background_opacity',
                'type'        => 'text',
                'label'       => esc_html__( 'Background Opacity', 'select-real-estate' ),
                'description' => esc_html__( 'Enter opacity for background color. (0-1)', 'select-real-estate' ),
                'parent'      => $property_status_fields
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_status_color',
                'type'        => 'color',
                'label'       => esc_html__( 'Color', 'select-real-estate' ),
                'description' => esc_html__( 'Choose color for status layout on lists.', 'select-real-estate' ),
                'parent'      => $property_status_fields
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_status_fields');
}

/* Property County/State Custom Fields */
if (!function_exists('qodef_re_property_county_fields')) {
    function qodef_re_property_county_fields() {

        $property_county_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-county',
                'name'  => 'property_county'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_county_country',
                'type'        => 'selectblank',
                'label'       => esc_html__( 'Country', 'select-real-estate' ),
                'description' => esc_html__( 'Choose country from the list.', 'select-real-estate' ),
                'parent'      => $property_county_fields,
                'options'     => qodef_re_get_countries_list()
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_county_fields');
}

/* Property City Custom Fields */
if (!function_exists('qodef_re_property_city_fields')) {
    function qodef_re_property_city_fields() {

        $property_city_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-city',
                'name'  => 'property_city'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_city_county',
                'type'        => 'selectblank',
                'label'       => esc_html__( 'County/State', 'select-real-estate' ),
                'description' => esc_html__( 'Choose county/state from the list.', 'select-real-estate' ),
                'parent'      => $property_city_fields,
                'options'     => qodef_re_get_taxonomy_list('property-county')
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_city_featured_image',
                'type'        => 'image',
                'label'       => esc_html__( 'Featured Image', 'select-real-estate' ),
                'description' => esc_html__( 'Choose featured image for city.', 'select-real-estate' ),
                'parent'      => $property_city_fields
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_city_fields');
}

/* Property Neighborhood Custom Fields */
if (!function_exists('qodef_re_property_neighborhood_fields')) {
    function qodef_re_property_neighborhood_fields() {

        $property_neighborhood_fields = eiddo_qodef_add_taxonomy_fields(
            array(
                'scope' => 'property-neighborhood',
                'name'  => 'property_neighborhood'
            )
        );

        eiddo_qodef_add_taxonomy_field(
            array(
                'name'        => 'property_neighborhood_city',
                'type'        => 'selectblank',
                'label'       => esc_html__( 'City', 'select-real-estate' ),
                'description' => esc_html__( 'Choose city from the list.', 'select-real-estate' ),
                'parent'      => $property_neighborhood_fields,
                'options'     => qodef_re_get_taxonomy_list('property-city')
            )
        );
    }

    add_action('eiddo_qodef_custom_taxonomy_fields', 'qodef_re_property_neighborhood_fields');
}