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

tr.strikeout td.strike-able:before {
    content: " ";  
    position: absolute;  
    display: inline-block;  
    padding: 4px 2px;  
    left: 5;  
    border-bottom: 2px solid #d9534f;  
    width: 83%;          
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

$sql0 = "SELECT Waitlist_ID, First_Name, Last_Name, Party_Size, Arrival_Time, Status FROM WAITLIST INNER JOIN CUSTOMER_INFO ON WAITLIST.Customer_ID=CUSTOMER_INFO.Customer_ID WHERE Status = 0";
$result0 = $conn->query($sql0);
$sql3 = "SELECT Waitlist_ID, First_Name, Last_Name, Party_Size, Arrival_Time, Status FROM WAITLIST INNER JOIN CUSTOMER_INFO ON WAITLIST.Customer_ID=CUSTOMER_INFO.Customer_ID WHERE Status = 3";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0 || $result0->num_rows > 0) {
  echo "<table><tr><th>#</th><th>First Name</th><th>Last Name</th><th>Party Size</th><th>Arrival Time</th><th>Status</th></tr>";
  // output data of each row
  while($row3 = $result3->fetch_assoc()) {
  	echo "<tr class='strikeout'><td class='strike-able'>".$row3["Waitlist_ID"]."</td><td>".$row3["First_Name"]."</td><td>".$row3["Last_Name"]."</td><td>".$row3["Party_Size"]."</td><td>".$row3["Arrival_Time"]."</td><td>".$row3["Status"]."</td></tr>";  
    }
  while($row0 = $result0->fetch_assoc()) {
    echo "<tr><td>".$row0["Waitlist_ID"]."</td><td>".$row0["First_Name"]."</td><td>".$row0["Last_Name"]."</td><td>".$row0["Party_Size"]."</td><td>".$row0["Arrival_Time"]."</td><td>".$row0["Status"]."</td></tr>";  
    }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();

?>
</body>

</html>