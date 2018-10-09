<?php 

if ( !function_exists('qodef_membership_dashboard_edit_profile_fields') ) {
	function qodef_membership_dashboard_edit_profile_fields($params){

		extract($params);

		$edit_profile = eiddo_qodef_add_dashboard_fields(array(
			'name' => 'edit_profile',
		));

		$edit_profile_form = eiddo_qodef_add_dashboard_form(array(
			'name' => 'edit_profile_form',
			'form_id'   => 'qodef-membership-update-profile-form',
			'form_action' => 'qodef_membership_update_user_profile',
			'parent' => $edit_profile,
			'button_label' => esc_html__('UPDATE PROFILE','select-membership'),
			'button_args' => array(
				'data-updating-text' => esc_html__('UPDATING PROFILE', 'select-membership'),
				'data-updated-text' => esc_html__('PROFILE UPDATED', 'select-membership'),
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'first_name',
			'label' => esc_html__('First Name','select-membership'),
			'parent' => $edit_profile_form,
			'value' => $first_name
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'last_name',
			'label' => esc_html__('Last Name','select-membership'),
			'parent' => $edit_profile_form,
			'value' => $last_name
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'email',
			'label' => esc_html__('Email','select-membership'),
			'parent' => $edit_profile_form,
			'value' => $email,
			'args' => array(
				'input_type' => 'email'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'url',
			'label' => esc_html__('Website','select-membership'),
			'parent' => $edit_profile_form,
			'value' => $website
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'description',
			'label' => esc_html__('Description','select-membership'),
			'parent' => $edit_profile_form,
			'value' => $description
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password',
			'label' => esc_html__('Password','select-membership'),
			'parent' => $edit_profile_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password2',
			'label' => esc_html__('Repeat Password','select-membership'),
			'parent' => $edit_profile_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		$edit_profile->render();
	}
}
?>

<div class="qodef-membership-dashboard-page">
	<div class="qodef-edit-profile">
	    <h2><?php esc_html_e('Edit Profile', 'select-membership'); ?></h2>
	    <p><?php esc_html_e('Update your profile now', 'select-membership'); ?></p>
		<div>
			<?php qodef_membership_dashboard_edit_profile_fields($params); ?>
			<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
		</div>
	</div>
</div>