<a itemprop="url" href="<?php echo esc_url($link); ?>" target="<?php echo esc_attr($target); ?>" <?php eiddo_qodef_inline_style($button_styles); ?> <?php eiddo_qodef_class_attribute($button_classes); ?> <?php echo eiddo_qodef_get_inline_attrs($button_data); ?> <?php echo eiddo_qodef_get_inline_attrs($button_custom_attrs); ?>>
    <span class="qodef-btn-text"><?php echo esc_html($text); ?></span>
    <?php echo eiddo_qodef_icon_collections()->renderIcon($icon, $icon_pack); ?>
</a>