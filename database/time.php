<?php
$date=$_POST['date'];
$time=$_POST['time'];


//database connection
$conn= new mysqli('localhost','root','','schedule_time');
if ($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO time( date, time ) values(?,?)");
    $stmt->bind_param("ss",$date,$time);
    $stmt->execute();

    echo "ScheduleTime Successfully Allocated.";
    $stmt->close();
    $conn->close();
}

?>