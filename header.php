<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fasterandworse
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="shortcut icon" href="<?php echo get_theme_file_uri( 'favicon.ico' ) ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_theme_file_uri( 'apple-touch-icon.png' ) ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_theme_file_uri( 'favicon-32x32.png' ) ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_theme_file_uri( 'favicon-16x16.png' ) ?>">
<?php if (is_singular() && has_excerpt()) : ?>
<meta name="description" content="<?php echo esc_attr(get_the_excerpt()) ?>">
<?php else : ?> 
<meta name="description" content="<?php bloginfo( 'description' )?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div>
	<a href="#primary" class="hide-visual"><?php esc_html_e( 'Skip to content', 'faw' ); ?></a>

	<header class="global-header">
		<?php
		the_custom_logo();
		?>
		<div class="global-brand">
			<div class="global-logo" aria-hidden="true">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-hidden="true" tabindex="-1">
					<div class="global-logo-bar-container">
						<div class="global-logo-bar global-logo-bar-1">
						</div>
					</div>
					<div class="global-logo-bar-container global-logo-bar-container-2">
						<div class="global-logo-bar global-logo-bar-2">
						</div>
					</div>
					<div class="global-logo-bar-container global-logo-bar-container-3">
						<div class="global-logo-bar global-logo-bar-3">
						</div>
					</div>
				</a>
			</div>
			<?php
				$descClass = 'global-description';
				$hard_code_description = true;
				if ( is_front_page() && is_home() ) :
			?>
			<h1 class="hide-visual"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
				else :
					$descClass = $descClass . " hide-visual";
			?>
			<p class="hide-visual"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
				endif;
				$faw_description = get_bloginfo( 'description', 'display' );
				if ( $faw_description || is_customize_preview() ) :
			?>

			<?php
				if (!$hard_code_description) :
			?>
				<p class="<?php echo $descClass; ?>"><?php echo $faw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php
				else :
			?>
			<p class="<?php echo $descClass; ?>">Design &amp; technology research, ideas, &amp; opinions <span class="global-description-byline">by Stephen Farrugia</span></p>
			<?php endif; ?>
			
			<?php endif; ?>
		</div>

		<nav>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	 => 'global-menu',
					'container'		 => 'ul'
				)
			);
			?>
		</nav>
	</header>
