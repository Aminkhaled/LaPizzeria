<?php
/**
 * Created by PhpStorm.
 * User: Dreamer
 * Date: 9/5/2017
 * Time: 9:07 PM
 */
?>
<?php
function lapizzera_reservarion_save(){
    global  $wpdb;
    if(isset($_POST['submit'])&& $_POST['hidden'] == "1"){
        $name = htmlspecialchars($_POST['name']);
        $date = htmlspecialchars($_POST['date']);
        $email = htmlspecialchars($_POST['email']);
        $phone= htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);
    }
    
    $table = $wpdb->prefix . 'reservations';
    
    $data = array(
        'name' => $name,
        'date' => $date,
         'email' => $email,
          'phone' => $phone,
        'message'=> $message
    );
    
    $format = array(
        "%s",
        "%s",
        "%s",
        "%s",
        "%s"
    );
    $wpdb->insert($table,$data,$format);
}
add_action('init','lapizzera_reservarion_save');
