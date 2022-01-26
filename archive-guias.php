<?php
/**
 * The template for displaying guias eficiencia energetica archive 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innotec
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
        
        get_template_part( 'template-parts/hero', get_post_type() );
        
		echo '<section class="container-fluid grid-2-col mt-2 mb-2">';
        if ( have_posts() ) : 
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                
				get_template_part( 'template-parts/content', get_post_type() );
                

			endwhile;

		else :
           
			get_template_part( 'template-parts/content', 'none' );
            

		endif;

        echo '</section>';

		the_posts_pagination();
		
		?>

	</main><!-- #main -->

<?php
get_footer();
