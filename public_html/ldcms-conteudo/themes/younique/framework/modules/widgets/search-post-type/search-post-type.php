<?php

class EiddoQodefSearchPostType extends EiddoQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_search_post_type',
			esc_html__( 'Select Search Post Type', 'eiddo' ),
			array( 'description' => esc_html__( 'Select post type that you want to be searched for', 'eiddo' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$post_types = apply_filters( 'eiddo_qodef_search_post_type_widget_params_post_type', array( 'post' => esc_html__( 'Post', 'eiddo' ) ) );
		
		$this->params = array(
			array(
				'type'  => 'textfield',
				'name'  => 'widget_title',
				'title' => esc_html__( 'Widget Title', 'eiddo' )
			),
			array(
				'type'        => 'dropdown',
				'name'        => 'post_type',
				'title'       => esc_html__( 'Post Type', 'eiddo' ),
				'description' => esc_html__( 'Choose post type that you want to be searched for', 'eiddo' ),
				'options'     => $post_types
			)
		);
	}
	
	public function widget( $args, $instance ) {
		$search_type_class = 'qodef-search-post-type';
		$post_type         = $instance['post_type'];
		?>
		
		<div class="widget qodef-search-post-type-widget">
			<?php
				if ( ! empty( $instance['widget_title'] ) ) {
					echo wp_kses_post( $args['before_title'] ) . esc_html( $instance['widget_title'] ) . wp_kses_post( $args['after_title'] );
				}
			?>
			<div data-post-type="<?php echo esc_attr( $post_type ); ?>" <?php eiddo_qodef_class_attribute( $search_type_class ); ?>>
				<input class="qodef-post-type-search-field" value="" placeholder="<?php esc_html_e( 'Search here', 'eiddo' ) ?>">
				<i class="qodef-search-icon fa fa-search" aria-hidden="true"></i>
				<i class="qodef-search-loading fa fa-spinner fa-spin qodef-hidden" aria-hidden="true"></i>
			</div>
			<div class="qodef-post-type-search-results"></div>
		</div>
	<?php }
}