<?php

// let's create the function for the custom type - Casos de éxito
function custom_post_activity() { 
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
            'menu_icon' => 'dashicons-universal-access-alt', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
            //'rewrite'   => array( 'slug' => '%category%', 'innotec' , 'with_front' => true ), /* you can specify its url slug */
            'has_archive' => __('casos-exito', 'innotec'), /* you can rename the slug here */
            //'has_archive' => true,
            'capability_type' => 'page',
            'hierarchical' => false,
            /* the next one is important, it tells what's enabled in the post editor */
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes')
        ) /* end of options */
    ); /* end of register post type */
    
} 

// adding the function to the Wordpress init
add_action( 'init', 'custom_post_activity');
