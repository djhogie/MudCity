<html>

<body>



<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "project";


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phone= $_POST["phonenumber"];
$psize= $_POST["partysize"];
$atime= $_POST["arrivaltime"];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


$sql = "INSERT INTO WAITLIST (Phone_Number, First_Name, Last_Name, Party_Size, Arrival_Time) VALUES ('$phone', '$firstname','$lastname', '$psize', '$atime')";



//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {

    echo "Sign up successfully!";

    header("location: index.html");

} 

else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();


?>

</body>

</html>