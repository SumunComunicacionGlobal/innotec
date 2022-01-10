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
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'innotec' ),
			'id'            => 'footer-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'innotec' ),
			'before_widget' => '<div id="%1$s" class="col-md col-xs-12 %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
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