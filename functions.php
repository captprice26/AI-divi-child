<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  

// Enable automatic updates for Core
//add_filter( 'auto_update_core', '__return_true' );
// Enable automatic updates for plugins
//add_filter('auto_update_plugin', '__return_true');
// Enable automatic updates for themes
//add_filter('auto_update_theme', '__return_true');

require_once get_stylesheet_directory() . '/includes/plugin-list.php';

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// custom admin login logo
/*function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_stylesheet_directory_uri().'/images/logo.png) !important;
	width: 257px !important;
    height: 41px !important;
    background-size: 100% !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');*/

//
// Your code goes below
//
