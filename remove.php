<html>

<body>



<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "project";



$wid= $_POST['waitlistid'];
$stat= $_POST['status'];

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection



if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}


//$sql = "DELETE FROM WAITLIST WHERE (Phone_Number = '$phone')";

$sql = "UPDATE WAITLIST SET Status = '$stat' WHERE (Waitlist_ID = '$wid')";


//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {

    echo "Status updated to seated successfully!";

    header("location: table2.php");

} 

else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}



$conn->close();


?>

</body>

</html>