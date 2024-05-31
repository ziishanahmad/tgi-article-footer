<?php
/**
 * Plugin Name: TGI Article Footer
 * Description: Adds a custom footer to all articles.
 * Version: 1.0.0
 * Author: Zeeshan Ahmad
 * Website: Tabsgi.com
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Adds a custom footer to articles
 *
 * @param string $content The post content.
 * @return string The content with the custom footer.
 */
function tgi_add_custom_footer( $content ) {
    if ( is_single() && is_main_query() ) {
        $footer = '<div class="tgi-article-footer">';
        $footer .= '<p>Thank you for reading! Visit our website for more articles.</p>';
        $footer .= '</div>';
        $content .= $footer;
    }
    return $content;
}
add_filter( 'the_content', 'tgi_add_custom_footer' );

/**
 * Enqueue plugin styles
 */
function tgi_enqueue_styles() {
    wp_enqueue_style( 'tgi-article-footer', plugin_dir_url( __FILE__ ) . 'css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'tgi_enqueue_styles' );
