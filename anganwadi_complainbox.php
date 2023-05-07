<?php 

$con = mysqli_connect("localhost","root");
if($con){
    echo"Submited";
}else{
    echo"Submition Error";
}

mysqli_select_db($con,"admin_add_anganwadi");

$acn =$_POST['acname'];
$acu =$_POST['acusername'];
$com =$_POST['complain'];



$query ="INSERT INTO anganwadicomplains( acname, acusername, complain) VALUES ('$acn','$acu','$com')";
mysqli_query($con, $query);
header('location:css.php');

?>