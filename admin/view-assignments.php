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

?><div >
	<table class="table-responsive table table-bordered table-hover table-striped">
	<tr><th>Notification Text</th> <th style="text-align: center;">Date</th></tr>
		<!-- <tr><td></td></tr> -->
		<?php
		include 'config.php';
		$conn = new mysqli($servername, $username, $password, $dbname);
		$notif_text="hello";
		$notif_date="12345";
		$qry="SELECT `head`, `timestamp` FROM `notifications` WHERE `type`='ASSIGN'";
		$result = $conn->query($qry);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				if(!empty($row['head'])) {
					$notif_text = $row['head'];
					$notif_date = $row['timestamp'];
					echo "<tr><td>";
					echo $notif_text;
					echo '</td> <td align="right"width="200px">';
					echo $notif_date;
					echo "</td> </tr>";
				}
			}
		}
		?>
	</table>
</div>