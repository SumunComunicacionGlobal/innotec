<?php

// let's create the function for the custom type - Casos de éxito
function custom_post_cases() { 
    // creating (registering) the custom type 
    register_post_type( 'casos-exito', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Casos de éxito', 'innotec'), /* This is the Title of the Group */
            'singular_name' => __('Casos de éxito', 'innotec'), /* This is the individual type */
            'all_items' => __('Todos los casos', 'innotec'), /* the all items menu item */
            'add_new' => __('Añadir nuevo', 'innotec'), /* The add new menu item */
            'add_new_item' => __('Añadir nuevo caso', 'innotec'), /* Add New Display Title */
            'edit' => __( 'Editar', 'innotec' ), /* Edit Dialog */
            'edit_item' => __('Editar caso', 'innotec'), /* Edit Display Title */
            'new_item' => __('Nueva caso', 'innotec'), /* New Display Title */
            'view_item' => __('Ver caso', 'innotec'), /* View Display Title */
            'search_items' => __('Buscar caso', 'innotec'), /* Search Custom Type Title */ 
            'not_found' =>  __('Nada encontrado en base de datos.', 'innotec'), /* This displays if there are no entries yet */ 
            'not_found_in_trash' => __('Nada econtrado en papelera', 'innotec'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */ 
            'menu_icon' => 'dashicons-portfolio', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'has_archive' => true, /* you can rename the slug here */
            'rewrite'   => array( 'slug' => __('casos-exito', 'innotec') , 'with_front' => false ), /* you can specify its url slug */
            'capability_type' => 'page',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */
    
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_cases');



// let's create the function for the custom type - Casos de éxito
function custom_post_guides() { 
    // creating (registering) the custom type 
    register_post_type( 'guias', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Guías eficiencia energética', 'innotec'), /* This is the Title of the Group */
            'singular_name' => __('Guías', 'innotec'), /* This is the individual type */
            'all_items' => __('Todas las guías', 'innotec'), /* the all items menu item */
            'add_new' => __('Añadir nueva', 'innotec'), /* The add new menu item */
            'add_new_item' => __('Añadir nueva guía', 'innotec'), /* Add New Display Title */
            'edit' => __( 'Editar', 'innotec' ), /* Edit Dialog */
            'edit_item' => __('Editar guía', 'innotec'), /* Edit Display Title */
            'new_item' => __('Nueva guía', 'innotec'), /* New Display Title */
            'view_item' => __('Ver guía', 'innotec'), /* View Display Title */
            'search_items' => __('Buscar guía', 'innotec'), /* Search Custom Type Title */ 
            'not_found' =>  __('Nada encontrado en base de datos.', 'innotec'), /* This displays if there are no entries yet */ 
            'not_found_in_trash' => __('Nada econtrado en papelera', 'innotec'), /* This displays if there is nothing in the trash */
            'parent_item_colon' => ''
            ), /* end of arrays */
            'public' => true,
            'show_in_rest' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => false,
            'show_ui' => true,
            'query_var' => true,
            'menu_position' => 10, /* this is what order you want it to appear in on the left hand side menu */ 
            'menu_icon' => 'dashicons-lightbulb', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            'rewrite'   => array( 'slug' => __('guias-eficiencia-energetica', 'innotec') , 'with_front' => false ), /* you can specify its url slug */
            'has_archive' => true, /* you can rename the slug here */
            'capability_type' => 'page',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */
    
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_guides');

