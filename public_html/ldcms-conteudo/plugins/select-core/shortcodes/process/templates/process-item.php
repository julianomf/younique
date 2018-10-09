<div <?php eiddo_qodef_class_attribute($item_classes); ?>>
    <div class="qodef-pi-holder-inner clearfix">
        <div class="qodef-pi-holder">
            <?php if (!empty($image)) : ?>
                <div class="qodef-pi">

                    <?php if (!empty($number)) : ?>
                        <div class="qodef-pi-number">
                            <?php echo esc_html($number); ?>
                            <?php if(!empty($link)) { ?>
                                <a class="qodef-pi-link" href="<?php echo esc_attr($link) ?>" target="<?php echo esc_attr($target) ?>"></a>
                            <?php } ?>
                        </div>
                    <?php endif; ?>

                    <div class="qodef-pi-inner">
                        <?php echo wp_get_attachment_image($image, 'full'); ?>
	                    <?php if(!empty($link)) { ?>
		                    <a class="qodef-pi-link" href="<?php echo esc_attr($link) ?>" target="<?php echo esc_attr($target) ?>"></a>
	                    <?php } ?>
                    </div>
                </div>
            <?php else: ?>
                <div class="qodef-pi icon">

                    <?php if (!empty($number)) : ?>
                        <div class="qodef-pi-number">
                            <?php echo esc_html($number); ?>
                            <?php if(!empty($link)) { ?>
                                <a class="qodef-pi-link" href="<?php echo esc_attr($link) ?>" target="<?php echo esc_attr($target) ?>"></a>
                            <?php } ?>
                        </div>
                    <?php endif; ?>
                    <div class="qodef-pi-inner" <?php eiddo_qodef_inline_style($icon_styles) ?>>
                        <?php echo qodef_core_get_shortcode_module_template_part('templates/icon', 'process', '', array('icon_parameters' => $icon_parameters)); ?>
                    </div>
                    <?php if(!empty($link)) { ?>
                        <a class="qodef-pi-link" href="<?php echo esc_attr($link) ?>" target="<?php echo esc_attr($target) ?>"></a>
                    <?php } ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="qodef-pi-content-holder">
            <?php if (!empty($title)) : ?>
                <div class="qodef-pi-title-holder">
                    <h5 class="qodef-pi-title"><?php echo esc_html($title); ?></h5>
                </div>
            <?php endif; ?>

            <?php if (!empty($text)) : ?>
                <div class="qodef-pi-text-holder">
                    <p><?php echo esc_html($text); ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>