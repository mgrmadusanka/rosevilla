<?php
/**
* The archive template file
*
* @package rosevilla
*/
?>

<?php get_header(); ?>

<div class="mainContainer">
    <div class="container">
        <?php 
            if(have_posts()):
                while(have_posts()): the_post();
                    get_template_part('template-parts/content', get_post_format());
                endwhile;
            endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>