<html>

<body>



<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "project";


$name = $_POST["name"];
$phone= $_POST["phonenumber"];
$psize= $_POST["partysize"];
$atime= $_POST["arrivaltime"];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


$sql = "INSERT INTO WAITLIST (Name, Phone_number, Party_Size, Arrival_Time) VALUES ('$name', '$phone', '$psize', '$atime')";



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