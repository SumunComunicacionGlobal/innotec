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

        <?php 
        $link_1 = get_field('hero_link');
        if( $link_1 ): 
            $link_url = $link_1['url'];
            $link_title = $link_1['title'];
            $link_target = $link_1['target'] ? $link_1['target'] : '_self';
            ?>
            <div class="icon is-style-with-icon mt-2"><a class="wp-block-button__link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></div>
        <?php endif; ?>

    </div>   
</header><!-- #hero -->

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
