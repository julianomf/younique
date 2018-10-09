<?php

if ( ! function_exists( 'qodef_membership_add_login_shortcodes' ) ) {
	function qodef_membership_add_login_shortcodes( $shortcodes_class_name ) {
		$shortcodes = array(
			'QodefMembership\Shortcodes\QodefUserLogin\QodefUserLogin'
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	add_filter( 'qodef_membership_filter_add_vc_shortcode', 'qodef_membership_add_login_shortcodes' );
}