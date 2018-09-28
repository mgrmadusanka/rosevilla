<?php
/**
* The template for displaying contacts custom post type
* 
* @package rosevilla
*/
?>

<div class="contact">
    <div class="contactImage">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="contact image" />
    </div>

    <div class="contactContent">
        <h3 class="contactTitle"><?php echo get_the_title(); ?></h3>

        <p class="contactDescription"><?php echo get_the_content(); ?></p>
    </div>
</div>