<?php
/**
* activate theme support options
*
* @package rosevilla
*/

//Sets up theme defaults and registers support for various WordPress features.
function rosevilla_theme_setup() {
    //activate custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    //activate custom header
    add_theme_support('custom-header');

    //activate navigation menus
    register_nav_menu('primary', 'Header Navigation Menu');
    register_nav_menu('secondary', 'Footer Navigation Menu');

    //activate post thumbnail
    add_theme_support('post-thumbnails');

    //activate post formats
    add_theme_support('post-formats', array('gallery', 'video'));

}
add_action('after_setup_theme', 'rosevilla_theme_setup');

//activate widget area
function rosevilla_widget_setup() {
    register_sidebar(array(
        'name'          => 'Footer',
        'id'            => 'rosevilla-footer',
        'description'   => 'Standard Footer',
        'class'         => 'custom',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget_title">',
        'after_title'   => '</h3>'
    ));
}
add_action('widgets_init', 'rosevilla_widget_setup');