<div class="card--blog">  
    <div class="card-date is-style-with-arrow">
        <?php innotec_posted_on(); ?>
    </div>
    <div class="card-img mb-1">
        <?php the_post_thumbnail('card-blog'); ?>
    </div>
    <div class="card-content">
        <span class="uppercase">
            <?php $terms = get_the_terms($post->ID, 'category');
                if($terms != null) {
                    $output = array();
                    foreach($terms as $term) {
                        $output[] = $term->name;
                        unset($term);
                    }
                    echo implode(", ", $output);
                };
            ?>
        </span>
        <h2 class="text-h5"><?php the_title(); ?></h2>
        <div class="wp-block-button is-style-with-icon mt-1">
            <a class="wp-block-button__link has-dark-color has-text-color" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php esc_html_e( 'Seguir leyendo', 'innotec' ); ?></a>
        </div>  
    </div> 
</div>