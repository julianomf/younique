<div class="qodef-fullscreen-with-sidebar-search-holder">
	<a <?php eiddo_qodef_class_attribute( $search_close_icon_class ); ?> href="javascript:void(0)">
		<?php echo eiddo_qodef_get_search_close_icon_html(); ?>
	</a>
	<div class="qodef-fullscreen-search-table">
		<div class="qodef-fullscreen-search-cell">
			<div class="qodef-fullscreen-search-inner  <?php echo esc_html($search_in_grid); ?>">
				<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-fullscreen-search-form" method="get">
					<div class="qodef-form-holder">
						<div class="qodef-form-holder-inner">
							<div class="qodef-field-holder">
								<input type="text" placeholder="<?php esc_html_e( 'Search...', 'eiddo' ); ?>" name="s" class="qodef-search-field" autocomplete="off"/>
							</div>
							<button type="submit" <?php eiddo_qodef_class_attribute( $search_submit_icon_class ); ?>>
								<?php echo eiddo_qodef_get_search_icon_html(); ?>
							</button>
						</div>
					</div>
				</form>
                <div class="qodef-fullscreen-sidebar">
                    <?php eiddo_qodef_get_fullscreen_sidebar(); ?>
                </div>
			</div>
		</div>
	</div>
</div>