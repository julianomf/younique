<?php
if ( !function_exists('qodef_real_estate_dashboard_edit_agency_fields') ) {
	function qodef_real_estate_dashboard_edit_agency_fields($params){

		extract($params);

		$edit_agency = eiddo_qodef_add_dashboard_fields(array(
			'name' => 'add_agent',
		));

		$edit_agency_form = eiddo_qodef_add_dashboard_form(array(
			'name' => 'edit_agency_form',
			'form_id'   => 'qodef-re-update-agency-profile-form',
			'form_action' => 'qodef_re_update_agency_profile',
			'parent' => $edit_agency,
			'button_label' => esc_html__('UPDATE PROFILE','select-real-estate'),
			'button_args' => array(
				'data-updating-text' => esc_html__('UPDATING PROFILE', 'select-real-estate'),
				'data-updated-text' => esc_html__('PROFILE UPDATED', 'select-real-estate'),
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_name',
			'label' => esc_html__('Agency Name','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_name
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'image',
			'name' => 'qodef_agency_profile_image',
			'label' => esc_html__('Agency Profile Image','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_profile_image
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_licence',
			'label' => esc_html__('Agency Licence','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_licence
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'email',
			'label' => esc_html__('Email','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $email,
			'args' => array(
				'input_type' => 'email'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'url',
			'label' => esc_html__('Website','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $website
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_telephone',
			'label' => esc_html__('Telephone','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_telephone
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_mobile_phone',
			'label' => esc_html__('Mobile Phone','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_mobile_phone
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_fax_number',
			'label' => esc_html__('Fax Number','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_fax_number
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'qodef_agency_address',
			'label' => esc_html__('Address','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $qodef_agency_address
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'description',
			'label' => esc_html__('Description','select-real-estate'),
			'parent' => $edit_agency_form,
			'value' => $description
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password',
			'label' => esc_html__('Password','select-real-estate'),
			'parent' => $edit_agency_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'password2',
			'label' => esc_html__('Repeat Password','select-real-estate'),
			'parent' => $edit_agency_form,
			'args' => array(
				'input_type' => 'password'
			)
		));

		$edit_agency->render();
	}
} ?>
<div class="qodef-membership-dashboard-page qodef-real-estate-dashboard-page">
	<div class="qodef-edit-profile">
		<h2><?php esc_html_e('Edit Profile', 'select-real-estate'); ?></h2>
		<p><?php esc_html_e('Update your profile now', 'select-real-estate'); ?></p>
		<div>
			<?php qodef_real_estate_dashboard_edit_agency_fields($params); ?>
			<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
		</div>
	</div>
</div>