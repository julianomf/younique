<?php

if ( ! function_exists( 'eiddo_qodef_general_options_map' ) ) {
	/**
	 * General options page
	 */
	function eiddo_qodef_general_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '',
				'title' => esc_html__( 'General', 'eiddo' ),
				'icon'  => 'fa fa-institution'
			)
		);
		
		$panel_design_style = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_design_style',
				'title' => esc_html__( 'Design Style', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'google_fonts',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Google Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose a default Google font for your site', 'eiddo' ),
				'parent'        => $panel_design_style
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_fonts',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Additional Google Fonts', 'eiddo' ),
				'parent'        => $panel_design_style
			)
		);
		
		$additional_google_fonts_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $panel_design_style,
				'name'            => 'additional_google_fonts_container',
				'dependency' => array(
					'show' => array(
						'additional_google_fonts'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font1',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'eiddo' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font2',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'eiddo' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font3',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'eiddo' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font4',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'eiddo' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'additional_google_font5',
				'type'          => 'font',
				'default_value' => '-1',
				'label'         => esc_html__( 'Font Family', 'eiddo' ),
				'description'   => esc_html__( 'Choose additional Google font for your site', 'eiddo' ),
				'parent'        => $additional_google_fonts_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'google_font_weight',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Style & Weight', 'eiddo' ),
				'description'   => esc_html__( 'Choose a default Google font weights for your site. Impact on page load time', 'eiddo' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'100'  => esc_html__( '100 Thin', 'eiddo' ),
					'100i' => esc_html__( '100 Thin Italic', 'eiddo' ),
					'200'  => esc_html__( '200 Extra-Light', 'eiddo' ),
					'200i' => esc_html__( '200 Extra-Light Italic', 'eiddo' ),
					'300'  => esc_html__( '300 Light', 'eiddo' ),
					'300i' => esc_html__( '300 Light Italic', 'eiddo' ),
					'400'  => esc_html__( '400 Regular', 'eiddo' ),
					'400i' => esc_html__( '400 Regular Italic', 'eiddo' ),
					'500'  => esc_html__( '500 Medium', 'eiddo' ),
					'500i' => esc_html__( '500 Medium Italic', 'eiddo' ),
					'600'  => esc_html__( '600 Semi-Bold', 'eiddo' ),
					'600i' => esc_html__( '600 Semi-Bold Italic', 'eiddo' ),
					'700'  => esc_html__( '700 Bold', 'eiddo' ),
					'700i' => esc_html__( '700 Bold Italic', 'eiddo' ),
					'800'  => esc_html__( '800 Extra-Bold', 'eiddo' ),
					'800i' => esc_html__( '800 Extra-Bold Italic', 'eiddo' ),
					'900'  => esc_html__( '900 Ultra-Bold', 'eiddo' ),
					'900i' => esc_html__( '900 Ultra-Bold Italic', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'google_font_subset',
				'type'          => 'checkboxgroup',
				'default_value' => '',
				'label'         => esc_html__( 'Google Fonts Subset', 'eiddo' ),
				'description'   => esc_html__( 'Choose a default Google font subsets for your site', 'eiddo' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'latin'        => esc_html__( 'Latin', 'eiddo' ),
					'latin-ext'    => esc_html__( 'Latin Extended', 'eiddo' ),
					'cyrillic'     => esc_html__( 'Cyrillic', 'eiddo' ),
					'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'eiddo' ),
					'greek'        => esc_html__( 'Greek', 'eiddo' ),
					'greek-ext'    => esc_html__( 'Greek Extended', 'eiddo' ),
					'vietnamese'   => esc_html__( 'Vietnamese', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'first_color',
				'type'        => 'color',
				'label'       => esc_html__( 'First Main Color', 'eiddo' ),
				'description' => esc_html__( 'Choose the most dominant theme color. Default color is #00bbb3', 'eiddo' ),
				'parent'      => $panel_design_style
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'page_background_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'eiddo' ),
				'description' => esc_html__( 'Choose the background color for page content. Default color is #ffffff', 'eiddo' ),
				'parent'      => $panel_design_style
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'selection_color',
				'type'        => 'color',
				'label'       => esc_html__( 'Text Selection Color', 'eiddo' ),
				'description' => esc_html__( 'Choose the color users see when selecting text', 'eiddo' ),
				'parent'      => $panel_design_style
			)
		);
		
		/***************** Passepartout Layout - begin **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'boxed',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Boxed Layout', 'eiddo' ),
				'parent'        => $panel_design_style
			)
		);
		
			$boxed_container = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'boxed_container',
					'dependency' => array(
						'show' => array(
							'boxed'  => 'yes'
						)
					)
				)
			);
		
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'page_background_color_in_box',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'eiddo' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'eiddo' ),
						'parent'      => $boxed_container
					)
				);
				
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'boxed_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'eiddo' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'eiddo' ),
						'parent'      => $boxed_container
					)
				);
				
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'boxed_pattern_background_image',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'eiddo' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'eiddo' ),
						'parent'      => $boxed_container
					)
				);
				
				eiddo_qodef_add_admin_field(
					array(
						'name'          => 'boxed_background_image_attachment',
						'type'          => 'select',
						'default_value' => '',
						'label'         => esc_html__( 'Background Image Attachment', 'eiddo' ),
						'description'   => esc_html__( 'Choose background image attachment', 'eiddo' ),
						'parent'        => $boxed_container,
						'options'       => array(
							''       => esc_html__( 'Default', 'eiddo' ),
							'fixed'  => esc_html__( 'Fixed', 'eiddo' ),
							'scroll' => esc_html__( 'Scroll', 'eiddo' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'paspartu',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Passepartout', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'eiddo' ),
				'parent'        => $panel_design_style
			)
		);
		
			$paspartu_container = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $panel_design_style,
					'name'            => 'paspartu_container',
					'dependency' => array(
						'show' => array(
							'paspartu'  => 'yes'
						)
					)
				)
			);
		
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_color',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'eiddo' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'eiddo' ),
						'parent'      => $paspartu_container
					)
				);
				
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'eiddo' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'eiddo' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				eiddo_qodef_add_admin_field(
					array(
						'name'        => 'paspartu_responsive_width',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'eiddo' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'eiddo' ),
						'parent'      => $paspartu_container,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				eiddo_qodef_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'disable_top_paspartu',
						'label'         => esc_html__( 'Disable Top Passepartout', 'eiddo' )
					)
				);
		
				eiddo_qodef_add_admin_field(
					array(
						'parent'        => $paspartu_container,
						'type'          => 'yesno',
						'default_value' => 'no',
						'name'          => 'enable_fixed_paspartu',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'eiddo' ),
						'description' => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'eiddo' )
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Layout - begin **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'initial_content_width',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'eiddo' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'eiddo' ),
				'parent'        => $panel_design_style,
				'options'       => array(
					'qodef-grid-1100' => esc_html__( '1100px - default', 'eiddo' ),
					'qodef-grid-1300' => esc_html__( '1300px', 'eiddo' ),
					'qodef-grid-1200' => esc_html__( '1200px', 'eiddo' ),
					'qodef-grid-1000' => esc_html__( '1000px', 'eiddo' ),
					'qodef-grid-800'  => esc_html__( '800px', 'eiddo' )
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'preload_pattern_image',
				'type'          => 'image',
				'label'         => esc_html__( 'Preload Pattern Image', 'eiddo' ),
				'description'   => esc_html__( 'Choose preload pattern image to be displayed until images are loaded', 'eiddo' ),
				'parent'        => $panel_design_style
			)
		);
		
		/***************** Content Layout - end **********************/
		
		$panel_settings = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_settings',
				'title' => esc_html__( 'Settings', 'eiddo' )
			)
		);
		
		/***************** Smooth Scroll Layout - begin **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'page_smooth_scroll',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Scroll', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth scrolling effect on every page (except on Mac and touch devices)', 'eiddo' ),
				'parent'        => $panel_settings
			)
		);
		
		/***************** Smooth Scroll Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'smooth_page_transitions',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Smooth Page Transitions', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'eiddo' ),
				'parent'        => $panel_settings
			)
		);
		
			$page_transitions_container = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $panel_settings,
					'name'            => 'page_transitions_container',
					'dependency' => array(
						'show' => array(
							'smooth_page_transitions'  => 'yes'
						)
					)
				)
			);
		
				eiddo_qodef_add_admin_field(
					array(
						'name'          => 'page_transition_preloader',
						'type'          => 'yesno',
						'default_value' => 'no',
						'label'         => esc_html__( 'Enable Preloading Animation', 'eiddo' ),
						'description'   => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'eiddo' ),
						'parent'        => $page_transitions_container
					)
				);
				
				$page_transition_preloader_container = eiddo_qodef_add_admin_container(
					array(
						'parent'          => $page_transitions_container,
						'name'            => 'page_transition_preloader_container',
						'dependency' => array(
							'show' => array(
								'page_transition_preloader'  => 'yes'
							)
						)
					)
				);
		
		
					eiddo_qodef_add_admin_field(
						array(
							'name'   => 'smooth_pt_bgnd_color',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'eiddo' ),
							'parent' => $page_transition_preloader_container
						)
					);
					
					$group_pt_spinner_animation = eiddo_qodef_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation',
							'title'       => esc_html__( 'Loader Style', 'eiddo' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'eiddo' ),
							'parent'      => $page_transition_preloader_container
						)
					);
					
					$row_pt_spinner_animation = eiddo_qodef_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation',
							'parent' => $group_pt_spinner_animation
						)
					);
					
					eiddo_qodef_add_admin_field(
						array(
							'type'          => 'selectsimple',
							'name'          => 'smooth_pt_spinner_type',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Type', 'eiddo' ),
							'parent'        => $row_pt_spinner_animation,
							'options'       => array(
								'eiddo_loader'			=> esc_html__( 'Eiddo Loader', 'eiddo' ),
								'rotate_circles'        => esc_html__( 'Rotate Circles', 'eiddo' ),
								'pulse'                 => esc_html__( 'Pulse', 'eiddo' ),
								'double_pulse'          => esc_html__( 'Double Pulse', 'eiddo' ),
								'cube'                  => esc_html__( 'Cube', 'eiddo' ),
								'rotating_cubes'        => esc_html__( 'Rotating Cubes', 'eiddo' ),
								'stripes'               => esc_html__( 'Stripes', 'eiddo' ),
								'wave'                  => esc_html__( 'Wave', 'eiddo' ),
								'two_rotating_circles'  => esc_html__( '2 Rotating Circles', 'eiddo' ),
								'five_rotating_circles' => esc_html__( '5 Rotating Circles', 'eiddo' ),
								'atom'                  => esc_html__( 'Atom', 'eiddo' ),
								'clock'                 => esc_html__( 'Clock', 'eiddo' ),
								'mitosis'               => esc_html__( 'Mitosis', 'eiddo' ),
								'lines'                 => esc_html__( 'Lines', 'eiddo' ),
								'fussion'               => esc_html__( 'Fussion', 'eiddo' ),
								'wave_circles'          => esc_html__( 'Wave Circles', 'eiddo' ),
								'pulse_circles'         => esc_html__( 'Pulse Circles', 'eiddo' )
							)
						)
					);
					
					eiddo_qodef_add_admin_field(
						array(
							'type'          => 'colorsimple',
							'name'          => 'smooth_pt_spinner_color',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Color', 'eiddo' ),
							'parent'        => $row_pt_spinner_animation
						)
					);

					eiddo_qodef_add_admin_field(
						array(
							'type'        	=> 'text',
							'name'          => 'smooth_pt_spinner_text',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Text', 'eiddo' ),
							'description'   => esc_html__( 'Spinner text should contain 15 characters or less', 'eiddo' ),
							'parent'        => $page_transition_preloader_container,
							'dependency' => array(
			                    'show' => array(
			                        'smooth_pt_spinner_type' => 'eiddo_loader'
			                    )
			                )
						)
					);
					
					eiddo_qodef_add_admin_field(
						array(
							'name'          => 'page_transition_fadeout',
							'type'          => 'yesno',
							'default_value' => 'no',
							'label'         => esc_html__( 'Enable Fade Out Animation', 'eiddo' ),
							'description'   => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'eiddo' ),
							'parent'        => $page_transitions_container
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'show_back_button',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show "Back To Top Button"', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will display a Back to Top button on every page', 'eiddo' ),
				'parent'        => $panel_settings
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'responsiveness',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Responsiveness', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will make all pages responsive', 'eiddo' ),
				'parent'        => $panel_settings
			)
		);
		
		$panel_custom_code = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_custom_code',
				'title' => esc_html__( 'Custom Code', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'custom_js',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Custom JS', 'eiddo' ),
				'description' => esc_html__( 'Enter your custom Javascript here', 'eiddo' ),
				'parent'      => $panel_custom_code
			)
		);
		
		$panel_google_api = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '',
				'name'  => 'panel_google_api',
				'title' => esc_html__( 'Google API', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'        => 'google_maps_api_key',
				'type'        => 'text',
				'label'       => esc_html__( 'Google Maps Api Key', 'eiddo' ),
				'description' => esc_html__( 'Insert your Google Maps API key here. For instructions on how to create a Google Maps API key, please refer to our to our documentation.', 'eiddo' ),
				'parent'      => $panel_google_api
			)
		);
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_general_options_map', 1 );
}

if ( ! function_exists( 'eiddo_qodef_page_general_style' ) ) {
	/**
	 * Function that prints page general inline styles
	 */
	function eiddo_qodef_page_general_style( $style ) {
		$current_style = '';
		$page_id       = eiddo_qodef_get_page_id();
		$class_prefix  = eiddo_qodef_get_unique_page_class( $page_id );
		
		$boxed_background_style = array();
		
		$boxed_page_background_color = eiddo_qodef_get_meta_field_intersect( 'page_background_color_in_box', $page_id );
		if ( ! empty( $boxed_page_background_color ) ) {
			$boxed_background_style['background-color'] = $boxed_page_background_color;
		}
		
		$boxed_page_background_image = eiddo_qodef_get_meta_field_intersect( 'boxed_background_image', $page_id );
		if ( ! empty( $boxed_page_background_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_image ) . ')';
			$boxed_background_style['background-position'] = 'center 0px';
			$boxed_background_style['background-repeat']   = 'no-repeat';
		}
		
		$boxed_page_background_pattern_image = eiddo_qodef_get_meta_field_intersect( 'boxed_pattern_background_image', $page_id );
		if ( ! empty( $boxed_page_background_pattern_image ) ) {
			$boxed_background_style['background-image']    = 'url(' . esc_url( $boxed_page_background_pattern_image ) . ')';
			$boxed_background_style['background-position'] = '0px 0px';
			$boxed_background_style['background-repeat']   = 'repeat';
		}
		
		$boxed_page_background_attachment = eiddo_qodef_get_meta_field_intersect( 'boxed_background_image_attachment', $page_id );
		if ( ! empty( $boxed_page_background_attachment ) ) {
			$boxed_background_style['background-attachment'] = $boxed_page_background_attachment;
		}
		
		$boxed_background_selector = $class_prefix . '.qodef-boxed .qodef-wrapper';
		
		if ( ! empty( $boxed_background_style ) ) {
			$current_style .= eiddo_qodef_dynamic_css( $boxed_background_selector, $boxed_background_style );
		}
		
		$paspartu_style     = array();
		$paspartu_res_style = array();
		$paspartu_res_start = '@media only screen and (max-width: 1024px) {';
		$paspartu_res_end   = '}';
		
		$paspartu_header_selector                = array(
			'.qodef-paspartu-enabled .qodef-page-header .qodef-fixed-wrapper.fixed',
			'.qodef-paspartu-enabled .qodef-sticky-header',
			'.qodef-paspartu-enabled .qodef-mobile-header.mobile-header-appear .qodef-mobile-header-inner'
		);
		$paspartu_header_appear_selector         = array(
			'.qodef-paspartu-enabled.qodef-fixed-paspartu-enabled .qodef-page-header .qodef-fixed-wrapper.fixed',
			'.qodef-paspartu-enabled.qodef-fixed-paspartu-enabled .qodef-sticky-header.header-appear',
			'.qodef-paspartu-enabled.qodef-fixed-paspartu-enabled .qodef-mobile-header.mobile-header-appear .qodef-mobile-header-inner'
		);
		
		$paspartu_header_style                   = array();
		$paspartu_header_appear_style            = array();
		$paspartu_header_responsive_style        = array();
		$paspartu_header_appear_responsive_style = array();
		
		$paspartu_color = eiddo_qodef_get_meta_field_intersect( 'paspartu_color', $page_id );
		if ( ! empty( $paspartu_color ) ) {
			$paspartu_style['background-color'] = $paspartu_color;
		}
		
		$paspartu_width = eiddo_qodef_get_meta_field_intersect( 'paspartu_width', $page_id );
		if ( $paspartu_width !== '' ) {
			if ( eiddo_qodef_string_ends_with( $paspartu_width, '%' ) || eiddo_qodef_string_ends_with( $paspartu_width, 'px' ) ) {
				$paspartu_style['padding'] = $paspartu_width;
				
				$paspartu_clean_width      = eiddo_qodef_string_ends_with( $paspartu_width, '%' ) ? eiddo_qodef_filter_suffix( $paspartu_width, '%' ) : eiddo_qodef_filter_suffix( $paspartu_width, 'px' );
				$paspartu_clean_width_mark = eiddo_qodef_string_ends_with( $paspartu_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_style['left']              = $paspartu_width;
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_style['padding'] = $paspartu_width . 'px';
				
				$paspartu_header_style['left']              = $paspartu_width . 'px';
				$paspartu_header_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		$paspartu_selector = $class_prefix . '.qodef-paspartu-enabled .qodef-wrapper';
		
		if ( ! empty( $paspartu_style ) ) {
			$current_style .= eiddo_qodef_dynamic_css( $paspartu_selector, $paspartu_style );
		}
		
		if ( ! empty( $paspartu_header_style ) ) {
			$current_style .= eiddo_qodef_dynamic_css( $paspartu_header_selector, $paspartu_header_style );
			$current_style .= eiddo_qodef_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_style );
		}
		
		$paspartu_responsive_width = eiddo_qodef_get_meta_field_intersect( 'paspartu_responsive_width', $page_id );
		if ( $paspartu_responsive_width !== '' ) {
			if ( eiddo_qodef_string_ends_with( $paspartu_responsive_width, '%' ) || eiddo_qodef_string_ends_with( $paspartu_responsive_width, 'px' ) ) {
				$paspartu_res_style['padding'] = $paspartu_responsive_width;
				
				$paspartu_clean_width      = eiddo_qodef_string_ends_with( $paspartu_responsive_width, '%' ) ? eiddo_qodef_filter_suffix( $paspartu_responsive_width, '%' ) : eiddo_qodef_filter_suffix( $paspartu_responsive_width, 'px' );
				$paspartu_clean_width_mark = eiddo_qodef_string_ends_with( $paspartu_responsive_width, '%' ) ? '%' : 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_width;
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_clean_width ) . $paspartu_clean_width_mark . ')';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_width;
			} else {
				$paspartu_res_style['padding'] = $paspartu_responsive_width . 'px';
				
				$paspartu_header_responsive_style['left']              = $paspartu_width . 'px';
				$paspartu_header_responsive_style['width']             = 'calc(100% - ' . ( 2 * $paspartu_width ) . 'px)';
				$paspartu_header_appear_responsive_style['margin-top'] = $paspartu_width . 'px';
			}
		}
		
		if ( ! empty( $paspartu_res_style ) ) {
			$current_style .= $paspartu_res_start . eiddo_qodef_dynamic_css( $paspartu_selector, $paspartu_res_style ) . $paspartu_res_end;
		}
		
		if ( ! empty( $paspartu_header_responsive_style ) ) {
			$current_style .= $paspartu_res_start . eiddo_qodef_dynamic_css( $paspartu_header_selector, $paspartu_header_responsive_style ) . $paspartu_res_end;
			$current_style .= $paspartu_res_start . eiddo_qodef_dynamic_css( $paspartu_header_appear_selector, $paspartu_header_appear_responsive_style ) . $paspartu_res_end;
		}
		
		$current_style = $current_style . $style;
		
		return $current_style;
	}
	
	add_filter( 'eiddo_qodef_add_page_custom_style', 'eiddo_qodef_page_general_style' );
}