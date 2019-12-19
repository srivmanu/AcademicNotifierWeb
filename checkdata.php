<?php

include 'admin/config.php';

$roll=$_GET["roll"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT uni_roll,name,d_id FROM student_detail WHERE uni_roll= '$roll'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "[{\"res\": \"1\" , \"uni_roll\": \"" . $row["uni_roll"]. "\", \"name\": \"" . $row["name"].  "\" , \"d_id\" :  \"" . $row["d_id"] . "\" }]";
    }
} else {
    echo "{ \"res\" : \"0\"}";
}
$conn->close();
?>