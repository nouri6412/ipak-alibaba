<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Ipak_Alibaba
 * @since 1.0.0
 */

add_action( 'wp_enqueue_scripts', 'ipak_add_my_script' );
function ipak_add_my_script() {
    wp_enqueue_script(
        'ipak-script', // name your script so that you can attach other scripts and de-register, etc.
        get_template_directory_uri() . '/assets/js/menu.js', // this is the location of your script file
        array('jquery') // this array lists the scripts upon which your script depends
    );
}

require get_template_directory() . '/inc/menu.php';
// require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';



