<?php 
include 'admin/config.php';
$did=$_GET["did"];
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$notif = array();
$sql ="SELECT * FROM `notifications` WHERE `type` LIKE 'NOTIF' AND `d_id` LIKE '$did'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		$data=array('emp_code'=>$row['emp_code'], 'head'=>$row['head'], 'text'=>$row['text'], 'timestamp'=>$row['timestamp']);
		array_push($notif, $data);
	}
	echo json_encode($notif);
}

else {
	echo "[]";
}

$conn->close();
exit();
?>