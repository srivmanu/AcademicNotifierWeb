<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['session']) & $_POST['session']!="") {
	$title=$_POST['assign_head'];
	$text=$_POST['assign_text'];
	$session=$_POST['session'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$section=$_POST['section'];
	$type="ASSIGN";
	$empcode=$_POST['empcode_assign'];
	$did=$_POST['session'] . "_" .$_POST['branch'] ."_" . $_POST['year'] . "_" . $_POST['section'];
	$date=$_POST['date_assign'];

	$date_test=strtotime("+1 day", strtotime($date));
	$date=date("Y-m-d", $date_test);
	
	$qry="INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`,`head`,  `text`, `timestamp`, `d_id`) VALUES (NULL, '$type', '$empcode','$title', '$text', '$date', '$did')";
	$result = $conn->query($qry);
	//type, empcode, text, date, d_id

	include 'gcm.php';
	$qry="SELECT reg_id FROM student_detail where d_id='$did'";
	$result = $conn->query($qry);
	// $regs=array();
	$gcm = new GCMPushMessage(GOOGLE_API_KEY);
	// echo "HELLO";

	if ($result->num_rows > 0) {
		// echo "string";

		while($row = $result->fetch_assoc()) {
			if(!empty($row['reg_id'])) {
				$regid=$row['reg_id'];
				$gcm->setDevices($regid);
				// echo "<br> new regid: " . $regid ."<br>";
				// array_push($regs, $regid);
				$gcm->send('New Assignment', $title);
			}

		}

	}
	// $text_cal=
	// $qry="INSERT INTO `calendar` ( `date_end`, `text`,`date_start`) VALUES  ('$date','$title','$date');";
	// $result = $conn->query($qry);

	$url ="navbar.php?title=Assignments&page=assess-assignment";
	header("Location: $url");
}

else {
	echo "<h4>ERROR: ERR_CODE:NOSESSION</h4> <br> Usually occurs when session value is not defined";
}

?>