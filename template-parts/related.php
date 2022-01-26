<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) ); ?>
    
    <?php if( $related ): ?>
        <div class="container mt-4 pb-6">
            <p class="center-xs text-h2"><?php esc_html_e( 'No te puedes perder...', 'innotec' ); ?></p>
            <div class="grid-4-col">	
                <?php
                    if( $related ) foreach( $related as $post ) {
                        setup_postdata($post);
                        get_template_part( 'template-parts/card', get_post_format() );  
                    }
                    wp_reset_postdata();
                ?>
            </div>    
        </div>
        <hr>
    <?php endif ;?>