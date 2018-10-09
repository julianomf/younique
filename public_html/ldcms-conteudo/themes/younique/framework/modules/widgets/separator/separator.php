<?php

class EiddoQodefSeparatorWidget extends EiddoQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_separator_widget',
			esc_html__( 'Select Separator Widget', 'eiddo' ),
			array( 'description' => esc_html__( 'Add a separator element to your widget areas', 'eiddo' ) )
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
					'normal'     => esc_html__( 'Normal', 'eiddo' ),
					'full-width' => esc_html__( 'Full Width', 'eiddo' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'position',
				'title'   => esc_html__( 'Position', 'eiddo' ),
				'options' => array(
					'center' => esc_html__( 'Center', 'eiddo' ),
					'left'   => esc_html__( 'Left', 'eiddo' ),
					'right'  => esc_html__( 'Right', 'eiddo' )
				)
			),
			array(
				'type'    => 'dropdown',
				'name'    => 'border_style',
				'title'   => esc_html__( 'Style', 'eiddo' ),
				'options' => array(
					'solid'  => esc_html__( 'Solid', 'eiddo' ),
					'dashed' => esc_html__( 'Dashed', 'eiddo' ),
					'dotted' => esc_html__( 'Dotted', 'eiddo' )
				)
			),
			array(
				'type'  => 'colorpicker',
				'name'  => 'color',
				'title' => esc_html__( 'Color', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'width',
				'title' => esc_html__( 'Width (px or %)', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'thickness',
				'title' => esc_html__( 'Thickness (px)', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'top_margin',
				'title' => esc_html__( 'Top Margin (px or %)', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'bottom_margin',
				'title' => esc_html__( 'Bottom Margin (px or %)', 'eiddo' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		if ( ! is_array( $instance ) ) {
			$instance = array();
		}
		
		//prepare variables
		$params = '';
		
		//is instance empty?
		if ( is_array( $instance ) && count( $instance ) ) {
			//generate shortcode params
			foreach ( $instance as $key => $value ) {
				$params .= " $key='$value' ";
			}
		}
		
		echo '<div class="widget qodef-separator-widget">';
			echo do_shortcode( "[qodef_separator $params]" ); // XSS OK
		echo '</div>';
	}
}