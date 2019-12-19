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
<div class="col-md-6">
	<div id='calendar'></div>
</div>