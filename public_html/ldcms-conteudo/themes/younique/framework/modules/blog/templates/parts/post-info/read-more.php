<?php if ( ! eiddo_qodef_post_has_read_more() && ! post_password_required() ) { ?>
	<div class="qodef-post-read-more-button">
		<?php
			$button_params = array(
				'type'         => 'simple',
				'link'         => get_the_permalink(),
				'text'         => esc_html__( 'Ver Mais', 'eiddo' ),
				'custom_class' => 'qodef-blog-list-button'
			);
			
			echo eiddo_qodef_return_button_html( $button_params );
		?>
	</div>
<?php } ?>