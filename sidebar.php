<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/3/2017
 * Time: 2:46 PM
 */
?>
<div class="span span-1">
    <?php
    if(is_active_sidebar('blog_sidebar')):
    ?>
        <div id="side-widget">
            <?php
            dynamic_sidebar('blog_sidebar');
            ?>
        </div>
<!--        side-widget -->
    <?php
    endif;
    ?>
</div>
<!-- span-1 -->