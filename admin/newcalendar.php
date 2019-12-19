<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['title']) & $_POST['title']!="") {
	$text=$_POST['title'];
	$date_start=$_POST['date_start'];
	$date_end=$_POST['date_end'];
	$date_test=strtotime("+1 day", strtotime($date_end));
	$date=date("Y-m-d", $date_test);
	$qry="INSERT INTO `calendar` ( `date_end`, `text`,`date_start`) VALUES  ('$date','$text','$date_start');";
	// INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES (NULL, 'NOTIF', '1234', '55555', '44444', '555666', 'check');
	$result = $conn->query($qry);
	// echo $qry;
	$url ="navbar.php?title=Calendar%20Data&page=upload-calendar";
	header("Location: $url");
}

else {
	echo "<h4>ERROR</h4> <br> Usually occurs when some value is not defined";
}

?>