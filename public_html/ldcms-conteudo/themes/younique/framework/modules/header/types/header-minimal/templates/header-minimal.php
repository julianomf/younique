<?php do_action('eiddo_qodef_before_page_header'); ?>

<header class="qodef-page-header">
	<?php do_action('eiddo_qodef_after_page_header_html_open'); ?>
	
	<?php if($show_fixed_wrapper) : ?>
		<div class="qodef-fixed-wrapper">
	<?php endif; ?>
			
	<div class="qodef-menu-area">
		<?php do_action('eiddo_qodef_after_header_menu_area_html_open'); ?>
		
		<?php if($menu_area_in_grid) : ?>
			<div class="qodef-grid">
		<?php endif; ?>
				
			<div class="qodef-vertical-align-containers">
				<div class="qodef-position-left"><!--
				 --><div class="qodef-position-left-inner">
						<?php if(!$hide_logo) {
							eiddo_qodef_get_logo();
						} ?>
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
				
		<?php if($menu_area_in_grid) : ?>
			</div>
		<?php endif; ?>
	</div>
			
	<?php if($show_fixed_wrapper) { ?>
		</div>
	<?php } ?>
	
	<?php if($show_sticky) {
		eiddo_qodef_get_sticky_header('minimal', 'header/types/header-minimal');
	} ?>
	
	<?php do_action('eiddo_qodef_before_page_header_html_close'); ?>
</header>