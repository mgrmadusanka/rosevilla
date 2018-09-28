<?php
/**
* The template for displaying all pages
* 
* @package rosevilla
*/
?>

<?php get_header(); ?>

<div class="mainContainer">
    <h1 class="pageTitle"><?php echo get_the_title(); ?></h1>
    <div class="embedSection">
        <?php
            while(have_posts()): the_post();
                echo get_the_content();
            endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>