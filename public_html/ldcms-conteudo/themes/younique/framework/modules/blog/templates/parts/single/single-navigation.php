<?php
$blog_single_navigation = eiddo_qodef_options()->getOptionValue('blog_single_navigation') === 'no' ? false : true;
$blog_navigation_through_same_category = eiddo_qodef_options()->getOptionValue('blog_navigation_through_same_category') === 'no' ? false : true;
?>
<?php if($blog_single_navigation){ ?>
	<div class="qodef-blog-single-navigation">
		<div class="qodef-blog-single-navigation-inner clearfix">
			<?php
				/* Single navigation section - SETTING PARAMS */
				$post_navigation = array(
					'prev' => array(
						'label' => '<h6 class="qodef-blog-single-nav-label"><span class="arrow_carrot-left"></span>'.esc_html__('Anterior', 'eiddo').'</h6>'
					),
					'next' => array(
						'label' => '<h6 class="qodef-blog-single-nav-label">'.esc_html__('Próximo', 'eiddo').'<span class="arrow_carrot-right"></span></h6>'
					)
				);
			
				if($blog_navigation_through_same_category){
					if(get_previous_post(true) !== ""){
						$post_navigation['prev']['post'] = get_previous_post(true);
					}
					if(get_next_post(true) !== ""){
						$post_navigation['next']['post'] = get_next_post(true);
					}
				} else {
					if(get_previous_post() !== ""){
						$post_navigation['prev']['post'] = get_previous_post();
					}
					if(get_next_post() !== ""){
						$post_navigation['next']['post'] = get_next_post();
					}
				}

				/* Single navigation section - RENDERING */
				foreach (array('prev', 'next') as $nav_type) {
					if (isset($post_navigation[$nav_type]['post'])) { ?>
						<?php
						$id = $post_navigation[$nav_type]['post']->ID;
						
						?>
						<div class="qodef-blog-single-nav-wrapper">
							<a itemprop="url" class="qodef-blog-single-<?php echo esc_attr($nav_type); ?>" href="<?php echo get_permalink($id); ?>">
								<div class="qodef-blog-single-nav-text">
									<?php echo wp_kses(
										$post_navigation[$nav_type]['label'],
										array(
											'h6' => array(
												'class' => true
											),
											'span' => array(
												'class' => true
											)
										)
									); ?>
	                                <h6 class="qodef-blog-single-nav-title">
	                                    <?php echo the_title_attribute(array('post' => $id)); ?>
	                                </h6>
	                            </div>
							</a>
						</div>
					<?php }
				}
			?>
		</div>
	</div>
<?php } ?>