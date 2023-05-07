<?php


$server = "localhost";
$user = "root";
$pass = "";
$db = "admin_add_andanwadi";

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn){
    echo "<script>alert('Connection Faild')</script>";
}

?>