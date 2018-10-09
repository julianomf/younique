<div class="qodef-slide-from-header-bottom-holder">
	<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		<div class="qodef-form-holder">
			<input type="text" placeholder="<?php esc_html_e( 'Search', 'eiddo' ); ?>" name="s" class="qodef-search-field" autocomplete="off" />
			<button type="submit" <?php eiddo_qodef_class_attribute( $search_submit_icon_class ); ?>>
				<?php echo eiddo_qodef_get_search_icon_html(); ?>
			</button>
		</div>
	</form>
</div>