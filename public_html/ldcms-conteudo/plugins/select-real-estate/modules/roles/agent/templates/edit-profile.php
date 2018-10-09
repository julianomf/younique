<?php 

if ( !function_exists('qodef_real_estate_dashboard_edit_agent_fields') ) {
	function qodef_real_estate_dashboard_edit_agent_fields($params){

		extract($params);

		$edit_agent = eiddo_qodef_add_dashboard_fields(array(
			'name' => 'edit_agent',
		));

		$edit_agent_form = eiddo_qodef_add_dashboard_form(array(
			'name' => 'edit_agent_form',
			'form_id'   => 'qodef-re-update-agent-profile-form',
			'form_action' => 'qodef_re_update_agent_profile',
			'parent' => $edit_agent,
			'button_label' => esc_html__('UPDATE PROFILE','select-real-estate'),
			'button_args' => array(
				'data-updating-text' => esc_html__('UPDATING PROFILE', 'select-real-estate'),
				'data-updated-text' => esc_html__('PROFILE UPDATED', 'select-real-estate'),
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'first_name',
			'label' => esc_html__('First Name','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $first_name
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'last_name',
			'label' => esc_html__('Last Name','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $last_name
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'image',
			'name' => 'qodef_agent_profile_image',
			'label' => esc_html__('Agent Profile Image','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_profile_image
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_position',
			'label' => esc_html__('Agent Position','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_position
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_licence',
			'label' => esc_html__('Agent Licence','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_licence
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'email',
			'label' => esc_html__('Email','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $email,
			'args' => array(
				'input_type' => 'email'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'url',
			'label' => esc_html__('Website','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $website
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_telephone',
			'label' => esc_html__('Telephone','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_telephone
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_mobile_phone',
			'label' => esc_html__('Mobile Phone','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_mobile_phone
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_fax_number',
			'label' => esc_html__('Fax Number','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_fax_number
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agent_address',
			'label' => esc_html__('Address','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $qodef_agent_address
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'description',
			'label' => esc_html__('Description','select-real-estate'),
			'parent' => $edit_agent_form,
			'value' => $description
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password',
			'label' => esc_html__('Password','select-real-estate'),
			'parent' => $edit_agent_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password2',
			'label' => esc_html__('Repeat Password','select-real-estate'),
			'parent' => $edit_agent_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		$edit_agent->render();
	}
}
?>
<div class="qodef-membership-dashboard-page qodef-real-estate-dashboard-page">
	<div class="qodef-edit-profile">
		<h2><?php esc_html_e('Edit Profile', 'select-real-estate'); ?></h2>
		<p><?php esc_html_e('Update your profile now', 'select-real-estate'); ?></p>
		<div>
			<?php qodef_real_estate_dashboard_edit_agent_fields($params);?>
			<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
		</div>
	</div>
</div>