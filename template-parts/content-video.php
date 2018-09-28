<?php
/**
* The template for displaying video post format
* 
* @package rosevilla
*/
?>

<div class="videoContainer">
    <?php 
        $content = do_shortcode(apply_filters('the_content', get_the_content()));
        $embed = get_media_embedded_in_content($content, array('video', 'iframe'));

        echo $embed[0];
    ?>
</div>