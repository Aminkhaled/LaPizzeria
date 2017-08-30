<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 8/23/2017
 * Time: 2:14 PM
 */
function lapizzera_style(){
    wp_enqueue_style('googleFont','https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900',array(),1.0);
    wp_enqueue_style('normalize',get_template_directory_uri().'/assets/css/normalize.css');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/custom.css');
    wp_enqueue_style('queries',get_template_directory_uri().'/assets/css/queries.css');
    wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css');
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


/*
* Creating a function to create our CPT
*/

// Set UI labels for Custom Post Type
function custom_post_type(){
    $labels = array(
        'name' => _x("pizza","pizza","lapizzeria"),
        "singular_name"  => _x("pizza","pizza","lapizzeria"),
        "menu_name" => __('Pizza',"lapizzeria"),
        "parent_item_colon" => __("Pizza","lapizzeria"),
        "all_items"=> __("All pizza types","lapizzeria"),
        "view_item"=> __("View Pizza types","lapizzeria"),
        "add_new_item"=> __("Add new type","lapizzeria"),
        "add_new" => __("Add New","lapizzeria"),
        "edit_item"=>__("Edit Pizaa type","lapizzeria"),
        "update_item"=> __("update type","lapizzeria"),
        "search_items"=> __("Search type","lapizzeria"),
        'not_found'=> __('Not Found',"lapizzeria"),
        "not_found_in_trash" => __("Not found in the trash","lapizzeria")
    );
    $args = array(
        'label' => __("pizza","lapizzeria"),
        "description" => __("Movie news and review","lapizzeria"),
        'labels' => $labels,
        'supports'=> array('title','editor','author','thumbnail'),
        'taxonomies' => array('category'),
        /* A hierarchical CPT is like Pages and can have
     * Parent and child items. A non-hierarchical CPT
     * is like Posts.
     */
        'hierarchical'        => false,
        'public'              => true,
        'rewrite' => array('slug' => 'menu'),
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
    );
    // Registering your Custom Post Type

    register_post_type("pizza",$args);
}

add_action('init','custom_post_type',0);

//
//add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
//
//function add_my_post_types_to_query( $query ) {
//    if ( is_home() && $query->is_main_query() )
//        $query->set( 'post_type', array( 'post', 'pizza' ) );
//    return $query;
//}