<?php
$title_tag    = isset( $title_tag ) ? $title_tag : 'h2';
$title_styles = isset( $this_object ) && isset( $params ) ? $this_object->getTitleStyles( $params ) : array();
$title = get_the_title();
$title_length = strlen( $title );
if( $title_length > 30 ) {
	$title = substr( $title, 0, 30 );
	$title .= '...';
}
?>

<<?php echo esc_attr($title_tag);?> itemprop="name" class="entry-title qodef-post-title" <?php eiddo_qodef_inline_style($title_styles); ?>>
<?php if(eiddo_qodef_blog_item_has_link()) { ?>
<a itemprop="url" href="<?php echo get_the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php } ?>
	<?php echo esc_html($title); ?>
	<?php if(eiddo_qodef_blog_item_has_link()) { ?>
</a>
<?php } ?>
</<?php echo esc_attr($title_tag);?>>