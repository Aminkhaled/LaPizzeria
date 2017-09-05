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
        $name = sanitize_text_field(htmlspecialchars($_POST['name']));
        $date = sanitize_text_field(htmlspecialchars($_POST['date']));
        $email =sanitize_email(htmlspecialchars($_POST['email'])) ;
        $phone= sanitize_text_field(htmlspecialchars($_POST['phone'])) ;
        $message =sanitize_text_field(htmlspecialchars($_POST['message']));

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

        $url = get_page_by_title('Thanks for  Reservation!');
        wp_redirect(get_permalink($url));
        exit();
    }
    
   
}
add_action('init','lapizzera_reservarion_save');
