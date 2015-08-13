<?php

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "dahale@comcast.net";
$subject = "Website Contact";

mail ($to, $subject, $message, "from: ".$full_name)


 ?>
