<?php
// $servername ="mysql2.000webhost.com";
// $username ="a9610780_user";
// $password ="Friday13";
// $dbname ="a9610780_notif";
// $servername ="localhost";
// $username ="friday";
// $password ="friday13";
// $dbname ="notifier";
include 'admin/config.php';
$did=$_GET["did"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql ="SELECT tt_json FROM timetable WHERE d_id= '$did'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo  $row['tt_json'];
	}

}

else {
	echo "[]";
}

$conn->close();
exit();
?>