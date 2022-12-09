<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fasterandworse
 */

get_header();
?>

<div class="global-main-container">

	<main id="primary" class="global-main">

		<section>
			<header>
				<h1><?php esc_html_e( 'That page doesn&rsquo;t exist. It&rsquo;s probably your fault.', 'faw' ); ?></h1>
			</header>
		</section>

	</main>

<?php
get_sidebar();
?>
</div>
<?php
get_footer();
