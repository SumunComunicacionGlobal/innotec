<?php
/**
 * innotec functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package innotec
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function innotec_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on innotec, use a find and replace
		* to change 'innotec' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'innotec', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	add_image_size( 'icon-card', 80, 80, true);
	add_image_size( 'card-blog', 360, 360, array( 'left', 'top' ));

	// Change image size on wp-query gutenberg block
	add_filter( 'render_block_core/post-featured-image', 'test_render_post_featured_image_block', 10, 2 );
		function test_render_post_featured_image_block( $block_content, $block ) {

			$image_size = 'card-blog'; // Cambia por el tamaño que quieras mostrar

			$find = get_the_post_thumbnail_url( null, 'full' );
			$replace = get_the_post_thumbnail_url( null, $image_size );

			$block_content = str_replace( $find, $replace, $block_content );

			return $block_content;
			
		}

	add_filter( 'nav_menu_link_attributes', 'innotec_menu_atts', 10, 4 );
	function innotec_menu_atts( $atts, $item, $args, $depth ) {

		if ( $args->theme_location != 'mega-menu' || $depth > 0 ) return $atts;

		$menu_widget_id = get_field( 'menu_widget_id', $item->ID );

		if ( $menu_widget_id ) {
			$atts['data-widget-id'] = 'menu-widget-' . $menu_widget_id;
		}

		return $atts;
		
	}

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'mega-menu' => esc_html__( 'Mega Menu', 'innotec' ),
			'mega-menu-secondary' => esc_html__( 'Mega Menu Secondary', 'innotec' ),
			'main-menu' => esc_html__( 'Primary', 'innotec' ),
			'top-menu' => esc_html__( 'Top Bar', 'innotec' ),
			'footer-menu' => esc_html__( 'Footer legal', 'innotec' ),
		)
	);

	// Add post format to posts
	add_theme_support( 'post-formats', array( 'video', 'quote' ) );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'innotec_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'innotec_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function innotec_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'innotec_content_width', 640 );
}
add_action( 'after_setup_theme', 'innotec_content_width', 0 );

// Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';


/**
 * CPT
 */
require get_template_directory() . '/inc/custom-post-type.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/inc/widgets-areas.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Gutenberg editor and support.
 */
require get_template_directory() . '/inc/gutenberg-support.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}