<?php
/**
 * Plugin Name:       Scroll To Top
 * Description:       A simple plugin that adds a scroll-to-top button to your website.
 * Version:           1.0.0
 * Author:            Nahid Jubail Medul
 * Author URI:        https://your-website.com
 * Text Domain:       scroll-to-top
 */

// Exit if accessed directly for security.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue scripts and styles for the plugin.
 */
function stt_enqueue_assets() {
    // Enqueue the stylesheet
    wp_enqueue_style(
        'stt-style', // A unique handle for our stylesheet
        plugin_dir_url( __FILE__ ) . 'css/style.css', // Path to the CSS file
        array(), // Dependencies (none in this case)
        '1.0.0' // Version number
    );

    // Enqueue the JavaScript file
    wp_enqueue_script(
        'stt-script', // A unique handle for our script
        plugin_dir_url( __FILE__ ) . 'js/main.js', // Path to the JS file
        array(), // Dependencies (none in this case)
        '1.0.0', // Version number
        true // Load in the footer
    );
}
// Hook our function into the 'wp_enqueue_scripts' action.
add_action( 'wp_enqueue_scripts', 'stt_enqueue_assets' );


/**
 * Add the scroll-to-top button HTML to the footer.
 */
function stt_add_footer_button() {
    // The '&#8593;' is the HTML entity for an upward arrow (↑).
    echo '<button id="scrollToTopBtn" title="Go to top">&#8593;</button>';
}
// Hook our function into the 'wp_footer' action.
add_action( 'wp_footer', 'stt_add_footer_button' );