<?php
if(isset($_POST['submit']))
{
    $host="localhost";
    $user="root";
    $pass="";    
    $db="admin_add_anganwadi";
       $conn=mysqli_connect($host,$user,$pass,$db);
       if(!$conn)
       {
        echo "<script>alert('error in database connection');</script>";
       }
       $username=$_POST['username'];
    $password=$_POST['password'];
       $query="SELECT * from anganwadi_list where username= '$username' and password ='$password' ";
       $result= mysqli_query($conn,$query) or die(mysqli_error($conn));
       $count = mysqli_num_rows($result);
       if($count >= 1)
       {
        session_start();
        $_SESSION['admin_add_anganwadi']='true';
        echo "<script>alert('Login Sucessfully');</script>";
        echo "<script>location.href='highauthority_portal.php';</script>";
        //header('location: demo.php ');

       }
       else{
        echo "<script>alert('Wrong username or Password');</script>";
        echo "<script>location.href='highauthoritylogin.php';</script>";
       }
}
 
?>