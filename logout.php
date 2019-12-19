<?php 

session_start();
function Redirect($val) {
	$url=$val;
	header ('Location: ' . $url, true, 303);
	die();
}
unset($_SESSION['type']);
unset($_SESSION['username']) ;
Redirect("index.php");
?>