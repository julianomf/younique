<!--
    <?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/tags', 'property', '', $params); ?>
    <?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/related-properties', 'property', '', $params); ?>
    <?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/reviews-list', 'property', '', $params); ?>
	<?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/floor-plans', 'property', '', $params); ?>
	<?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/leasing-terms', 'property', '', $params); ?>
    <?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/costs', 'property', '', $params); ?>
    <?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/features', 'property', '', $params); ?>
	<?php //echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/multi-unit', 'property', '', $params); ?>
-->

<?php
echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/title', 'property', '', $params);
echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/slider', 'property', $params['item_layout'], $params);
?>
<div class="qodef-container">
    <div class="qodef-container-inner clearfix">
        <div class="qodef-grid-row qodef-grid-medium-gutter">
            <div <?php echo eiddo_qodef_get_content_sidebar_class(); ?>>
                <div class="qodef-property-single-outer">
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/specification', 'property', '', $params); ?>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/description', 'property', '', $params); ?>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/map', 'property', '', $params); ?>
					<?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/video', 'property', '', $params); ?>
                    <?php echo qodef_re_get_cpt_single_module_template_part('templates/single/parts/virtual-tour', 'property', '', $params); ?>
                </div>
            </div>
            <?php if ($sidebar_layout !== 'no-sidebar') { ?>
                <div <?php echo eiddo_qodef_get_sidebar_holder_class(); ?>>
                    <?php get_sidebar(); ?>
					<?php dynamic_sidebar( 'sidebar' ); ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>