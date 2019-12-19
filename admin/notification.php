<?php
include 'connection.php'; 
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
<div id="notification_page panel">
    <div class="col">
        <div class="col-md-6 panel panel-default" style="padding:10px">
            
            <form method = "POST" action = "sendnotification.php">
                <div >
                    <div class="form-group" >
                        <label> <h4>Notification Text </h4></label>
                        <input class="form-control" placeholder="Title" name= "notfi_head" id= "notfi_head" style="margin: 5px" required="true">
                        <textarea style="margin: 5px" name= "notif_text" id= "notif_text" cols="30" rows="4" maxlength="2000" class="form-control" style="font-size: 20px"
                        placeholder="Enter Text Here Or Paste Google Drive link to the document (upto 2000 Characters)" required></textarea>
                    </div>
                    
                </div>
                <div id="view-notification">
                    <div class="form-group"  style="margin: 5px">
                        <label><h4>Send To : </h4></label>
                        <div class="row " >
                            <div class="col-md-3">
                                <!-- <form class="form-group"style="margin: 10px"id="session-tt"> -->
                                <label>Session: </label>
                                <input class="form-control" readonly="true" placeholder="Start Year" id="session" name="session" required="true" value="NULL" type="number">
                                
                            </div>
                            <div class="col-md-2">
                                <label>Branch:</label>
                                <select class="form-control"placeholder="Branch" id="branch" name="branch" required="true">
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
                                <select class="form-control"placeholder="Year" id = "year" name="year" onchange="findSession()" required="true">
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
                                <select class="form-control"placeholder="Section" id="section" name="section" required="true">
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                </select>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4" >
                        <label><h4>Employee Code: </h4></label>
                        <input type="text" placeholder="Employee Code" class="form-control" name= "empcode_notif" required="" id= "empcode_notif"/>
                    </div>
                    <div class="pull-right" style="margin-top: 45px">
                        <button type="submit" class="btn btn-success" style="width:100px">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3" style="margin-top: 50px;">
            <form action="navbar.php?title=Home&page=view-notifications">
                <!-- <button class="btn btn-primary" type="submit">View Sent Notifications</button><br> -->
                <a href="navbar.php?title=Sent%20Notifications&page=view-notifications" class="btn btn-primary">View Sent Notifications</a>
            </form>
        </div>
    </div>
</div>
<!-- TODO DATES -->