<?php

class EiddoQodefSideAreaOpener extends EiddoQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_side_area_opener',
			esc_html__( 'Select Side Area Opener', 'eiddo' ),
			array( 'description' => esc_html__( 'Display a "hamburger" icon that opens the side area', 'eiddo' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'        => 'colorpicker',
				'name'        => 'icon_color',
				'title'       => esc_html__( 'Side Area Opener Color', 'eiddo' ),
				'description' => esc_html__( 'Define color for side area opener', 'eiddo' )
			),
			array(
				'type'        => 'colorpicker',
				'name'        => 'icon_hover_color',
				'title'       => esc_html__( 'Side Area Opener Hover Color', 'eiddo' ),
				'description' => esc_html__( 'Define hover color for side area opener', 'eiddo' )
			),
			array(
				'type'        => 'textfield',
				'name'        => 'widget_margin',
				'title'       => esc_html__( 'Side Area Opener Margin', 'eiddo' ),
				'description' => esc_html__( 'Insert margin in format: top right bottom left (e.g. 10px 5px 10px 5px)', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'widget_title',
				'title' => esc_html__( 'Side Area Opener Title', 'eiddo' )
			)
		);
	}
	
	public function widget( $args, $instance ) {

		$side_area_icon_source 	 	= eiddo_qodef_options()->getOptionValue( 'side_area_icon_source' );
		$side_area_icon_pack 		= eiddo_qodef_options()->getOptionValue( 'side_area_icon_pack' );
		$side_area_icon_svg_path 	= eiddo_qodef_options()->getOptionValue( 'side_area_icon_svg_path' );

		$side_area_icon_class_array = array(
			'qodef-side-menu-button-opener',
			'qodef-icon-has-hover'
		);
	
		$side_area_icon_class_array[]  = $side_area_icon_source == 'icon_pack' ? 'qodef-side-menu-button-opener-icon-pack' : 'qodef-side-menu-button-opener-svg-path';

		$holder_styles = array();
		
		if ( ! empty( $instance['icon_color'] ) ) {
			$holder_styles[] = 'color: ' . $instance['icon_color'] . ';';
		}
		if ( ! empty( $instance['widget_margin'] ) ) {
			$holder_styles[] = 'margin: ' . $instance['widget_margin'];
		}

		?>
		
		<a <?php eiddo_qodef_class_attribute( $side_area_icon_class_array ); ?> <?php echo eiddo_qodef_get_inline_attr( $instance['icon_hover_color'], 'data-hover-color' ); ?> href="javascript:void(0)" <?php eiddo_qodef_inline_style( $holder_styles ); ?>>
			<?php if ( ! empty( $instance['widget_title'] ) ) { ?>
				<h5 class="qodef-side-menu-title"><?php echo esc_html( $instance['widget_title'] ); ?></h5>
			<?php } ?>
			<span class="qodef-side-menu-icon">
				<?php if ( ( $side_area_icon_source == 'icon_pack' ) && isset( $side_area_icon_pack ) ) {
	        		echo eiddo_qodef_icon_collections()->getMenuIcon( $side_area_icon_pack );
	        	} else if ( isset( $side_area_icon_svg_path ) ) {
	            	print $side_area_icon_svg_path; 
	            }?>
            </span>
		</a>
	<?php }
}