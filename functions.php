<?php
/**
 * storefront child theme functions.php file.
 *
 * @package storefront-child-starter
 */

// THIS FUNCTION LOADS THE PARENT STYLESHEET
add_action( 'wp_enqueue_scripts', 'enqueue_parent_style' );
function enqueue_parent_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Add any PHP code below here */
