<?php
function Redirect($val) {
	$url=$val;
	header ('Location: ' . $url, true, 303);
	die();
}
session_start();
if(isset($_SESSION['username'])) {
	Redirect("admin/navbar.php");
}
?>
<!DOCTYPE HTML>
<html>
	<heda>
	<title>Academic Notifier - Login</title>
	<link href="css/style.css"rel="stylesheet"type="text/css"media="all"/>
	<!-- Custom Theme files -->
	<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
	<meta name="viewport"content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type"content="text/html; charset=utf-8"/>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript">
	function lostButton() {
		document.getElementById('lostpass_view').style.display='block';
		document.getElementById('login_view').style.display='none';
	}
	function back_login() {
		document.getElementById('lostpass_view').style.display='none';
		document.getElementById('login_view').style.display='block';
	}
	</script>
</head>
<body>
	<div class="header">
		<h1>Login</h1>
	</div>
	<div class="footer">
		<p>Designed by <a href="creator/manu.htm">Manu Srivastava</a> | <a href="creator/akshay.htm">Akshay Gaba</a> |<a href="creator/onkar.htm"> Onkar Gupta</a> |<a href="creator/paras.htm"> Paras Arora</a></p>
	</div>
	<div class="main">
		<div class=" col-md-6">
			<div class="mail-image col-md-1">
				<img src="images/message.png"alt=""/>
				<h3>Welcome to</h3>
				<h2>Academic<br>Notifier</h2>
			</div>
			<div class="mail-form col-md-6"id="login_view">
				<form method="POST"action="checklogin.php">
					<input type="text"placeholder="Username"name="username"required/>
					<input type="password"class="user"placeholder="Password"name="password"required=""/>
					<input id="button"type="submit"name="submit"value="Log-In">
				</form>
				<div  class="lostpass_click">
					<a href="#"onclick="lostButton()"><p style="color: #555; font-family: monospace;">Lost your password?</p></a>
				</div>
			</div>
			<div class="mail-form col-md-"id="lostpass_view"style="display:none">
				<div  class="close">
					<a href="#"onclick="back_login()">
						<img src="images/close.png">
					</a>
				</div>
				<h5>Please Contact Administrator</h5>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
</body>
</html>