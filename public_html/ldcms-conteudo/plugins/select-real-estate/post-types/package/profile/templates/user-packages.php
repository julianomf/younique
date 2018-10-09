<h2 class="qodef-membership-page-title"><?php esc_html_e('My Packages', 'select-real-estate'); ?></h2>
<p><?php esc_html_e('My packages', 'select-real-estate'); ?></p>

<div class="qodef-re-profile-packages-holder">
    <table>
        <thead>
            <tr>
                <td><?php esc_html_e('Package Name', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Expiration Date', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Items Included', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Items Remaining', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Featured Included', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Featured Remaining', 'select-real-estate') ?></td>
                <td><?php esc_html_e('Status', 'select-real-estate') ?></td>
            </tr>
        </thead>
        <tbody>
            <?php if ( ! empty( $user_packages ) ) { ?>
                <?php foreach($user_packages as $key => $package) { ?>
                    <?php $package_info = qodef_re_get_package_info($key);?>
                    <tr>
                        <td>
                            <?php echo esc_html($package_info['package_name']); ?>
                        </td>
                        <td>
                            <?php echo esc_html(gmdate( 'd/m/Y', $package_info['expiration_date'])); ?>
                        </td>
                        <td>
                            <?php echo esc_html($package_info['items_included']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($package_info['items_remaining']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($package_info['featured_items_included']); ?>
                        </td>
                        <td>
                            <?php echo esc_html($package_info['featured_items_remaining']); ?>
                        </td>
                        <td>
                            <?php echo qodef_re_get_package_status($key); ?>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
    <?php
        if ( qodef_membership_theme_installed() ) {
            echo eiddo_qodef_get_button_html( array(
                'text'      => esc_html__( 'Buy Package', 'select-real-estate' ),
                'custom_class' => 'qodef-membership-buy-package',
                'link' => $package_url
            ) );
        } else {
            echo '<a itemprop="url" href="' . $package_url . '" target="_self" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-membership-buy-package"><span class="qodef-btn-text">' . esc_html__( 'Buy Package', 'select-real-estate' ) . '</span></a>';
        }
    ?>
</div>
