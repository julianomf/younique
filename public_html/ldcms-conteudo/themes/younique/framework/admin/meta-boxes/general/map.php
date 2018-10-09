<?php

if ( ! function_exists( 'eiddo_qodef_map_general_meta' ) ) {
	function eiddo_qodef_map_general_meta() {
		
		$general_meta_box = eiddo_qodef_add_meta_box(
			array(
				'scope' => apply_filters( 'eiddo_qodef_set_scope_for_meta_boxes', array( 'page', 'post' ), 'general_meta' ),
				'title' => esc_html__( 'General', 'eiddo' ),
				'name'  => 'general_meta'
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_slider_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Slider Shortcode', 'eiddo' ),
				'description' => esc_html__( 'Paste your slider shortcode here', 'eiddo' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		/***************** Map Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_real_estate_map_style_meta',
				'type'        => 'textarea',
				'label'       => esc_html__( 'Maps Style', 'eiddo' ),
				'description' => esc_html__( 'Paste your snazzy map code here if you want to override default map layout on property list shortcode.', 'eiddo' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Slider Layout - begin **********************/
		
		/***************** Content Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_page_content_behind_header_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Always put content behind header', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will put page content behind page header', 'eiddo' ),
				'parent'        => $general_meta_box
			)
		);
		
		$qodef_content_padding_group = eiddo_qodef_add_admin_group(
			array(
				'name'        => 'content_padding_group',
				'title'       => esc_html__( 'Content Style', 'eiddo' ),
				'description' => esc_html__( 'Define styles for Content area', 'eiddo' ),
				'parent'      => $general_meta_box
			)
		);
		
			$qodef_content_padding_row = eiddo_qodef_add_admin_row(
				array(
					'name'   => 'qodef_content_padding_row',
					'next'   => true,
					'parent' => $qodef_content_padding_group
				)
			);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'   => 'qodef_page_content_top_padding',
						'type'   => 'textsimple',
						'label'  => esc_html__( 'Content Top Padding', 'eiddo' ),
						'parent' => $qodef_content_padding_row,
						'args'   => array(
							'suffix' => 'px'
						)
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'    => 'qodef_page_content_top_padding_mobile',
						'type'    => 'selectsimple',
						'label'   => esc_html__( 'Set this top padding for mobile header', 'eiddo' ),
						'parent'  => $qodef_content_padding_row,
						'options' => eiddo_qodef_get_yes_no_select_array( false )
					)
				);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_background_color_meta',
				'type'        => 'color',
				'label'       => esc_html__( 'Page Background Color', 'eiddo' ),
				'description' => esc_html__( 'Choose background color for page content', 'eiddo' ),
				'parent'      => $general_meta_box
			)
		);
		
		/***************** Content Layout - end **********************/
		
		/***************** Boxed Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'    => 'qodef_boxed_meta',
				'type'    => 'select',
				'label'   => esc_html__( 'Boxed Layout', 'eiddo' ),
				'parent'  => $general_meta_box,
				'options' => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
			$boxed_container_meta = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'boxed_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_boxed_meta'  => array('','no')
						)
					)
				)
			);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_page_background_color_in_box_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Page Background Color', 'eiddo' ),
						'description' => esc_html__( 'Choose the page background color outside box', 'eiddo' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_boxed_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Image', 'eiddo' ),
						'description' => esc_html__( 'Choose an image to be displayed in background', 'eiddo' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_boxed_pattern_background_image_meta',
						'type'        => 'image',
						'label'       => esc_html__( 'Background Pattern', 'eiddo' ),
						'description' => esc_html__( 'Choose an image to be used as background pattern', 'eiddo' ),
						'parent'      => $boxed_container_meta
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'          => 'qodef_boxed_background_image_attachment_meta',
						'type'          => 'select',
						'default_value' => 'fixed',
						'label'         => esc_html__( 'Background Image Attachment', 'eiddo' ),
						'description'   => esc_html__( 'Choose background image attachment', 'eiddo' ),
						'parent'        => $boxed_container_meta,
						'options'       => array(
							''       => esc_html__( 'Default', 'eiddo' ),
							'fixed'  => esc_html__( 'Fixed', 'eiddo' ),
							'scroll' => esc_html__( 'Scroll', 'eiddo' )
						)
					)
				);
		
		/***************** Boxed Layout - end **********************/
		
		/***************** Passepartout Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_paspartu_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Passepartout', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will display passepartout around site content', 'eiddo' ),
				'parent'        => $general_meta_box,
				'options'       => eiddo_qodef_get_yes_no_select_array(),
			)
		);
		
			$paspartu_container_meta = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'qodef_paspartu_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_paspartu_meta'  => array('','no')
						)
					)
				)
			);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_color_meta',
						'type'        => 'color',
						'label'       => esc_html__( 'Passepartout Color', 'eiddo' ),
						'description' => esc_html__( 'Choose passepartout color, default value is #ffffff', 'eiddo' ),
						'parent'      => $paspartu_container_meta
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Passepartout Size', 'eiddo' ),
						'description' => esc_html__( 'Enter size amount for passepartout', 'eiddo' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_paspartu_responsive_width_meta',
						'type'        => 'text',
						'label'       => esc_html__( 'Responsive Passepartout Size', 'eiddo' ),
						'description' => esc_html__( 'Enter size amount for passepartout for smaller screens (tablets and mobiles view)', 'eiddo' ),
						'parent'      => $paspartu_container_meta,
						'args'        => array(
							'col_width' => 2,
							'suffix'    => 'px or %'
						)
					)
				);
				
				eiddo_qodef_add_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'qodef_disable_top_paspartu_meta',
						'label'         => esc_html__( 'Disable Top Passepartout', 'eiddo' ),
						'options'       => eiddo_qodef_get_yes_no_select_array(),
					)
				);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'parent'        => $paspartu_container_meta,
						'type'          => 'select',
						'default_value' => '',
						'name'          => 'qodef_enable_fixed_paspartu_meta',
						'label'         => esc_html__( 'Enable Fixed Passepartout', 'eiddo' ),
						'description'   => esc_html__( 'Enabling this option will set fixed passepartout for your screens', 'eiddo' ),
						'options'       => eiddo_qodef_get_yes_no_select_array(),
					)
				);
		
		/***************** Passepartout Layout - end **********************/
		
		/***************** Content Width Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_initial_content_width_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Initial Width of Content', 'eiddo' ),
				'description'   => esc_html__( 'Choose the initial width of content which is in grid (Applies to pages set to "Default Template" and rows set to "In Grid")', 'eiddo' ),
				'parent'        => $general_meta_box,
				'options'       => array(
					''                => esc_html__( 'Default', 'eiddo' ),
					'qodef-grid-1100' => esc_html__( '1100px', 'eiddo' ),
					'qodef-grid-1300' => esc_html__( '1300px', 'eiddo' ),
					'qodef-grid-1200' => esc_html__( '1200px', 'eiddo' ),
					'qodef-grid-1000' => esc_html__( '1000px', 'eiddo' ),
					'qodef-grid-800'  => esc_html__( '800px', 'eiddo' )
				)
			)
		);
		
		/***************** Content Width Layout - end **********************/
		
		/***************** Smooth Page Transitions Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_smooth_page_transitions_meta',
				'type'          => 'select',
				'default_value' => '',
				'label'         => esc_html__( 'Smooth Page Transitions', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will perform a smooth transition between pages when clicking on links', 'eiddo' ),
				'parent'        => $general_meta_box,
				'options'       => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
			$page_transitions_container_meta = eiddo_qodef_add_admin_container(
				array(
					'parent'          => $general_meta_box,
					'name'            => 'page_transitions_container_meta',
					'dependency' => array(
						'hide' => array(
							'qodef_smooth_page_transitions_meta'  => array('','no')
						)
					)
				)
			);
		
				eiddo_qodef_add_meta_box_field(
					array(
						'name'        => 'qodef_page_transition_preloader_meta',
						'type'        => 'select',
						'label'       => esc_html__( 'Enable Preloading Animation', 'eiddo' ),
						'description' => esc_html__( 'Enabling this option will display an animated preloader while the page content is loading', 'eiddo' ),
						'parent'      => $page_transitions_container_meta,
						'options'     => eiddo_qodef_get_yes_no_select_array()
					)
				);
				
				$page_transition_preloader_container_meta = eiddo_qodef_add_admin_container(
					array(
						'parent'          => $page_transitions_container_meta,
						'name'            => 'page_transition_preloader_container_meta',
						'dependency' => array(
							'hide' => array(
								'qodef_page_transition_preloader_meta'  => array('','no')
							)
						)
					)
				);
				
					eiddo_qodef_add_meta_box_field(
						array(
							'name'   => 'qodef_smooth_pt_bgnd_color_meta',
							'type'   => 'color',
							'label'  => esc_html__( 'Page Loader Background Color', 'eiddo' ),
							'parent' => $page_transition_preloader_container_meta
						)
					);
					
					$group_pt_spinner_animation_meta = eiddo_qodef_add_admin_group(
						array(
							'name'        => 'group_pt_spinner_animation_meta',
							'title'       => esc_html__( 'Loader Style', 'eiddo' ),
							'description' => esc_html__( 'Define styles for loader spinner animation', 'eiddo' ),
							'parent'      => $page_transition_preloader_container_meta
						)
					);
					
					$row_pt_spinner_animation_meta = eiddo_qodef_add_admin_row(
						array(
							'name'   => 'row_pt_spinner_animation_meta',
							'parent' => $group_pt_spinner_animation_meta
						)
					);
					
					eiddo_qodef_add_meta_box_field(
						array(
							'type'    => 'selectsimple',
							'name'    => 'qodef_smooth_pt_spinner_type_meta',
							'label'   => esc_html__( 'Spinner Type', 'eiddo' ),
							'parent'  => $row_pt_spinner_animation_meta,
							'options' => array(
								''                      => esc_html__( 'Default', 'eiddo' ),
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
					
					eiddo_qodef_add_meta_box_field(
						array(
							'type'   => 'colorsimple',
							'name'   => 'qodef_smooth_pt_spinner_color_meta',
							'label'  => esc_html__( 'Spinner Color', 'eiddo' ),
							'parent' => $row_pt_spinner_animation_meta
						)
					);


					eiddo_qodef_add_meta_box_field(
						array(
							'type'        	=> 'text',
							'name'          => 'qodef_smooth_pt_spinner_text_meta',
							'default_value' => '',
							'label'         => esc_html__( 'Spinner Text', 'eiddo' ),
							'description'   => esc_html__( 'Spinner text should contain 15 characters or less', 'eiddo' ),
							'parent'        => $row_pt_spinner_animation_meta,
							'dependency' => array(
			                    'show' => array(
			                        'qodef_smooth_pt_spinner_type_meta' => 'eiddo_loader'
			                    )
			                )
						)
					);
					
					eiddo_qodef_add_meta_box_field(
						array(
							'name'        => 'qodef_page_transition_fadeout_meta',
							'type'        => 'select',
							'label'       => esc_html__( 'Enable Fade Out Animation', 'eiddo' ),
							'description' => esc_html__( 'Enabling this option will turn on fade out animation when leaving page', 'eiddo' ),
							'options'     => eiddo_qodef_get_yes_no_select_array(),
							'parent'      => $page_transitions_container_meta
						
						)
					);
		
		/***************** Smooth Page Transitions Layout - end **********************/
		
		/***************** Comments Layout - begin **********************/
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_page_comments_meta',
				'type'        => 'select',
				'label'       => esc_html__( 'Show Comments', 'eiddo' ),
				'description' => esc_html__( 'Enabling this option will show comments on your page', 'eiddo' ),
				'parent'      => $general_meta_box,
				'options'     => eiddo_qodef_get_yes_no_select_array()
			)
		);
		
		/***************** Comments Layout - end **********************/
	}
	
	add_action( 'eiddo_qodef_meta_boxes_map', 'eiddo_qodef_map_general_meta', 10 );
}