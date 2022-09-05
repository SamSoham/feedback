<?php
  $name = $_POST['name'];
  $visitor_mail = $POST['mail'];
  $contact = $POST['contact'];
  $feedback = $POST['feed'];

$email_from = 'ssoham5700@gmail.com';
$email_subject = 'New Grievance';
$email_body= "User Name $name.\n". "Mail $visitor_mail.\n". "Contact No. $contact.\n". "Feedback $feedback.\n";
 
$to = "preritagrawal780@gmail.com";
mail($to,$email_from,$email_subject,$email_body);
header("Location: index.html");

?>