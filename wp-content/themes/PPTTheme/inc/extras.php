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

// Change this part if you want to change the contact details across all the sites. (not including the widgets)
function return_phone_number() {
    echo '(416) 961-0113';
}
add_action( 'phone_number', 'return_phone_number' );

function return_fax_number() {
    echo '(416) 961-2512';
}
add_action( 'fax_number', 'return_fax_number' );

function return_email_address() {
    echo 'ppt@ppt.on.ca';
}
add_action( 'email_address', 'return_email_address' );
