<?php

function innotec_scripts() {
	wp_enqueue_style( 'innotec-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'jquery' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'innotec_scripts' );

/** 
* Gutenberg scripts and styles
 */
function innotec_gutenberg_scripts() {

	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/assets/js/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/assets/js/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'innotec_gutenberg_scripts' );

function innotec_footer_inline_scripts() {
	?>

	<script>	
	  jQuery('.abrir-chat, a[href="#abrir-chat"]').click(function (e) {
	    e.preventDefault();
	    jQuery('#lbContactHeaderFloat').trigger('click');
	  });
	</script>

	<?php
}
add_action( 'wp_footer', 'innotec_footer_inline_scripts', 10, 1 );