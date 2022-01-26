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
        <h2 class="text-h4"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
        <div class="wp-block-button is-style-with-icon mt-1">
            <div class="wp-block-button__link has-dark-color has-text-color" id="id-<?php the_id(); ?>"><?php esc_html_e( 'Seguir leyendo', 'innotec' ); ?></div>
        </div>  
    </div> 
</div>