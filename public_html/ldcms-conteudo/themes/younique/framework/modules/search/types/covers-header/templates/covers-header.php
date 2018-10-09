<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="qodef-search-cover" method="get">
	<?php if ( $search_in_grid ) { ?>
	<div class="qodef-container">
		<div class="qodef-container-inner clearfix">
	<?php } ?>
			<div class="qodef-form-holder-outer">
				<div class="qodef-form-holder">
					<div class="qodef-form-holder-inner">
						<input type="text" placeholder="<?php esc_html_e( 'Search', 'eiddo' ); ?>" name="s" class="qodef_search_field" autocomplete="off" />
						<a <?php eiddo_qodef_class_attribute( $search_close_icon_class ); ?> href="#">
							<?php echo eiddo_qodef_get_search_close_icon_html(); ?>
						</a>
					</div>
				</div>
			</div>
	<?php if ( $search_in_grid ) { ?>
		</div>
	</div>
	<?php } ?>
</form>