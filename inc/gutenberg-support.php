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
		'color' => '#DFD5E6',
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