<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\Program Files (x86)\Ampps\php-7.1\composer\vendor\autoload.php'; 
$mail = new PHPMailer(TRUE);
//PHP Mailer stuff, have to download composer from web


$pNum = $_POST["phoneNumber"];

$message = "Thank you for coming to Mud City Crab House. Your table will be ready in 15 minutes!";
 
  $mail->Username = "mudcitytexts@gmail.com"; // your GMail user name
    $mail->Password = "mudCity1185"; 
    
    
     $mail->AddAddress( $pNum . "@vtext.com" ); // recipients email
      $mail->AddAddress( $pNum . "@vzwpix.com" ); // recipients email
      $mail->AddAddress( $pNum . "@messaging.sprintpcs.com" ); // recipients email
      $mail->AddAddress( $pNum . "@txt.att.net" ); // recipients email
      $mail->AddAddress( $pNum . "@tmomail.net" ); // recipients email
      $mail->AddAddress( $pNum . "@vmobl.com" ); // recipients email
      $mail->AddAddress( $pNum . "@mymetropcs.com" ); // recipients email
      
    $mail->FromName = "Mud City Crab House"; // readable name

    $mail->Subject = "Your Table Status";
    $mail->Body    = "Thank you for coming to Mud City Crab House. Your table will be ready in 15 minutes!"; 	
	$mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP();     // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
  if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
        
    else
        echo "Message has been sent";
        header("location: index.html");
?>
