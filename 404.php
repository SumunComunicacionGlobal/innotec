<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package innotec
 */

get_header();
?>

	<main id="primary" class="site-main">
			<section id="hero" class="page-header">
				<header class="container">
					<h1 class="page-title display"><?php esc_html_e( '¡Ops! No hemos podido encontrar la página.', 'innotec' ); ?></h1>
				</header>
				<div class="error-404 not-found container">
					<div class="page-content">
						<p class="mb-4"><?php esc_html_e( 'Parece que no hemos podido encontrar nada en esa dirección. Tal vez quieres probar una nueva búsqueda.', 'innotec' ); ?></p>

							<?php
								get_search_form();
							?>
							
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</section><!-- #hero -->

	</main><!-- #main -->

<?php
get_footer();
