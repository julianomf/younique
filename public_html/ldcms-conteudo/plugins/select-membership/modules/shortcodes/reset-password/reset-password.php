<?php

namespace QodefMembership\Shortcodes\QodefUserResetPassword;

use QodefMembership\Lib\ShortcodeInterface;

class QodefUserResetPassword implements ShortcodeInterface {
	private $base;
	
	public function __construct() {
		$this->base = 'qodef_user_reset_password';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {}
	
	public function render( $atts, $content = null ) {
		$args = array();
		
		$params = shortcode_atts( $args, $atts );
		extract( $params );
		
		$html = qodef_membership_get_module_template_part( 'shortcodes', 'reset-password', 'reset-password-template', '', $params );
		
		return $html;
	}
}