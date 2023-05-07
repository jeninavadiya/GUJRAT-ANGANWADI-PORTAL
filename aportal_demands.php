<?php 

$con = mysqli_connect("localhost","root");
if($con){
    echo"Submited";
}else{
    echo"Submission Error";
}

mysqli_select_db($con,"admin_add_anganwadi");

$an =$_POST['aname'];
$ri =$_POST['rice'];
$whe =$_POST['wheat'];
$to =$_POST['toys'];
$drab =$_POST['drawingbooks'];
$strb =$_POST['storybooks'];
$foodp =$_POST['foodpacket'];
$otr =$_POST['other'];


$query ="INSERT INTO demand_request(aname, rice, wheat, toys, drawingbooks, storybooks, foodpacket, other) VALUES ('$an','$ri','$whe','$to','$drab','$strb','$foodp','$otr')";
mysqli_query($con, $query);
header('location:rss.php');

?>