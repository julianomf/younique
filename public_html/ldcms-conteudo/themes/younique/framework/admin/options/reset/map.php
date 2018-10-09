<?php

if ( ! function_exists( 'eiddo_qodef_reset_options_map' ) ) {
	/**
	 * Reset options panel
	 */
	function eiddo_qodef_reset_options_map() {
		
		eiddo_qodef_add_admin_page(
			array(
				'slug'  => '_reset_page',
				'title' => esc_html__( 'Reset', 'eiddo' ),
				'icon'  => 'fa fa-retweet'
			)
		);
		
		$panel_reset = eiddo_qodef_add_admin_panel(
			array(
				'page'  => '_reset_page',
				'name'  => 'panel_reset',
				'title' => esc_html__( 'Reset', 'eiddo' )
			)
		);
		
		eiddo_qodef_add_admin_field(
			array(
				'type'          => 'yesno',
				'name'          => 'reset_to_defaults',
				'default_value' => 'no',
				'label'         => esc_html__( 'Reset to Defaults', 'eiddo' ),
				'description'   => esc_html__( 'This option will reset all Select Options values to defaults', 'eiddo' ),
				'parent'        => $panel_reset
			)
		);
	}
	
	add_action( 'eiddo_qodef_options_map', 'eiddo_qodef_reset_options_map', 100 );
}