<select name="user_register_role" id="user_register_role">
    <?php if($owner_enabled) { ?>
        <option value="owner"><?php esc_html_e('Owner/Buyer', 'select-real-estate'); ?></option>
    <?php } ?>
    <?php if($agent_enabled) { ?>
        <option value="agent"><?php esc_html_e('Agent', 'select-real-estate'); ?></option>
    <?php } ?>
    <?php if($agency_enabled) { ?>
        <option value="agency"><?php esc_html_e('Agency', 'select-real-estate'); ?></option>
    <?php } ?>
</select>