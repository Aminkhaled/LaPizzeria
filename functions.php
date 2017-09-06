<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 8/23/2017
 * Time: 2:14 PM
 */
require get_template_directory() . '/core/init.php';
require get_template_directory()."/core/reservations.php";
require get_template_directory()."/core/options.php";


function lapizzera_style(){
    wp_enqueue_style('googleFont','https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900',array(),1.0);
    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css');
    wp_enqueue_style('fluid',get_template_directory_uri().'/assets/css/lightbox.min.css');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/custom.css','','1.0');
    wp_enqueue_style('queries',get_template_directory_uri().'/assets/css/queries.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');

    wp_enqueue_script('fluid_js',get_template_directory_uri().'/assets/js/lightbox.min.js',array('jquery'),'2.0.5',true);

    wp_enqueue_script('plugin_js',get_template_directory_uri().'/assets/js/plugin.js',array('jquery'),null,true);
}
//font-awesome.min.css
add_action('wp_enqueue_scripts','lapizzera_style');

//Add Menu    fluidbox.min http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js

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

add_image_size('special',637,300,true);

update_option('thumbnail_size_w',253);
update_option('thumbnail_size_h',164);
/*
* Creating a function to create our CPT
*/

// Set UI labels for Custom Post Type
function lapizzeria_specialties() {
    $labels = array(
        'name'               => _x( 'Pizza', 'lapizzeria' ),
        'singular_name'      => _x( 'Pizza', 'post type singular name', 'lapizzeria' ),
        'menu_name'          => _x( 'Pizza', 'admin menu', 'lapizzeria' ),
        'name_admin_bar'     => _x( 'Pizza', 'add new on admin bar', 'lapizzeria' ),
        'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
        'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
        'new_item'           => __( 'New Pizzas', 'lapizzeria' ),
        'edit_item'          => __( 'Edit Pizzas', 'lapizzeria' ),
        'view_item'          => __( 'View Pizzas', 'lapizzeria' ),
        'all_items'          => __( 'All Pizzas', 'lapizzeria' ),
        'search_items'       => __( 'Search Pizzas', 'lapizzeria' ),
        'parent_item_colon'  => __( 'Parent Pizzas:', 'lapizzeria' ),
        'not_found'          => __( 'No Pizzas found.', 'lapizzeria' ),
        'not_found_in_trash' => __( 'No Pizzas found in Trash.', 'lapizzeria' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'lapizzeria' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'pizza', $args );
    flush_rewrite_rules();

}

add_action( 'init', 'lapizzeria_specialties');


function wp_add_widgets(){
    register_sidebar(array(
        'name' => "Blog Sidebar",
        'id'=>'blog_sidebar',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=> '</h3>'
    ));
}

add_action('init','wp_add_widgets');
