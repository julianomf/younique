<?php

class EiddoQodefButtonWidget extends EiddoQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_button_widget',
			esc_html__( 'Select Button Widget', 'eiddo' ),
			array( 'description' => esc_html__( 'Add button element to widget areas', 'eiddo' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'    => 'dropdown',
				'name'    => 'type',
				'title'   => esc_html__( 'Type', 'eiddo' ),
				'options' => array(
					'solid'   => esc_html__( 'Solid', 'eiddo' ),
					'outline' => esc_html__( 'Outline', 'eiddo' ),
					'simple'  => esc_html__( 'Simple', 'eiddo' )
				)
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'size',
				'title'       => esc_html__( 'Size', 'eiddo' ),
				'options'     => array(
					'small'  => esc_html__( 'Small', 'eiddo' ),
					'medium' => esc_html__( 'Medium', 'eiddo' ),
					'large'  => esc_html__( 'Large', 'eiddo' ),
					'huge'   => esc_html__( 'Huge', 'eiddo' )
				),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'eiddo' )
			),
			array(
				'type'    => 'textfield',
				'name'    => 'text',
				'title'   => esc_html__( 'Text', 'eiddo' ),
				'default' => esc_html__( 'Button Text', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'link',
				'title' => esc_html__( 'Link', 'eiddo' )
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'target',
				'title'   => esc_html__( 'Link Target', 'eiddo' ),
				'options' => eiddo_qodef_get_link_target_array()
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'eiddo' )
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'hover_color',
				'title' => esc_html__( 'Hover Color', 'eiddo' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'background_color',
				'title'       => esc_html__( 'Background Color', 'eiddo' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'eiddo' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_background_color',
				'title'       => esc_html__( 'Hover Background Color', 'eiddo' ),
				'description' => esc_html__( 'This option is only available for solid button type', 'eiddo' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'border_color',
				'title'       => esc_html__( 'Border Color', 'eiddo' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'eiddo' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'hover_border_color',
				'title'       => esc_html__( 'Hover Border Color', 'eiddo' ),
				'description' => esc_html__( 'This option is only available for solid and outline button type', 'eiddo' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'margin',
				'title'       => esc_html__( 'Margin', 'eiddo' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'eiddo' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$params = '';
		
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		// Filter out all empty params
		$instance = array_filter( $instance, function ( $array_value ) {
			return trim( $array_value ) != '';
		} );
		
		// Default values
		if ( ! isset( $instance['text'] ) ) {
			$instance['text'] = 'Button Text';
		}
		
		// Generate shortcode params
		foreach ( $instance as $key => $value ) {
			$params .= " $key='$value' ";
		}
		
		echo '<div class="widget qodef-button-widget">';
			echo do_shortcode( "[qodef_button $params]" ); // XSS OK
		echo '</div>';
	}
}