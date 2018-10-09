<?php
$author_info_box       = esc_attr( eiddo_qodef_options()->getOptionValue( 'blog_author_info' ) );
$author_info_email     = esc_attr( eiddo_qodef_options()->getOptionValue( 'blog_author_info_email' ) );
$author_id             = esc_attr( get_the_author_meta( 'ID' ) );
$social_networks       = eiddo_qodef_core_plugin_installed() ? eiddo_qodef_get_user_custom_fields() : false;
$display_author_social = eiddo_qodef_options()->getOptionValue( 'blog_single_author_social' ) === 'no' ? false : true;
?>
<?php if ( $author_info_box === 'yes' && get_the_author_meta( 'description' ) !== "" ) { ?>
	<div class="qodef-author-description">
		<div class="qodef-author-description-inner">
			<div class="qodef-author-description-content">
				<div class="qodef-author-description-image">
					<a itemprop="url" href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" title="<?php the_title_attribute(); ?>" target="_self">
						<?php echo eiddo_qodef_kses_img( get_avatar( get_the_author_meta( 'ID' ), 178 ) ); ?>
					</a>
				</div>
				<div class="qodef-author-description-text-holder">
					<h5 class="qodef-author-name vcard author">
						<a itemprop="url" href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" title="<?php the_title_attribute(); ?>" target="_self">
							<span class="fn">
								<?php
								if ( get_the_author_meta( 'first_name' ) != "" || get_the_author_meta( 'last_name' ) != "" ) {
									echo esc_html( get_the_author_meta( 'first_name' ) ) . " " . esc_html( get_the_author_meta( 'last_name' ) );
								} else {
									echo esc_html( get_the_author_meta( 'display_name' ) );
								}
								?>
							</span>
						</a>
					</h5>
					<?php if ( $author_info_email === 'yes' && is_email( get_the_author_meta( 'email' ) ) ) { ?>
						<p itemprop="email" class="qodef-author-email"><?php echo sanitize_email( get_the_author_meta( 'email' ) ); ?></p>
					<?php } ?>
					<?php if ( get_the_author_meta( 'description' ) != "" ) { ?>
						<div class="qodef-author-text">
							<p itemprop="description"><?php echo wp_kses( get_the_author_meta( 'description' ), array('p') ); ?></p>
						</div>
					<?php } ?>
					<?php if ( $display_author_social ) { ?>
						<?php if ( is_array( $social_networks ) && count( $social_networks ) ) { ?>
							<div class="qodef-author-social-icons clearfix">
								<?php foreach ( $social_networks as $network ) { ?>
									<a itemprop="url" href="<?php echo esc_attr( $network['link'] ) ?>" target="_blank">
										<?php echo eiddo_qodef_icon_collections()->renderIcon( $network['class'], 'font_awesome' ); ?>
									</a>
								<?php } ?>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>