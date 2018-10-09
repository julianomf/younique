<div class="qodef-blog-list-holder <?php echo esc_attr( $holder_classes ); ?>" <?php echo wp_kses( $holder_data, array( 'data' ) ); ?>>
	<div class="qodef-bl-wrapper qodef-outer-space">
		<ul class="qodef-blog-list">
			<?php
			if ( $query_result->have_posts() ):
				while ( $query_result->have_posts() ) : $query_result->the_post();
					$image_meta          = get_post_meta( get_the_ID(), 'qodef_blog_list_featured_image_meta', true );
					$item_class = ! empty( $image_meta ) || has_post_thumbnail() ? 'qodef-has-featured' : 'qodef-no-featured';
					$params['item_class'] = $item_class;
					eiddo_qodef_get_module_template_part( 'shortcodes/blog-list/layout-collections/post', 'blog', $type, $params );
				endwhile;
			else:
				eiddo_qodef_get_module_template_part( 'templates/parts/no-posts', 'blog', '', $params );
			endif;
			
			wp_reset_postdata();
			?>
		</ul>
	</div>
	<?php eiddo_qodef_get_module_template_part( 'templates/parts/pagination/' . $params['pagination_type'], 'blog', '', $params ); ?>
</div>