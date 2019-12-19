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

?>
<div id="assess_Assignment_page">
    <div class="row">
        <div class="col-md-6 panel panel-default"style="padding:10px">
            <form method ="POST"action ="sendassign.php">
                <div >
                    <div class="form-group"id="Assignment text">
                        <label> <h4>Assignment Details </h4></label>
                        <input class="form-control"placeholder="Subject"name="assign_head"id="assign_head"style="margin: 5px"required>
                        <textarea style="margin: 5px"name="assign_text"id="assign_text"cols="30"rows="4"maxlength="2000"class="form-control"style="font-size: 20px"placeholder="Enter Text Here Or Paste Google Drive link to the document (upto 2000 Characters)"required></textarea>
                    </div>
                </div>
                <div >
                    <div class="form-group"style="margin: 5px">
                        <label><h4>Send To:</h4></label>
                        <div class="row ">
                            <div class="col-md-3">
                                <!-- <form class="form-group"style="margin: 10px"id="session-tt"> -->
                                <label>Session:</label>
                                <input class="form-control"readonly  id="session"name="session"required/>
                            </div>
                            <div class="col-md-2">
                                <label>Branch:</label>
                                <select class="form-control"placeholder="Branch"id="branch"name="branch"required>
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
                                <select class="form-control"placeholder="Year"id ="year"name="year"onchange="findSession()"required>
                                    <!-- <option>1</option> -->
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <!-- </form> -->
                            </div>
                            <div class="col-md-3">
                                <!-- <form class="form-group"style="margin: 10px"id="year-tt"> -->
                                <label>Section:</label>
                                <select class="form-control"placeholder="Section"id="section"name="section"required>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                </select>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <!-- <h4  style="margin: 5px">Use Ctrl key to select multiple values.</h4> -->
                    <div style="margin: 5px">
                        <div class=" col-md-4 pull-left"style="margin: 5px;">
                            <label>
                                <h4>Date:</h4>
                            </label>
                            <input type="date"placeholder="Enter Date"class="form-control"name="date_assign"id="date_assign"required>
                        </div>
                        <div class="col-md-4">
                            <label>
                                <h4>Employee Code</h4>
                            </label>
                            <input type="text"placeholder="Employee Code"class="form-control"name="empcode_assign"require`d=""id="empcode_assign"/>
                        </div>
                        <div class="col-md-3"style="margin-top: 40px">
                            <button type="submit"class="btn btn-success"style="width: 100px">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-md-3">
            <form class="form-group">
                <!-- <button class="btn btn-primary"></button> -->
                <a href="navbar.php?title=View%20Assignments&page=view-assignments"class="btn btn-primary">View Previous Assignments</a>
            </form>
        </div>
    </div>
</div>