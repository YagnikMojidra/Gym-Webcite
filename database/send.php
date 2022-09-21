<?php
$number=$_POST['country_code'];
$phoneNumber=$_POST['phoneNumber'];


//database connection
$conn= new mysqli('localhost','root','','contact_number');
if ($conn->connect_error){
    die("Connection Failed :".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("INSERT INTO phone_number( country_code, phoneNumber ) values(?,?)");
    $stmt->bind_param("ii",$number,$phoneNumber);
    $stmt->execute();

    echo "Mobile Number Successfully Submitted";
    $stmt->close();
    $conn->close();
}

?>