<?php
$share_type = isset($share_type) ? $share_type : 'list';
?>
<?php if(eiddo_qodef_options()->getOptionValue('enable_social_share') === 'yes' && eiddo_qodef_options()->getOptionValue('enable_social_share_on_post') === 'yes') { ?>
    <div class="qodef-blog-share">
        <?php echo eiddo_qodef_get_social_share_html(array('type' => $share_type)); ?>
    </div>
<?php } ?>