<?php
/**
* The header template file
*
* @package rosevilla
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title(' | '); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri().'/favicon.png'; ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<div id="top" style="display: none;"></div>

<div class="headerNavContainer">
    <div class="headerSiteBranding">
        <?php the_custom_logo(); ?>
    </div>

    <button type="button" class="btnOpenHeaderMobileNav" id="btnOpenHeaderMobileNav">
        <i class="fas fa-bars"></i>
    </button>

    <nav class="headerNav">
        <button type="button" class="btnCloseHeaderMobileNav" id="btnCloseHeaderMobileNav">
            <i class="fas fa-times"></i>
        </button>

        <?php 
            wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'         => false,
                'menu_class'        => 'headerNavLinks'
            ));
        ?>
    </nav>
</div>