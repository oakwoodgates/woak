<?php
// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Main WP Bootstrap Comments Walker Class
 *
 * @since 0.1.0
 */
class WP_Bootstrap_Comments_Walker2 extends Walker_Comment {

	/**
	 * Outputs a comment in the HTML5 format.
	 *
	 * @since 3.6.0
	 * @access protected
	 *
	 * @see wp_list_comments()
	 *
	 * @param WP_Comment $comment Comment to display.
	 * @param int        $depth   Depth of the current comment.
	 * @param array      $args    An array of arguments.
	 */
	protected function html5_comment( $comment, $depth, $args ) {
		$tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
		$depth_class = ( $depth > 1 ) ? 'list-unstyled ml-2 ml-md-3' : '';
		?>
		<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( $depth_class, $comment ); ?>>
			<article id="div-comment-<?php comment_ID(); ?>" class="comment-body mb-3">
				<footer class="comment-meta">
					<div class="comment-author vcard">
						<?php 
						$avatar_args = array('class'=>'alignleft');
						if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'], '', false, $avatar_args ); ?>
						<?php
							/* translators: %s: comment author link */
							printf( __( '%s <span class="says">says:</span>' ),
								sprintf( '<b class="fn">%s</b>', get_comment_author_link( $comment ) )
							);
						?>
					</div><!-- .comment-author -->

					<div class="comment-metadata small">
						<a href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>" class="text-secondary">
							<time datetime="<?php comment_time( 'c' ); ?>">
								<?php
									/* translators: 1: comment date, 2: comment time */
									printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
								?>
							</time>
						</a>
						<?php edit_comment_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .comment-metadata -->

					<?php if ( '0' == $comment->comment_approved ) : ?>
					<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
					<?php endif; ?>
				</footer><!-- .comment-meta -->

				<div class="comment-content float-left w-100">
					<?php comment_text(); ?>
				</div><!-- .comment-content -->

				<?php
				comment_reply_link( array_merge( $args, array(
					'add_below' => 'div-comment',
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
					'before'    => '<div class="reply small">',
					'after'     => '</div>'
				) ) );
				?>
			</article><!-- .comment-body -->
		<?php
	}

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 1;
		$markup = 'class="children list-unstyled border-light" style="border-left:3px solid"';
		switch ( $args['style'] ) {
			case 'div':
				break;
			case 'ol':
				$output .= '<ol '.$markup.'>' . "\n";
				break;
			case 'ul':
			default:
				$output .= '<ul '.$markup.'>' . "\n";
				break;
		}
	}
}