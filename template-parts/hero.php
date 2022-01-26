<?php if (is_archive()) { ?>
    <header id="hero" class="entry-header-archive">
        <div class="container">
            <?php the_archive_title( '<h1 class="page-title-archive display">', '</h1>' );?>
            <?php the_archive_description( '<div class="archive-description">', '</div>' );?>
        </div>   
    </header><!-- #hero -->
<?php }; ?>

<?php if (is_home()) { ?>
    <header id="hero" class="entry-header-index">
        <div class="container">
            <?php single_post_title( '<h1 class="page-title display">', '</h1>');?>
        </div>   
    </header><!-- #hero -->
<?php }; ?>

<?php if (is_single()) { ?>
    <header id="hero" class="entry-header-single">
        <div class="container">
            <div class="card-date is-style-with-arrow"><?php innotec_posted_on(); ?></div>
            <?php the_title( '<h1 class="single-title display">', '</h1>');?>
            <?php
                if ( has_excerpt() ) :
                    the_excerpt();
                endif;
            ?>
        </div>   
    </header><!-- #hero -->
<?php }; ?>

<?php if (is_search()) { ?>
    <header id="hero" class="entry-header-search">
        <div class="container">
            <?php
            echo '<h1 class="page-title-search display">';
            printf( esc_html__('Buscando resultados por: %s', 'innotec' ), '<span>' . get_search_query() . '</span></h1>' );?>
        </div>   
    </header><!-- #hero -->
<?php }; ?>

<div id="breadcrumbs">
    <div class="container-fluid">
        <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
    </div>
</div><!-- #breadcrumbs -->


