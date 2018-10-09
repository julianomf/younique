<div class="qodef-social-reset-password-holder">
	<form action="<?php echo site_url( 'ldcms-login.php?action=lostpassword' ); ?>" method="post" id="qodef-lost-password-form" class="qodef-reset-pass-form">
		<div>
			<input type="text" name="user_reset_password_login" class="qodef-input-field" id="user_reset_password_login" placeholder="<?php esc_html_e( 'Enter username or email', 'select-membership' ) ?>" value="" size="20" required>
		</div>
		<?php do_action( 'lostpassword_form' ); ?>
		<div class="qodef-reset-password-button-holder">
			<?php
			if ( qodef_membership_theme_installed() ) {
				echo eiddo_qodef_get_button_html( array(
					'html_type' => 'button',
					'text'      => esc_html__( 'NEW PASSWORD', 'select-membership' ),
					'type'      => 'solid',
					'size'      => 'small'
				) );
			} else {
				echo '<button type="submit">' . esc_html__( 'NEW PASSWORD', 'select-membership' ) . '</button>';
			}
			?>
		</div>
		<input type="hidden" name="password-form-submitted" id="password-form-submitted" value="<?php esc_attr_e('Please wait...', 'select-membership'); ?>">
	</form>
	<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
</div>