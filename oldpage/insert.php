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


//$sql = "INSERT INTO WAITLIST (Phone_Number, First_Name, Last_Name, Party_Size, Arrival_Time) VALUES ('$phone', '$firstname','$lastname', '$psize', '$atime')";


$sql = "INSERT INTO CUSTOMER_INFO(Phone_Number, First_Name, Last_Name) VALUES ('$phone', '$firstname','$lastname')";
//$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {

    echo "Sign up successfully!";

    header("location: index.html");

} 

else {

    echo "Error: " . $sql . "<br>" . $conn->error;

}

//$custID = "SELECT MAX(Customer_ID) FROM CUSTOMER_INFO";

//$sql2 = "INSERT INTO WAITLIST (Customer_ID, Party_Size, Arrival_Time) VALUES ('$psize', '$atime')";

$sql2 = "INSERT INTO WAITLIST (Customer_ID, Party_Size, Arrival_Time) SELECT MAX(Customer_ID), '$psize', '$atime' FROM CUSTOMER_INFO";
if ($conn->query($sql2) === TRUE) {

    echo "Sign up successfully!";

    header("location: index.html");

} 

else {

    echo "Error: " . $sql2 . "<br>" . $conn->error;

}

$conn->close();


?>

</body>

</html>