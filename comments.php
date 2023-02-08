<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unreal-themes
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$unreal_themes_comment_count = get_comments_number();
?>

<div class="row article_block article_coment">  
	<div class="article_block_title">
		<span>Комментарии (<?php echo $unreal_themes_comment_count; ?>)</span>
		<!-- <a href="#">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<g clip-path="url(#clip0_269_3079)">
					<path d="M19 4H9" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M12 16H2" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M15.5 19C17.433 19 19 17.433 19 15.5C19 13.567 17.433 12 15.5 12C13.567 12 12 13.567 12 15.5C12 17.433 13.567 19 15.5 19Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M4.5 8C6.433 8 8 6.433 8 4.5C8 2.567 6.433 1 4.5 1C2.567 1 1 2.567 1 4.5C1 6.433 2.567 8 4.5 8Z" stroke="#4967D0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</g>
				<defs>
					<clipPath id="clip0_269_3079">
						<rect width="20" height="20" fill="white"/>
					</clipPath>
				</defs>
			</svg>
		</a>  -->
	</div>
</div>  

<?php 
$defaults = [
	'fields' => [
		'author' => '<p class="comment-form-author">
						<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
						<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" required="required" />
					</p>',
		'email' => '<p class="comment-form-email">
						<label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>
						<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes" required="required" />
					</p>',
		'url' => '',
		'cookies' => '',
	],
	'comment_field' => '<textarea id="comment" name="comment" placeholder="Оставить комментарий" name="comment" cols="10" rows="2" maxlength="65525" required="required" spellcheck="false"></textarea>',
	'must_log_in' => '<p class="must-log-in">' .
		 sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '
	 </p>',
	'logged_in_as' => '',
	'comment_notes_before' => '<p class="comment-notes">
									<span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'.
									( $req ? $required_text : '' ) . '
								</p>',
	'comment_notes_after'  => '',
	'id_form'              => 'commentform',
	'id_submit'            => 'submit',
	'class_container'      => 'comment-respond',
	'class_form'           => 'comment-form',
	'class_submit'         => 'submit',
	'name_submit'          => 'submit',
	'title_reply'          => '',
	'title_reply_to'       => '',
	'title_reply_before'   => '',
	'title_reply_after'    => '',
	'cancel_reply_before'  => ' <small>',
	'cancel_reply_after'   => '</small>',
	'cancel_reply_link'    => __( 'Cancel reply' ),
	'label_submit'         => 'Отправить',
	'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
	'submit_field'         => '<div class="div_send">%1$s %2$s</div>',
	'format'               => 'xhtml',
];

comment_form( $defaults ); 
?>

<?php if ( have_comments() ) : ?>

	<?php // the_comments_navigation(); ?>

	<div class="row_di coments_list">
		<?php
		wp_list_comments( [
			'style'      => 'div',
			'short_ping' => true,
			'callback'	 => 'ut_comment',
		] );
		?>
	</div>

	<?php if ( ! comments_open() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'unreal-themes' ); ?></p>
	<?php endif; ?>

	<?php 
	$cpage = get_query_var('cpage') ? get_query_var('cpage') : 1;

	if ( $cpage > 1 ) :
		echo '<script>
				var ajaxurl = \'' . site_url('wp-admin/admin-ajax.php') . '\',
					parent_post_id = ' . get_the_ID() . ',
					cpage = ' . $cpage . '
			 </script>';
		echo '<div class="home_more comments-more">
				  <button class="btn_white">Показать еще комментарии</button>
			  </div>';
	endif;
	?>

<?php endif; ?>