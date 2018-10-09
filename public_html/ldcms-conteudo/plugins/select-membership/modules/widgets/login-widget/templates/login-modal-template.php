<div class="qodef-login-register-holder">
	<div class="qodef-login-register-content">
		<ul>
			<li><a href="#qodef-login-content"><?php esc_html_e( 'Login', 'select-membership' ); ?></a></li>
			<li><a href="#qodef-register-content"><?php esc_html_e( 'Register', 'select-membership' ); ?></a></li>
		</ul>
		<div class="qodef-login-content-inner" id="qodef-login-content">
			<div class="qodef-wp-login-holder"><?php echo qodef_membership_execute_shortcode( 'qodef_user_login', array() ); ?></div>
		</div>
		<div class="qodef-register-content-inner" id="qodef-register-content">
			<div class="qodef-wp-register-holder"><?php echo qodef_membership_execute_shortcode( 'qodef_user_register', array() ) ?></div>
		</div>
	</div>
</div>