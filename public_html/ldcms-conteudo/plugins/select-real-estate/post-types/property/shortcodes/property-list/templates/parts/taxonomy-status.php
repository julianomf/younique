<?php
$statuses = qodef_re_get_property_taxonomy('property-status');
if(is_array($statuses) && !empty($statuses)) { ?>
    <span class="qodef-property-statuses">
    <?php foreach($statuses as $status) { ?>
        <span class="qodef-property-status">
            <?php echo esc_html($status->name); ?>
        </span>
    <?php  } ?>
    </span>
<?php }