<ul class="qodef-membership-dashboard-nav">
    <?php
    $nav_items = qodef_membership_get_dashboard_navigation_items();
    $user_action = isset($_GET['user-action']) ? $_GET['user-action'] : 'profile';
    foreach ($nav_items as $nav_item) { ?>
        <li <?php if ($user_action == $nav_item['user_action']) {
            echo 'class="qodef-active-dash"';
        } ?>>
            <a href="<?php echo esc_url($nav_item['url']); ?>">
                <?php if (isset($nav_item['icon'])) { ?>
                    <span class="qodef-dash-icon">
						<?php print $nav_item['icon']; ?>
					</span>
                <?php } ?>
                <span class="qodef-dash-label">
				    <?php echo esc_html($nav_item['text']); ?>
                </span>
            </a>
        </li>
    <?php } ?>
    <li>
        <a href="<?php echo wp_logout_url(get_permalink()); ?>">
             <span class="qodef-dash-icon">
                <span class="lnr lnr-exit"></span>
            </span>
            <span class="qodef-dash-label">
			    <?php esc_html_e('Log out', 'select-membership'); ?>
            </span>
        </a>
    </li>
</ul>