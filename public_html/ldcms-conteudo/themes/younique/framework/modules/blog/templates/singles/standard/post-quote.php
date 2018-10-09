<?php
$image_size         = isset( $image_size ) ? $image_size : 'full';
$image_meta         = get_post_meta( get_the_ID(), 'qodef_blog_list_featured_image_meta', true );
$has_featured       = ! empty( $image_meta ) || has_post_thumbnail();
$blog_list_image_id = ! empty( $image_meta ) && eiddo_qodef_blog_item_has_link() ? eiddo_qodef_get_attachment_id_from_url( $image_meta ) : '';
$background_image   = '';

if ( ! empty( $blog_list_image_id ) ) {
	$background_image_url = wp_get_attachment_image_src( $blog_list_image_id, $image_size );
	
	if ( ! empty( $background_image_url ) ) {
		$background_image = 'background-image: url( ' . esc_url( $background_image_url[0] ) . ')';
	}
} else {
	$background_image = 'background-image: url( ' . get_the_post_thumbnail_url( get_the_ID(), $image_size ) . ')';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="qodef-post-content" <?php eiddo_qodef_inline_style($background_image); ?>>
		<div class="qodef-post-text">
			<div class="qodef-post-mark">
				<span class="icon_quotations qodef-link-mark"></span>
			</div>
			<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/date', 'blog', '', $part_params); ?>
			<div class="qodef-post-text-inner">
				<div class="qodef-post-text-main">
					<?php eiddo_qodef_get_module_template_part('templates/parts/post-type/quote', 'blog', '', $part_params); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="qodef-post-additional-content">
		<div class="qodef-additional-content-text">
			<?php the_content(); ?>
		</div>
		<div class="qodef-post-info-bottom clearfix">
			<div class="qodef-post-info-bottom-left">
				<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/tags', 'blog', '', $part_params); ?>
			</div>
			<div class="qodef-post-info-bottom-right">
				<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/author', 'blog', '', $part_params); ?>
				<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/comments', 'blog', '', $part_params); ?>
				<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/like', 'blog', '', $part_params); ?>
				<?php eiddo_qodef_get_module_template_part('templates/parts/post-info/share', 'blog', '', $part_params); ?>
			</div>
		</div>
	</div>
</article>