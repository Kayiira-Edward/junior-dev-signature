<?php
/**
 * Plugin Name: Junior Dev Signature
 * Plugin URI: https://github.com/kayiira-edward/junior-dev-signature
 * Description: A simple plugin that adds a custom footer message and appends a developer signature to post titles.
 * Version: 1.0
 * Author: Kayiira Edward
 * Author URI: https://github.com/kayiira-edward 
 * License: GPL2
 */

// Prevent direct access to the file
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
// Task two : adding a custom footer message
function jds_add_footer_message() {//cb function
    if ( !is_admin() ) {//only to show on the front end
    echo '<p>Built by a Junior Developer &copy; 2025</p>';
    }
}
add_action( 'wp_footer', 'jds_add_footer_message' );

//Task 3 : modifying post title
function jds_modify_title($title){//cb function
    if(is_admin()){
        return $title;//if admin return the original title
    }//else add the signature
    return $title . '  | Junior Dev Project';
}
add_filter('the_title', 'jds_modify_title');
