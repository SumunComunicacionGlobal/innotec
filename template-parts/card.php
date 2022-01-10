<div class="card">  
    <div class="card-img">
        <?php innotec_post_thumbnail('icon-card'); ?>
    </div>

    <div class="card-content">
        <h3><a id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo get_the_excerpt();?></p>
        <svg class="icon" width="34" height="34" viewBox="0 0 34 34">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-circle.svg" />
        </svg>
    </div> 
</div>