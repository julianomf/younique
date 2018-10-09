<?php

if ( ! function_exists( 'eiddo_qodef_include_blog_shortcodes' ) ) {
	function eiddo_qodef_include_blog_shortcodes() {
		include_once QODE_FRAMEWORK_MODULES_ROOT_DIR . '/blog/shortcodes/blog-list/blog-list.php';
	}
	
	if ( eiddo_qodef_core_plugin_installed() ) {
		add_action( 'qodef_core_action_include_shortcodes_file', 'eiddo_qodef_include_blog_shortcodes' );
	}
}

if ( ! function_exists( 'eiddo_qodef_add_blog_shortcodes' ) ) {
	function eiddo_qodef_add_blog_shortcodes( $shortcodes_class_name ) {
		$shortcodes = array(
			'QodeCore\CPT\Shortcodes\BlogList\BlogList'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	if ( eiddo_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcode', 'eiddo_qodef_add_blog_shortcodes' );
	}
}

if ( ! function_exists( 'eiddo_qodef_set_blog_list_icon_class_name_for_vc_shortcodes' ) ) {
	/**
	 * Function that set custom icon class name for blog shortcodes to set our icon for Visual Composer shortcodes panel
	 */
	function eiddo_qodef_set_blog_list_icon_class_name_for_vc_shortcodes( $shortcodes_icon_class_array ) {
		$shortcodes_icon_class_array[] = '.icon-wpb-blog-list';
		
		return $shortcodes_icon_class_array;
	}
	
	if ( eiddo_qodef_core_plugin_installed() ) {
		add_filter( 'qodef_core_filter_add_vc_shortcodes_custom_icon_class', 'eiddo_qodef_set_blog_list_icon_class_name_for_vc_shortcodes' );
	}
}