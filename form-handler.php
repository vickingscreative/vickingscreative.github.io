<?php
ini_set ('display_errors', 1);
error_reporting(E-ALL);
$visitor_email= $_POST['email'];
$name= $_POST['name'];
$message= $_POST['message'];

$email_from = 'vickings225@gmail.com';

$email_subject ='New Form Submission';

$email_body = "User Email: $visitor_email.\n".
              "User Name: $name.\n".
              "User message: $message.\n".
$to = 'vickings225@gmail.com';

$headers = "From: $email_from\r\n";

$headers .="Reply-To: $visitor_email\r\n";

mail($to, $email_body, $headers);

header("Location: about.html");
if (mail($to,  $subject,  $message, $headers));{
echo "Success";
} else{
echo"Failed";
}

?>
