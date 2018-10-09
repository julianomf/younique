<div class="qodef-membership-dashboard-page qodef-real-estate-dashboard-page">
	<div class="qodef-membership-user-profile-page qodef-real-estate-user-profile-page">
		<h2 class="qodef-real-estate-page-title"><?php esc_html_e('Profile', 'select-real-estate'); ?></h2>
		<p><?php esc_html_e('Your profile', 'select-real-estate'); ?></p>
		<div class="qodef-real-estate-dashboard-page-content">
			<?php if (!empty($profile_image)) { ?>
				<div class="qodef-profile-image">
					<?php echo qodef_membership_kses_img($profile_image); ?>
				</div>
			<?php } ?>
			<?php if (!empty($first_name)) { ?>
				<div class="qodef-profile-section">
		            <span class="qodef-profile-label">
			            <?php esc_html_e('First Name', 'select-real-estate'); ?>:
		            </span>
					<span class="qodef-profile-value">
		                <?php echo esc_html($first_name); ?>
			        </span>
				</div>
			<?php } ?>
			<?php if (!empty($last_name)) { ?>
				<div class="qodef-profile-section">
		            <span class="qodef-profile-label">
			            <?php esc_html_e('Last Name', 'select-real-estate'); ?>:
		            </span>
					<span class="qodef-profile-value">
		                <?php echo esc_html($last_name); ?>
			        </span>
				</div>
			<?php } ?>
			<?php if (!empty($email)) { ?>
				<div class="qodef-profile-section">
		            <span class="qodef-profile-label">
			            <?php esc_html_e('Email', 'select-real-estate'); ?>:
		            </span>
					<span class="qodef-profile-value">
		                <?php echo esc_html($email); ?>
			        </span>
				</div>
			<?php } ?>
			<?php if (!empty($description)) { ?>
				<div class="qodef-profile-section">
		            <span class="qodef-profile-label">
			            <?php esc_html_e('Desription', 'select-real-estate'); ?>:
		            </span>
					<span class="qodef-profile-value">
		                <?php echo esc_html($description); ?>
			        </span>
				</div>
			<?php } ?>
			<?php if (!empty($website)) { ?>
				<div class="qodef-profile-section">
		            <span class="qodef-profile-label">
			            <?php esc_html_e('Website', 'select-real-estate'); ?>:
		            </span>
					<span class="qodef-profile-value">
		                <a href="<?php echo esc_url($website); ?>" target="_blank"><?php echo esc_html($website); ?></a>
			        </span>
				</div>
			<?php } ?>
		</div>
	</div>
</div>