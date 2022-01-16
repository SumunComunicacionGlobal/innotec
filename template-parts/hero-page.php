<?php $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );?>

<header id="hero" class="entry-header" style="background-image: url('<?php echo $get_image_url;?>')">
    <div class="container">
        <?php
            
            if (is_post_type_archive()) {
                post_type_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
            }
            elseif (is_archive()) {
                the_archive_title( '<h1 class="page-title-archive display">', '</h1>' );
                the_archive_description( '<div class="archive-description">', '</div>' );
            }
            if (is_home()) {
                single_post_title( '<h1 class="page-title">', '</h1>');
            }
            if (is_page() || is_single()) {
                the_title( '<h1 class="display">', '</h1>' );
                echo the_excerpt();
            }
            
            if ( is_search() ) {
                /* translators: %s: search query. */
                echo '<h1 class="page-title-search display">';
                printf( esc_html__('Buscando resultados por: %s', 'innotec' ), '<span>' . get_search_query() . '</span></h1>' );
            };
        ?>

        
    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
