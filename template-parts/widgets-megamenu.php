<?php

$query_args = array(
	'post_type'			=> 'menu-widget',
	'posts_per_page'	=> -1,
);

$q = new WP_Query( $query_args );

if ( $q->have_posts() ) {

	while ( $q->have_posts() ) { $q->the_post(); ?>

		<div id="menu-widget-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); // Solo pintamos el contenido. El título no nos interesa. ?>

		</div>

	<?php }

}

wp_reset_postdata();