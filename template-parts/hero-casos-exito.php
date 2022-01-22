<?php
    if (is_post_type_archive()) {
        echo'<header id="hero" class="entry-header"><div class="container">';
        post_type_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
    }
    elseif (is_single()) {
        $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        echo'<header id="hero" class="entry-header" style="background-image: url('.$get_image_url.')"><div class="container">';
        post_type_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
    }
?>
    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
