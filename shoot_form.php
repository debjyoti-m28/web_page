<?php
if(isset($_POST['name'])){

    $to = 'debjeet194@gmail.com';
    $subject = "Mail from Open Studios - Let's shoot Form";


    $message = '
    <h1>Shoot Form</h1><br><strong>Name:</strong> '.$_POST['name'].
    '<br><br><strong>Email:</strong> '.$_POST['email'].
    '<br><strong>Phone number:</strong> '.$_POST['p_number'];
    // '<br><br><strong>Payment status:</strong> '.$_POST['payment_status'];

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // mail piority
    $headers .= "X-Priority: 1\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    // More headers
    $headers .= 'From: '.$_POST['email']."\r\n";
    // $headers .= 'Cc: myboss@example.com' . "\r\n";




    if(mail($to,$subject,$message,$headers)){
        // $response = array('mail' => 'mail send',  'payment_status' => $_POST['payment_status']); 
        // echo json_encode($response);
        echo ("mail send");
        exit();
    }else{
        // $response = array('mail' => 'failed to send mail',  'payment_status' => $_POST['payment_status']); 
        // echo json_encode($response);
        echo ("mail failed");
        exit();
    }


}
?>
