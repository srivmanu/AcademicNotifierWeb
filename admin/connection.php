<?php  
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$timetable_json ='';
$did='check';
$qry="SELECT tt_json FROM timetable where d_id='$did'";
$result = $conn->query($qry);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if(!empty($row['tt_json'])) {
			$timetable_json=$row['tt_json'];
		}

	}

}

$qry="SELECT d_id FROM dept_detail";
$result = $conn->query($qry);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if(!empty($row['d_id'])) {
			$dids[] = $row['d_id'];
		}

	}

}

$array_did=$dids;
?>