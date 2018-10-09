<?php

class QodefMembershipLoginRegister extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'qodef_login_register_widget',
			esc_html__( 'Select Login Widget', 'select-membership' ),
			array( 'description' => esc_html__( 'Login and register membership widget', 'select-membership' ) )
		);
	}
	
	public function widget( $args, $instance ) {
		$additional_class = is_user_logged_in() ? 'qodef-user-logged-in' : 'qodef-user-not-logged-in';
		
		echo '<div class="widget qodef-login-register-widget ' . esc_attr( $additional_class ) . '">';
        if ( ! is_user_logged_in() ) {
            echo qodef_membership_get_module_template_part( 'widgets', 'login-widget', 'login-widget-template', 'logged-out' );
        } else {
            echo qodef_membership_get_module_template_part( 'widgets', 'login-widget', 'login-widget-template', 'logged-in' );
        }
		echo '</div>';
	}
}

if ( ! function_exists( 'qodef_membership_login_widget_load' ) ) {
	function qodef_membership_login_widget_load() {
		register_widget( 'QodefMembershipLoginRegister' );
	}
	
	add_action( 'widgets_init', 'qodef_membership_login_widget_load' );
}

