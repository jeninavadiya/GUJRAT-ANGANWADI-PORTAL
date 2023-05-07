<?php 

$con = mysqli_connect("localhost","root");
if($con){
    echo"Submited";
}else{
    echo"Submition Error";
}

mysqli_select_db($con,"admin_add_anganwadi");

$rnm =$_POST['rname'];
$ri =$_POST['cid'];
$rpl =$_POST['reply'];



$query ="INSERT INTO reply( rname, cid, reply) VALUES ('$rnm','$ri','$rpl')";
mysqli_query($con,$query);
header('location:newabc.php');

?>