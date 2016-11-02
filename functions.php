<?php
/**
 * BoneJoint functions and definitions
 */

 function bonejoint_scripts() {
	wp_enqueue_script( 'jquery3', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), '3.1.1', true );
    wp_enqueue_script( 'scroll', get_stylesheet_directory_uri() . '/js/scroll.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'bonejoint_scripts' );

?>
