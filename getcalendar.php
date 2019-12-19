<?php 
include 'admin/config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
$qry="SELECT * FROM calendar";
// INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES (NULL, 'NOTIF', '1234', '55555', '44444', '555666', 'check');
$result = $conn->query($qry);
$arr=array();
if ($result->num_rows > 0) {
	// echo "string";

	while($row = $result->fetch_assoc()) {
		if(!empty($row['cal_id'])) {
			$date_end=date_create($row['date_end']);
			$datee=date_format($date_end,"d-m-Y");
			$date_start=date_create($row['date_start']);
			$dates=date_format($date_start,"d-m-Y");
			$event = array('start' => $dates,'end' => $datee,'title' =>$row['text'] );
			array_push($arr, $event);
			// echo json_encode($reg);
		}

	}

}
echo json_encode($arr);
exit();
?>