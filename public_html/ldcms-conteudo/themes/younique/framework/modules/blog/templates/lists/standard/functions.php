<?php

if ( ! function_exists( 'eiddo_qodef_register_blog_standard_template_file' ) ) {
	/**
	 * Function that register blog standard template
	 */
	function eiddo_qodef_register_blog_standard_template_file( $templates ) {
		$templates['blog-standard'] = esc_html__( 'Blog: Standard', 'eiddo' );
		
		return $templates;
	}
	
	add_filter( 'eiddo_qodef_register_blog_templates', 'eiddo_qodef_register_blog_standard_template_file' );
}

if ( ! function_exists( 'eiddo_qodef_set_blog_standard_type_global_option' ) ) {
	/**
	 * Function that set blog list type value for global blog option map
	 */
	function eiddo_qodef_set_blog_standard_type_global_option( $options ) {
		$options['standard'] = esc_html__( 'Blog: Standard', 'eiddo' );
		
		return $options;
	}
	
	add_filter( 'eiddo_qodef_blog_list_type_global_option', 'eiddo_qodef_set_blog_standard_type_global_option' );
}