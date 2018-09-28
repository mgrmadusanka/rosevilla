<?php
/**
* The template for displaying home page
* 
* @package rosevilla
*/
?>

<?php get_header(); ?>

<header class="pageHeader" style="background-image: url('<?php header_image(); ?>');">
    <h1 class="siteTitle">
        <?php bloginfo('name'); ?>
    </h1>

    <h2 class="siteDescription">
        <?php bloginfo('description'); ?>
    </h2>
</header>

<div class="mainContainer">
    <div class="embedSection">
        <?php
            while(have_posts()): the_post();
                echo get_the_content();
            endwhile;
        ?>
    </div>

    <section id="services">
        <div class="container">
            <h2 class="sectionTitle">Services</h2>
            
            <div class="servicesContainer">
                <?php
                    $servicesLoop = new WP_Query(array(
                        'post_type' => 'rosevilla-services',
                        'posts_per_page' => 4
                    ));

                    if($servicesLoop -> have_posts()):
                        while($servicesLoop -> have_posts()): $servicesLoop -> the_post();
                            get_template_part('template-parts/content', 'services');
                        endwhile;
                    endif;

                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section id="gallery">
        <div class="container">
            <h2 class="sectionTitle">Gallery</h2>
            
            <?php
                $galleryLoop = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                    'category_name' => 'gallery'
                ));

                if($galleryLoop -> have_posts()):
                    while($galleryLoop -> have_posts()): $galleryLoop -> the_post();
                        get_template_part('template-parts/content', 'gallery');
                    endwhile;
                endif;

                wp_reset_postdata();
            ?>
        </div>
    </section>

    <!-- video section -->
    <?php $videoLoop = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'category_name' => 'video'
    ));

    if($videoLoop -> have_posts()):
        while($videoLoop -> have_posts()): $videoLoop -> the_post(); ?>
            <section id="video" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')">
                <div class="container">
                    <?php get_template_part('template-parts/content', 'video'); ?>
                </div>
            </section>
        <?php endwhile;
    endif; 
    
    wp_reset_postdata(); ?>
    <!-- end video section -->

    <section id="contacts">
        <div class="container">
            <h2 class="sectionTitle">Contacts</h2>
            
            <div class="contactsContainer">
                <?php
                    $contactsLoop = new WP_Query(array(
                        'post_type' => 'rosevilla-contacts',
                        'posts_per_page' => 3
                    ));

                    if($contactsLoop -> have_posts()):
                        while($contactsLoop -> have_posts()): $contactsLoop -> the_post();
                            get_template_part('template-parts/content', 'contacts');
                        endwhile;
                    endif;

                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section id="location">
        <div id="googleMaps"></div>
    </section>
</div> <!-- .mainContainer -->

<?php get_footer(); ?>