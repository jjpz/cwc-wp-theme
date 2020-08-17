<?php
// Admin login logo
add_action('login_enqueue_scripts', function () {
    ?><style type="text/css">
    #login h1 a,
    .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri();
        ?>/images/logos/cwc-site-header-logo.svg);
        background-size: contain;
        background-position: center top;
        background-repeat: no-repeat;
        width: 100px;
        margin: 0 auto 25px;
    }
</style><?php
});

// Admin login logo URL
add_filter('login_headerurl', function () {
    return home_url();
});

// Admin login logo text
add_filter('login_headertext', function () {
    return get_bloginfo('name');
});

// Admin CSS + JS
add_action('admin_enqueue_scripts', 'cwc_admin_scripts');
function cwc_admin_scripts() {
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin.css', array(), '1.0.0');
}

// Remove item from admin bar
function my_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'my_admin_bar_render');

// Remove admin menu items
function seagrove_admin_remove_menu_items() {
    remove_menu_page('edit-comments.php'); // Comments
}
add_action('admin_menu', 'seagrove_admin_remove_menu_items');

// Remove admin submenu items
function cwc_remove_admin_submenu_items() {
    global $submenu;
    unset($submenu['themes.php'][6]); // Customize
    remove_submenu_page('themes.php', 'customize.php?return=%2Fcwc%2Fwp-admin%2F');
}
add_action('admin_menu', 'cwc_remove_admin_submenu_items');

// Reorder admin menu
function reorder_admin_menu( $__return_true ) {
    return array(
        'index.php', // Dashboard
        'crb_carbon_fields_container_theme_options.php',
        'separator1', // --Space--
        'edit.php', // Posts
        'edit.php?post_type=feature',
        'edit.php?post_type=service',
        'edit.php?post_type=member',
        'edit.php?post_type=insurance',
        'edit.php?post_type=affiliation',
        'edit.php?post_type=page', // Pages
        'upload.php', // Media
        'separator2', // --Space--
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        //'edit-comments.php', // Comments
    );
}
add_filter( 'custom_menu_order', 'reorder_admin_menu' );
add_filter( 'menu_order', 'reorder_admin_menu' );