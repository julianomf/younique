<?php
$statuses = qodef_re_get_property_taxonomy('property-status', $id);
if(is_array($statuses) && !empty($statuses)) { ?>
    <span class="qodef-ci-statuses">
    <?php foreach($statuses as $status) { ?>
        <span class="qodef-ci-status">
            <?php echo esc_html($status->name); ?>
        </span>
    <?php  } ?>
    </span>
<?php }