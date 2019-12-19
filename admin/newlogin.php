<?php 
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['username']) & $_POST['username']!="") {
	$name=$_POST['username'];
	$password=sha1($_POST['password']);
	$type=$_POST['type'];
	$qry="INSERT INTO `login_detail` (`username`, `password`, `user_type`) VALUES  ('$name','$password','$type');";
	// echo $qry;
	// // INSERT INTO `notifications` (`notif_id`, `type`, `emp_code`, `head`, `text`, `timestamp`, `d_id`) VALUES (NULL, 'NOTIF', '1234', '55555', '44444', '555666', 'check');
	$result = $conn->query($qry);
	//type, empcode, text, date, d_id
	$url ="navbar.php?title=Administrative%20Tasks&page=admin-tasks";
	header("Location: $url");
}

else {
	echo "<h4>ERROR</h4> <br> Usually occurs when some value is not defined";
}

?>

<!-- `notifier` -->