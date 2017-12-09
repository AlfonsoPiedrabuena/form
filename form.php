<?php

$name = $_post["fullName"];
$email = $_post["email"];
$phone = $_post["phoneNo"]
$Nprepa = $_post["zipCode"];

$formcontent= "From $name";
$recipient = "alfonso@lado-b.net";
$subject = "Prueba SAE";
$mailheader = "From: $email";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.lado-b.net/lp/sae/Thankyou_page.html');
exit;
 ?>
