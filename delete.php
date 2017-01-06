<?php

$server = 'localhost';
$username='proziee';
$password='';
$database='c9';
$table = 'event';
$page=1;
$port = 3306;
$conn = mysqli_connect($server,$username,$password,$database,$port) or die(mysql_error());

echo "<a href='https://hungerniner-proziee.c9users.io/Map.html'>Home</a><br>";
echo "<a href='https://hungerniner-proziee.c9users.io/Index.php'>Table</a><br><br>";

if(isset($_POST['delete'])){
    $event_id = $_POST['delete'];
    $sql = "DELETE FROM ".$table." WHERE event_id= ".$event_id;
    $result = mysqli_query($conn, $sql);
    //echo "event id: ".$event_id;
    //echo $sql;
    echo "<script type='text/javascript'>alert('The event has been deleted.');</script>";
    sleep(5);
    header('Location: https://hungerniner-proziee.c9users.io/Index.php');
    exit;
}else{
    echo "Error deleting record: " . mysqli_error($conn);
    sleep(10);
}

mysqli_close($conn);

