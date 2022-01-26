<?php if ( has_post_thumbnail() ) : 
    $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
    $image_background = 'background-image: url('.$get_image_url.')';
endif; ?>

<header id="hero" class="entry-header" style="<?php echo $image_background ;?>">
    <div class="container">
        <?php
            the_title( '<h1 class="display">', '</h1>' );
            if ( has_excerpt() ) :
                the_excerpt();
             endif;
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
