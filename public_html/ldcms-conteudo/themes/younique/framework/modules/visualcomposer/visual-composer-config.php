<?php

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if ( function_exists( 'vc_set_as_theme' ) ) {
	vc_set_as_theme( true );
}

/**
 * Change path for overridden templates
 */
if ( function_exists( 'vc_set_shortcodes_templates_dir' ) ) {
	$dir = QODE_ROOT_DIR . '/vc-templates';
	vc_set_shortcodes_templates_dir( $dir );
}

if ( ! function_exists( 'eiddo_qodef_configure_visual_composer_frontend_editor' ) ) {
	/**
	 * Configuration for Visual Composer FrontEnd Editor
	 * Hooks on vc_after_init action
	 */
	function eiddo_qodef_configure_visual_composer_frontend_editor() {
		/**
		 * Remove frontend editor
		 */
		if ( function_exists( 'vc_disable_frontend' ) ) {
			vc_disable_frontend();
		}
	}
	
	add_action( 'vc_after_init', 'eiddo_qodef_configure_visual_composer_frontend_editor' );
}

if ( ! function_exists( 'eiddo_qodef_vc_row_map' ) ) {
	/**
	 * Map VC Row shortcode
	 * Hooks on vc_after_init action
	 */
	function eiddo_qodef_vc_row_map() {
		
		/******* VC Row shortcode - begin *******/
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Select Row Content Width', 'eiddo' ),
				'value'      => array(
					esc_html__( 'Full Width', 'eiddo' ) => 'full-width',
					esc_html__( 'In Grid', 'eiddo' )    => 'grid'
				),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'anchor',
				'heading'     => esc_html__( 'Select Anchor ID', 'eiddo' ),
				'description' => esc_html__( 'For example "home"', 'eiddo' ),
				'group'       => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Select Background Color', 'eiddo' ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Select Background Image', 'eiddo' ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Select Disable Background Image', 'eiddo' ),
				'value'       => array(
					esc_html__( 'Never', 'eiddo' )        => '',
					esc_html__( 'Below 1280px', 'eiddo' ) => '1280',
					esc_html__( 'Below 1024px', 'eiddo' ) => '1024',
					esc_html__( 'Below 768px', 'eiddo' )  => '768',
					esc_html__( 'Below 680px', 'eiddo' )  => '680',
					esc_html__( 'Below 480px', 'eiddo' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'eiddo' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'attach_image',
				'param_name' => 'parallax_background_image',
				'heading'    => esc_html__( 'Select Parallax Background Image', 'eiddo' ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'        => 'textfield',
				'param_name'  => 'parallax_bg_speed',
				'heading'     => esc_html__( 'Select Parallax Speed', 'eiddo' ),
				'description' => esc_html__( 'Set your parallax speed. Default value is 1.', 'eiddo' ),
				'dependency'  => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'textfield',
				'param_name' => 'parallax_bg_height',
				'heading'    => esc_html__( 'Select Parallax Section Height (px)', 'eiddo' ),
				'dependency' => array( 'element' => 'parallax_background_image', 'not_empty' => true ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Select Content Aligment', 'eiddo' ),
				'value'      => array(
					esc_html__( 'Default', 'eiddo' ) => '',
					esc_html__( 'Left', 'eiddo' )    => 'left',
					esc_html__( 'Center', 'eiddo' )  => 'center',
					esc_html__( 'Right', 'eiddo' )   => 'right'
				),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		/******* VC Row shortcode - end *******/
		
		/******* VC Row Inner shortcode - begin *******/
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'row_content_width',
				'heading'    => esc_html__( 'Select Row Content Width', 'eiddo' ),
				'value'      => array(
					esc_html__( 'Full Width', 'eiddo' ) => 'full-width',
					esc_html__( 'In Grid', 'eiddo' )    => 'grid'
				),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'colorpicker',
				'param_name' => 'simple_background_color',
				'heading'    => esc_html__( 'Select Background Color', 'eiddo' ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'attach_image',
				'param_name' => 'simple_background_image',
				'heading'    => esc_html__( 'Select Background Image', 'eiddo' ),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'        => 'dropdown',
				'param_name'  => 'disable_background_image',
				'heading'     => esc_html__( 'Select Disable Background Image', 'eiddo' ),
				'value'       => array(
					esc_html__( 'Never', 'eiddo' )        => '',
					esc_html__( 'Below 1280px', 'eiddo' ) => '1280',
					esc_html__( 'Below 1024px', 'eiddo' ) => '1024',
					esc_html__( 'Below 768px', 'eiddo' )  => '768',
					esc_html__( 'Below 680px', 'eiddo' )  => '680',
					esc_html__( 'Below 480px', 'eiddo' )  => '480'
				),
				'save_always' => true,
				'description' => esc_html__( 'Choose on which stage you hide row background image', 'eiddo' ),
				'dependency'  => array( 'element' => 'simple_background_image', 'not_empty' => true ),
				'group'       => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		vc_add_param( 'vc_row_inner',
			array(
				'type'       => 'dropdown',
				'param_name' => 'content_text_aligment',
				'heading'    => esc_html__( 'Select Content Aligment', 'eiddo' ),
				'value'      => array(
					esc_html__( 'Default', 'eiddo' ) => '',
					esc_html__( 'Left', 'eiddo' )    => 'left',
					esc_html__( 'Center', 'eiddo' )  => 'center',
					esc_html__( 'Right', 'eiddo' )   => 'right'
				),
				'group'      => esc_html__( 'Select Settings', 'eiddo' )
			)
		);
		
		/******* VC Row Inner shortcode - end *******/
		
		/******* VC Revolution Slider shortcode - begin *******/
		
		if ( eiddo_qodef_revolution_slider_installed() ) {
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'enable_paspartu',
					'heading'     => esc_html__( 'Select Enable Passepartout', 'eiddo' ),
					'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'group'       => esc_html__( 'Select Settings', 'eiddo' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'paspartu_size',
					'heading'     => esc_html__( 'Select Passepartout Size', 'eiddo' ),
					'value'       => array(
						esc_html__( 'Tiny', 'eiddo' )   => 'tiny',
						esc_html__( 'Small', 'eiddo' )  => 'small',
						esc_html__( 'Normal', 'eiddo' ) => 'normal',
						esc_html__( 'Large', 'eiddo' )  => 'large'
					),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Select Settings', 'eiddo' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_side_paspartu',
					'heading'     => esc_html__( 'Select Disable Side Passepartout', 'eiddo' ),
					'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Select Settings', 'eiddo' )
				)
			);
			
			vc_add_param( 'rev_slider_vc',
				array(
					'type'        => 'dropdown',
					'param_name'  => 'disable_top_paspartu',
					'heading'     => esc_html__( 'Select Disable Top Passepartout', 'eiddo' ),
					'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false ) ),
					'save_always' => true,
					'dependency'  => array( 'element' => 'enable_paspartu', 'value' => array( 'yes' ) ),
					'group'       => esc_html__( 'Select Settings', 'eiddo' )
				)
			);
		}
		
		/******* VC Revolution Slider shortcode - end *******/
	}
	
	add_action( 'vc_after_init', 'eiddo_qodef_vc_row_map' );
}