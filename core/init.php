<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/5/2017
 * Time: 8:28 PM
 */
?>
<?php

function data_lapizzeria(){
    global $wpdb;
    
    global $lapizzeria_db_version;
    
    $lapizzeria_db_version = "1.0";
    
    $table = $wpdb->prefix . 'reservations';
    
    $charest = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE $table(
             id mediumint(9) NOT NULL AUTO_INCREMENT,
             name VARCHAR(50) NOT NULL,
             date datetime NOT NULL ,
             email VARCHAR(50) DEFAULT '' NOT NULL,
             phone VARCHAR(20) NOT NULL ,
             message longtext NOT NULL ,
             PRIMARY KEY (id)
) $charest;";
    require_once (ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_setup_theme','data_lapizzeria');