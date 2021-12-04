<html>

<body>



<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "project";



$wid= $_POST["waitlistid"];


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


$sql = "UPDATE WAITLIST SET Status = 3 WHERE (Waitlist_ID = '$wid')";



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