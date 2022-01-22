<div class="card--guides">  
    <div class="card-img">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="card-content">
        <h3><a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <div class="icon is-style-with-icon"><span class="wp-block-button__link"></span></div>
        <p class="card-excerpt"><?php echo get_the_excerpt();?></p>
    </div> 
</div>