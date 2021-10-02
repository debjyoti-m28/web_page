<?php
if(isset($_POST['email'])){


    $to = 'debjeet194@gmail.com';
    $subject = "Mail from Open Studios - Someone Dropped a Mail";


    $message = '<h1> Someone Dropped a Mail</h1><br><strong>Email Id:</strong> '.$_POST['email'];

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // mail piority
    $headers .= "X-Priority: 1\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    // More headers
    $headers .= 'From: <debjeet194@gmail.com>' . "\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";


    if(mail($to,$subject,$message,$headers)){
        echo "mail send";
        exit();
    }else{
        echo "failed to send mail";
    }


}
?>
