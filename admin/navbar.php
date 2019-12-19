<!DOCTYPE html>
<?php
function Redirect($val) {
    $url=$val;
    header ('Location: ' . $url, true, 303);
    die();
}

session_start();

if (isset($_GET["page"]) AND isset($_GET['title'])) {
    $page=$_GET["page"] . ".php";
    $title=$_GET["title"];
}

$typeofuser='NULL';

if (isset($_SESSION['type'])) {
    $typeofuser=$_SESSION['type'];
}

else {
    Redirect('../index.php');
    exit();
}

?>
<html lang="en">
    <head>
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <meta name="viewport"content="width=device-width, initial-scale=1">
        <meta name="description"content="">
        <meta name="author"content="">
        <title>Academic Notifier</title>
        <link href="../css/bootstrap.min.css"rel="stylesheet">
        <link href="../css/sb-admin.css"rel="stylesheet">
        <link href="../font-awesome/css/font-awesome.min.css"rel="stylesheet"type="text/css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING:Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript"src="../js/friday.js"></script>
        <script >
        $(document).ready(function() {
        $('#calendar').fullCalendar( {
        header: {
        left: 'prev, next today', center:'title', right:'month, agendaWeek'
        }
        , events:'getcal.php'
        }
        );
        }
        );
        </script>
        <link href='../css/fullcalendar.css'rel='stylesheet'/>
        <link href='../css/fullcalendar.min.css'rel='stylesheet'media='print'/>
        <script src='../js/moment.min.js'></script>
        <script src='../js/jquery.min.js'></script>
        <script src='../js/fullcalendar.min.js'></script>
    </head>
    <body class="">
        <div id="wrapper"class="">
            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #121212;" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- Top Menu Items -->
                <div class="navbar-header">
                    <button type="button"class="navbar-toggle"data-toggle="collapse"data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <font class="navbar-brand"><i class="fa fa-fw fa-pencil"></i> Notifier</font>
                </div>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown  pull-right">
                        <a href="#"class="dropdown-toggle"data-toggle="dropdown"><i class="fa fa-user"></i>
                            <?php echo strtoupper($typeofuser);
                        ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse navbar-ex1-collapse"style="background-color: #151515">
                    <ul class="nav navbar-nav side-nav">
                        <li id='home_button'>
                            <a href="navbar.php?title=Home&page=home"onclick="home()"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                        </li>
                        <li id='timetable_button'>
                            <a href="navbar.php?title=Timetable&page=timetable"onclick="timetable()"><i class="fa fa-fw fa-table"></i> Time Table</a>
                        </li>
                        <li id='calendar_button'onclick="calendar()">
                            <a href="navbar.php?title=Calendar&page=calendar"><i class="fa fa-fw fa-calendar"></i> Academic Calendar</a>
                        </li>
                        <li id='`fications_button'onclick="notifications()">
                            <a href="navbar.php?title=Notifications&page=notification"><i class="fa fa-fw fa-bell"></i> Send Notifications</a>
                        </li>
                        <li id='assess_button'onclick="assess()">
                            <a href="javascript:;"data-toggle="collapse"data-target="#assessment">
                                <i class="fa fa-fw fa-edit"></i> Assessments <i class="fa fa-fw fa-caret-down"></i>
                            </a>
                            <ul id="assessment"class="collapse">
                                <li id='assess_assign_button'onclick="assess_assign()">
                                    <a href="navbar.php?title=Assignments&page=assess-assignment">Assignments</a>
                                </li>
                                <li id='assess_test_button'onclick="assess_test()">
                                    <a href="navbar.php?title=Tests&page=assess-tests">Tests</a>
                                </li>
                            </ul>
                        </li>
                        <li id='upload_button'onclick="upload()">
                            <a href="javascript:;"data-toggle="collapse"data-target="#uploads">
                                <i class="fa fa-fw fa-cloud-upload"></i> Uploads <i class="fa fa-fw fa-caret-down"></i>
                            </a>
                            <ul id="uploads"class="collapse">
                                <li id='upload_student_button'onclick="upload_student()">
                                    <a href="navbar.php?title=Calendar%20Data&page=upload-calendar">Calendar Data</a>
                                </li>
                                <li id='upload_timetable_button'onclick="upload_timetable()">
                                    <a href="navbar.php?title=Timetable%20Data&page=upload-timetable">Timetable Data</a>
                                </li>
                            </ul>
                        </li>
                        <?php
                        if ($_SESSION['type']=='admin') {
                        echo " <li id='admin_button'onclick='admin()'>
                            <a href='navbar.php?title=Adminstrative%20Tasks&page=admin-tasks'><i class='fa fa-fw fa-lock'></i> Administrator tasks</a>
                        </li>";
                        }
                        ?>
                    </ul>
                </div>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper"class="">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                            Academic Notifier
                            <small id="page_title">
                            <?php if (isset($title)) {
                            echo $title;
                            }
                            else
                            echo "Home"?>
                            </small>
                            </h1>
                        </div>
                    </div>
                    <div id="page-content">
                        <!-- CODE GOES HERE
                        Include pages - store only div of page -->
                        <?php if (isset($page)) {
                        include_once $page;
                        }
                        else
                        include 'home.php';
                        ?>
                        <!-- TILL HERE -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
    </body>
</html>