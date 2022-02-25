<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innotec
 */

get_header();
get_template_part( 'template-parts/hero', get_post_type() );
?>

<div class="container">

	<div class="layout-sidebar">

		<main id="primary" class="site-main">

			<?php

			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );


				// If comments are open or we have at least one comment, load up the comment template.
				//if ( comments_open() || get_comments_number() ) :
				//	comments_template();
				//endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- layout-sidebar -->

</div>

<?php 
	get_template_part( 'template-parts/related', get_post_type());

	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior', 'innotec' ) . '</span> <p class="nav-title">%title</p>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Próximo', 'innotec' ) . '</span> <p class="nav-title">%title</p>',
		)
	);

?>

<?php
get_footer();
