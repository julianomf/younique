<?php
$image_size          = isset( $image_size ) ? $image_size : 'full';
$image_meta          = get_post_meta( get_the_ID(), 'qodef_blog_list_featured_image_meta', true );
$has_featured        = ! empty( $image_meta ) || has_post_thumbnail();
$blog_list_image_id  = ! empty( $image_meta ) && eiddo_qodef_blog_item_has_link() ? eiddo_qodef_get_attachment_id_from_url( $image_meta ) : '';
?>

<?php if ( $has_featured ) { ?>
	<div class="qodef-post-image">
		<?php if( !isset( $date_on_image ) || $date_on_image != 'no' ) {
			eiddo_qodef_get_module_template_part( 'templates/parts/post-info/date', 'blog', '', $params );
		}
		?>
		<?php if ( eiddo_qodef_blog_item_has_link() ) { ?>
			<a itemprop="url" href="<?php echo get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php } ?>
			<?php if ( ! empty( $blog_list_image_id ) ) {
				echo wp_get_attachment_image( $blog_list_image_id, $image_size );
			} else {
				the_post_thumbnail( $image_size );
			} ?>
		<?php if ( eiddo_qodef_blog_item_has_link() ) { ?>
			</a>
		<?php } ?>
		<?php do_action('eiddo_qodef_action_blog_inside_image_tag')?>
	</div>
<?php } ?>