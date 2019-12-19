<?php
if (!isset($_SESSION['type'])) {
	function Redirect($val) {
		$url=$val;
		header ('Location: ' . $url, true, 303);
		die();
	}
	Redirect('../index.php');
	exit();
}
?>
<div class="row">
	
	<div class="panel panel-default col-md-9" style="padding: 5px">
		<form class="col-md-9" method="POST" action="newteacher.php">
			<a onclick="newteacher()"class="btn btn-primary pull-left"name= "teacher" id= "teacher"style="margin: 5px "> Add New Teacher</a>
			<div name= "addteacher" id= "addteacher" class="row" style="display:none; margin: 5px ">
				<div class="col-md-3">
					<input placeholder="Employee Code" type="text" class="form-control"  name= "empcode" id= "empcode" required>
				</div>
				<div class="col-md-3">
					<input placeholder="Name" type="text" name= "teachername" id= "teachername" class="col-md-2 form-control" required>
				</div>
				<div class="col-md-2">
					<select class="form-control col-md-1"placeholder="Branch" id="branch" name="branch" required="true">
						<option value="cse">CSE</option>
						<option value="it">IT</option>
						<option value="me">ME</option>
						<option value="ce">CE</option>
						<option value="en">EN</option>
						<option value="ec">EC</option>
						<option value="eie">EIE</option>
					</select>
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
		<br>
		<form class="col-md-10" method="POST" action="newlogin.php">
			<a onclick="newuser()"class="btn btn-primary pull-left"name= "user" id= "user"style="margin: 5px "> Add New User</a>
			<div name= "adduser" id= "adduser"class="row" style="display:none; margin: 5px ">
				<div class="col-md-10">
					<div class="col-md-3">
						<input placeholder="Username" type="text" class="form-control"  name= "username" id= "username" required>
					</div>
					<div class="col-md-3">
						<input placeholder="Password" type="password" name= "password" id= "password" class="col-md-2 form-control" required>
					</div>
					<div class="col-md-3">
						<select class="form-control"placeholder="Type" id="type" name="type" required="true" >
							<option value="admin">Admin</option>
							<option value="teacher">Teacher</option>
							
						</select>
					</div>
					<div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>