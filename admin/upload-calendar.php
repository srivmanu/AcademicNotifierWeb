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
<div class="row panel panel-default" style="padding: 10px">
	<form class="col-md-11" method="POST" action="newcalendar.php">
		<div class="row">
			<a onclick="newteacher()"class="btn btn-primary pull-left"name= "teacher" id= "teacher"> Add New Event</a>
		</div>
		<div name= "addteacher" id= "addteacher" class="row" style="display:none; margin-top: 5px;">
			<div class='col-md-3'>
				<label>Event Title</label>
				<input class="form-control" type="text" name= "title" id= "title" required>
			</div>
			<div class="col-md-3" >
				<label>Start Date</label>
				<input placeholder="Start" type="date" class="form-control"  name= "date_start" id= "date_start" required>
			</div>
			<div class="col-md-3">
				<label>End Date</label>
				<input placeholder="End" type="date" name= "date_end" id= "date_end" class="col-md-2 form-control" required>
			</div>
			<div class="col-md-1">
				<label></label>
				<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Submit</button>
			</div>
		</div>
	</form>
</div>