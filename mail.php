<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@iamlimo.github.io";
// Issac try https://sourceforge.net/projects/phpmailer/
// Or see the way i used it in Jobinpal Enterprises website https://github.com/JobinpalEnterprises/jobinpalwebsite
$subject = "Contact Form";
$mailheader ='From: Isaac Orija <isaac.orija@gmail.com>' . "\r\n"; header("Location: email-send.php");
mail($recipient, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
