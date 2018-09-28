<?php
/**
* The template for displaying gallery post format
* 
* @package rosevilla
*/
?>

<div class="galleryContainer">
    <?php 
        $attachments = get_posts(array(
            'post_type'         => 'attachment',
            'posts_per_page'    => 8,
            'post_parent'       => get_the_ID()
        ));

        foreach($attachments as $attachment):
            $imgUrl = wp_get_attachment_url($attachment -> ID); ?>
            
            <div class="image" style="background-image:url('<?php echo $imgUrl; ?>');"></div>

        <?php endforeach;

        wp_reset_postdata();
    ?>
</div>