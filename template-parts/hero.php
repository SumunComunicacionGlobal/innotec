<?php
    if (is_single()) {
        $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo'<header id="hero" class="entry-header" style="background-image: url('.$get_image_url.')"><div class="container">';
        post_type_archive_title( '<h1 class="page-title display">', '</h1>' );
    }
    else {
        echo'<header id="hero" class="entry-header"><div class="container">';
        single_post_title( '<h1 class="page-title display">', '</h1>' );
    }
    
?>
    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
