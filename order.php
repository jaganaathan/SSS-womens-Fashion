<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];


$email_from = "random@gmail.com";
$email_subject = "New order Submission ";
$email_body = "User Name : $name.\n".
               "User Email: $visitor_email.\n".
               "User contact: $contact.\n".
               "User Message: $message.\n";
     
     
     $to = "jaganaathanofficial@gmail.com"
      $headers = "From: $email_from\r\n";
      $headers = "Reply-To: $visitor_email \r\n"
      mail($to,$email_subject,$email,$headers);

      header("location: order.html");
               
?>