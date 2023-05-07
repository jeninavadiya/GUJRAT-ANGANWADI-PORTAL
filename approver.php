<?php
$status = 1;
$id= $_GET['id'];
$server = "localhost";
                $user = "root";
                $pass = "";
                $db = "admin_add_anganwadi";

                $conn =new mysqli($server, $user, $pass, $db);

                if($conn->connect_error){
                    die("connection failed". $conn->connect_error);
                }
    $cmd ="update demand_request set status =$status where id='$id'";
    $result= mysqli_query($conn,$cmd) or die(mysqli_error($conn));
    if($result)
    {
        echo "<script>alert('Resource approved successfully');</script>";
        echo "<script>location.href='display_demands.php';</script>";
    }
    else
    {
        echo "<script>alert('Resource  not approved');</script>";
        echo "<script>location.href='display_demands.php';</script>";
    }

?>