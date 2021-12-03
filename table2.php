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
table{
	background-color:beige;
}

tr.strikeout td.strike-able:before {
    content: " ";  
    position: absolute;  
    display: inline-block;  
    padding: 4px 2px;  
    left: 5px;  
    border-bottom: 2px solid #d9534f;  
    width: 77%;          
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

$sql = "SELECT Waitlist_ID, First_Name, Last_Name, Party_Size, Arrival_Time, Phone_Number, Status FROM WAITLIST INNER JOIN CUSTOMER_INFO ON WAITLIST.Customer_ID=CUSTOMER_INFO.Customer_ID WHERE Status = 0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<form action=\"remove.php\"><table><tr><th>#</th><th>First Name</th><th>Last Name</th><th>Party Size</th><th>Arrival Time</th><th>Phone Number</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["Waitlist_ID"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Party_Size"]."</td><td>".$row["Arrival_Time"]."</td><td>".$row["Phone_Number"]."</td></tr>";  
    }
  echo "</table></form>";
} else {
  echo "0 results";
}

$conn->close();

?>
</body>

</html>