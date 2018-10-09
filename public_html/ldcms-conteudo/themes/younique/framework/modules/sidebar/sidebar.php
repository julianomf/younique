<?php

if ( ! function_exists( 'eiddo_qodef_register_sidebars' ) ) {
	/**
	 * Function that registers theme's sidebars
	 */
	function eiddo_qodef_register_sidebars() {
		
		register_sidebar(
			array(
				'id'            => 'sidebar',
				'name'          => esc_html__( 'Sidebar', 'eiddo' ),
				'description'   => esc_html__( 'Default Sidebar', 'eiddo' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="qodef-widget-title-holder"><h5 class="qodef-widget-title">',
				'after_title'   => '</h5></div>'
			)
		);
	}
	
	add_action( 'widgets_init', 'eiddo_qodef_register_sidebars', 1 );
}

if ( ! function_exists( 'eiddo_qodef_add_support_custom_sidebar' ) ) {
	/**
	 * Function that adds theme support for custom sidebars. It also creates EiddoQodefSidebar object
	 */
	function eiddo_qodef_add_support_custom_sidebar() {
		add_theme_support( 'EiddoQodefSidebar' );
		
		if ( get_theme_support( 'EiddoQodefSidebar' ) ) {
			new EiddoQodefSidebar();
		}
	}
	
	add_action( 'after_setup_theme', 'eiddo_qodef_add_support_custom_sidebar' );
}