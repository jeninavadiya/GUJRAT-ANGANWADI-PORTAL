<?php
$status = 2;
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
        echo "<script>alert('Resource rejected successfully');</script>";
        echo "<script>location.href='display_demands.php';</script>";
    }
    else
    {
        echo "<script>alert('Resource  not rejected');</script>";
        echo "<script>location.href='display_demands.php';</script>";
    }

?>