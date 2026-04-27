<?php
$fullname=$_POST['fullname']??"";
$email=$_POST['email']??"";
$message=$_POST['message']??"";

//Database connection
$conn = new mysqli('localhost','root','','portfoli');
if($conn->connect_error){
    die('Conection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("INSERT into customer_review(fullname,email,message) values(?,?,?)");
    $stmt->bind_param("sss",$fullname,$email,$message);
    $stmt->execute();
    echo "Your message has been sent successfully.";
    $stmt->close();
    $conn->close();
}
?>