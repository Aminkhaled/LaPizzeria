<?php get_header(); ?>
<div class="hero hero-background">
    <div class="hero-content">
        <div class="hero-text text-center">
            <h1><?php
                if(is_category()){
                    single_cat_title();
                }
                ?></h1>
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

