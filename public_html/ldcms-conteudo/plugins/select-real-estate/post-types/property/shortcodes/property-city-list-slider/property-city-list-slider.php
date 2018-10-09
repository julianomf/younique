<?php

namespace QodefRE\CPT\Shortcodes\Property;

use QodefRE\Lib;

class PropertyCityListSlider implements Lib\ShortcodeInterface {
	private $base;
	
	public function __construct() {
		$this->base = 'qodef_property_city_list_slider';
		
		add_action( 'vc_before_init', array( $this, 'vcMap' ) );
		
		//Property city list slider filter
		add_filter( 'vc_autocomplete_qodef_property_city_list_slider_city_callback', array(
			&$this,
			'portfolioCityAutocompleteSuggester',
		), 10, 1 ); // Get suggestion(find). Must return an array
		
		//Property city list slider render
		add_filter( 'vc_autocomplete_qodef_property_city_list_slider_city_render', array(
			&$this,
			'portfolioCityAutocompleteRender',
		), 10, 1 ); // Get suggestion(find). Must return an array
	}
	
	public function getBase() {
		return $this->base;
	}
	
	public function vcMap() {
		if ( function_exists( 'vc_map' ) ) {
			vc_map( array(
				'name'                      => esc_html__( 'Select Property City Slider', 'select-real-estate' ),
				'base'                      => $this->getBase(),
				'category'                  => esc_html__( 'by SELECT REAL ESTATE', 'select-real-estate' ),
				'icon'                      => 'icon-wpb-property-city-list-slider extended-custom-re-icon',
				'allowed_container_element' => 'vc_row',
				'params'                    => array(
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
							esc_html__( 'Five', 'select-real-estate' )    => '5',
							esc_html__( 'Six', 'select-real-estate' )     => '6'
						),
						'description' => esc_html__( 'Default value is Four', 'select-real-estate' ),
						'save_always' => true
					),
					array(
						'type'        => 'dropdown',
						'param_name'  => 'space_between_items',
						'heading'     => esc_html__( 'Space Between Cities', 'select-real-estate' ),
						'value'       => array_flip( eiddo_qodef_get_space_between_items_array() ),
						'save_always' => true
					),
					array(
						'type'        => 'autocomplete',
						'param_name'  => 'city',
						'heading'     => esc_html__( 'Show Only Cities with Listed Slugs', 'select-real-estate' ),
						'settings'    => array(
							'multiple'      => true,
							'sortable'      => true,
							'unique_values' => true
						),
						'description' => esc_html__( 'Delimit slugs by comma (leave empty for all)', 'select-real-estate' )
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
						'type'        => 'dropdown',
						'param_name'  => 'enable_pagination',
						'heading'     => esc_html__( 'Enable Slider Pagination', 'select-real-estate' ),
						'value'       => array_flip( eiddo_qodef_get_yes_no_select_array( false, false ) ),
						'save_always' => true,
						'group'       => esc_html__( 'Slider Settings', 'select-real-estate' )
					)
				)
			) );
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
	public function render( $atts, $content = null ) {
		$args   = array(
			'number_of_columns'      => '5',
			'space_between_items'    => 'no',
			'city'                   => '',
			'enable_loop'            => 'yes',
			'enable_autoplay'        => 'yes',
			'slider_speed'           => '5000',
			'slider_speed_animation' => '600',
			'enable_navigation'      => 'no',
			'navigation_skin'        => '',
			'enable_pagination'      => 'no',
			'pagination_skin'        => '',
			'pagination_position'    => '',
		);
		$params = shortcode_atts( $args, $atts );
		
		/***
		 * @params query_results
		 * @params holder_data
		 * @params holder_classes
		 * @params holder_inner_classes
		 */
		
		$params['slider'] = 'yes';
		
		$html = eiddo_qodef_execute_shortcode( 'qodef_property_city_list', $params );
		
		return $html;
	}
	
	/**
	 * Filter property cities
	 *
	 * @param $query
	 *
	 * @return array
	 */
	public function portfolioCityAutocompleteSuggester( $query ) {
		global $wpdb;
		$post_meta_infos = $wpdb->get_results( $wpdb->prepare( "SELECT a.slug AS slug, a.name AS property_city_title
			FROM {$wpdb->terms} AS a
			LEFT JOIN ( SELECT term_id, taxonomy  FROM {$wpdb->term_taxonomy} ) AS b ON b.term_id = a.term_id
			WHERE b.taxonomy = 'property-city' AND a.name LIKE '%%%s%%'", stripslashes( $query ) ), ARRAY_A );
		
		$results = array();
		if ( is_array( $post_meta_infos ) && ! empty( $post_meta_infos ) ) {
			foreach ( $post_meta_infos as $value ) {
				$data          = array();
				$data['value'] = $value['slug'];
				$data['label'] = ( ( strlen( $value['property_city_title'] ) > 0 ) ? esc_html__( 'Property City', 'select-real-estate' ) . ': ' . $value['property_city_title'] : '' );
				$results[]     = $data;
			}
		}
		
		return $results;
	}
	
	/**
	 * Find property cities by slug
	 * @since 4.4
	 *
	 * @param $query
	 *
	 * @return bool|array
	 */
	public function portfolioCityAutocompleteRender( $query ) {
		$query = trim( $query['value'] ); // get value from requested
		if ( ! empty( $query ) ) {
			// get portfolio category
			$property_city = get_term_by( 'slug', $query, 'property-city' );
			if ( is_object( $property_city ) ) {
				
				$portfolio_city_slug  = $property_city->slug;
				$portfolio_city_title = $property_city->name;
				
				$portfolio_city_title_display = '';
				if ( ! empty( $portfolio_city_title ) ) {
					$portfolio_city_title_display = esc_html__( 'Property City', 'select-real-estate' ) . ': ' . $portfolio_city_title;
				}
				
				$data          = array();
				$data['value'] = $portfolio_city_slug;
				$data['label'] = $portfolio_city_title_display;
				
				return ! empty( $data ) ? $data : false;
			}
			
			return false;
		}
		
		return false;
	}
}