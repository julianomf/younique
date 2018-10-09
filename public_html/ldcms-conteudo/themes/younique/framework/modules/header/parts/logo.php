<?php
	$attachment_meta = eiddo_qodef_get_attachment_meta_from_url($logo_image);
	$hwstring = !empty($attachment_meta) ? image_hwstring( $attachment_meta['width'], $attachment_meta['height'] ) : '';

	if(!empty($logo_image_dark)) {
		$attachment_meta_dark = eiddo_qodef_get_attachment_meta_from_url($logo_image_dark);
		$hwstring_dark = !empty($attachment_meta_dark) ? image_hwstring($attachment_meta_dark['width'], $attachment_meta_dark['height']) : '';
	}

	if(!empty($logo_image_light)) {
		$attachment_meta_light = eiddo_qodef_get_attachment_meta_from_url( $logo_image_light );
		$hwstring_light = !empty($attachment_meta_light) ? image_hwstring($attachment_meta_light['width'], $attachment_meta_light['height']) : '';
	}
	
	$show_logo_text = eiddo_qodef_options()->getOptionValue( 'show_logo_text' );
	$logo_text = eiddo_qodef_options()->getOptionValue( 'logo_text' );
?>

<?php do_action('eiddo_qodef_before_site_logo'); ?>

<div class="qodef-logo-wrapper">
    <a itemprop="url" href="<?php echo esc_url(home_url('/')); ?>">
        <img itemprop="image" class="qodef-normal-logo" src="<?php echo esc_url($logo_image); ?>" <?php echo wp_kses($hwstring, array('width' => true, 'height' => true)); ?> alt="<?php esc_html_e('logo','eiddo'); ?>"/>
        <?php if(!empty($logo_image_dark)){ ?><img itemprop="image" class="qodef-dark-logo" src="<?php echo esc_url($logo_image_dark); ?>" <?php echo wp_kses($hwstring_dark, array('width' => true, 'height' => true)); ?> alt="<?php esc_html_e('dark logo','eiddo'); ?>"/><?php } ?>
        <?php if(!empty($logo_image_light)){ ?><img itemprop="image" class="qodef-light-logo" src="<?php echo esc_url($logo_image_light); ?>" <?php echo wp_kses($hwstring_light, array('width' => true, 'height' => true)); ?> alt="<?php esc_html_e('light logo','eiddo'); ?>"/><?php } ?>
    </a>
</div>
<?php if( isset($show_logo_text) && $show_logo_text == 'yes' && !empty($logo_text) ) { ?>
	<div class="qodef-logo-text">
		<span><?php echo esc_html($logo_text); ?></span>
	</div>
<?php } ?>

<?php do_action('eiddo_qodef_after_site_logo'); ?>