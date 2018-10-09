<?php
if ( ! function_exists( 'qodef_re_map_property_media_meta' ) ) {
	function qodef_re_map_property_media_meta( $meta_box ) {
		
		$property_media_container = eiddo_qodef_add_admin_container(
			array(
				'type'   => 'container',
				'name'   => 'property_media_container',
				'parent' => $meta_box
			)
		);
		
		eiddo_qodef_add_admin_section_title(
			array(
				'title'  => esc_html__( 'Media', 'select-real-estate' ),
				'name'   => 'property_media_container_title',
				'parent' => $property_media_container
			)
		);
		
		// Gallery Images meta field
		$property_image_gallery = new EiddoQodefMultipleImages( "qodef_property_image_gallery", esc_html__( 'Galeria', 'select-real-estate' ), esc_html__( 'Escolha as imagens da sua galeria', 'select-real-estate' ) );
		$property_media_container->addChild( "qodef_property_image_gallery", $property_image_gallery );
		
		// Video meta field
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'          => 'qodef_property_video_type_meta',
				'type'          => 'select',
				'label'         => esc_html__( 'Video', 'select-real-estate' ),
				'description'   => esc_html__( 'Choose video type', 'select-real-estate' ),
				'parent'        => $property_media_container,
				'default_value' => 'social_networks',
				'options'       => array(
					'social_networks' => esc_html__( 'Video Service', 'select-real-estate' ),
					'self'            => esc_html__( 'Self Hosted', 'select-real-estate' )
				)
			)
		);
		
		$qodef_video_embedded_container = eiddo_qodef_add_admin_container(
			array(
				'parent' => $property_media_container,
				'name'   => 'qodef_video_embedded_container'
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_video_link_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'URL do Vídeo', 'select-real-estate' ),
				'description' => esc_html__( 'Insira a URL do vídeo', 'select-real-estate' ),
				'parent'      => $qodef_video_embedded_container,
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_video_custom_meta',
				'type'        => 'text',
				'label'       => esc_html__( 'Video MP4', 'select-real-estate' ),
				'description' => esc_html__( 'Entre com o video URL MP4 formato', 'select-real-estate' ),
				'parent'      => $qodef_video_embedded_container,
				'dependency'  => array(
					'show' => array(
						'qodef_property_video_type_meta' => 'self'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'        => 'qodef_property_video_image_meta',
				'type'        => 'image',
				'label'       => esc_html__( 'Video Image', 'select-real-estate' ),
				'description' => esc_html__( 'Entre com a imagem do vídeo', 'select-real-estate' ),
				'parent'      => $qodef_video_embedded_container,
				'dependency'  => array(
					'show' => array(
						'qodef_property_video_type_meta' => 'self'
					)
				)
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'   => 'qodef_property_virtual_tour_meta',
				'type'   => 'textarea',
				'label'  => esc_html__( 'Vídeo 360', 'select-real-estate' ),
				'parent' => $property_media_container
			)
		);
		
		eiddo_qodef_add_meta_box_field(
			array(
				'name'   => 'qodef_property_attachment_meta',
				'type'   => 'file',
				'label'  => esc_html__( 'Anexo', 'select-real-estate' ),
				'parent' => $property_media_container
			)
		);
	}
	
	add_action( 'qodef_re_action_property_meta_fields', 'qodef_re_map_property_media_meta', 14, 1 );
}