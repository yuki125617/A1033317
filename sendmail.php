<?php

require("PHPMailer-master/PHPMailerAutoload.php");

$mail=new PHPMailer();

$name=$_POST["name"];
$emailto=$_POST["emailto"];
$subject=$_POST["subject"];
$Message=$_POST["Message"];

$mail->SMTPDebug=3;// Enable verbose debug output

$mail->isSMTP();// Set mailer to use SMTP
$mail->Host="smtp.gmail.com"; // Specify main and backup SMTP servers  
$mail->SMTPAuth=true;// Enable SMTP authentication
$mail->Username="feather2150@gmail.com";//SMTP username
$mail->Password="arashi2244";//SMTP password
$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted
$mail->Port=465;// TCP port to connect to


$mail->CharSet="utf-8";
$mail->setFrom($emailfrom, $name);
$mail->addAddress($emailto);     // Add a recipient
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $Message;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>

