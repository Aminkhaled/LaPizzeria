<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/6/2017
 * Time: 3:40 PM
 */
?>
<?php
function reservation_options(){
    add_menu_page('LaPizzera Options','LaPizzera Options','administrator',
        'LaPizzera_Options','reservation_adjustments','','20');
    
    add_submenu_page('LaPizzera_Options','Reservations','Reservations',
        'administrator','lapizzeria_reservations','lapizzeria_reservations');
}

add_action('admin_menu','reservation_options');

function reservation_adjustments(){
//    rest of code here
}

function lapizzeria_reservations(){?>
    <div class="wrap">
        <h1>Reservations</h1>
        <table class="wp-list-table widefat striped">
            <thead>
            <tr>
                <th class="manage-column">ID</th>
                <th class="manage-column">Name</th>
                <th class="manage-column">Date of Reservation</th>
                <th class="manage-column">Email</th>
                <th class="manage-column">Phone Number</th>
                <th class="manage-column">Message</th>
            </tr>
<!--             tr -->
            </thead>
<!--            thead-->
            
            <tbody>
            <?php
            global $wpdb;
            
            $table = $wpdb->prefix ."reservations";
            $reservations = $wpdb->get_results("SELECT * FROM $table",ARRAY_A);
            foreach ($reservations as $reservation):?>
                <tr>
                    <td><?php echo $reservation['id']?></td>
                    <td><?php echo $reservation['name']?></td>
                    <td><?php echo $reservation['date']?></td>
                    <td><?php echo $reservation['email']?></td>
                    <td><?php echo $reservation['phone']?></td>
                    <td><?php echo $reservation['message']?></td>

                </tr>
                <?php
           endforeach;
            ?>
            </tbody>
        </table>
<!--        table-->
    </div>
<!-- wrap -->
<?php
}