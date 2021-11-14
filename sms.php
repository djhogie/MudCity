<?php
$pNum = $_POST["pNum"];
$carrier = $_POST["carrier"];
$message = "Thank you for coming to Mud City Crab House. Your table will be ready in 15 minutes!";

switch($_GET['carrier']){

case "verizon":

$recipient ="$pNum""@vtext.com";

break;

case "att":

$recipient ="$pNum""@txt.att.net";

break;

case "tmobile":

$recipient = "$pNum""@tmomail.net";

break;

}
mail(
    $to = $recipient, $message);
?>

