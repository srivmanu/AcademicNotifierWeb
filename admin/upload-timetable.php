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

?><form method="POST" action="newtimetable.php">
        <div class="row ">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <!-- <form class="form-group"style="margin: 10px"id="session-tt"> -->
                <label id="check">Session: </label>
                <input class="form-control  " readonly placeholder="Start Year" id="session" name="session" required>
                
            </div>
            <div class="col-md-2">
                <label>Branch:</label>
                <select class="form-control"placeholder="Branch" id="branch" name="branch" required>
                    <option value="cse">CSE</option>
                    <option value="it">IT</option>
                    <option value="me">ME</option>
                    <option value="ce">CE</option>
                    <option value="en">EN</option>
                    <option value="ec">EC</option>
                    <option value="eie">EIE</option>
                </select>
            </div>
            <div class="col-md-1">
                <!-- <form class="form-group"style="margin: 10px"id="year-tt"> -->
                <label>Year:</label>
                <select class="form-control"placeholder="Year" id = "year" name="year" required onchange="findSession()">
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
                <!-- </form> -->
            </div>
            <div class="col-md-2">
                <!-- <form class="form-group"style="margin: 10px"id="year-tt"> -->
                <label>Section:</label>
                <select class="form-control"placeholder="Section" id="section" name="section" required>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                </select>
                <!-- </form> -->
            </div>
        </div>
        <div class="col-md-11" style="margin-top: 50px">
            <div class="row">
                <table class="table-responsive table table-bordered table-striped">
                    <tr>
                        <td><b>Monday</b>
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_1" id= "s_mon_1" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_1" id= "t_mon_1" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_2" id= "s_mon_2" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_2" id= "t_mon_2" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_3" id= "s_mon_3" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_3" id= "t_mon_3" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_4" id= "s_mon_4" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_4" id= "t_mon_4" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_5" id= "s_mon_5" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_5" id= "t_mon_5" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_6" id= "s_mon_6" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_6" id= "t_mon_6" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_7" id= "s_mon_7" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_7" id= "t_mon_7" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_mon_8" id= "s_mon_8" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_mon_8" id= "t_mon_8" required >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Tuesday</b>
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_1" id= "s_tue_1" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_1" id= "t_tue_1" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_2" id= "s_tue_2" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_2" id= "t_tue_2" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_3" id= "s_tue_3" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_3" id= "t_tue_3" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_4" id= "s_tue_4" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_4" id= "t_tue_4" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_5" id= "s_tue_5" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_5" id= "t_tue_5" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_6" id= "s_tue_6" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_6" id= "t_tue_6" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_7" id= "s_tue_7" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_7" id= "t_tue_7" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_tue_8" id= "s_tue_8" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_tue_8" id= "t_tue_8" required >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Wednesday</b>
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_1" id= "s_wed_1" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_1" id= "t_wed_1" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_2" id= "s_wed_2" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_2" id= "t_wed_2" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_3" id= "s_wed_3" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_3" id= "t_wed_3" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_4" id= "s_wed_4" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_4" id= "t_wed_4" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_5" id= "s_wed_5" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_5" id= "t_wed_5" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_6" id= "s_wed_6" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_6" id= "t_wed_6" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_7" id= "s_wed_7" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_7" id= "t_wed_7" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_wed_8" id= "s_wed_8" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_wed_8" id= "t_wed_8" required >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Thursday</b>
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_1" id= "s_thur_1" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_1" id= "t_thur_1" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_2" id= "s_thur_2" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_2" id= "t_thur_2" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_3" id= "s_thur_3" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_3" id= "t_thur_3" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_4" id= "s_thur_4" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_4" id= "t_thur_4" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_5" id= "s_thur_5" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_5" id= "t_thur_5" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_6" id= "s_thur_6" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_6" id= "t_thur_6" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_7" id= "s_thur_7" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_7" id= "t_thur_7" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_thur_8" id= "s_thur_8" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_thur_8" id= "t_thur_8" required >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Friday</b>
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_1" id= "s_fri_1" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_1" id= "t_fri_1" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_2" id= "s_fri_2" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_2" id= "t_fri_2" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_3" id= "s_fri_3" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_3" id= "t_fri_3" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_4" id= "s_fri_4" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_4" id= "t_fri_4" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_5" id= "s_fri_5" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_5" id= "t_fri_5" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_6" id= "s_fri_6" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_6" id= "t_fri_6" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_7" id= "s_fri_7" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_7" id= "t_fri_7" required >
                        </td>
                        <td >
                            <input class="form-control" placeholder="Subject Name"  name= "s_fri_8" id= "s_fri_8" required ><br>
                            <input class="form-control" placeholder="Teacher Name"  name= "t_fri_8" id= "t_fri_8" required >
                        </td>
                    </tr>
                    
                </table>
            </div>
            <div class="row">
                <button type="submit" class="pull-right btn btn-primary" style="width: 150px">Submit</button>
            </div>
        </div>
    </form>
</div>
<!-- todo create did from data and create json from table and input in table -->