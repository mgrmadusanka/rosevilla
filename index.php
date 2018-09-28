<?php
/**
* The main template file
* 
* @package rosevilla
*/
?>


<?php get_header(); ?>

<div class="mainContainer">

    <?php 
        if(have_posts()):
            while(have_posts()): the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;
        endif;
    ?>

</div>

<?php get_footer(); ?>