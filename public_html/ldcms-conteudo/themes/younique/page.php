<?php
$qodef_sidebar_layout = eiddo_qodef_sidebar_layout();

get_header();
eiddo_qodef_get_title();
get_template_part( 'slider' );
do_action('eiddo_qodef_before_main_content');
?>

<div class="qodef-container qodef-default-page-template">
	<?php do_action( 'eiddo_qodef_after_container_open' ); ?>
	
	<div class="qodef-container-inner clearfix">
        <?php do_action( 'eiddo_qodef_after_container_inner_open' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="qodef-grid-row">
				<div <?php echo eiddo_qodef_get_content_sidebar_class(); ?>>
					<?php
						the_content();
						do_action( 'eiddo_qodef_page_after_content' );
					?>
				</div>
				<?php if ( $qodef_sidebar_layout !== 'no-sidebar' ) { ?>
					<div <?php echo eiddo_qodef_get_sidebar_holder_class(); ?>>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
		<?php endwhile; endif; ?>
        <?php do_action( 'eiddo_qodef_before_container_inner_close' ); ?>
	</div>
	
	<?php do_action( 'eiddo_qodef_before_container_close' ); ?>
</div>

<?php get_footer(); ?>