<?php

class EiddoQodefAuthorInfoWidget extends EiddoQodefWidget {
	public function __construct() {
		parent::__construct(
			'qodef_author_info_widget',
			esc_html__( 'Select Author Info Widget', 'eiddo' ),
			array( 'description' => esc_html__( 'Add author info element to widget areas', 'eiddo' ) )
		);
		
		$this->setParams();
	}
	
	protected function setParams() {
		$this->params = array(
			array(
				'type'  => 'textfield',
				'name'  => 'widget_title',
				'title' => esc_html__( 'Widget Title', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'extra_class',
				'title' => esc_html__( 'Custom CSS Class', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'author_username',
				'title' => esc_html__( 'Author Username', 'eiddo' )
			),
			array(
				'type'  => 'textfield',
				'name'  => 'author_description',
				'title' => esc_html__( 'Author Short Description', 'eiddo' ),
				'description' => esc_html__( 'If empty, Biographical Info from user settings will be displayed.', 'eiddo' )
			)
		);
	}
	
	public function widget( $args, $instance ) {
		extract( $args );
		
		$extra_class = '';
		if ( ! empty( $instance['extra_class'] ) ) {
			$extra_class = $instance['extra_class'];
		}
		
		$authorID = 1;
		if ( ! empty( $instance['author_username'] ) ) {
			$author = get_user_by( 'login', $instance['author_username'] );
			
			if ( $author ) {
				$authorID = $author->ID;
			}
		}
		
		if ( ! empty( $instance['author_description'] ) ) {
			$author_info = $instance['author_description'];
		} else {
			$author_info = get_the_author_meta( 'description', $authorID );
		}
		$user_email = get_the_author_meta('email', $authorID);
		$user_website = get_the_author_meta('url', $authorID);
		?>
		
		<div class="widget qodef-author-info-widget <?php echo esc_html( $extra_class ); ?>">
			<?php
			if ( ! empty( $instance['widget_title'] ) ) {
				echo wp_kses_post( $args['before_title'] ) . esc_html( $instance['widget_title'] ) . wp_kses_post( $args['after_title'] );
			}
			?>
			<div class="qodef-aiw-inner">
				<a itemprop="url" class="qodef-aiw-image" href="<?php echo esc_url( get_author_posts_url( $authorID ) ); ?>">
					<?php echo eiddo_qodef_kses_img( get_avatar( $authorID, 728 ) ); ?>
				</a>
				<?php if ( $author_info !== "" ) { ?>
					<p itemprop="description" class="qodef-aiw-text"><?php echo wp_kses_post( $author_info ); ?></p>
				<?php } ?>
				<?php if (!empty($user_email)) { ?>
					<div class="qodef-contact-link">
						<span class="qodef-contact-icon icon-envelope"></span>
						<span class="qodef-contact-label">
                            <a href="mailto:<?php echo esc_attr($user_email) ?>" target="_self">
                                <?php echo esc_html($user_email) ?>
                            </a>
                        </span>
					</div>
				<?php } ?>
				<?php if (!empty($user_website)) { ?>
					<div class="qodef-contact-website">
						<span class="qodef-contact-icon icon-link"></span>
						<span class="qodef-contact-label">
                            <a href="<?php echo esc_attr($user_website) ?>" target="_blank">
                                <?php echo esc_html($user_website) ?>
                            </a>
                        </span>
					</div>
				<?php } ?>
			</div>
		</div>
		<?php
	}
}