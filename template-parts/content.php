<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innotec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		
        if ( is_singular() ) : ?>

            <div class="entry-single mt-6">
				
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'innotec' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        wp_kses_post( get_the_title() )
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'innotec' ),
                        'after'  => '</div>',
                    )
                );
                ?>
 
                <div class="entry-meta mb-4">    
                    <?php
                    if ( 'post' === get_post_type() ) :
                        ?>
                            <?php
                            innotec_entry_footer();
                            ?>
                    <?php endif; ?>
                </div><!-- .entry-meta -->


            </div><!-- .entry-content -->
		
        <?php else :
        
            get_template_part( 'template-parts/card', get_post_type() );
		
        endif;?>
		
</article><!-- #post-<?php the_ID(); ?> -->
