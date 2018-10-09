<?php

if ( ! function_exists( 'qodef_real_estate_single_options_map' ) ) {
	function qodef_real_estate_single_options_map() {
		
		$panel_single = eiddo_qodef_add_admin_panel(
			array(
				'title' => esc_html__( 'Single', 'select-real-estate' ),
				'name'  => 'panel_single',
				'page'  => '_real_estate'
			)
		);

        eiddo_qodef_add_admin_field(
            array(
                'type'          => 'select',
                'name'          => 'property_single_layout',
                'default_value' => 'advanced',
                'label'         => esc_html__( 'Single Property Layout', 'select-real-estate' ),
                'description'   => esc_html__( 'Choose default layout for your single property page', 'select-real-estate' ),
                'parent'        => $panel_single,
                'options'       => array(
                    'advanced' => esc_html__( 'Advanced Gallery', 'select-real-estate' ),
                    'thumbnails'  => esc_html__( 'Gallery with Thumbnails', 'select-real-estate' )
                ),
                'args'          => array(
                    'col_width' => 3
                )
            )
        );
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'select',
				'name'          => 'show_title_area_property_single',
				'default_value' => '',
				'label'         => esc_html__( 'Show Title Area', 'select-real-estate' ),
				'description'   => esc_html__( 'Enabling this option will show title area on single properties', 'select-real-estate' ),
				'parent'        => $panel_single,
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
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'text',
				'name'          => 'content_top_padding_property_single',
				'default_value' => '',
				'label'         => esc_html__( 'Content Top Padding for Single Property', 'select-real-estate' ),
				'description'   => esc_html__( 'Enter top padding for content area for single property page', 'select-real-estate' ),
				'args'          => array(
					'suffix'    => 'px',
					'col_width' => 3
				),
				'parent'        => $panel_single
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'property_single_sidebar_layout',
				'type'          => 'select',
				'label'         => esc_html__( 'Sidebar Layout', 'select-real-estate' ),
				'description'   => esc_html__( 'Choose a sidebar layout for single property page', 'select-real-estate' ),
				'default_value' => '',
				'parent'        => $panel_single,
				'options'       => eiddo_qodef_get_custom_sidebars_options()
			)
		);
		
		$realestator_custom_sidebars = eiddo_qodef_get_custom_sidebars();
		if ( count( $realestator_custom_sidebars ) > 0 ) {
			eiddo_qodef_add_admin_field( array(
				'name'        => 'property_custom_sidebar_area',
				'type'        => 'selectblank',
				'label'       => esc_html__( 'Sidebar to Display', 'select-real-estate' ),
				'description' => esc_html__( 'Choose a sidebar to display on single properties. Default sidebar is "Sidebar"', 'select-real-estate' ),
				'parent'      => $panel_single,
				'options'     => $realestator_custom_sidebars,
				'args'        => array(
					'select2' => true
				)
			) );
		}
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'property_single_comments',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Comments', 'select-real-estate' ),
				'description'   => esc_html__( 'Enabling this option will show comments on your property', 'select-real-estate' ),
				'parent'        => $panel_single
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'property_single_show_related',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Related', 'select-real-estate' ),
				'description'   => esc_html__( 'Enabling this option will show related properties on your property', 'select-real-estate' ),
				'parent'        => $panel_single
			)
		);
		
		$related_posts_settings_container = eiddo_qodef_add_admin_container(
			array(
				'type'       => 'container',
				'name'       => 'property_related_posts_settings_container',
				'parent'     => $panel_single,
				'dependency' => array(
					'show' => array(
						'property_single_show_related' => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_related_posts_number_of_columns',
				'type'          => 'select',
				'label'         => esc_html__( 'Number of Columns', 'select-real-estate' ),
				'default_value' => '3',
				'description'   => esc_html__( 'Set number of columns for your related properties on single property page. Default value is 4 columns', 'select-real-estate' ),
				'parent'        => $related_posts_settings_container,
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
				'name'          => 'real_estate_related_posts_space_between_items',
				'type'          => 'select',
				'label'         => esc_html__( 'Space Between Items', 'select-real-estate' ),
				'default_value' => 'medium',
				'description'   => esc_html__( 'Set space size between property items for your related properties on single property page. Default value is normal', 'select-real-estate' ),
				'parent'        => $related_posts_settings_container,
				'options'       => eiddo_qodef_get_space_between_items_array()
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'real_estate_related_posts_image_size',
				'type'          => 'select',
				'label'         => esc_html__( 'Image Proportions', 'select-real-estate' ),
				'default_value' => 'full',
				'description'   => esc_html__( 'Set image proportions for your property items on single property page. Default value is full', 'select-real-estate' ),
				'parent'        => $related_posts_settings_container,
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
				'parent'        => $panel_single,
				'type'          => 'yesno',
				'default_value' => 'yes',
				'name'          => 'real_estate_content_bottom',
				'label'         => esc_html__( 'Enable content bottom area', 'select-real-estate' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_price_label',
				'type'        => 'text',
				'label'       => esc_html__( 'Price Label', 'select-real-estate' ),
				'description' => esc_html__( 'Text that will be shown next to price value', 'select-real-estate' ),
				'parent'      => $panel_single,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_price_label_position',
				'type'        => 'select',
				'label'       => esc_html__( 'Price Label Position', 'select-real-estate' ),
				'description' => esc_html__( 'Chose whether price label will be shown before or after price value', 'select-real-estate' ),
				'parent'      => $panel_single,
				'options'     => array(
					''       => esc_html__( 'Default', 'select-real-estate' ),
					'before' => esc_html__( 'Before Price', 'select-real-estate' ),
					'after'  => esc_html__( 'After Price', 'select-real-estate' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_size_label',
				'type'        => 'text',
				'label'       => esc_html__( 'Size Label', 'select-real-estate' ),
				'description' => esc_html__( 'Text that will be shown next to size value', 'select-real-estate' ),
				'parent'      => $panel_single,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_size_label_position',
				'type'        => 'select',
				'label'       => esc_html__( 'Size Label Position', 'select-real-estate' ),
				'description' => esc_html__( 'Chose whether size label will be shown before or after size value', 'select-real-estate' ),
				'parent'      => $panel_single,
				'options'     => array(
					''       => esc_html__( 'Default', 'select-real-estate' ),
					'before' => esc_html__( 'Before Value', 'select-real-estate' ),
					'after'  => esc_html__( 'After Value', 'select-real-estate' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_enquiry_button_text',
				'type'        => 'text',
				'label'       => esc_html__( 'Enquiry Button Text', 'select-real-estate' ),
				'description' => esc_html__( 'Text that will be shown on button for sending enquiry message. Default is Schedule Watching', 'select-real-estate' ),
				'parent'      => $panel_single,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_success_message_text',
				'type'        => 'text',
				'label'       => esc_html__( 'Success Message Text', 'select-real-estate' ),
				'description' => esc_html__( 'Text that will be shown after sending enquiry message from single property.', 'select-real-estate' ),
				'parent'      => $panel_single,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'property_fail_message_text',
				'type'        => 'text',
				'label'       => esc_html__( 'Fail Message Text', 'select-real-estate' ),
				'description' => esc_html__( 'Text that will be shown if sending enquiry message fails.', 'select-real-estate' ),
				'parent'      => $panel_single,
				'args'        => array(
					'col_width' => 3
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_additional_real_estate_options_map', 'qodef_real_estate_single_options_map', 11 );
}