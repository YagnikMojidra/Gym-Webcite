<?php
//database connection
$conn= new mysqli('localhost','root','','login_test');
if ($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{

    // check record here or not
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from login where email='$email' and password='$password'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo "<h1>login Sucessfully</h1>";
    }else{
        echo "<h1>Please Sign Up here </h1>";
    }
    
}

?>
