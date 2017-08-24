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
    <div class="main-content container">
        <main class="content-text text-center">
            <?php the_content(); ?>
        </main>
<!--        content-text -->
    </div>
<!--    main-text -->
        
<?php
endwhile;
endif;

?>
<?php get_footer(); ?>
