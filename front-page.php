<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 8/23/2017
 * Time: 1:56 PM
 */
?>
<?php
get_header();
?>
<?php
if(have_posts()):
    while (have_posts()):the_post();
        ?>
        <div class="hero home" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
            <div class="hero-content">
                <div class="hero-text text-center">
                    <h2><?php echo get_bloginfo('description')?></h2>
                    <?php the_content(); ?>
                    <?php 
                    $url = get_page_by_title('About US'); ?>
                    <a href="<?php the_permalink($url->ID) ?>" class="btn btn-primary">Read More</a>
                </div>
                <!--            hero-text -->
            </div>
            <!--        hero content-->
        </div>
        <!--     hero -->
        <div class="front-content ">
            <main class="content-text text-center">
                <h3>Specialists</h3>
                <?php
                 $args = array(
                         'posts_per_page' => 3,
                          'post_type' => 'pizza',
                          'category_name'=> 'pizza',
                           'orderby' =>'rand'
                 );
                 $query = new wp_Query($args);
                 
                   if($query->have_posts()):
                       while ($query->have_posts()):$query->the_post();
                   ?>
    <div class="span-1">
        <?php the_post_thumbnail('front') ?>
        <div class="front-title">
            <h3><?php the_title() ?></h3>
            <p class="front-price"><?php  the_field('the_price');?></p>
            <a href="<?php the_permalink() ?>" class="btn btn-danger">Read more</a>
        </div>
<!--        front title -->
    </div>
    <!--                           span - 1 -->

                <?php
                   endwhile;
                   wp_reset_postdata();
                       endif;
                ?>
                <div class="clear"></div>

            </main>
            <!--        content-text -->
        </div>
        <!--    main-text -->

        <?php
    endwhile;
endif;
?>
    <section class="ingredients">
            <?php
            if(have_posts()):
                while (have_posts()):the_post();
                    ?>
                    <div class="col-2-2">
                        <h3><?php the_field('text'); ?></h3>
                        <?php the_field('content'); ?>
                        <?php
                        $url = get_page_by_title('About US'); ?>
                        <a href="<?php the_permalink($url->ID) ?>" class="btn btn-danger">Read More</a>
                    </div>
                    <!--            col -->
                    <div class="col-2-2">
                        <img src="<?php the_field('image') ?>" alt="image">
                    </div>
                    <!--            col -->
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
            <div class="clear"></div>
        <!--    container -->
    </section>
<!--ingredients-->

<section id="front-gall">
    <div class="container">
        <div class="text-center">
            <h2 >Gallery</h2>
            <?php
            $url = get_page_by_title('Gallery');
           echo  get_post_gallery($url->ID)
            ?>
        </div>
<!--        text-center -->
    </div>
</section>

<?php get_footer(); ?>