<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['empcode']) & $_POST['empcode']!="") {
	$name=$_POST['teachername'];
	$branch=$_POST['branch'];
	$empcode=$_POST['empcode'];
	$did=$_POST['session'] . "_" .$_POST['branch'] ."_" . $_POST['year'] . "_" . $_POST['section'];
	date_default_timezone_set("Asia/Kolkata");
	$date= date("Y-m-d");
	$qry="INSERT INTO `faculty_detail` (`emp_code`, `name`, `branch`) VALUES  ('$empcode','$name','$branch');";
	// INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES (NULL, 'NOTIF', '1234', '55555', '44444', '555666', 'check');
	$result = $conn->query($qry);
	//type, empcode, text, date, d_id
	$url ="navbar.php?title=Administrative%20Tasks&page=admin-tasks";
	header("Location: $url");
}

else {
	echo "<h4>ERROR</h4> <br> Usually occurs when some value is not defined";
}

?>