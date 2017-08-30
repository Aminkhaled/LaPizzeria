<footer>
    <div class="footer-pages">
        <?php
        $args_2 = array(
                'theme_location' => 'footer-menu',
                 'container' => 'nav',
                  'container_class'=>'footer-info',
                  'after' =>'<span class="separator"> | </span>'
        );
        wp_nav_menu($args_2);
        ?>
        <div class="footer-text text-center">
            <p>8179 Bay Avenue  Mountain View, CA 94043</p>
            <p>Phone Number: +1-92-456-7890</p>
        </div>
    </div>
</footer>
</body>
</html>
<?php wp_footer(); ?>
