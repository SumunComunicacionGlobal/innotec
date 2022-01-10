<?php

// let's create the function for the custom type - Casos de éxito
function custom_post_activity() { 
    // creating (registering) the custom type 
    register_post_type( 'casos-exito', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
        // let's now add all the options for this post type
        array('labels' => array(
            'name' => __('Casos de éxito', 'innotec'), /* This is the Title of the Group */
            'singular_name' => __('Caso éxito', 'innotec'), /* This is the individual type */
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

// now let's add custom Product categories 
register_taxonomy( 'category-activities', 
array('activities'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
array('hierarchical' => true,     /* if this is true, it acts like categories */             
    'labels' => array(
        'name' => __( 'Categorías Actividades', 'innotec' ), /* name of the custom taxonomy */
        'singular_name' => __( 'Categoría actividades', 'innotec' ), /* single taxonomy name */
        'search_items' =>  __( 'Buscar actividades', 'innotec' ), /* search title for taxomony */
        'all_items' => __( 'Todas las categorías', 'innotec' ), /* all title for taxonomies */
        'parent_item' => __( 'Parent category', 'innotec' ), /* parent title for taxonomy */
        'parent_item_colon' => __( 'Parent category:', 'innotec' ), /* parent taxonomy title */
        'edit_item' => __( 'Edit Category', 'innotec' ), /* edit custom taxonomy title */
        'update_item' => __( 'Update Category', 'innotec' ), /* update title for taxonomy */
        'add_new_item' => __( 'Add new Category', 'innotec' ), /* add new title for taxonomy */
        'new_item_name' => __( 'New Category', 'innotec' ) /* name title for taxonomy */
    ),
    'show_admin_column' => true,
    'show_in_rest' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite'   => array( 'slug' => 'actividades', 'innotec' , 'with_front' => false ), /* you can specify its url slug */
    'has_archive' => true, /* you can rename the slug here */
    )
);
