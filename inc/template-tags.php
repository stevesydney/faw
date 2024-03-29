<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package fasterandworse
 */

if ( ! function_exists( 'faw_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function faw_posted_on() {
		$time_string = '<time class="article-published" datetime="%1$s" itemprop="dateCreated pubdate datePublished">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="article-published" datetime="%1$s" itemprop="dateCreated pubdate datePublished">%2$s</time><time class="article-modified hide-visual" datetime="%3$s" itemprop="dateModified">%4$s</time>';
		}

		$time_string = sprintf(
			$time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		// $posted_on = sprintf(
		// 	/* translators: %s: post date. */
		// 	esc_html_x( 'Posted on %s', 'post date', 'faw' ),
		// 	'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		// );

		//$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
		$posted_on = $time_string;

		echo '<span class="article-date">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'faw_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function faw_posted_by() {
		// $byline = sprintf(
		// 	/* translators: %s: post author. */
		// 	esc_html_x( 'by %s', 'post author', 'faw' ),
		// 	'<span class="article-author-name" itemprop="author"><a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
		// );

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( 'by %s', 'post author', 'faw' ),
			'<span class="article-author-name" itemprop="author">' . esc_html( get_the_author() ) . '</span>'
		);

		$author_class = '';
		if ( is_home() ) :
			$author_class = ' hide-visual';
		endif;

		echo '<span class="article-author' . $author_class . '"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	}
endif;

if ( ! function_exists( 'faw_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function faw_entry_footer() {
		// Hide category and tag text for pages.
		// if ( 'post' === get_post_type() ) {
		// 	/* translators: used between list items, there is a space after the comma */
		// 	$categories_list = get_the_category_list( esc_html__( '', 'faw' ) );
		// 	if ( $categories_list ) {
		// 		/* translators: 1: list of categories. */
		// 		printf( '<div class="article-category-links">' . esc_html__( 'Posted in %1$s', 'faw' ) . '</div>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		// 	}

		// 	/* translators: used between list items, there is a space after the comma */
		// 	$tags_list = get_the_tag_list( '<ul><li>', '</li><li>', '</li></ul>' ); //esc_html_x( '', '', 'faw' ) );
		// 	if ( $tags_list ) {
		// 		/* translators: 1: list of tags. */
		// 		printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'faw' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		// 	}
		// }

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
			echo '<span class="article-comments-link">';
			comments_popup_link(
				sprintf(
					wp_kses(
						/* translators: %s: post title */
						__( 'Leave a Comment<span class="hide-visual"> on %s</span>', 'faw' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
			echo '</span>';
		}

		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Edit <span class="hide-visual">%s</span>', 'faw' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			),
			'<span class="edit-link">',
			'</span>'
		);
	}
endif;

if ( ! function_exists( 'faw_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function faw_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
					the_post_thumbnail(
						'post-thumbnail',
						array(
							'alt' => the_title_attribute(
								array(
									'echo' => false,
								)
							),
						)
					);
				?>
			</a>

			<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
