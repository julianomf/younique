<?php

if ( ! function_exists( 'eiddo_qodef_logo_options_map' ) ) {
	function eiddo_qodef_logo_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_logo_page',
				'title' => esc_html__( 'Logo', 'eiddo' ),
				'icon'  => 'fa fa-coffee'
			)
		);
		
		$panel_logo = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_logo_page',
				'name'  => 'panel_logo',
				'title' => esc_html__( 'Logo', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $panel_logo,
				'type'          => 'yesno',
				'name'          => 'hide_logo',
				'default_value' => 'no',
				'label'         => esc_html__( 'Hide Logo', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will hide logo image', 'eiddo' )
			)
		);
		
		$hide_logo_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $panel_logo,
				'name'            => 'hide_logo_container',
				'dependency' => array(
					'hide' => array(
						'hide_logo'  => 'yes'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'logo_image',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Default', 'eiddo' ),
				'parent'        => $hide_logo_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_dark',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Dark', 'eiddo' ),
				'parent'        => $hide_logo_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_light',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo_white.png",
				'label'         => esc_html__( 'Logo Image - Light', 'eiddo' ),
				'parent'        => $hide_logo_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_sticky',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Sticky', 'eiddo' ),
				'parent'        => $hide_logo_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'name'          => 'logo_image_mobile',
				'type'          => 'image',
				'default_value' => QODE_ASSETS_ROOT . "/img/logo.png",
				'label'         => esc_html__( 'Logo Image - Mobile', 'eiddo' ),
				'parent'        => $hide_logo_container
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $panel_logo,
				'type'          => 'yesno',
				'name'          => 'show_logo_text',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Logo Text', 'eiddo' ),
				'description'   => esc_html__( 'Enabling this option will show logo text next to logo image', 'eiddo' )
			)
		);
		
		$show_logo_text_container = eiddo_qodef_add_admin_container(
			array(
				'parent'          => $panel_logo,
				'name'            => 'show_logo_text_container',
				'dependency' => array(
					'hide' => array(
						'show_logo_text'  => 'no'
					)
				)
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'parent'        => $show_logo_text_container,
				'type'          => 'text',
				'name'          => 'logo_text',
				'default_value' => '',
				'label'         => esc_html__( 'Logo Text', 'eiddo' ),
				'description'   => esc_html__( 'Enter logo text', 'eiddo' ),
				'args'          => array(
					'col_width' => 6
				)
			)
		);
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_logo_options_map', 2 );
}