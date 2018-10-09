<?php
if(!function_exists('qodef_re_map_property_leasing_terms_meta')) {
    function qodef_re_map_property_leasing_terms_meta($meta_box) {

        $property_leasing_terms_container = eiddo_qodef_add_admin_container(array(
            'type'            => 'container',
            'name'            => 'property_leasing_terms_container',
            'parent'          => $meta_box
        ));

        eiddo_qodef_add_admin_section_title(array(
            'title'           => esc_html__('Leasing Terms', 'select-real-estate'),
            'name'            => 'property_leasing_terms_container_title',
            'parent'          => $property_leasing_terms_container
        ));
	
	    eiddo_qodef_add_repeater_field(
		    array(
			    'name'        => 'qodef_leasing_terms_meta',
			    'parent'      => $property_leasing_terms_container,
			    'button_text' => '',
			    'table_layout' => true,
			    'fields'      => array(
				    array(
					    'type'        => 'select',
					    'name'        => 'icon',
					    'label'       => '',
					    'th'          => esc_html__( 'Icon', 'select-real-estate' ),
					    'col_width'   => '4',
					    'options'     => qodef_re_get_assets_icon_list(),
					    'args'        => array(
						    'col_width' => 12
					    )
				    ),
				    array(
					    'type'        => 'text',
					    'name'        => 'label',
					    'label'       => '',
					    'th'          => esc_html__( 'Label', 'select-real-estate' ),
					    'col_width'   => '4'
				    ),
				    array(
					    'type'        => 'text',
					    'name'        => 'value',
					    'label'       => '',
					    'th'          => esc_html__( 'Value', 'select-real-estate' ),
					    'col_width'   => '4'
				    )
			    )
		    )
	    );
    }

    add_action('qodef_re_action_property_meta_fields', 'qodef_re_map_property_leasing_terms_meta', 11, 1);
}