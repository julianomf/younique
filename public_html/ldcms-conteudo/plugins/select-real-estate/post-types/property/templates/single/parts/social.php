<?php
$share_type = isset($share_type) ? $share_type : 'dropdown';
?>

<?php if(eiddo_qodef_options()->getOptionValue('enable_social_share') == 'yes' && eiddo_qodef_options()->getOptionValue('enable_social_share_on_property') == 'yes') : ?>
    <div class="qodef-property-social-share">
        <?php echo eiddo_qodef_get_social_share_html(array('type' => $share_type)) ?>
    </div>
<?php endif; ?>