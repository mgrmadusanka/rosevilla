<?php
/**
* create custom post type
*
* @package rosevilla
*/

//service custom post type
function rosevilla_service_custom_post_type() {
    $labels = array(
        'name'                  => 'Services',
        'singular_name'         => 'Service',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Service',
        'edit_item'             => 'Edit Service',
        'new_item'              => 'New Service',
        'view_item'             => 'View Service',
        'view_items'            => 'View Services',
        'search_items'          => 'Search Services',
        'not_found'             => 'No services found',
        'not_found_in_trash'    => 'No services found in Trash',
        'all_items'             => 'All Services',
        'insert_into_item'      => 'Insert into service',
        'uploaded_to_this_item '=> 'Uploaded to this service',
        'featured_image'        => 'Service image',
        'set_featured_image'    => 'Set service image',
        'remove_featured_image' => 'Remove service image',
        'use_featured_image'    => 'Use as service image',
        'menu_name'             => 'Services',
        'filter_items_list'     => 'Filter services list',
        'items_list_navigation' => 'Services list navigation',
        'items_list'            => 'Services list'
    );

    $args = array(
        'labels'                => $labels,
        'desciption'            => 'This post type contain all services of the rosevilla',
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'menu_position'         => 26,
        'menu_icon'             => 'dashicons-store',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'query_var'             => true,
        'rewrite'               => true,
    );

    register_post_type('rosevilla-services', $args);
}
add_action('init', 'rosevilla_service_custom_post_type');

//manage all columns in all services table
function rosevilla_manage_all_services_columns($columns) {
    $newColumns = array();
    $newColumns['title'] = 'Service Name';
    $newColumns['image'] = 'Service Image';
    $newColumns['description'] = 'Service Description';
    $newColumns['date'] = 'Date';

    return $newColumns;
}
function rosevilla_services_custom_column($column, $post_id) {
    switch($column):
        case 'image':
            the_post_thumbnail('thumbnail');
        break;

        case 'description':
            echo get_the_excerpt();
        break;
    endswitch;
}
add_filter('manage_rosevilla-services_posts_columns', 'rosevilla_manage_all_services_columns');
add_action('manage_rosevilla-services_posts_custom_column', 'rosevilla_services_custom_column', 10, 2);

//contacts custom post type
function rosevilla_contacts_custom_post_type() {
    $labels = array(
        'name'                  => 'Contacts',
        'singular_name'         => 'Contact',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Contact',
        'edit_item'             => 'Edit Contact',
        'new_item'              => 'New Contact',
        'view_item'             => 'View Contact',
        'view_items'            => 'View Contacts',
        'search_items'          => 'Search Contacts',
        'not_found'             => 'No contacts found',
        'not_found_in_trash'    => 'No contacts found in Trash',
        'all_items'             => 'All Contacts',
        'insert_into_item'      => 'Insert into contact',
        'uploaded_to_this_item '=> 'Uploaded to this contact',
        'featured_image'        => 'Contact image',
        'set_featured_image'    => 'Set contact image',
        'remove_featured_image' => 'Remove contact image',
        'use_featured_image'    => 'Use as contact image',
        'menu_name'             => 'Contacts',
        'filter_items_list'     => 'Filter contacts list',
        'items_list_navigation' => 'Contacts list navigation',
        'items_list'            => 'Contacts list'
    );

    $args = array(
        'labels'                => $labels,
        'desciption'            => 'This post type contain all contacts of the rosevilla',
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_nav_menus'     => true,
        'menu_position'         => 26,
        'menu_icon'             => 'dashicons-phone',
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'revisions'),
        'query_var'             => true,
        'rewrite'               => true,
    );

    register_post_type('rosevilla-contacts', $args);
}
add_action('init', 'rosevilla_contacts_custom_post_type');

//manage all columns in all contacts table
function rosevilla_manage_all_contacts_columns($columns) {
    $newColumns = array();
    $newColumns['title'] = 'Contact Method';
    $newColumns['image'] = 'Contact Image';
    $newColumns['details'] = 'Contact Details';
    $newColumns['date'] = 'Date';

    return $newColumns;
}
function rosevilla_contacts_custom_column($column, $post_id) {
    switch($column):
        case 'image':
            the_post_thumbnail('thumbnail');
        break;

        case 'details':
            echo get_the_excerpt();
        break;
    endswitch;
}
add_filter('manage_rosevilla-contacts_posts_columns', 'rosevilla_manage_all_contacts_columns');
add_action('manage_rosevilla-contacts_posts_custom_column', 'rosevilla_contacts_custom_column', 10, 2);