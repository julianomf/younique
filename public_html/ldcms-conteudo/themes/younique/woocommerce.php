<?php
/*
Template Name: WooCommerce
*/
?>
<?php
$qodef_sidebar_layout = eiddo_qodef_sidebar_layout();

get_header();
eiddo_qodef_get_title();
get_template_part( 'slider' );
do_action('eiddo_qodef_before_main_content');

//Woocommerce content
if ( ! is_singular( 'product' ) ) { ?>
	<div class="qodef-container">
		<div class="qodef-container-inner clearfix">
			<div class="qodef-grid-row">
				<div <?php echo eiddo_qodef_get_content_sidebar_class(); ?>>
					<?php eiddo_qodef_woocommerce_content(); ?>
				</div>
				<?php if ( $qodef_sidebar_layout !== 'no-sidebar' ) { ?>
					<div <?php echo eiddo_qodef_get_sidebar_holder_class(); ?>>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } else { ?>
	<div class="qodef-container">
		<div class="qodef-container-inner clearfix">
			<?php eiddo_qodef_woocommerce_content(); ?>
		</div>
	</div>
<?php } ?>
<?php get_footer(); ?>