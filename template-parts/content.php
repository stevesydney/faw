<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fasterandworse
 */

?>

<?php
	$post_class = 'article-container';
	if ( is_home() ) :
		$post_class = 'article-container-home';
	endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
	<header class="article-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="article-title">', '</h1>' );
		else :
			the_title( '<h2 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="article-meta">
				<?php
				faw_posted_on();
				if ( is_singular() ) :
					faw_posted_by();
				endif;
				?>
			</div>
		<?php endif; ?>
	</header>

	<?php //faw_post_thumbnail(); ?>

	<div class="article-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'faw' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div>' . esc_html__( 'Pages:', 'faw' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<footer class="article-footer">
		<?php faw_entry_footer(); ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
