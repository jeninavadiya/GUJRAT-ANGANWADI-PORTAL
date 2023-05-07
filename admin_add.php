<?php 

$con = mysqli_connect("localhost","root");
if($con){
    echo"Submited";
}else{
    echo"Submition Error";
}

mysqli_select_db($con,"admin_add_anganwadi");

$fn =$_POST['fullname'];
$un =$_POST['username'];
$eml =$_POST['email'];
$add =$_POST['address'];
$pin =$_POST['pincode'];
$noc =$_POST['noofchildren'];
$phn =$_POST['phone'];
$pass =$_POST['pass'];






$query ="INSERT INTO anganwadi_list(fullname, username, password, email, address, pincode, phonenumber, noofchildren) VALUES ('$fn','$un','$pass','$eml','$add','$pin','$phn','$noc')";
mysqli_query($con, $query);
header('location:anas.php');

?>