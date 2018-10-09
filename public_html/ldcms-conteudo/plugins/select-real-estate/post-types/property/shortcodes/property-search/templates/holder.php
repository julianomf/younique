<div class="<?php echo esc_attr($holder_classes); ?>">
    <div class="qodef-property-search-inner">
        <form role="search" method="get" class="searchform qodef-property-search" action="<?php echo esc_url( home_url( "/" ) ) ?>">
            <input type="hidden" name="s" value="" />
            <input type="hidden" name="qodef-property-search" value="yes" />
            <?php echo qodef_re_get_cpt_shortcode_module_template_part( 'property', 'property-search', 'parts/type', '', $params, $additional_params ); ?>
            <div class="qodef-search-bottom clearfix">
                <?php echo qodef_re_get_cpt_shortcode_module_template_part( 'property', 'property-search', 'parts/city', '', $params, $additional_params ); ?>
                <?php echo qodef_re_get_cpt_shortcode_module_template_part( 'property', 'property-search', 'parts/status', '', $params, $additional_params ); ?>
                <?php echo qodef_re_get_cpt_shortcode_module_template_part( 'property', 'property-search', 'parts/button', '', $params, $additional_params ); ?>
            </div>
        </form>
    </div>
</div>