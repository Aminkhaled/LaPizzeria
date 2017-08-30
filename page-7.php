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
        <div class="container">
            <div class=" box-information clezzar">
                <div class="box">
                    <?php
                    $image_id = get_field('image-1');

                    $image_src = wp_get_attachment_image_src($image_id,'boxes');

                    ?>
                    <img src="<?php echo $image_src[0];?>" alt="image" class="box-img">
                    <div class="box-content">
                        <?php echo the_field('description-1'); ?>
                    </div>
                    <!--        box-content -->
                </div>
                <!--     box -->

                <div class="box">

                    <?php
                    $image_id = get_field('image-2');

                    $image_src = wp_get_attachment_image_src($image_id,'boxes');

                    ?>
                    <img src="<?php echo $image_src[0];?>" alt="image" class="box-img">
                    <div class="box-content">
                        <?php echo the_field('description-2'); ?>
                    </div>
                    <!--        box-content -->
                </div>
                <!--     box -->

                <div class="box">
                    <?php
                    $image_id = get_field('image-3');

                    $image_src = wp_get_attachment_image_src($image_id,'boxes');

                    ?>
                    <img src="<?php echo $image_src[0];?>" alt="image" class="box-img">
                    <div class="box-content">
                        <?php echo the_field('description-3'); ?>
                    </div>
                    <!--        box-content -->
                </div>
                <!--     box -->
                <div class="clear"></div>
            </div>
            <!--        box-information --> 
        </div>
        

        
        <?php
    endwhile;
endif;

?>
<?php get_footer(); ?>
