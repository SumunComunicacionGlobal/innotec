<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function innotec_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'innotec' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<section id="%1$s" class="mb-2 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="widget-title text-h4">',
			'after_title'   => '</p>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Social and Contact in Mega Menú', 'innotec' ),
			'id'            => 'mega-menu-social',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<section id="%1$s" class="mb-2 widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<p class="widget-title text-h4">',
			'after_title'   => '</p>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'innotec' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<div id="%1$s" class="col-md col-xs-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="text-h5 widget-title">',
			'after_title'   => '</h3>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Logos', 'innotec' ),
			'id'            => 'footer-logos',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<div class="row"><div id="%1$s" class="col-xs %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
}
add_action( 'widgets_init', 'innotec_widgets_init' );