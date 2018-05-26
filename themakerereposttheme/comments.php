<?php
/*
 * Makerere Post Comment Template
 * Displays the comments on the Makerere Post Posts.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
if ( post_password_required() )
	return;
?>

<div id="comments-box" class="<?php if ( !comments_open() && !get_comments_number() ) { ?> comments-area-disabled<?php } ?>">
<?php if ( have_comments() ) : ?>
	<h2 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				if ( 1 === $comments_number ) {
					/* translators: %s: post title */
					printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'makererepost' ), get_the_title() );
				} else {
					printf(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s thought on &ldquo;%2$s&rdquo;',
							'%1$s thoughts on &ldquo;%2$s&rdquo;',
							$comments_number,
							'comments title',
							'twentysixteen'
						),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
				}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>
<?php 
   $placeholder_name = __( 'Your name' , 'makererepost' );
   $placeholder_comment = __( 'Thoughts...' , 'makererepost' );
   $aria_req = ( $req ? " aria-required='true'" : '' );
   $field_req = ( $req ? " *" : '' );
   $required = 'required="required"';
   $comment_args = array(
	'title_reply' =>__( 'Leave a Comment' , 'makererepost' ),
	
	'fields'      => apply_filters( 'comment_form_default_fields', array(
		'author' => '<p class="comment-form-author">' . '<label for="author">' . __( '', 'makererepost' ) . 
					'</label> ' . 
					'<input id="author" name="author" type="text" placeholder="' . $placeholder_name . $field_req . '" value=""  size="30"' . $required . $aria_req . ' />
					</p>',   
		'email'  => '<p class="comment-form-email">' .
					'<label for="email">' . __( '', 'makererepost' ) . '</label> ' .
					'<input id="email" name="email" type="text" placeholder="E-mail' . $field_req .'" value="" size="30"' . $required . $aria_req . ' />'.
					'</p>'
					)),
		'comment_field' => '<p>' .'<label for="comment">' . __( '', 'makererepost' ) . '</label>' .
							'<textarea id="comment" name="comment" cols="50" rows="3" aria-required="true"' . $required . ' placeholder="' . $placeholder_comment . '"></textarea>' .
							'</p>',);
comment_form($comment_args); ?>

</div><!-- #comments .comments-area -->