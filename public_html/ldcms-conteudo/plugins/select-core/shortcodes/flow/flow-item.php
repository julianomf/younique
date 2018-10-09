<?php
namespace QodeCore\CPT\Shortcodes\Flow;

use QodeCore\Lib\ShortcodeInterface;

class FlowItem implements ShortcodeInterface {
	private $base;
	
	public function __construct() {
		$this->base = 'qodef_flow_item';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		vc_map( array(
			'name'                      => esc_html__( 'Select Flow Item', 'select-core' ),
			'base'                      => $this->getBase(),
			'category'                  => esc_html__('by SELECT', 'select-core'),
			'icon'                      => 'icon-wpb-flow-item extended-custom-icon',
			'allowed_container_element' => 'vc_row',
			'params'                    => array(
				array(
					'type'        => 'dropdown',
					'param_name'  => 'image_position',
					'heading'     => esc_html__( 'Image Position', 'select-core' ),
					'value'       => array(
						esc_html__( 'Left', 'select-core' )  => 'left',
						esc_html__( 'Right', 'select-core' ) => 'right'
					),
					'admin_label' => true
				),
				array(
					'type'       => 'attach_image',
					'heading'    => esc_html__( 'Image', 'select-core' ),
					'param_name' => 'image'
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Subtitle', 'select-core' ),
					'param_name'  => 'subtitle',
					'save_always' => true,
					'admin_label' => true
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Title', 'select-core' ),
					'param_name'  => 'title',
					'save_always' => true,
					'admin_label' => true
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_html__( 'Text', 'select-core' ),
					'param_name'  => 'text',
					'save_always' => true,
					'admin_label' => true
				),
				array(
					'type'        => 'textfield',
					'heading'     => esc_html__( 'Number', 'select-core' ),
					'param_name'  => 'number',
					'save_always' => true,
					'admin_label' => true
				),
				array(
					'type'        => 'dropdown',
					'param_name'  => 'item_skin',
					'heading'     => esc_html__( 'Skin', 'select-core' ),
					'value'       => array(
						esc_html__( 'Dark', 'select-core' )  => 'dark',
						esc_html__( 'Light', 'select-core' ) => 'light'
					),
					'admin_label' => true
				),
			)
		) );
	}
	
	public function render( $atts, $content = null ) {
		$default_atts = array(
			'image_position' => 'left',
			'image'          => '',
			'subtitle'       => '',
			'title'          => '',
			'text'           => '',
			'number'         => '',
			'skin'           => 'dark',
		);
		
		$params = shortcode_atts( $default_atts, $atts );
		
		$params['item_classes'] = array(
			'qodef-flow-item-holder'
		);
		
		if ( ! empty( $params['image_position'] ) ) {
			$params['item_classes'][] = 'qodef-fi-position-' . $params['image_position'];
		}
		
		if ( ! empty( $params['skin'] ) ) {
			$params['item_classes'][] = 'qodef-fi-skin-' . $params['skin'];
		}
		
		return qodef_core_get_shortcode_module_template_part( 'templates/flow-item', 'flow', '', $params );
	}
}