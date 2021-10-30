<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<style type="text/css">
table,td,th{
	
	border:1px solid black;
}

th{
	
 background-color:orange;
}

td{
	
	background-color:yellow;
}
</style>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>
<body>
<?php

$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Phone_Number, First_Name, Last_Name, Party_Size, Arrival_Time FROM WAITLIST";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Phone Number</th><th>First Name</th><th>Last Name</th><th>Party Size</th><th>Arrival Time</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Phone_Number"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Party_Size"]."</td><td>".$row["Arrival_Time"]."</td></tr>";  
    }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();

?>
</body>

</html>
