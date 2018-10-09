<?php if ( $query_results->max_num_pages > 1 ) {
	$holder_styles = $this_object->getLoadMoreStyles( $params );
	?>
    <?php echo qodef_re_get_cpt_shortcode_module_template_part( 'property', 'property-list', 'pagination/loading-element' ); ?>
	<div class="qodef-pl-load-more-holder">
		<div class="qodef-pl-load-more" <?php eiddo_qodef_inline_style( $holder_styles ); ?>>
			<?php
			echo eiddo_qodef_get_button_html( array(
				'link' => 'javascript: void(0)',
				'size' => 'large',
				'text' => esc_html__( 'Load more', 'select-real-estate' )
			) );
			?>
		</div>
	</div>
<?php }