<?php
$current_user    = wp_get_current_user();
$name            = $current_user->display_name;
$current_user_id = $current_user->ID;
$membership_page_url = qodef_membership_get_dashboard_page_url();
?>
<div class="qodef-logged-in-user">
    <div class="qodef-logged-in-user-inner">
<!--        <span>-->
<!--            --><?php //if ( qodef_membership_theme_installed() ) {
//                $profile_image = get_user_meta( $current_user_id, 'social_profile_image', true );
//                if ( $profile_image == '' ) {
//                    $profile_image = get_avatar( $current_user_id, 28 );
//                } else {
//                    $profile_image = '<img src="' . esc_url( $profile_image ) . '" />';
//                }
//                echo qodef_membership_kses_img( $profile_image );
//            } ?>
<!--            <span class="qodef-logged-in-user-name">--><?php //echo esc_html( $name ); ?><!--</span>-->
            <?php if ( qodef_membership_theme_installed() ) {
                echo eiddo_qodef_icon_collections()->renderIcon( 'lnr-user', 'linear_icons' );
            } ?>
<!--        </span>-->
    </div>
</div>
<ul class="qodef-login-dropdown">
	<?php
	$nav_items = qodef_membership_get_dashboard_navigation_items();
    $logout_url = $membership_page_url !== '' ? $membership_page_url : home_url( '/' );
	foreach ( $nav_items as $nav_item ) { ?>
		<li>
			<a href="<?php echo esc_url($nav_item['url']); ?>">
				<?php echo esc_html($nav_item['text']); ?>
			</a>
		</li>
	<?php } ?>
	<li>
		<a href="<?php echo wp_logout_url( $logout_url ); ?>">
			<?php esc_html_e( 'Log Out', 'select-membership' ); ?>
		</a>
	</li>
</ul>