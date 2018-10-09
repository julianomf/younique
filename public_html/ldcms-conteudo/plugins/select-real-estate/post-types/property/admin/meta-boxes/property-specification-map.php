<?php
if(!function_exists('qodef_re_map_property_specifictation_meta')) {
    function qodef_re_map_property_specifictation_meta($meta_box) {

        $property_specification_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_specification_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Especificações', 'select-real-estate'),
            'name'            => 'property_specification_container_title',
            'parent'          => $property_specification_container
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_id_meta',
            'type'        => 'text',
            'label'       => esc_html__('ID de identificação', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_price_meta',
            'type'        => 'text',
            'label'       => esc_html__('Preço', 'select-real-estate'),
            'description' => esc_html__('Preço de venda ou aluguel', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_discount_price_meta',
            'type'        => 'text',
            'label'       => esc_html__('Desconto', 'select-real-estate'),
            'description' => esc_html__('Venda ou preço de desconto de aluguel', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_price_label_meta',
            'type'        => 'text',
            'label'       => esc_html__('Etiqueta de preço', 'select-real-estate'),
            'description' => esc_html__('Texto que será mostrado ao lado do valor do preço', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_price_label_position_meta',
            'type'        => 'select',
            'label'       => esc_html__('Posição da etiqueta de preço', 'select-real-estate'),
            'description' => esc_html__('Escolheu se o rótulo de preço será mostrado antes ou depois do valor do preço.', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => array(
                ''          => esc_html__( 'Default', 'select-real-estate' ),
                'before'    => esc_html__( 'Antes do preço', 'select-real-estate' ),
                'after'     => esc_html__( 'Depois do preço', 'select-real-estate' )
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Área útil', 'select-real-estate'),
            'description' => esc_html__('Insira o tamanho da propriedade', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_size_label_meta',
            'type'        => 'text',
            'label'       => esc_html__('Etiqueta do tamanho', 'select-real-estate'),
            'description' => esc_html__('Texto que será mostrado ao lado do valor do tamanho', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_size_label_position_meta',
            'type'        => 'select',
            'label'       => esc_html__('Posição da etiqueta do tamanho', 'select-real-estate'),
            'description' => esc_html__('Escolha se a etiqueta de tamanho será mostrada antes ou depois do valor do tamanho', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => array(
                ''          => esc_html__( 'Default', 'select-real-estate' ),
                'before'    => esc_html__( 'Antes', 'select-real-estate' ),
                'after'     => esc_html__( 'Depois', 'select-real-estate' )
            )
        ));
		
		eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_heating_meta',
            'type'        => 'text',
            'label'       => esc_html__('Tipo do imóvel', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_bedrooms_meta',
            'type'        => 'text',
            'label'       => esc_html__('Quartos', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_bathrooms_meta',
            'type'        => 'text',
            'label'       => esc_html__('Banheiros', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        /*
		eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_floor_meta',
            'type'        => 'text',
            'label'       => esc_html__('Pisos', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_total_floors_meta',
            'type'        => 'text',
            'label'       => esc_html__('Total de pisos', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_year_built_meta',
            'type'        => 'text',
            'label'       => esc_html__('Ano de construção', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_heating_meta',
            'type'        => 'text',
            'label'       => esc_html__('Aquecedor', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));
		*/
		
        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_accommodation_meta',
            'type'        => 'text',
            'label'       => esc_html__('Suites', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Informações Especificas', 'select-real-estate'),
            'name'            => 'property_additional_specification_container_title',
            'parent'          => $property_specification_container
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_ceiling_height_meta',
            'type'        => 'text',
            'label'       => esc_html__('Mobiliado', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_parking_meta',
            'type'        => 'text',
            'label'       => esc_html__('Garagem', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

		eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_additional_space_meta',
            'type'        => 'text',
            'label'       => esc_html__('Área de laser', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));
		
        /*
		eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_from_center_meta',
            'type'        => 'text',
            'label'       => esc_html__('Distancia do centro da cidade', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_area_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Area Total', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_garages_meta',
            'type'        => 'text',
            'label'       => esc_html__('Garagens', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_garages_size_meta',
            'type'        => 'text',
            'label'       => esc_html__('Tamanho da garagem', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));
		
        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_publication_date_meta',
            'type'        => 'date',
            'label'       => esc_html__('Data da postagem', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'args'        => array(
                'col_width' => 3
            )
        ));

        eiddo_qodef_add_meta_box_field(array(
            'name'        => 'qodef_property_is_featured_meta',
            'type'        => 'select',
            'label'       => esc_html__('Propriedade destacada', 'select-real-estate'),
            'parent'      => $property_specification_container,
            'options'     => eiddo_qodef_get_yes_no_select_array()
        ));
		*/
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_specifictation_meta', 10, 1);
}