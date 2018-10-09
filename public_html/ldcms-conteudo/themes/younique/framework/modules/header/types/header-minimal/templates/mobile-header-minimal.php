<?php do_action('eiddo_qodef_before_mobile_header'); ?>

<header class="qodef-mobile-header">
	<?php do_action('eiddo_qodef_after_mobile_header_html_open'); ?>
	
	<div class="qodef-mobile-header-inner">
		<div class="qodef-mobile-header-holder">
			<div class="qodef-grid">
				<div class="qodef-vertical-align-containers">
					<div class="qodef-position-left"><!--
					 --><div class="qodef-position-left-inner">
							<?php eiddo_qodef_get_mobile_logo(); ?>
						</div>
					</div>
					<div class="qodef-position-right"><!--
					 --><div class="qodef-position-right-inner">
							<a href="javascript:void(0)" <?php eiddo_qodef_class_attribute( $fullscreen_menu_icon_class ); ?>>
								<span class="qodef-fullscreen-menu-close-icon">
									<?php echo eiddo_qodef_get_fullscreen_menu_close_icon_html(); ?>
								</span>
								<span class="qodef-fullscreen-menu-opener-icon">
									<?php echo eiddo_qodef_get_fullscreen_menu_icon_html(); ?>
								</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php do_action('eiddo_qodef_before_mobile_header_html_close'); ?>
</header>

<?php do_action('eiddo_qodef_after_mobile_header'); ?>