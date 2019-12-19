<?php


include 'admin/config.php';

$conn = new mysqli($servername, $username, $password, $dbname);
$token=$_GET["token"];
$roll=$_GET["roll"];
$qry ="UPDATE  `student_detail` SET  `reg_id` =  '". $token."' WHERE CONVERT(  `student_detail`.`uni_roll` USING utf8 ) =  '".$roll."' LIMIT 1 ;";

$result = $conn->query($qry);
echo "DONE";
?>