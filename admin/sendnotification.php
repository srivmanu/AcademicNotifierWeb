<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['session']) & $_POST['session']!="") {
	$title=$_POST['notfi_head'];
	$text=$_POST['notif_text'];
	$session=$_POST['session'];
	$branch=$_POST['branch'];
	$year=$_POST['year'];
	$section=$_POST['section'];
	$type="NOTIF";
	$empcode=$_POST['empcode_notif'];
	$did=$_POST['session'] . "_" .$_POST['branch'] ."_" . $_POST['year'] . "_" . $_POST['section'];
	date_default_timezone_set("Asia/Kolkata");
	$date= date("Y-m-d");
	echo $date;
	$qry="INSERT INTO notifications (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES  (NULL, '$type', '$empcode', '$title', '$text', '$date', '$did');";
	$result = $conn->query($qry);
	include 'gcm.php';
	$qry="SELECT reg_id FROM student_detail where d_id='$did'";
	$result = $conn->query($qry);
	$gcm = new GCMPushMessage(GOOGLE_API_KEY);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			if(!empty($row['reg_id'])) {
				$regid=$row['reg_id'];
				$gcm->setDevices($regid);
				echo $gcm->send('New Notification', $title);
			}

		}

	}

	echo "<script></script>";
	$url ="navbar.php?title=Notifications&page=notification";
	header("Location: $url");
}

else {
	echo "<h4>ERROR: ERR_CODE:NOSESSION</h4> <br> Usually occurs when session value is not defined";
}

?>