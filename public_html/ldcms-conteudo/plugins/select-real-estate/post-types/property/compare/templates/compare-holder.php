<div class="qodef-re-compare-holder <?php echo esc_attr($holder_classes); ?>">
    <div class="qodef-re-compare-holder-title">
        <h3><?php esc_html_e('Compare properties', 'select-real-estate') ?></h3>
    </div>
    <a class="qodef-re-compare-holder-opener" href="javascript:void(0)">
        <span><?php esc_html_e('Compare', 'select-real-estate') ?></span>
    </a>
    <div class="qodef-re-compare-holder-scroll">
        <div class="qodef-re-compare-items-holder <?php echo esc_attr($items_layout); ?>">
            <?php if(isset($added_properties) && !empty($added_properties)) { ?>
                <?php foreach($added_properties as $property) { ?>
                    <?php echo qodef_re_get_compare_list_item($property); ?>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="qodef-re-compare-actions">
            <?php echo eiddo_qodef_get_button_html(
                    array(
                        'type'          => 'simple',
                        'text'          => esc_html__('Details', 'select-real-estate'),
                        'custom_class'  => 'qodef-re-compare-do-compare'
                    )
            ); ?>
            <?php echo eiddo_qodef_get_button_html(
                array(
                    'type'          => 'simple',
                    'text'          => esc_html__('Reset', 'select-real-estate'),
                    'custom_class'  => 'qodef-re-compare-do-reset'
                )
            ); ?>
        </div>
    </div>
</div>