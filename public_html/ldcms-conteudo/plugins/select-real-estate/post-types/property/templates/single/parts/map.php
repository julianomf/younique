<?php
$full_address = get_post_meta(get_the_ID(), 'qodef_property_full_address_meta', true);
$simple_address = get_post_meta(get_the_ID(), 'qodef_property_simple_address_meta', true);
$zip_code = get_post_meta(get_the_ID(), 'qodef_property_zip_code_meta', true);
$country = get_post_meta(get_the_ID(), 'qodef_property_address_country_meta', true);
$map_style = eiddo_qodef_options()->getOptionValue('real_estate_map_style');

$google_map_params = array(
    'address1' => $full_address
);

if( ! empty ( $map_style ) ) {
	$google_map_params['snazzy_map_style'] = 'yes';
	$google_map_params['snazzy_map_code'] = esc_html($map_style);
}
?>
<div class="qodef-property-map qodef-property-label-items-holder">
    <div class="qodef-property-map-label qodef-property-label-style">
        <h5>
            <?php esc_html_e('Localização', 'select-real-estate'); ?>
        </h5>
    </div>
    <div class="qodef-property-map-items qodef-property-items-style clearfix">
        <div class="qodef-property-map-object">
           
			<?php print $simple_address; ?>
        </div>
		<!--
		<div class="qodef-property-map-address">
			<?php echo eiddo_qodef_execute_shortcode('qodef_google_map', $google_map_params); ?>
            <div class="qodef-grid-row">
                <div class="qodef-grid-col-6">
                    <span class="qodef-full-address qodef-label-items-item">
                        <span class="qodef-label-items-label">
                            <span class="qodef-address-icon lnr lnr-map-marker"></span>
                            <span class="qodef-address-label-text">
                                <?php esc_html_e('Full Address:', 'select-real-estate'); ?>
                            </span>
                        </span>
                        <span class="qodef-label-items-value">
                            <?php echo esc_html($full_address); ?>
                        </span>
                    </span>
                </div>
                <div class="qodef-grid-col-6">
                    <span class="qodef-simple-address qodef-label-items-item">
                        <span class="qodef-label-items-label">
                            <span class="qodef-address-icon lnr lnr-map-marker"></span>
                            <span class="qodef-address-label-text">
                                <?php esc_html_e('Simple Address:', 'select-real-estate'); ?>
                            </span>
                        </span>
                        <span class="qodef-label-items-value">
                            <?php echo esc_html($simple_address); ?>
                        </span>
                    </span>
                </div>
                <div class="qodef-grid-col-6">
                    <span class="qodef-zip-code qodef-label-items-item">
                        <span class="qodef-label-items-label">
                            <span class="qodef-address-icon lnr lnr-cloud"></span>
                            <span class="qodef-address-label-text">
                                <?php esc_html_e('ZIP Code:', 'select-real-estate'); ?>
                            </span>
                        </span>
                        <span class="qodef-label-items-value">
                            <?php echo esc_html($zip_code); ?>
                        </span>
                    </span>
                </div>
                <div class="qodef-grid-col-6">
                    <span class="qodef-country qodef-label-items-item">
                        <span class="qodef-label-items-label">
                            <span class="qodef-address-icon lnr lnr-earth"></span>
                            <span class="qodef-address-label-text">
                                <?php esc_html_e('Country:', 'select-real-estate'); ?>
                            </span>
                        </span>
                        <span class="qodef-label-items-value">
                            <?php echo esc_html($country); ?>
                        </span>
                    </span>
                </div>
            </div>
        </div>
		-->
		
	</div>
</div>