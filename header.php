<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innotec
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'innotec' ); ?></a>
	
	<div id="top-bar" class="container-fluid">
		<div class="row middle-xs center-xs start-md between-md">
			<?php
				$innotec_description = get_bloginfo( 'description', 'display' );
				if ( $innotec_description || is_customize_preview() ) :
			?>
				<div class="col-xs-12 col-md-4"><span class="site-description"><?php echo $innotec_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></span></div>
			<?php endif; ?>
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'top-menu',
						'menu_id'        => 'top-nav',
					)
				);
			?>
		</div>
	</div>

	<?php get_template_part( 'template-parts/megamenu' ); ?>

	<header id="masthead" class="site-header">
		<div class="site-mega-menu">
			<button class="toogle-mega-menu" aria-controls="mega-menu" aria-expanded="false"><span class="screen-reader-text"><?php esc_html_e( 'Menu', 'innotec' ); ?></span></button>
		</div><!-- .site-branding -->

		<div class="site-branding">
			<?php if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				echo '<a href="'.get_home_url().'" class="custom-logo-link" rel="home" aria-current="page">';
					echo '<img width="166" height="31" src="'.get_stylesheet_directory_uri().'/assets/logo-innotec.svg" alt="'.get_bloginfo( 'name' ).' '.get_bloginfo( 'description' ).'">';
				echo '</a>';
			} ?>
		</div><!-- .site-branding -->
		
		<div class="site-btn--contact"><a href="/contacto/"><span class="screen-reader-text"><?php esc_html_e( 'Contacto', 'innotec' ); ?></span></a></div>

		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
