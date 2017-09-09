<?php

/*
 * Template Name:pizza
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
        <div class="main-content container">
            <main class="content-text text-center">
                <?php the_content(); ?>
            </main>
            <!--        content-text -->
        </div>
        <?php
    endwhile;
endif;
?>
<div class="container">
    <div class="menu-header">
        <h3>Pizza</h3>
    </div>
    <?php
    $args = array( 'post_type' => 'pizza', 
        'posts_per_page' => 100,
        'orderby'=>'title',
         'order'=>"ASC",
        'category_name'=> 'pizza'
        );
    $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
    <div class="item">

    <a href="<?php  the_permalink(); ?>">
                <?php the_post_thumbnail('boxes','prizza'); ?>
            <h3>
                <?php the_title(); ?> 
                <span class="price"><?php  the_field('the_price');?></span>
            </h3>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
    </a>

    </div>
<!--            item -->
            <?php
        endwhile;
    else:
        ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php
    endif;
    ?>
    <div class="clear"></div>
    
    <div class="menu-header">
        <h3>Other</h3>
    </div>
<!--     menu header-->
    <?php
    $args = array( 'post_type' => 'pizza',
        'posts_per_page' => 100,
        'orderby'=>'title',
        'order'=>"ASC",
        'category_name'=> 'Other'
    );
    $the_query = new WP_Query( $args );
    ?>
    <?php if ( $the_query->have_posts() ) :
        while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <div class="item">

                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('boxes'); ?>
                </a>
                <h3>
                    <?php the_title(); ?>
                    <span class="price"><?php  the_field('the_price');?></span>
                </h3>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        wp_reset_postdata();
        endwhile;

    else:
        ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php
    endif;
    ?>
    <div class="clear"></div>
<!-- clear -->
</div>



<?php get_footer(); ?>
