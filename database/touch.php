<?php
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


//database connection
$conn= new mysqli('localhost','root','','information');
if ($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO client_info( firstName,lastName,email,subject,message ) values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$firstName,$lastName,$email,$subject,$message);
    $stmt->execute();

    echo "Your Information Successfully Submitted";
    $stmt->close();
    $conn->close();
}

?>