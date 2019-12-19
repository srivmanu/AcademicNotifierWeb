<?php
//$db=mysqli_select_db(DB_NAME, $con) or die("Failed to connect to MySQL: " . mysqli_error());
// $ID = $_POST['username'];
// $Password = $_POST['password'];

function Redirect($val) {
	$url=$val;
	header ('Location: ' . $url, true, 303);
	die();
}

function SignIn() {
	include 'admin/config.php';
	// echo "HELLO";
	session_start();

	if(!empty($_POST['username'])) {
		// $servername ="localhost";
		// $username ="friday";
		// $password ="friday13";
		// $dbname ="notifier";
		$pass=sha1($_POST['password']);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$qry="SELECT * FROM login_detail where username = '$_POST[username]' AND password = '$pass'";
		$result = $conn->query($qry);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if(!empty($row['username']) AND !empty($row['password'])) {
					$_SESSION['username'] = $row['username'];
					$_SESSION['type'] = $row['user_type'];
					Redirect("admin/navbar.php");
				}

			}

		}

		else {
			Redirect("index.php");
		}

	}

	else {
	}

}
if(!isset($_SESSION['username'])) {
	// echo 'signinpage';
	SignIn();
}

else {
	echo $_SESSION['username'];
}

?>