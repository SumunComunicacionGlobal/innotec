<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package innotec
 */

?>

	<footer id="colophon">
		<div class="site-footer">
			<div class="container">
				<div class="row">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets')) : endif; ?>
				</div>
			</div>
		</div><!-- .site-footer -->
		
		<div class="site-info mt-1">
			<div class="container">
				<div class="row middle-xs">
					<div class="col-xs-12 col-md-4">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-logos')) : endif; ?>
					</div>
					<div class="col-xs-12 col-md-8 legal end-xs">
						<?php
							printf( esc_html__( 'INNOTECGROUP S.L. 2022', 'innotec') );
							
							wp_nav_menu(
								array(
									'theme_location' => 'footer-menu',
									'menu_id'        => 'footer-legal',
								)
							);
						?>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
