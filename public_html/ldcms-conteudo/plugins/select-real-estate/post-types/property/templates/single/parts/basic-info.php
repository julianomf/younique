<?php
$property_size = get_post_meta(get_the_ID(), 'qodef_property_size_meta', true);

$property_structure = get_post_meta(get_the_ID(), 'qodef_property_bedrooms_meta', true);
$property_structure_label = $property_structure == 1 ? esc_html__('Bedroom', 'select-real-estate') : esc_html__('Quartos', 'select-real-estate');

$property_accommodation = get_post_meta(get_the_ID(), 'qodef_property_accommodation_meta', true);

$property_heating = get_post_meta(get_the_ID(), 'qodef_property_heating_meta', true);
?>
<div class="qodef-property-basic-info-holder">
    <div class="qodef-property-basic-info-outer">
        <div class="qodef-property-basic-info-inner clearfix">
            <div class="qodef-property-param">
                <span class="qodef-property-content">
                    <span class="qodef-property-label">
                        <?php esc_html_e('Property size:', 'select-real-estate'); ?>
                    </span>
                    <span class="qodef-property-value">
                       <?php echo qodef_re_get_real_estate_size_html($property_size); ?>
                    </span>
                </span>
            </div>
            <div class="qodef-property-param">
                <span class="qodef-property-content">
                    <span class="qodef-property-label">
                        <?php esc_html_e('Structure:', 'select-real-estate'); ?>
                    </span>
                    <span class="qodef-property-value">
                       <?php echo esc_html($property_structure) . ' ' . $property_structure_label; ?>
                    </span>
                </span>
            </div>
            <div class="qodef-property-param">
                <span class="qodef-property-content">
                    <span class="qodef-property-label">
                        <?php esc_html_e('Accommodation:', 'select-real-estate'); ?>
                    </span>
                    <span class="qodef-property-value">
                       <?php echo esc_html($property_accommodation); ?>
                    </span>
                </span>
            </div>
            <div class="qodef-property-param">
                <span class="qodef-property-content">
                    <span class="qodef-property-label">
                        <?php esc_html_e('Heating:', 'select-real-estate'); ?>
                    </span>
                    <span class="qodef-property-value">
                       <?php echo esc_html($property_heating); ?>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
