<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fasterandworse
 */

?>

	<footer>
		<div>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'faw' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'faw' ), 'WordPress' );
				?>
			</a>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
