<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

//change wp logo on wp-admin login

function inhab_login_url ( $url ) {
	return get_bloginfo ( 'url' );
}
add_filter( 'login_headerurl', 'inhab_login_url' );

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
			#login h1 a { 
			background:url(content-folder/images/logos/inhabitent-logo-text-dark.svg) !important; 
			height: 120px !important; width: 410px !important; margin-left: -40px;}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function inhab_logo_url_title (){
	return 'inhabitent';
}
add_filter('login_headertitle', 'inhab_logo_url_title');