<?php

if ( ! function_exists( 'qodef_real_estate_compare_options_map' ) ) {
    function qodef_real_estate_compare_options_map($panel_general) {

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'yesno',
                'name'          => 'enable_property_comparing',
                'default_value' => 'no',
                'label'         => esc_html__( 'Enable property comparing', 'select-real-estate' ),
                'description'   => esc_html__( 'Enabling this option will enable comparison between properties', 'select-real-estate' ),
                'parent'        => $panel_general,
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
	
	    $compare_single_container = eiddo_qodef_add_admin_container(
		    array(
			    'name'            => 'qodef_re_compare_single_container',
			    'parent'          => $panel_general,
			    'dependency' => array(
				    'show' => array(
					    'enable_property_comparing' => 'yes'
				    )
			    )
		    )
	    );
	
	    eiddo_qodef_add_admin_field(
		    array(
			    'type'          => 'yesno',
			    'name'          => 'enable_property_comparing_single',
			    'default_value' => 'no',
			    'label'         => esc_html__( 'Compare on Single Property', 'select-real-estate' ),
			    'description'   => esc_html__( 'Enabling this option will display compare button on single property page', 'select-real-estate' ),
			    'parent'        => $compare_single_container,
			    'args'          => array(
				    'col_width' => 3
			    )
		    )
	    );
    }

    add_action( 'eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_compare_options_map', 11, 1 );
}