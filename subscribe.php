<?php

// Set the recipient email address here
$to = "samochuu@gmail.com";

// Set the email subject and message
$subject = "Details Form Submission";
$message = "Name: ".$_POST['name']."\n".
           "Email: ".$_POST['email']."\n".
           "Message: New subscription"
           
           
           
           

// Set the headers for the email
$headers = "From:  $_POST["email"].\r\n";
$headers .= "Reply-To: samochubrand@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Send the email
mail($to, $subject, $message, $headers);

// Redirect the user to a thank you page
header("Location: index.html");
exit();

?>
