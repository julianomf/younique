<div class="qodef-ptl-item-image">
    <?php if($params['skin'] === 'qodef-light-skin') {?>
        <?php echo qodef_re_get_taxonomy_icon($id, 'property_type_custom_icon_light', 'property_type_icon'); ?>
    <?php } else { ?>
        <?php echo qodef_re_get_taxonomy_icon($id, 'property_type_custom_icon', 'property_type_icon'); ?>
    <?php } ?>
</div>
<div class="qodef-ptl-item-title">
    <?php echo esc_html($name); ?>
</div>