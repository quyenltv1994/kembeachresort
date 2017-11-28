<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/**
 * Enqueue scripts and styles.
 **/
function athena_scripts() {
	//css
	wp_enqueue_style( 'athena-style', get_template_directory_uri() . '/dist/assets/min/style.min.css', array(), null );

	//js
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'athena-script', get_template_directory_uri() . '/dist/assets/min/script.min.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'athena_scripts' );

require_once( 'inc/core-functions.php' );
require_once( 'inc/acf.php' );