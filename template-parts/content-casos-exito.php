<?php
/**
 * Template part for displaying casos de éxito
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package innotec
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		
        if ( is_singular() ) : ?>

            <div class="entry-content mt-6">
                
                <div class="container mb-4">
                    <div class="row">
                        <div class="col-xs-12 col-md-10">
                            <?php the_title( '<h1 class="entry-title has-secondary-color">', '</h1>' );?>
                    </div>
                </div>    
                    <div class="row">
                        <div class="col-xs-12 col-md-5">
                            <h2><?php the_field ('title_casos');?></h2>
                        </div>
                        <div class="col-xs-12 col-md-6 col-md-offset-1">
                            <p class="card-excerpt"><?php echo get_the_excerpt();?></p>
                        </div>
                    </div>     
                </div>

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
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                <?php innotec_entry_footer(); ?>
            </footer><!-- .entry-footer -->
		
        <?php else :
        
            get_template_part( 'template-parts/card', get_post_type() );
		
        endif;?>
		
</article><!-- #post-<?php the_ID(); ?> -->
    