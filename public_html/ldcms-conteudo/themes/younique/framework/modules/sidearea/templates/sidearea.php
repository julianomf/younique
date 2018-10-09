<section class="qodef-side-menu">
	<div class="qodef-close-side-menu-holder">
		<a <?php eiddo_qodef_class_attribute( $side_area_close_icon_class ); ?> href="#">
			<?php echo eiddo_qodef_get_side_area_close_icon_html(); ?>
		</a>
	</div>
	<?php if ( is_active_sidebar( 'sidearea' ) ) {
		dynamic_sidebar( 'sidearea' );
	} ?>
</section>