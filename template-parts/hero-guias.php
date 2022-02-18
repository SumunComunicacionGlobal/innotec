<?php if (is_post_type_archive()) { ?>
    <header id="hero" class="entry-header-archive">
        <div class="container">
            <?php post_type_archive_title( '<h1 class="page-title-archive display">', '</h1>' );?>
        </div>   
    </header><!-- #hero -->
<?php }; ?>

<?php if (is_single()) { 
    if ( has_post_thumbnail() ) : 
        $get_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        $image_background = 'background-image: url('.$get_image_url.')';
    endif; ?>

    <header id="hero" class="entry-header-single" style="<?php echo $image_background ;?>">
        <div class="container">
            <?php the_title( '<h1 class="page-title-archive display">', '</h1>' );?>
        </div>  
    </header><!-- #hero -->
<?php }; ?>

<div id="breadcrumbs">
    <div class="container">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->
