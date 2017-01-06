<?php
$server = 'localhost';
$username='proziee';
$password='';
$database='c9';
$table = 'event';
$page=1;
$port = 3306;
//create conection
$conn = mysqli_connect($server,$username,$password,$database,$port) or die(mysql_error());

    if(! get_magic_quotes_gpc()){
        $event_name = addslashes ($_POST['eventName']);
        $event_number = addslashes ($_POST['eventRoom']);
        $event_building = addslashes ($_POST['buildingInput']);
        $event_start_date = addslashes ($_POST['startDate']);
        $event_end_date = addslashes ($_POST['endDate']);
        $event_start_time = addslashes ($_POST['startTime']);
        $event_end_time = addslashes ($_POST['endTime']);
    } else {
        $event_name = $_POST['eventName'];
        $event_number = $_POST['eventRoom'];
        $event_building = $_POST['buildingInput'];
        $event_start_date = $_POST['startDate'];
        $event_end_date = $_POST['endDate'];
        $event_start_time = $_POST['startTime'];
        $event_end_time = $_POST['endTime'];
    }
    
    $insert = "insert into event".
                "(event_name, event_room, event_building, start_date, end_date, start_time, end_time)" .
                "values" . 
                "('$event_name','$event_number','$event_building','$event_start_date','$event_end_date','$event_start_time','$event_end_time')";
    
    
    //$retval = mysqli_query($insert,$conn);
    if(! $retval = mysqli_query($conn,$insert) ){
        die('Could not enter data: ' . mysql_error());
    }
    
    echo "Entered data successfully";
    
    mysql_close($conn);
    
    header('Location: https://hungerniner-proziee.c9users.io/Map.html');
    exit;
?>
