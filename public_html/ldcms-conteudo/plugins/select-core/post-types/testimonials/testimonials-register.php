<?php

namespace QodeCore\CPT\Testimonials;

use QodeCore\Lib;

/**
 * Class TestimonialsRegister
 * @package QodeCore\CPT\Testimonials
 */
class TestimonialsRegister implements Lib\PostTypeInterface {
	private $base;
	
	public function __construct() {
		$this->base    = 'testimonials';
		$this->taxBase = 'testimonials-category';
	}
	
	/**
	 * @return string
	 */
	public function getBase() {
		return $this->base;
	}
	
	/**
	 * Registers custom post type with WordPress
	 */
	public function register() {
		$this->registerPostType();
		$this->registerTax();
	}
	
	/**
	 * Regsiters custom post type with WordPress
	 */
	private function registerPostType() {
		$menuPosition = 5;
		$menuIcon     = 'dashicons-format-quote';
		
		register_post_type( 'testimonials',
			array(
				'labels'        => array(
					'menu_name'     => esc_html__( 'Depoimento', 'select-core' ),
					'name'          => esc_html__( 'Depoimentos', 'select-core' ),
					'singular_name' => esc_html__( 'Depoimento', 'select-core' ),
					'add_item'      => esc_html__( 'Novo Depoimento', 'select-core' ),
					'add_new_item'  => esc_html__( 'Add Novo Depoimento', 'select-core' ),
					'edit_item'     => esc_html__( 'Editar Depoimento', 'select-core' )
				),
				'public'        => false,
				'show_in_menu'  => true,
				'rewrite'       => array( 'slug' => 'testimonials' ),
				'menu_position' => $menuPosition,
				'show_ui'       => true,
				'has_archive'   => false,
				'hierarchical'  => false,
				'supports'      => array( 'title', 'thumbnail' ),
				'menu_icon'     => $menuIcon
			)
		);
	}
	
	/**
	 * Registers custom taxonomy with WordPress
	 */
	private function registerTax() {
		$labels = array(
			'name'              => esc_html__( 'Depoimento Categories', 'select-core' ),
			'singular_name'     => esc_html__( 'Depoimento Category', 'select-core' ),
			'search_items'      => esc_html__( 'Buscar Depoimentos', 'select-core' ),
			'all_items'         => esc_html__( 'Todos Depoimentos', 'select-core' ),
			'parent_item'       => esc_html__( 'Parent Depoimento', 'select-core' ),
			'parent_item_colon' => esc_html__( 'Parent Depoimento:', 'select-core' ),
			'edit_item'         => esc_html__( 'Editar Depoimentos', 'select-core' ),
			'update_item'       => esc_html__( 'Atualizar Depoimentos', 'select-core' ),
			'add_new_item'      => esc_html__( 'Add Novo Depoimentos', 'select-core' ),
			'new_item_name'     => esc_html__( 'Novo Depoimentos', 'select-core' ),
			'menu_name'         => esc_html__( 'Categoria', 'select-core' )
		);
		
		register_taxonomy( $this->taxBase, array( $this->base ), array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'query_var'         => true,
			'show_admin_column' => true,
			'rewrite'           => array( 'slug' => 'testimonials-category' )
		) );
	}
}