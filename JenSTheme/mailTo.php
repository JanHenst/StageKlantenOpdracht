<?php
/**
 * Created by PhpStorm.
 * User: florianmac
 * Date: 26/11/2020
 * Time: 15:24
 */
$to = "florian.tjeertes@gmail.com";
$subject = "Email Subject";
$name="janbitch";


$message = 'Dear '.$name.',<br>';
$message .= "iritant<br><br>";
$message .= "geschreven,florobot<br>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <enquiry@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";
for($i=0;$i<10;$i++) {
	mail( $to, $subject, $message, $headers );
}
?>
