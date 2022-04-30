<?php
   $name=$_POST['name'];
   $email=$_POST['userName'];
   $messege=$_POST['message'];
    
   $mail_from='$email';

   $mail_topic="new application submission";

   $email_body="User Name: $name. \n". "User Email: $email. \n". "messege: $message. \n";

   $to="vakadarohit56@gmail.com";

   $headers= "From: $mail_from \r\n";

   $headers= "Reply To: $email \r\n";

   mail($to, $mail_topic, $email_body, $headers );

   header("Location: Home.html");

   ?>
