<?php do_action('eiddo_qodef_before_main_content'); ?>
<div class="<?php echo esc_attr( $holder_params['holder'] ); ?>">
    <?php do_action('eiddo_qodef_after_container_open'); ?>
    <div class="<?php echo esc_attr( $holder_params['inner'] ); ?>">
        <?php qodef_re_get_cpt_single_module_template_part( 'templates/author/layout-collections/default', 'property', '', $params ); ?>
    </div>
    <?php do_action('eiddo_qodef_before_container_close'); ?>
</div>