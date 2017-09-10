<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/5/2017
 * Time: 5:49 PM
 */
?>
<?php 
/*
  * Template Name: contact
  * */
?>
<?php get_header(); ?>
<?php
if(have_posts()):
    while (have_posts()):the_post();
        ?>
        <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
            <div class="hero-content">
                <div class="hero-text text-center">
                    <h2><?php echo the_title();?></h2>
                </div>
                <!--            hero-text -->
            </div>
            <!--        hero content-->
        </div>
        <!--     hero -->
        <div class="main-content container reservation">
            <main class="content-text text-center">
                <div class="reservation-info">
                <h4>Make a Reservation</h4>
                    <?php get_template_part('template-reservation','form'); ?>
                </div>
<!--                reservation info-->
            </main>
            <!--        content-text -->
        </div>
        <!--    main-text -->

        <?php
    endwhile;
endif;

?>
<?php get_footer(); ?>