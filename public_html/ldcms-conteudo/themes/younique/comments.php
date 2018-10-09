<?php
if ( post_password_required() ) {
	return;
}

if ( comments_open() || get_comments_number() ) { ?>
	<div class="qodef-comment-holder clearfix" id="comments">
		<?php if ( have_comments() ) { ?>
			<div class="qodef-comment-holder-inner">
				<?php
				$qodef_show_comment_list_title = apply_filters('eiddo_qodef_show_comment_list_title_filter', true);
				if($qodef_show_comment_list_title) {
				?>
					<div class="qodef-comments-title">
						<h5><?php esc_html_e( 'Comentário', 'eiddo' ); ?></h5>
					</div>
				<?php } ?>
				<div class="qodef-comments">
					<ul class="qodef-comment-list">
						<?php wp_list_comments( array_unique( array_merge( array( 'callback' => 'eiddo_qodef_comment' ), apply_filters( 'eiddo_qodef_comments_callback', array() ) ) ) ); ?>
					</ul>
				</div>
			</div>
		<?php } ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
			<p><?php esc_html_e( 'Desculpe, o formulário de comentários está fechado neste momento.', 'eiddo' ); ?></p>
		<?php } ?>
	</div>
	<?php
		$qodef_commenter = wp_get_current_commenter();
		$qodef_req       = get_option( 'require_name_email' );
		$qodef_aria_req  = ( $qodef_req ? " aria-required='true'" : '' );
		
		$qodef_args = array(
			'id_form'              => 'commentform',
			'id_submit'            => 'submit_comment',
			'class_form'           => 'submit_comment clearfix',
			'title_reply'          => esc_html__( 'Post um Comentário', 'eiddo' ),
			'title_reply_before'   => '<h5 id="reply-title" class="comment-reply-title">',
			'title_reply_after'    => '</h5>',
			'title_reply_to'       => esc_html__( 'Comentário %s', 'eiddo' ),
			'cancel_reply_link'    => esc_html__( 'Cancelar', 'eiddo' ),
			'label_submit'         => esc_html__( 'Enviar', 'eiddo' ),
			'comment_field'        => apply_filters( 'eiddo_qodef_comment_form_textarea_field', '<label for="comment">' . esc_html__( 'Comentário', 'eiddo' ) . '</label><textarea id="comment" placeholder="" name="comment" cols="45" rows="6" aria-required="true"></textarea>' ),
			'comment_notes_before' => '',
			'comment_notes_after'  => '',
			'fields'               => apply_filters( 'eiddo_qodef_comment_form_default_fields', array(
				'author' => '<span class="qodef-comment-field qodef-comment-name"><label for="author">' . esc_html__( 'Nome', 'eiddo' ) . '</label><input id="author" name="author" placeholder="" type="text" value="' . esc_attr( $qodef_commenter['comment_author'] ) . '"' . $qodef_aria_req . ' /></span>',
				'email'  => '<span class="qodef-comment-field qodef-comment-email"><label for="email">' . esc_html__( 'E-mail', 'eiddo' ) . '</label><input id="email" name="email" placeholder="" type="text" value="' . esc_attr( $qodef_commenter['comment_author_email'] ) . '"' . $qodef_aria_req . ' /></span>',
				'url'    => '<span class="qodef-comment-field qodef-comment-url"><label for="url">' . esc_html__( 'Site', 'eiddo' ) . '</label><input id="url" name="url" placeholder="" type="text" value="' . esc_attr( $qodef_commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></span>'
			) )
		);

	$qodef_args = apply_filters( 'eiddo_qodef_comment_form_final_fields', $qodef_args );
		
	if ( get_comment_pages_count() > 1 ) { ?>
		<div class="qodef-comment-pager">
			<p><?php paginate_comments_links(); ?></p>
		</div>
	<?php } ?>

    <?php
    $qodef_show_comment_form = apply_filters('eiddo_qodef_show_comment_form_filter', true);
    if($qodef_show_comment_form) {
    ?>
        <div class="qodef-comment-form">
            <div class="qodef-comment-form-inner">
                <?php comment_form( $qodef_args ); ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>	