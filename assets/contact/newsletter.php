<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;

   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.gmail.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'zubairbutt9535@gmail.com';
   $mail->Password = 'pybcwbosyuawuwaj';
   extract($_POST);
   $mail->setFrom('zubairbutt9535@gmail.com', "Guest");
    $mail->addAddress('support@unitpayment.com', 'Receiver Name');
   $mail->isHTML(true);   
   $mail->Body = "<h2> Subscriber Newsletter </h2> <b>Email: </b>" . $email;
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
       echo 'The email massage was sent.';
   }
   header("Location: https://unitpayment.com/updated_unitpayment/");
?>