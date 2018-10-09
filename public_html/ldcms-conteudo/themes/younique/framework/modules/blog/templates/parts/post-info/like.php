<?php if(eiddo_qodef_core_plugin_installed()) { ?>
    <div class="qodef-blog-like">
        <?php if( function_exists('eiddo_qodef_get_like') ) eiddo_qodef_get_like(); ?>
    </div>
<?php } ?>