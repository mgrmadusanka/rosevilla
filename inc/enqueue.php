<?php
/**
* enqueue all stylesheets and javascripts files
*
* @package rosevilla
*/

function rosevilla_enqueue_scripts() {
    //stylesheets
    //rosevilla theme custom stylesheet
    wp_enqueue_style(
        'rosevilla',
        get_template_directory_uri() . '/css/rosevilla.css',
        array(),
        '1.0.0',
        'all'
    );

    //javascripts
    //remove default wordpress jquery version and add new version
    wp_deregister_script('jquery');
    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery-3.3.1.min.js',
        false,
        '3.3.1',
        true
    );
    wp_enqueue_script('jquery');

    //rosevilla theme custom javascript
    wp_enqueue_script(
        'rosevilla',
        get_template_directory_uri() . '/js/rosevilla.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'rosevilla_enqueue_scripts');