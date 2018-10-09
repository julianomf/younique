<li>
	<div class="<?php echo esc_attr( $comment_class ); ?>">
		<?php if ( ! $is_pingback_comment ) { ?>
			<div class="qodef-comment-image"> <?php echo eiddo_qodef_kses_img( get_avatar( $comment, 85 ) ); ?> </div>
		<?php } ?>
		<div class="qodef-comment-text">
			<div class="qodef-comment-arrow"></div>
			<div class="qodef-comment-info">
				<h5 class="qodef-comment-name vcard">
					<?php echo wp_kses_post( get_comment_author_link() ); ?>
				</h5>
				<span class="qodef-review-rating">
					<?php foreach($rating_criteria as $rating) { ?>
						<?php if(!isset($rating['show']) || (isset($rating['show']) && $rating['show'])) { ?>
							<span class="qodef-rating-inner">
                                <span class="qodef-rating-value">
                                    <?php
                                    $review_rating = get_comment_meta( $comment->comment_ID, $rating['key'], true );
                                    for ( $i = 1; $i <= $review_rating; $i ++ ) { ?>
	                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php } ?>
                                </span>
                            </span>
						<?php } ?>
					<?php } ?>
				</span>
			</div>
			<?php if ( ! $is_pingback_comment ) { ?>
				<div class="qodef-text-holder" id="comment-<?php comment_ID(); ?>">
					<?php comment_text(); ?>
					<span class="qodef-comment-date">
                            <?php echo get_comment_date(); ?>
                        </span>
				</div>
			<?php } ?>
		</div>
	</div>
<!-- li is closed by wordpress after comment rendering -->