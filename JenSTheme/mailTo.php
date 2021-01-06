<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 26/11/2020
 * Time: 15:24
 */




$to = "florian.tjeertes@ziggo.nl";
$subject = "Wordpress JenS";
$name=$_POST['contactName'];
$body=$_POST['comments'];
$email =$_POST['email'];
$phone=$_POST['tellinput'];

echo $name."<br>";
echo $body."<br>";
echo $email."<br>";
echo $phone."<br>";



$message = 'Dear Jenneke en Sanne,<br>';
$message .= "$body<br><br>";
$message .= "my number = $phone<br>";
$message .= "geschreven,$name<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <JenS@website.com>' . "\r\n";
	mail( $to, $subject, $message, $headers );

header("Location: ../contact");
die();
?>
