<button
    type="submit" <?php eiddo_qodef_inline_style($button_styles); ?> <?php eiddo_qodef_class_attribute($button_classes); ?> <?php echo eiddo_qodef_get_inline_attrs($button_data); ?> <?php echo eiddo_qodef_get_inline_attrs($button_custom_attrs); ?>>
    <?php if (!empty($text)) { ?>
        <span class="qodef-btn-text"><?php echo esc_html($text); ?></span>
    <?php }
    echo eiddo_qodef_icon_collections()->renderIcon($icon, $icon_pack); ?>
</button>