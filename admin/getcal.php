<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$qry="SELECT * FROM calendar";
// INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES (NULL, 'NOTIF', '1234', '55555', '44444', '555666', 'check');
$result = $conn->query($qry);
$arr_cal=array();
if ($result->num_rows > 0) {
	// echo "string";

	while($row = $result->fetch_assoc()) {
		if(!empty($row['cal_id'])) {
			$event = array('start' => $row['date_start'],'end' => $row['date_end'],'title' =>$row['text'] );
			array_push($arr_cal, $event);
			// echo json_encode($reg);
		}

	}

}

echo json_encode($arr_cal);
?>