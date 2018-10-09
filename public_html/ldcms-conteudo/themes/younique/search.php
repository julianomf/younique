<?php
$qodef_search_holder_params = eiddo_qodef_get_holder_params_search();
get_header();
eiddo_qodef_get_title();
do_action('eiddo_qodef_before_main_content'); ?>
    <div class="<?php echo esc_attr($qodef_search_holder_params['holder']); ?>">
        <?php do_action('eiddo_qodef_after_container_open'); ?>
        <div class="<?php echo esc_attr($qodef_search_holder_params['inner']); ?>">
            <?php eiddo_qodef_get_search_page(); ?>
        </div>
        <?php do_action('eiddo_qodef_before_container_close'); ?>
    </div>
<?php get_footer(); ?>