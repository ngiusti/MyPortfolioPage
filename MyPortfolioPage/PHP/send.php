<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "nicholas.giusti89@gmail.com";
$subject = "Webpage Email";
$body = "This is an automated message \n\n $message";

mail ($to,$subject,$body);


?>