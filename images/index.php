<?php
function Redirect($val) {
	$url=$val;
	header ('Location: ' . $url, true, 303);
	die();
}

session_start();

if (!isset($_SESSION['type'])) {
	Redirect('../index.php');
	exit();
}

?>