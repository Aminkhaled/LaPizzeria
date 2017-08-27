<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 8/23/2017
 * Time: 2:14 PM
 */
function lapizzera_style(){
    wp_enqueue_style('googleFont','https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900',array(),1.0);
    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css',array(),null);
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/custom.css',array(),null);
    wp_enqueue_style('queries',get_template_directory_uri().'/assets/css/queries.css',array(),null);
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),4.7);
    wp_enqueue_script('plugin_js',get_template_directory_uri().'/assets/js/plugin.js',array('jquery'),null,true);
}
//font-awesome.min.css
add_action('wp_enqueue_scripts','lapizzera_style');

//Add Menu

function lapizzeria_menu(){
    add_theme_support('menus');
    register_nav_menus(array(
        'header-menu'=> __("Header Menu",'lapizzeria'),
        'social-menu'=> __('Social Menu','lapizzeria'),
        'footer-menu'=> __('Footer Menu','lapizzeria')
    ));
}

add_action('init','lapizzeria_menu');


add_theme_support('post-thumbnails');

add_image_size('boxes',437,291,true);