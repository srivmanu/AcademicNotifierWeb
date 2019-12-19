<?php  
include 'config.php';
$conn = new mysqli($servername, $username, $password, $dbname);
// $timetable_json ='';

if(isset($_POST["year"])) {
	$session=$_POST["session"];
	$year=$_POST["year"];
	$branch=$_POST["branch"];
	$section=$_POST["section"];
	// $did='check';
	$did=$_POST['session'] . "_" .$_POST['branch'] ."_" . $_POST['year'] . "_" . $_POST['section'];
	$tt=new stdClass();
	$tt->monday=array();
	for($i=0;
	$i<8;

	$i++) {
		$data=new stdClass();
		$data->teacher=$_POST["t_mon_" . ($i+1)];
		$data->subject=$_POST["s_mon_" . ($i+1)];
		array_push($tt->monday, $data);
	}

	$tt->tuesday=array();
	for($i=0;
	$i<8;

	$i++) {
		$data=new stdClass();
		$data->teacher=$_POST["t_tue_" . ($i+1)];
		$data->subject=$_POST["s_tue_" . ($i+1)];
		array_push($tt->tuesday, $data);
	}

	$tt->wednesday=array();
	for($i=0;
	$i<8;

	$i++) {
		$data=new stdClass();
		$data->teacher=$_POST["t_wed_" . ($i+1)];
		$data->subject=$_POST["s_wed_" . ($i+1)];
		array_push($tt->wednesday, $data);
	}

	$tt->thursday=array();
	for($i=0;
	$i<8;

	$i++) {
		$data=new stdClass();
		$data->teacher=$_POST["t_thur_" . ($i+1)];
		$data->subject=$_POST["s_thur_" . ($i+1)];
		array_push($tt->thursday, $data);
	}

	$tt->friday=array();
	for($i=0;
	$i<8;

	$i++) {
		$data=new stdClass();
		$data->teacher=$_POST["t_fri_" . ($i+1)];
		$data->subject=$_POST["s_fri_" . ($i+1)];
		array_push($tt->friday, $data);
	}

	$tt_json=json_encode($tt);
	$qry="UPDATE `timetable` SET `tt_json` = '$tt_json' WHERE `d_id`='$did'";
	//	  UPDATE `timetable` SET `tt_id` = '828972983', `tt_json` = '' WHERE `timetable`.`tt_id` = 72;
	// echo $qry. '<br>' . $tt_json ;
	$result = $conn->query($qry);

$url = "navbar.php?page=timetable&title=Timetable";
header("Location: $url");
}
?>