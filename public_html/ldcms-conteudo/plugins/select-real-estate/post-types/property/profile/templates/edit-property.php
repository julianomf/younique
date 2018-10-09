<?php $property_db_id = $_GET['property_id'];

if ( !function_exists('qodef_real_estate_dashboard_edit_property_fields') ) {
	function qodef_real_estate_dashboard_edit_property_fields($params, $property_db_id){
		$title = '';
		$qodef_property_id_meta = '';
		$featured_image_url = '';
		$property_type_terms = '';
		$property_feature_terms = '';
		$property_status_terms = '';
		$property_county_terms = '';
		$property_city_terms = '';
		$property_neighborhood_terms = '';
		$property_tag_terms = '';
		$description = '';
		$qodef_property_price_meta = '';
		$qodef_property_discount_price_meta = '';
		$qodef_property_price_label_meta = '';
		$qodef_property_price_label_position_meta = '';
		$qodef_property_size_meta = '';
		$qodef_property_size_label_meta = '';
		$qodef_property_size_label_position_meta = '';
		$qodef_property_bedrooms_meta = '';
		$qodef_property_bathrooms_meta = '';
		$qodef_property_floor_meta = '';
		$qodef_property_total_floors_meta = '';
		$qodef_property_year_built_meta = '';
		$qodef_property_heating_meta = '';
		$qodef_property_accommodation_meta = '';
		$qodef_property_ceiling_height_meta = '';
		$qodef_property_parking_meta = '';
		$qodef_property_from_center_meta = '';
		$qodef_property_area_size_meta = '';
		$qodef_property_garages_meta = '';
		$qodef_property_garages_size_meta = '';
		$qodef_property_additional_space_meta = '';
		$qodef_property_publication_date_meta = '';
		$qodef_leasing_terms_meta = '';
		$qodef_costs_meta = '';
		$qodef_property_full_address_meta = '';
		$qodef_property_full_address_latitude = '';
		$qodef_property_full_address_longitude = '';
		$qodef_property_simple_address_meta = '';
		$qodef_property_zip_code_meta = '';
		$qodef_property_address_country_meta = '';
		$qodef_property_image_gallery = '';
		$qodef_property_video_type_meta = '';
		$qodef_property_video_display_link = '';
		$qodef_property_video_image_meta = '';
		$qodef_property_virtual_tour_meta = '';
		$qodef_property_attachment_meta = '';
		$qodef_multi_units_meta = '';
		$qodef_home_plans_meta = '';

		extract($params);

		$edit_property = eiddo_qodef_add_dashboard_fields(array(
			'name' => 'edit_agent',
		));

		$edit_property_form = eiddo_qodef_add_dashboard_form(array(
			'name' => 'edit_property_form',
			'form_id'   => 'qodef-re-edit-property-form',
			'form_action' => 'qodef_re_edit_property',
			'parent' => $edit_property,
			'button_label' => esc_html__( 'EDIT PROPERTY', 'select-real-estate' ),
			'button_args' => array(
				'data-updating-text' => esc_html__('EDITING PROPERTY', 'select-real-estate'),
				'data-updated-text' => esc_html__('PROPERTY EDITED', 'select-real-estate'),
			)
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_db_id',
			'parent' => $edit_property_form,
			'value' => $property_db_id,
			'args' => array(
				'input_type' => 'hidden'
			),
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_title',
			'label' => esc_html__('Property Title','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $title
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_id',
			'label' => esc_html__('ID de identificação','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_id_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'image',
			'name' => 'property_featured_image',
			'label' => esc_html__('Featured Image','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $featured_image_url
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_type',
			'label' => esc_html__('Property Type','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-type'),
			'value' => $property_type_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_feature',
			'label' => esc_html__('Property Feature','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-feature'),
			'value' => $property_feature_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_status',
			'label' => esc_html__('Property Status','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-status'),
			'value' => $property_status_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_county',
			'label' => esc_html__('Property County/State','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-county'),
			'value' => $property_county_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_city',
			'label' => esc_html__('Property City','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-city'),
			'value' => $property_city_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_neighborhood',
			'label' => esc_html__('Property Neighborhood','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-neighborhood'),
			'value' => $property_neighborhood_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'checkboxgroup',
			'name' => 'property_tag',
			'label' => esc_html__('Property Tags','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_property_terms_list_dashboard('property-tag', false),
			'value' => $property_tag_terms
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'textarea',
			'name' => 'description',
			'label' => esc_html__('Description','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $description
		));


		eiddo_qodef_add_dashboard_section_title(array(
			'name'   => 'project_title_specifications',
			'title'  => esc_html__( 'Specifications', 'select-real-estate' ),
			'parent' => $edit_property_form
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'price',
			'label' => esc_html__('Price','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_price_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'discount_price',
			'label' => esc_html__('Discount Price','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_discount_price_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'price_label',
			'label' => esc_html__('Price Label','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_price_label_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'select',
			'name' => 'price_label_position',
			'label' => esc_html__('Price Label Position','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => array(
				'' => esc_html__('Default','select-real-estate'),
				'before' => esc_html__('Before Price','select-real-estate'),
				'after' => esc_html__('After Price','select-real-estate'),
			),
			'value' => $qodef_property_price_label_position_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'size',
			'label' => esc_html__('Size','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_size_meta
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'size_label',
			'label' => esc_html__('Size Label','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_size_label_meta
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'select',
			'name' => 'size_label_position',
			'label' => esc_html__('Size Label Position','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => array(
				'' => esc_html__('Default','select-real-estate'),
				'before' => esc_html__('Before Value','select-real-estate'),
				'after' => esc_html__('After Value','select-real-estate'),
			),
			'value' => $qodef_property_size_label_position_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'bedrooms',
			'label' => esc_html__('Quartos','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_bedrooms_meta
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'bathrooms',
			'label' => esc_html__('Banheiros','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_bathrooms_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'floor',
			'label' => esc_html__('Piso','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_floor_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'total_floors',
			'label' => esc_html__('Total pisos','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_total_floors_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'year_built',
			'label' => esc_html__('Ano de construção','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_year_built_meta
		));
		
		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'heating',
			'label' => esc_html__('Aquecedor','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_heating_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'accommodation',
			'label' => esc_html__('Acomodações','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_accommodation_meta
		));


		eiddo_qodef_add_dashboard_section_title(array(
			'name'   => 'project_title_additional_specifications',
			'title'  => esc_html__( 'Informações Adicionais', 'select-real-estate' ),
			'parent' => $edit_property_form
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'ceiling_height',
			'label' => esc_html__('Altura do teto','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_ceiling_height_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'parking',
			'label' => esc_html__('Estacionamento','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_parking_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_from_center',
			'label' => esc_html__('Distancia do centro da cidade','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_from_center_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'area_size',
			'label' => esc_html__('Area Total','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_area_size_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'garages',
			'label' => esc_html__('Garagens','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_garages_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'garages_size',
			'label' => esc_html__('Tamanho da garagem','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_garages_size_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'additional_space',
			'label' => esc_html__('Tamanho Adicional','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_additional_space_meta
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'date',
			'name' => 'publication_date',
			'label' => esc_html__('Data da publicação','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_publication_date_meta
		));

		eiddo_qodef_add_dashboard_repeater_field(array(
			'name' => 'property_leasing_terms',
			'label' => esc_html__('Leasing Terms','select-real-estate'),
			'parent' => $edit_property_form,
			'table_layout' => true,
			'value' => $qodef_leasing_terms_meta,
			'fields' => array(
				array(
					'type'      => 'select',
					'name'      => 'icon',
					'th' => esc_html__('Icon','select-real-estate'),
					'col_width' => '4',
					'options'   => qodef_re_get_assets_icon_list(),
					'args'      => array(
						'select2' => true
					)
				),
				array(
					'type' => 'text',
					'name' => 'label',
					'th' => esc_html__('Label','select-real-estate'),
					'col_width' => '4'
				),
				array(
					'type' => 'text',
					'name' => 'value',
					'th' => esc_html__('Value','select-real-estate'),
					'col_width' => '4'
				),
			)
		));

		eiddo_qodef_add_dashboard_repeater_field(array(
			'name' => 'property_costs',
			'label' => esc_html__('Costs','select-real-estate'),
			'parent' => $edit_property_form,
			'table_layout' => true,
			'value' => $qodef_costs_meta,
			'fields' => array(
				array(
					'type'      => 'select',
					'name'      => 'icon',
					'th' => esc_html__('Icon','select-real-estate'),
					'col_width' => '4',
					'options'   => qodef_re_get_assets_icon_list(),
					'args'      => array(
						'select2' => true
					)
				),
				array(
					'type' => 'text',
					'name' => 'label',
					'th' => esc_html__('Label','select-real-estate'),
					'col_width' => '4'
				),
				array(
					'type' => 'text',
					'name' => 'value',
					'th' => esc_html__('Value','select-real-estate'),
					'col_width' => '4'
				),
			)
		));


		eiddo_qodef_add_dashboard_field(array(
			'type' => 'address',
			'name' => 'property_full_address',
			'label' => esc_html__('Full Address','select-real-estate'),
			'parent' => $edit_property_form,
			'args' => array(
				'latitude_field' => 'property_latitude',
				'longitude_field' => 'property_longitude',
			),
			'value' => $qodef_property_full_address_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_latitude',
			'label' => esc_html__('Latitude','select-real-estate'),
			'parent' => $edit_property_form,
			'args' => array(
				'custom_class' => 'qodef-dashboard-address-elements'
			),
			'value' => $qodef_property_full_address_latitude,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_longitude',
			'label' => esc_html__('Longitude','select-real-estate'),
			'parent' => $edit_property_form,
			'args' => array(
				'custom_class' => 'qodef-dashboard-address-elements'
			),
			'value' => $qodef_property_full_address_longitude,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_simple_address',
			'label' => esc_html__('Simple Address','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_simple_address_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_zip_code',
			'label' => esc_html__('Property ZIP Code','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_zip_code_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'select',
			'name' => 'property_country',
			'label' => esc_html__('Country','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => qodef_re_get_countries_list(),
			'value' => $qodef_property_address_country_meta,
		));


		eiddo_qodef_add_dashboard_section_title(array(
			'name'   => 'project_title_media',
			'title'  => esc_html__( 'Media', 'select-real-estate' ),
			'parent' => $edit_property_form
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'gallery',
			'name' => 'property_image_gallery',
			'label' => esc_html__('Gallery Images','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_image_gallery,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'select',
			'name' => 'property_video_type',
			'label' => esc_html__('Video Service','select-real-estate'),
			'parent' => $edit_property_form,
			'options' => array(
				'social_networks' => esc_html__('Video Service', 'select-real-estate'),
				'self' => esc_html__('Self Hosted', 'select-real-estate'),
			),
			'value' => $qodef_property_video_type_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_video_link',
			'label' => esc_html__('Enter video URL (if self hosted, enter MP4 format)','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_video_display_link,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'image',
			'name' => 'property_video_image',
			'label' => esc_html__('Video Image','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_video_image_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'text',
			'name' => 'property_virtual_tour',
			'label' => esc_html__('Video Tour Core','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_virtual_tour_meta,
		));

		eiddo_qodef_add_dashboard_field(array(
			'type' => 'image',
			'name' => 'property_attachment',
			'label' => esc_html__('Attachment','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_property_attachment_meta,
			'args' => array(
				'not_image' => true
			)
		));


		eiddo_qodef_add_dashboard_repeater_field(array(
			'name' => 'property_multi_unit',
			'label' => esc_html__('Multi Units / Sub Properties','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_multi_units_meta,
			'fields' => array(
				array(
					'type' => 'text',
					'name' => 'title',
					'label' => esc_html__('Title','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'type',
					'label' => esc_html__('Type','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'price',
					'label' => esc_html__('Price','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'bedrooms',
					'label' => esc_html__('Quartos','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'bathrooms',
					'label' => esc_html__('Bathrooms','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'size',
					'label' => esc_html__('Size','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'availability',
					'label' => esc_html__('Availability Date','select-real-estate'),
					'col_width' => '6'
				),
			)
		));

		eiddo_qodef_add_dashboard_repeater_field(array(
			'name' => 'property_home_plan',
			'label' => esc_html__('Home Plans','select-real-estate'),
			'parent' => $edit_property_form,
			'value' => $qodef_home_plans_meta,
			'fields' => array(
				array(
					'type' => 'text',
					'name' => 'title',
					'label' => esc_html__('Title','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'price',
					'label' => esc_html__('Price','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'bedrooms',
					'label' => esc_html__('Quartos','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'bathrooms',
					'label' => esc_html__('Bathrooms','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'text',
					'name' => 'size',
					'label' => esc_html__('Size','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'image',
					'name' => 'image',
					'label' => esc_html__('Image','select-real-estate'),
					'col_width' => '6'
				),
				array(
					'type' => 'textarea',
					'name' => 'description',
					'label' => esc_html__('Description','select-real-estate'),
					'col_width' => '12'
				)
			)
		));

		$edit_property->render();
	}
}

?>
<div class="qodef-membership-dashboard-page qodef-real-estate-dashboard-page">
	<div class="qodef-edit-property-page">
		<h2 class="qodef-membership-page-title"><?php esc_html_e('Edit Property', 'select-real-estate'); ?></h2>
		<p><?php esc_html_e('Edit Property', 'select-real-estate'); ?></p>
		<div>
			<?php qodef_real_estate_dashboard_edit_property_fields(qodef_re_get_property_meta($property_db_id),$property_db_id);?>
			<?php do_action( 'qodef_membership_action_login_ajax_response' ); ?>
		</div>
	</div>
</div>