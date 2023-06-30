<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fasterandworse
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="article-comments">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="article-comments-title hide-visual">
			<?php
			$faw_comment_count = get_comments_number();
			if ( '1' === $faw_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One comment on &ldquo;%1$s&rdquo;', 'faw' ),
					wp_kses_post( get_the_title() )
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', $faw_comment_count, 'comments title', 'faw' ) ),
					number_format_i18n( $faw_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					wp_kses_post( get_the_title() )
				);
			}
			?>
		</h2>

		<?php the_comments_navigation(); ?>

		<ol class="article-comments-list">
			<?php
			wp_list_comments(
				array(
					'style'      	=> 'ol',
					'short_ping' 	=> true,
					'avatar_size'	=> 0
				)
			);
			?>
		</ol>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			/*
			?>
			<p><?php esc_html_e( 'Comments are closed.', 'faw' ); ?></p>
			<?php
			*/
		endif;

	endif; // Check for have_comments().

	comment_form();
	?>

</div>
