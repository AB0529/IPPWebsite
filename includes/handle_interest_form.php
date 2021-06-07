<?php 

if(isset($_POST["submit"])){
    $admin_email = "admin@email.com";
    $email = $_POST["email_to"];
    $name = $_POST["name"];
    $message = $_POST["message"];
    $msg_to_send_to_user = "We have recieved your message and will contact you shortly";
    $msg_formated = wordwrap($msg_to_send_to_user,70);
    $msg_to_send_to_admin = "Dear admin you have receieved a message from '$email' and they said '$message'";
    $admin_msg_formatted = wordwrap($msg_to_send_to_admin,70);
    mail($email,"Interest Submition Recieved",$msg_formated);
    mail($admin_email,"Form Subbmitted",$admin_msg_formatted);
    header("Location: index.html");
}

?>