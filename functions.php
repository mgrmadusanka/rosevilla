<?php
/**
* @package rosevilla
*/

/* =============== include all required files =============== */

//enqueue all stylesheets and javascripts files
require get_template_directory() . '/inc/enqueue.php';

//activate theme supports
require get_template_directory() . '/inc/theme-support.php';

//create custom post type
require get_template_directory() . '/inc/custom-post-type.php';