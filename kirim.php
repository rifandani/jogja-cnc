<?php
$name = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['judul'];
$message = $_POST['pesan'];

$content = "Dari: $name \n Email: $email \n Judul: $subject \n Pesan: $message";
$recipient = "ipandani2505@gmail.com";
$subjectt = "Contact Form";
$mailheader = "Pengirim: $email \r\n";

mail($recipient, $subjectt, $content, $mailheader) or die ("Error!");
echo "<h1>Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a></h1>";

?>