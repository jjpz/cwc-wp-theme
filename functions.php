<?php

if (!function_exists('cwc_setup')) {
    function cwc_setup() {
        load_theme_textdomain('cwc', get_template_directory() . '/languages');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus(
            array(
                'menu-1' => esc_html__('Primary', 'cwc')
            )
        );

        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
    add_action('after_setup_theme', 'cwc_setup');
}

// Enqueue stylesheets and scripts
if (!function_exists('cwc_scripts')) {
    function cwc_scripts() {
        wp_enqueue_style('cwc-style', get_stylesheet_uri(), array(), filemtime(get_theme_file_path('style.css')), 'all');
        wp_enqueue_script('cwc-script', get_template_directory_uri() . '/js/script.js', array(), filemtime(get_theme_file_path('/js/script.js')), true);
        wp_localize_script(
            'cwc-script',
            'globalObject',
            array('homeUrl' => esc_url(home_url()))
        );
    }
    add_action('wp_enqueue_scripts', 'cwc_scripts');
}

/**
 * Redirect to the homepage all users trying to access feeds.
 */
function disable_feeds() {
    wp_redirect(home_url());
    die;
}

// Disable global RSS, RDF & Atom feeds.
add_action('do_feed',      'disable_feeds', -1);
add_action('do_feed_rdf',  'disable_feeds', -1);
add_action('do_feed_rss',  'disable_feeds', -1);
add_action('do_feed_rss2', 'disable_feeds', -1);
add_action('do_feed_atom', 'disable_feeds', -1);

// Disable comment feeds.
add_action('do_feed_rss2_comments', 'disable_feeds', -1);
add_action('do_feed_atom_comments', 'disable_feeds', -1);

// Prevent feed links from being inserted in the <head> of the page.
add_action('feed_links_show_posts_feed',    '__return_false', -1);
add_action('feed_links_show_comments_feed', '__return_false', -1);
remove_action('wp_head', 'feed_links',       2);
remove_action('wp_head', 'feed_links_extra', 3);

// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// Remove emoji link and styles
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
// Remove WP JSON link
remove_action('wp_head', 'rest_output_link_wp_head');
// Remove RSD link (Really Simple Discovery - the discover mechanism used by XML-RPC clients)
remove_action('wp_head', 'rsd_link');
// Remove Windows Live Writer XML link
remove_action('wp_head', 'wlwmanifest_link');
// Remove WP version number
remove_action('wp_head', 'wp_generator');

// Remove admin bar when logged in
remove_action('wp_footer', 'wp_admin_bar_render', 1000);

// Remove embeds script
if (!function_exists('deregister_scripts')) {
    function deregister_scripts() {
        wp_dequeue_script('wp-embed');
    }
    add_action('wp_footer', 'deregister_scripts');
}

require 'includes/admin.php';
require 'includes/carbon-fields.php';
require 'includes/custom-post-types.php';

function nav_menu_desc($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace('</a>', '</a><p class="menu-item-description">' . $item->description . '</p>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'nav_menu_desc', 10, 4);