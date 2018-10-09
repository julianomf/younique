<span class="qodef-property-filter-button-section qodef-property-filter-button-holder">
<?php echo eiddo_qodef_get_button_html(
    array(
        'custom_class' => 'qodef-property-filter-button',
        'html_type'    => 'button',
        'text'         => esc_html__('Filter Results', 'select-real-estate')
    )
);
?>
</span>
<span class="qodef-property-query-section qodef-property-filter-button-holder">
    <?php
    echo eiddo_qodef_get_button_html(
        array(
            'custom_class' => 'qodef-property-save-search-button',
            'html_type'    => 'button',
            'text'         => esc_html__('Save Search', 'select-real-estate')
        )
    );
    ?>
    <span class="qodef-query-result">

    </span>
</span>
<span class="qodef-reset-filter-section qodef-property-filter-button-holder">
    <?php
    echo eiddo_qodef_get_button_html(
        array(
            'custom_class'     => 'qodef-property-filter-reset-button',
            'html_type'        => 'button',
            'text'             => esc_html__('Reset', 'select-real-estate'),
            'color'            => '#000',
            'background_color' => '#f4f4f4'
        )
    );
    ?>
</span>