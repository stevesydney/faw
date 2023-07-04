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
	<meta name="description" content="<?php bloginfo( 'description' )?>">
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
			<div class="global-logo" aria-hidden="true" focusable="false">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" aria-hidden="true" focusable="false" tabindex="-1">
					<div class="global-logo-bar-container">
						<div class="global-logo-bar global-logo-bar-1">
							<div class="global-logo-letter">
								<svg viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2">
									<path d="M4341.34 755.086v42.336h84.96v38.016h-84.96v83.232h-41.47v-201.6h136.22v38.016h-94.75Z" transform="matrix(.88143 0 0 .88144 -3708.47 -579.244)"/>
								</svg>
							</div>
						</div>
					</div>
					<div class="global-logo-bar-container global-logo-bar-container-2">
						<div class="global-logo-bar global-logo-bar-2">
							<div class="global-logo-letter">
								<svg viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2">
									<path d="M4720.07 757.682c0-6.336.81-12.096 2.45-17.28 1.63-5.184 3.88-9.936 6.76-14.256s6.2-8.304 9.94-11.952c3.74-3.648 7.73-7.008 11.95-10.08-5.37-6.144-9.89-12.816-13.53-20.016-3.65-7.2-5.48-15.696-5.48-25.488 0-4.992 1.06-10.368 3.17-16.128s5.43-11.088 9.94-15.984c4.51-4.896 10.32-8.976 17.42-12.24 7.11-3.264 15.65-4.896 25.63-4.896 9.22 0 17.19 1.392 23.91 4.176 6.72 2.784 12.33 6.528 16.85 11.232 4.51 4.704 7.87 10.128 10.08 16.272 2.2 6.144 3.31 12.48 3.31 19.008 0 6.144-1.06 11.664-3.17 16.56-2.11 4.896-4.9 9.408-8.35 13.536-3.46 4.128-7.39 7.92-11.81 11.376-4.42 3.456-8.93 6.624-13.54 9.504l32.55 34.56c1.92-2.688 3.65-6.048 5.18-10.08 1.54-4.032 2.31-8.736 2.31-14.112v-22.752h38.59v22.752c0 10.368-1.92 20.016-5.76 28.944s-8.55 17.04-14.11 24.336l35.71 39.168h-46.95l-11.8-12.672c-6.53 4.8-14.07 8.544-22.61 11.232-8.55 2.688-18.1 4.032-28.66 4.032-10.37 0-19.82-1.584-28.37-4.752-8.54-3.168-15.93-7.44-22.17-12.816-6.24-5.376-11.04-11.616-14.4-18.72-3.36-7.104-5.04-14.592-5.04-22.464Zm69.98 23.904c5.19 0 9.89-.672 14.11-2.016 4.23-1.344 8.07-3.264 11.52-5.76l-40.03-43.2c-4.8 3.648-8.78 7.632-11.95 11.952s-4.75 9.36-4.75 15.12c0 3.264.81 6.336 2.45 9.216 1.63 2.88 3.88 5.424 6.76 7.632 2.88 2.208 6.2 3.936 9.94 5.184 3.74 1.248 7.73 1.872 11.95 1.872Zm-19.01-122.976c0 4.8 1.16 9.312 3.46 13.536s5.09 8.16 8.35 11.808c5.57-3.648 10.47-7.344 14.69-11.088 4.22-3.744 6.34-7.92 6.34-12.528 0-3.84-1.25-7.488-3.75-10.944-2.49-3.456-6.43-5.184-11.81-5.184-5.95 0-10.32 1.632-13.1 4.896-2.78 3.264-4.18 6.432-4.18 9.504Z" transform="matrix(.88143 0 0 .88144 -4098.14 -486.722)"/>
								</svg>
							</div>
						</div>
					</div>
					<div class="global-logo-bar-container global-logo-bar-container-3">
						<div class="global-logo-bar global-logo-bar-3">
							<div class="global-logo-letter">
								<svg viewBox="0 0 284 284" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2">
									<path d="m5224.74 672.304 46.95 124.128 39.74-124.128h43.2l-67.1 201.6h-28.8l-48.1-125.28-48.1 125.28h-28.8l-67.1-201.6h43.2l40.32 124.128 46.37-124.128h28.22Z" transform="matrix(.88143 0 0 .88144 -4451.21 -539.792)"/>
								</svg>
							</div>
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
