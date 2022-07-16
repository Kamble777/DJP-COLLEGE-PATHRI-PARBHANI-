<?php
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$email_from = "";
$email_subject='New form submission';
$email_body = "User Name: $name.\n".
             "User Email: $visitor_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.\n";

  $to = ''   ;        
$header = "Form : $email_form \r\n";
$header. = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$header);

header("Location: contact.html")
?>