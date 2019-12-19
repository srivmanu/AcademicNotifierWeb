function home() {
    document.getElementById('page_title').innerHTML = 'Home';
    document.getElementById('timetable_button').className = '';
    document.getElementById('home_button').className = 'active';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
}

function calendar() {
    document.getElementById('page_title').innerHTML = 'Calendar';
    document.getElementById('timetable_button').className = '';
    document.getElementById('home_button').className = '';
    document.getElementById('calendar_button').className = 'active';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
}

function timetable() {
    document.getElementById('page_title').innerHTML = 'Time Table';
    document.getElementById('timetable_button').className = 'active';
    document.getElementById('home_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('admin_button').className = '';
}

function notifications() {
    document.getElementById('page_title').innerHTML = 'Notifications';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = 'active';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
}

function admin() {
    document.getElementById('page_title').innerHTML = 'Administative Tasks';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = 'active';
}

function assess_assign() {
    document.getElementById('page_title').innerHTML = 'Assignments';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('assess_button').className = 'active';
    document.getElementById('assess_assign_button').className = 'fuck';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
}

function assess_test() {
    document.getElementById('page_title').innerHTML = 'Tests';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = 'active';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('assess_test_button').className = 'fuck';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
}

function upload_timetable() {
    document.getElementById('page_title').innerHTML = 'Upload Timetable Data';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('upload_student_button').className = '';
    document.getElementById('upload_test_button').className = 'fuck';
    document.getElementById('upload_button').className = 'active';
    document.getElementById('admin_button').className = '';
}

function upload_student() {
    document.getElementById('page_title').innerHTML = 'Upload Students Data';
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('assess_test_button').className = '';
    document.getElementById('assess_assign_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_button').className = 'active';
    document.getElementById('upload_student_button').className = 'fuck';
    document.getElementById('upload_test_button').className = '';
    document.getElementById('admin_button').className = '';
}

function assess() {
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = 'active';
    document.getElementById('upload_button').className = '';
    document.getElementById('admin_button').className = '';
}

function upload() {
    document.getElementById('home_button').className = '';
    document.getElementById('timetable_button').className = '';
    document.getElementById('calendar_button').className = '';
    document.getElementById('notifications_button').className = '';
    document.getElementById('assess_button').className = '';
    document.getElementById('upload_button').className = 'active';
    document.getElementById('admin_button').className = '';
}

function findSession()
{
    var d=new Date();
    var year=d.getFullYear() - 1;
    year=year-document.getElementById('year').value;
    document.getElementById('session').value = year;
}

function newteacher() {
    var hello=document.getElementById('addteacher');
    if (hello.style.display == 'block') {
        hello.style.display = 'none';
        document.getElementById('user').className = "btn btn-primary pull-left";
    }
    else if (hello.style.display == 'none') {
        hello.style.display = 'block';
        document.getElementById('user').className = "btn btn-primary pull-left disabled";
    }
}
function newuser() {
    var hello=document.getElementById('adduser');
    if (hello.style.display == 'block') {
        hello.style.display = 'none';
        document.getElementById('teacher').className = "btn btn-primary pull-left";
    }
    else if (hello.style.display == 'none') {
        hello.style.display = 'block';
        document.getElementById('teacher').className = "btn btn-primary pull-left disabled";
    }
}

function timetablevis() {
    document.getElementById('tt_data').style.display = 'block'
}
