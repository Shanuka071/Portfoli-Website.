<?php
//Database connection
$conn = new mysqli('localhost','root','','portfoli');
if($conn->connect_error){
    die('Conection Failed :'.$conn->connect_error);
}
?>