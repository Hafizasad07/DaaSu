<?php
   require 'vendor/autoload.php';
   use PHPMailer\PHPMailer\PHPMailer;

   $mail = new PHPMailer;
   $mail->isSMTP();
   $mail->SMTPDebug = 2;
   $mail->Host = 'smtp.gmail.com';
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->Username = 'saadideveloper516@gmail.com';
   $mail->Password = 'ebzonbcrbsqnduva';
   extract($_POST);
   $mail->setFrom('saadideveloper516@gmail.com', $name);
   $mail->addAddress('saadideveloper516@gmail.com', 'DaaSu App'); 
   $mail->isHTML(true);   
   $mail->Body = "<h2> Contact Form </h2> <b>Name: </b>" .$name . " <b>Email: </b>" .$email . "<br><b>Company Name: </b>" . $company_name . "<br><b>Message: </b>" . $message;
   if (!$mail->send()) {
       echo 'Mailer Error: ' . $mail->ErrorInfo;
   } else {
        ob_end_clean();
       echo 'The email massage was sent.';
   }
   
?>