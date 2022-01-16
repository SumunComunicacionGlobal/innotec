<?php
/**
 * The template for displaying all single casos exito
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package innotec
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php

		get_template_part( 'template-parts/hero', get_post_type() );

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		
        
        // End of the loop
        $posts = get_field('related_casos');

        if( $posts ): ?>
            <section id="related-casos">
                <div class="container-fluid mb-4">
                    <div class="row">
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post);
                                echo '<div class="col-xs-12 col-md">';
                                get_template_part( 'template-parts/card', get_post_type() );
                                echo '</div>';
                        
                            endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>		
                    </div>    
                </div>	
            </section>
        <?php endif; ?>


	</main><!-- #main -->

<?php

get_footer();
