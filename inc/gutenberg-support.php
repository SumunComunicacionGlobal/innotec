<?php

// Adds support for editor color palette.
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Primary', 'innotec' ),
		'slug'  => 'primary',
		'color'	=> '#244985',
	),
	array(
		'name'  => __( 'Secondary', 'innotec' ),
		'slug'  => 'secondary',
		'color' => '#E45510',
	),
	array(
		'name'  => __( 'Ligth', 'innotec' ),
		'slug'  => 'ligth',
		'color' => '#F4F5F7',
       ),
    array(
		'name'  => __( 'Dark', 'innotec' ),
		'slug'  => 'dark',
		'color' => '#101820',
       ),
	array(
		'name'  => __( 'White', 'innotec' ),
		'slug'  => 'white',
		'color' => '#FFFFFF',
    ),   
) );

// Disables custom colors in block color palette.
add_theme_support( 'disable-custom-colors' );
add_theme_support( 'disable-custom-gradients' );

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );

// Add support for full and wide align images.
add_theme_support( 'align-wide' );

// Add support for editor styles.
add_theme_support( 'editor-styles' );

// Enqueue editor styles.
add_editor_style( 'style-editor.css' );


// Add custom block Card ACF
function kd_acf_init() {
	if(function_exists('acf_register_block')) {
		acf_register_block(array(
			'name' => 'card',
			'title' => __('Tarjeta Card'),
			'description' => __('Añade un card a tu entrada', 'innotec'),
			'render_callback' => 'acf_block_callback',
			'category' => 'theme',
			'icon' => 'text-page',
			'mode' => 'auto',
			'keywords' => array('card', 'entradas', 'paginas', 'tarjeta', 'innotec'),
		));
	}
}
add_action('acf/init', 'kd_acf_init');

function acf_block_callback($block) {
	// convert name ("acf/programs") into path friendly slug ("programs")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php" );
	}
}

// Add custom block accordion ACF
function accordion_acf_init() {
	if(function_exists('acf_register_block')) {
		acf_register_block(array(
			'name' => 'accordion',
			'title' => __('Accordion'),
			'description' => __('Desplegables verticales', 'innotec'),
			'render_callback' => 'acf_block_callback',
			'category' => 'theme',
			'icon' => 'list-view',
			'mode' => 'auto',
			'keywords' => array('accordion', 'tabs', 'faqs', 'innotec'),
		));
	}
}
add_action('acf/init', 'accordion_acf_init');

function accordion_acf_block_callback($block) {
	// convert name ("acf/accordion") into path friendly slug ("accordion")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists(STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php") ) {
		include( STYLESHEETPATH . "/template-parts/blocks/block-{$slug}.php" );
	}
}
