<?php
function get_items($post_type) {
    $args = array(
        'post_type' => $post_type,
        'post_status' => 'publish',
        'numberposts' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $posts = get_posts($args);
    return $posts;
}

function getTemplatePage($template){
    $page = array();
    $pages = get_pages(array(
        'meta_key' => '_wp_page_template',
        'meta_value' => $template
    ));
    if (isset($pages[0])) {
        $page['url'] = get_page_link($pages[0]->ID);
        $page['title'] = get_the_title($pages[0]->ID);
    }
    return $page;
}