<li class="qodef-bl-item qodef-item-space clearfix <?php echo esc_attr($item_class); ?>">
	<div class="qodef-bli-inner">
		<?php if ( $post_info_image == 'yes' ) {
			$params['date_on_image'] = 'no';
			eiddo_qodef_get_module_template_part( 'templates/parts/media', 'blog', '', $params );
		} ?>
		<div class="qodef-bli-content">
			<?php eiddo_qodef_get_module_template_part( 'templates/parts/title', 'blog', 'short', $params ); ?>
			<?php eiddo_qodef_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params ); ?>
		</div>
	</div>
</li>