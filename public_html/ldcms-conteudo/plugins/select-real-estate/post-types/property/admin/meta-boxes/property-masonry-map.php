<?php
if(!function_exists('qodef_re_map_property_masonry_meta')) {
    function qodef_re_map_property_masonry_meta($meta_box) {

        $property_masonry_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_masonry_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Listar', 'select-real-estate'),
            'name'            => 'property_masonry_container_title',
            'parent'          => $property_masonry_container
        ));

        eiddo_qodef_add_meta_box_field(
            array(
                'name'        => 'qodef_property_featured_image_meta',
                'type'        => 'image',
                'label'       => esc_html__( 'Imagem em destaque', 'select-real-estate' ),
                'description' => esc_html__( 'Escolher uma imagem para códigos de acesso de listas de propriedades', 'select-real-estate' ),
                'parent'      => $property_masonry_container
            )
        );

        eiddo_qodef_add_meta_box_field(
            array(
                'name'          => 'qodef_property_masonry_fixed_dimensions_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Dimensões da Maçonaria - Proporção Fixa da Imagem', 'select-real-estate' ),
                'description'   => esc_html__( 'Escolha o layout de imagem quando ele aparecer nas listas de propriedades do tipo de alvenaria nas quais a proporção da imagem é fixa', 'select-real-estate' ),
                'default_value' => 'default',
                'parent'        => $property_masonry_container,
                'options'       => array(
                    'default'            => esc_html__( 'Default', 'select-real-estate' ),
                    'large-width'        => esc_html__( 'Large Width', 'select-real-estate' ),
                    'large-height'       => esc_html__( 'Large Height', 'select-real-estate' ),
                    'large-width-height' => esc_html__( 'Large Width/Height', 'select-real-estate' )
                )
            )
        );

        eiddo_qodef_add_meta_box_field(
            array(
                'name'          => 'qodef_property_masonry_original_dimensions_meta',
                'type'          => 'select',
                'label'         => esc_html__( 'Dimensões da Maçonaria - Proporção Original da Imagem', 'select-real-estate' ),
                'description'   => esc_html__( 'Escolha o layout de imagem quando ele aparecer nas listas de propriedades do tipo de alvenaria nas quais a proporção da imagem é original', 'select-real-estate' ),
                'default_value' => 'default',
                'parent'        => $property_masonry_container,
                'options'       => array(
                    'default'     => esc_html__( 'Default', 'select-real-estate' ),
                    'large-width' => esc_html__( 'Large Width', 'select-real-estate' )
                )
            )
        );        
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_masonry_meta', 17, 1);
}