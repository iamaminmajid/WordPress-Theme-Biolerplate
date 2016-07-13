<?php //Theme Finctions

//Theme Setup --------------------------------------------------------------
if ( ! function_exists( 'THEMENAME_setup' ) ) :
function THEMENAME_setup() {
	load_theme_textdomain( 'THEMENAME' );
    
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 250, 100, true );
    
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'THEMENAME' ),
		'footer'  => __( 'Footer Menu', 'THEMENAME' )
	) );
}
add_action( 'after_setup_theme', 'THEMENAME_setup' );
endif;

//Google Fonts ---------------------------------------------------------------
require_once (get_template_directory() . '/import/google-fonts.php');

//JavaScript & Style Files ---------------------------------------------------
require_once (get_template_directory() . '/import/scripts.php');

//Bootstrap NavWalker --------------------------------------------------------
require_once (get_template_directory() . '/wp_bootstrap_navwalker.php');