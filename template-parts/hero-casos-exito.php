<header id="hero" class="entry-header">
    <div class="container">
        <?php
            
            if (is_post_type_archive()) {
                post_type_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
            }
            elseif (is_archive()) {
                the_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            };
        ?>

        
    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
