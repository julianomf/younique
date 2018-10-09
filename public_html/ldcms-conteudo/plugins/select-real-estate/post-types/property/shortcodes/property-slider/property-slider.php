<?php

namespace QodefRE\CPT\Shortcodes\Property;

use QodefRE\Lib;

class PropertySlider implements Lib\ShortcodeInterface {
    private $base;

    public function __construct() {
        $this->base = 'qodef_property_slider';

        add_action( 'vc_before_init', array( $this, 'vcMap' ) );
    }

    public function getBase() {
        return $this->base;
    }

    public function vcMap() {
        if ( function_exists( 'vc_map' ) ) {
            vc_map( array(
                    'name'                      => esc_html__( 'Select Property Slider', 'select-real-estate' ),
                    'base'                      => $this->getBase(),
                    'category'                  => esc_html__( 'by SELECT REAL ESTATE', 'select-real-estate' ),
                    'icon'                      => 'icon-wpb-property-slider extended-custom-re-icon',
                    'allowed_container_element' => 'vc_row',
                    'params'                    => array(
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'item_layout',
                            'heading'     => esc_html__( 'Item Layout', 'select-real-estate' ),
                            'value'       => array(
                                esc_html__( 'Standard', 'select-real-estate' ) => 'standard',
                                esc_html__( 'Info Over', 'select-real-estate' ) => 'info-over'
                            ),
                            'save_always' => true,
                            'admin_label' => true
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'number_of_columns',
                            'heading'     => esc_html__( 'Number of Columns', 'select-real-estate' ),
                            'value'       => array(
                                esc_html__( 'Default', 'select-real-estate' ) => '',
                                esc_html__( 'One', 'select-real-estate' )     => '1',
                                esc_html__( 'Two', 'select-real-estate' )     => '2',
                                esc_html__( 'Three', 'select-real-estate' )   => '3',
                                esc_html__( 'Four', 'select-real-estate' )    => '4',
                                esc_html__( 'Five', 'select-real-estate' )    => '5'
                            ),
                            'description' => esc_html__( 'Default value is Three', 'select-real-estate' ),
                            'save_always' => true
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'space_between_items',
                            'heading'     => esc_html__( 'Space Between properties', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_space_between_items_array() ),
                            'save_always' => true
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'number_of_items',
                            'heading'     => esc_html__( 'Number of Properties Per Page', 'select-real-estate' ),
                            'description' => esc_html__( 'Set number of items for your property list. Enter -1 to show all.', 'select-real-estate' ),
                            'value'       => '-1'
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'order_by',
                            'heading'     => esc_html__( 'Order By', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_query_order_by_array() ),
                            'save_always' => true
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'order',
                            'heading'     => esc_html__( 'Order', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_query_order_array() ),
                            'save_always' => true
                        ),
                        array(
                            'type'       => 'dropdown',
                            'param_name' => 'title_tag',
                            'heading'    => esc_html__( 'Title Tag', 'select-real-estate' ),
                            'value'      => array_flip( eiddo_qodef_get_title_tag( true ) ),
                            'dependency' => array( 'element' => 'enable_title', 'value' => array( 'yes' ) ),
                            'group'      => esc_html__( 'Content Layout', 'select-real-estate' ),
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'enable_loop',
                            'heading'     => esc_html__( 'Enable Slider Loop', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false, true ) ),
                            'save_always' => true,
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' ),
                            'dependency'  => array( 'element' => 'item_type', 'value' => array( '' ) )
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'enable_autoplay',
                            'heading'     => esc_html__( 'Enable Slider Autoplay', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false, true ) ),
                            'save_always' => true,
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'slider_speed',
                            'heading'     => esc_html__( 'Slide Duration', 'select-real-estate' ),
                            'description' => esc_html__( 'Default value is 5000 (ms)', 'select-real-estate' ),
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'        => 'textfield',
                            'param_name'  => 'slider_speed_animation',
                            'heading'     => esc_html__( 'Slide Animation Duration', 'select-real-estate' ),
                            'description' => esc_html__( 'Speed of slide animation in milliseconds. Default value is 600.', 'select-real-estate' ),
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'enable_navigation',
                            'heading'     => esc_html__( 'Enable Slider Navigation Arrows', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false, false ) ),
                            'save_always' => true,
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'       => 'dropdown',
                            'param_name' => 'navigation_skin',
                            'heading'    => esc_html__( 'Navigation Skin', 'select-real-estate' ),
                            'value'      => array(
                                esc_html__( 'Default', 'select-real-estate' ) => '',
                                esc_html__( 'Light', 'select-real-estate' )   => 'light',
                                esc_html__( 'Dark', 'select-real-estate' )    => 'dark'
                            ),
                            'dependency' => array( 'element' => 'enable_navigation', 'value' => array( 'yes' ) ),
                            'group'      => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'enable_pagination',
                            'heading'     => esc_html__( 'Enable Slider Pagination', 'select-real-estate' ),
                            'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false, false ) ),
                            'save_always' => true,
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'       => 'dropdown',
                            'param_name' => 'pagination_skin',
                            'heading'    => esc_html__( 'Pagination Skin', 'select-real-estate' ),
                            'value'      => array(
                                esc_html__( 'Default', 'select-real-estate' ) => '',
                                esc_html__( 'Light', 'select-real-estate' )   => 'light',
                                esc_html__( 'Dark', 'select-real-estate' )    => 'dark'
                            ),
                            'dependency' => array( 'element' => 'enable_pagination', 'value' => array( 'yes' ) ),
                            'group'      => esc_html__( 'Slider Settings', 'select-real-estate' )
                        ),
                        array(
                            'type'        => 'dropdown',
                            'param_name'  => 'pagination_position',
                            'heading'     => esc_html__( 'Pagination Position', 'select-real-estate' ),
                            'value'       => array(
                                esc_html__( 'Below Slider', 'select-real-estate' ) => 'below-slider',
                                esc_html__( 'On Slider', 'select-real-estate' )    => 'on-slider'
                            ),
                            'save_always' => true,
                            'dependency'  => array( 'element' => 'enable_pagination', 'value' => array( 'yes' ) ),
                            'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
                        )
                    )
                )
            );
        }
    }

    /**
     * Renders shortcodes HTML
     *
     * @param $atts array of shortcode params
     * @param $content string shortcode content
     *
     * @return string
     */
    public function render($atts, $content = null) {
        $args = array(
            'type'                      => 'slider',
            'item_layout'               => 'standard',
            'number_of_columns'         => '3',
            'space_between_items'       => 'medium',
            'number_of_items'           => '-1',
            'order_by'                  => 'date',
            'order'                     => 'DESC',
            'title_tag'                 => 'h5',
            'property_slider_on'        => 'yes',
            'enable_loop'               => 'yes',
            'enable_autoplay'		    => 'yes',
            'slider_speed'              => '5000',
            'slider_speed_animation'    => '600',
            'enable_navigation'         => 'no',
            'navigation_skin'           => '',
            'enable_pagination'         => 'no',
            'pagination_skin'           => '',
            'pagination_position'       => '',
        );
        $params = shortcode_atts($args, $atts);


        $html = '<div class="qodef-property-slider-holder">';
        $html .= eiddo_qodef_execute_shortcode( 'qodef_property_list', $params );
        $html .= '</div>';

        return $html;
    }
}