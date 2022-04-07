<?php
/**
 * The template for display the Homepage | Frontpage
 * 
 * Template Name: Landing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

	<header id="masthead" class="site-header container">

		<div class="site-branding">
			<?php if ( has_custom_logo() ) {
				the_custom_logo();
			} else {
				echo '<a href="'.get_home_url().'" class="custom-logo-link" rel="home" aria-current="page">';
					echo '<img width="166" height="31" src="'.get_stylesheet_directory_uri().'/assets/logo-innotec.svg" alt="'.get_bloginfo( 'name' ).' '.get_bloginfo( 'description' ).'">';
				echo '</a>';
			} ?>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->


	<main id="primary" class="site-main">

		<?php

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
