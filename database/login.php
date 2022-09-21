<?php
$email=$_POST['email'];
$password=$_POST['password'];
$query=

//database connection
$conn= new mysqli('localhost','root','','login_test');
if ($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO login(email	,password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo "Login Successfully";
    $stmt->close();
    $conn->close();
    
}

?>