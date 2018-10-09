<div class="qodef-social-register-holder">
	<form method="post" class="qodef-register-form">
		<fieldset>
			<div>
				<input type="text" name="user_register_name" id="user_register_name" placeholder="<?php esc_html_e( 'User Name', 'select-membership' ) ?>" value="" required
				       pattern=".{3,}" title="<?php esc_html_e( 'Three or more characters', 'select-membership' ); ?>"/>
			</div>
			<div>
				<input type="email" name="user_register_email" id="user_register_email" placeholder="<?php esc_html_e( 'Email', 'select-membership' ) ?>" value="" required />
			</div>
            <div>
                <input type="password" name="user_register_password" id="user_register_password" placeholder="<?php esc_html_e('Password','select-membership') ?>" value="" required />
            </div>
            <div>
                <input type="password" name="user_register_confirm_password" id="user_register_confirm_password" placeholder="<?php esc_html_e('Repeat Password','select-membership') ?>" value="" required />
            </div>
            <?php do_action('qodef_membership_additional_registration_field'); ?>
			<input type="hidden" name="register-form-submitted" id="register-form-submitted" value="<?php esc_attr_e('Please wait...', 'select-membership'); ?>">
			<div class="qodef-register-button-holder">
				<?php
				if ( qodef_membership_theme_installed() ) {
					echo eiddo_qodef_get_button_html( array(
						'html_type' => 'button',
						'text'      => esc_html__( 'Register', 'select-membership' ),
						'type'      => 'solid',
						'size'      => 'small'
					) );
				} else {
					echo '<button type="submit">' . esc_html__( 'Register', 'select-membership' ) . '</button>';
				}
				wp_nonce_field( 'qodef-ajax-register-nonce', 'qodef-register-security' ); ?>
			</div>
		</fieldset>
	</form>
	<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
</div>