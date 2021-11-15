<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\Program Files (x86)\Ampps\php-7.1\composer\vendor\autoload.php'; 
$mail = new PHPMailer(TRUE);

$pNum = $_POST["pNum"];
$carrier = $_POST["carrier"];
$message = "Thank you for coming to Mud City Crab House. Your table will be ready in 15 minutes!";
 
    
switch($_GET['carrier']){

case "verizon":

$recipient =$pNum . "@vtext.com";

break;

case "att":

$recipient =$pNum . "@txt.att.net";

break;

case "tmobile":

$recipient = $pNum . "@tmomail.net";

break;

}
  $mail->Username = "mudcitytexts@gmail.com"; // your GMail user name
    $mail->Password = "mudCity1185"; 
    $mail->AddAddress( "6093398456@tmomail.net" ); // recipients email
    $mail->FromName = "Mud City Crab House"; // readable name

    $mail->Subject = "Your Table Status";
    $mail->Body    = "Thank you for coming to Mud City Crab House. Your table will be ready in 15 minutes!"; 	
	$mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
?>
