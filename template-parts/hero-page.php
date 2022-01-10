<?php $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );?>

<header id="hero" class="entry-header" style="background-image: url('<?php echo $get_image_url;?>')">
    <div class="container">
        <?php the_title( '<h1 class="display">', '</h1>' ); ?>
        <?php echo the_excerpt(); ?>
    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
