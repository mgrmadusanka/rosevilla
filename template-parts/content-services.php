<?php
/**
* The template for displaying service custom post type
* 
* @package rosevilla
*/
?>

<div class="service">
    <div class="serviceImage" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>

    <div class="serviceContent">
        <h3 class="serviceTitle"><?php echo get_the_title(); ?></h3>

        <p class="serviceDescription"><?php echo get_the_content(); ?></p>
    </div>
</div>