<div class="qodef-social-login-holder">
    <div class="qodef-social-login-holder-inner">
        <form method="post" class="qodef-login-form">
            <?php
            $redirect = '';
            if (isset($_GET['redirect_uri'])) {
                $redirect = $_GET['redirect_uri'];
            } ?>
            <fieldset>
                <div>
                    <input type="text" name="user_login_name" id="user_login_name"
                           placeholder="<?php esc_html_e('User Name*', 'select-membership') ?>" value="" required
                           pattern=".{3,}"
                           title="<?php esc_html_e('Three or more characters', 'select-membership'); ?>"/>
                </div>
                <div>
                    <input type="password" name="user_login_password" id="user_login_password"
                           placeholder="<?php esc_html_e('Password*', 'select-membership') ?>" value="" required/>
                </div>
                <div class="qodef-lost-pass-remember-holder clearfix">
                    <span class="qodef-login-remember">
                        <input name="rememberme" value="forever" id="rememberme" type="checkbox"/>
                        <label for="rememberme"
                               class="qodef-checbox-label"><?php esc_html_e('Remember me', 'select-membership') ?></label>
                    </span>
                    <a href="<?php echo wp_lostpassword_url(); ?>" class="qodef-login-action-btn"
                       data-el="#qodef-reset-pass-content"
                       data-title="<?php esc_html_e('Lost Password?', 'select-membership'); ?>"><?php esc_html_e('Lost Your password?', 'select-membership'); ?></a>
                </div>
                <input type="hidden" name="redirect" id="redirect" value="<?php echo esc_url($redirect); ?>">
	            <input type="hidden" name="login-form-submitted" id="login-form-submitted" value="<?php esc_attr_e('Please wait...', 'select-membership'); ?>">
                <div class="qodef-login-button-holder">
                    <?php
                    if (qodef_membership_theme_installed()) {
                        echo eiddo_qodef_get_button_html(array(
                            'html_type' => 'button',
                            'text'      => esc_html__('Login', 'select-membership'),
                            'type'      => 'solid',
                            'size'      => 'small'
                        ));
                    } else {
                        echo '<button type="submit">' . esc_html__('Login', 'select-membership') . '</button>';
                    }
                    ?>
                    <?php wp_nonce_field('qodef-ajax-login-nonce', 'qodef-login-security'); ?>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
    if (qodef_membership_theme_installed()) {
        //if social login enabled add social networks login
        $social_login_enabled = eiddo_qodef_options()->getOptionValue('enable_social_login') == 'yes' ? true : false;
        if ($social_login_enabled) { ?>
            <div class="qodef-login-form-social-login">
                <h6 class="qodef-login-social-title">
                    <?php esc_html_e('or Connect with Social Networks', 'select-membership'); ?>
                </h6>

                <div class="qodef-login-social-networks">
                    <?php do_action('qodef_membership_social_network_login'); ?>
                </div>
            </div>
        <?php }
    }
    do_action('qodef_membership_action_login_ajax_response');
    ?>
    <h6 class="qodef-login-terms">
        <?php esc_html_e('By creating an account you are accepting our', 'select-membership'); ?>
        <a href="<?php echo eiddo_qodef_options()->getOptionValue('real_estate_item_terms_link'); ?>"><?php esc_html_e('Terms & Conditions', 'select-membership'); ?></a>
    </h6>
</div>