<?php include 'connection.php';

if (!isset($_SESSION['type'])) {
    function Redirect($val) {
        $url=$val;
        header ('Location: ' . $url, true, 303);
        die();
    }

    Redirect('../index.php');
    exit();
}
if(isset($_POST['session']) AND ($_POST['session'] != "") AND isset($_POST['branch']) AND isset($_POST['section']) AND isset($_POST['year'])) {
    $did=$_POST['session'] . "_" .$_POST['branch'] ."_" . $_POST['year'] . "_" . $_POST['section'];
    // echo $did;
    $qry="SELECT tt_json FROM timetable where d_id='$did'";
    $result = $conn->query($qry);
    $vis="none";
    if ($result->num_rows > 0) {
        $vis="block";
        while($row = $result->fetch_assoc()) {
            if(!empty($row['tt_json'])) {
                $timetable_json=$row['tt_json'];
            }

        }

    }

}
else
    $vis="none";

$array_timetable=json_decode($timetable_json, TRUE);
?>
<div class="col-lg-12    panel panel-default"id="timetable">
    <form class="form-group"style=" margin: 10px"id="session-tt"method="POST" action="navbar.php?page=timetable&title=Timetable">
        <div class="row ">
            <div class="col-md-3">
                <!-- <form class="form-group"style="margin: 10px"id="session-tt"> -->
                <label>Session: </label>
                <input class="form-control"readonly placeholder="Start Year"id="session"name="session">
            </div>
            <div class="col-md-2">
                <label>Branch:</label>
                <select class="form-control"placeholder="Branch"id="branch"name="branch">
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="me">ME</option>
                    <option value="ce">CE</option>
                    <option value="en">EN</option>
                    <option value="ec">EC</option>
                    <option value="eie">EIE</option>
                </select>
            </div>
            <div class="col-md-3">
                <!-- <form class="form-group"style="margin: 10px"id="year-tt"> -->
                <label>Year:</label>
                <select class="form-control"placeholder="Year"id ="year"name="year"onchange="findSession()">
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <!-- </form> -->
            </div>
            <div class="col-md-3">
                <!-- <form class="form-group"style="margin: 10px"id="year-tt"> -->
                <label>Section:</label>
                <select class="form-control"placeholder="Section"id="section"name="section">
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
                <!-- </form> -->
            </div>
            <div class="col-md-1">
                <button type="submit"class ="btn btn-primary"style="margin-top: 25px">Submit</button>
            </div>
        </div>
    </form>
    <!-- </form> -->
    <div name="tt_data"id="tt_data"style="display: <?php echo $vis; ?>;">
        <h2>Timetable</h2>
        <table class="table-responsive table table-bordered table-hover table-striped">
            <tbody style="font-size: 15px">
                <tr>
                    <td id="mon"><b>Monday</b></td>
                    <?php for($i=0;
                    $i<8;
                    $i++) {
                    echo "<td id=\"mon-" . ($i+1) . "\">". $array_timetable['monday'][$i]['subject'] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td id="tue"><b>Tuesday</b></td>
                    <?php for($i=0;
                    $i<8;
                    $i++) {
                    echo "<td id=\"tue-" . ($i+1) . "\">". $array_timetable['tuesday'][$i]['subject'] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td id="wed"><b>Wednesday</b></td>
                    <?php for($i=0;
                    $i<8;
                    $i++) {
                    echo "<td id=\"wed-" . ($i+1) . "\">". $array_timetable['wednesday'][$i]['subject'] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td id="thur"><b>Thursday</b></td>
                    <?php for($i=0;
                    $i<8;
                    $i++) {
                    echo "<td id=\"thur-" . ($i+1) . "\">". $array_timetable['thursday'][$i]['subject'] . "</td>";
                    }
                    ?>
                </tr>
                <tr>
                    <td id="fri"><b>Friday</b></td>
                    <?php for($i=0;
                    $i<8;
                    $i++) {
                    echo "<td id=\"fri-" . ($i+1) . "\">". $array_timetable['friday'][$i]['subject'] . "</td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>