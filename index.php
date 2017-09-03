<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 8/21/2017
 * Time: 7:54 PM
 */
?>
<?php get_header(); ?>
<?php
$blog_post = get_option('page_for_posts');
$img = get_post_thumbnail_id($blog_post);
$image = wp_get_attachment_image_src($img,'full');
        ?>
        <div class="hero" style="background-image: url(<?php echo $image[0]; ?>);">
            <div class="hero-content">
                <div class="hero-text text-center">
                    <h2><?php echo get_the_title($blog_post);?></h2>
                </div>
                <!--            hero-text -->
            </div>
            <!--        hero content-->
        </div>
        <!--     hero -->
        <div class="main-content container">
            <div class="span span-2">

            <?php
    while (have_posts()):the_post();
    ?>
            <article class="entry-post">
                <a href="<?php  the_permalink() ?>">
                    <?php the_post_thumbnail('special') ?>
                </a>
                <!--         post image   -->
                <div class="entry-title">
                    <div class="time">
                        <span><?php the_time('d') ?></span>
                        <span><?php the_time('M') ?></span>
                    </div>
                    <!--                time -->
                    <div class="title">
                        <a href="<?php  the_permalink() ?>">

                            <h3><?php the_title() ?></h3>
                        </a>
                    </div>
                    <!--                title-->
                    <div class="entry-author">
                        <h4><span class="fa fa-user"></span><?php the_author() ?></h4>
                    </div>
                    <!--                the author -->
                </div>
                <!--            entry title-->
                <div class="entry-content">
                    <?php the_excerpt() ?>
                </div>
                <!--            entry-content -->
                <a href="<?php the_permalink() ?>">
                    <button class="btn btn-danger">Read more</button>
                </a>
                <div class="clear"></div>
            </article>
<!--        span-2 -->
<!--         entry posts -->
    <?php
    endwhile;

?>
            </div>

            <?php get_sidebar() ?>
            <!--        content-text -->
            <div class="clear"></div>
        </div>
        <!--    main-text -->


<?php get_footer(); ?>

