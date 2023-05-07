<?php
if(isset($_POST['submit']))
{
    $host="localhost";
    $user="root";
    $pass="";    
    $db="logindatabase";
       $conn=mysqli_connect($host,$user,$pass,$db);
       if(!$conn)
       {
        echo "<script>alert('error in database connection');</script>";
       }
       $username=$_POST['username'];
    $password=$_POST['password'];
       $query="SELECT * from anglogin where username= '$username' and password ='$password' ";
       $result= mysqli_query($conn,$query) or die(mysqli_error($conn));
       $count = mysqli_num_rows($result);
       if($count >= 1)
       {
        session_start();
        $_SESSION['logindatabase']='true';
        echo "<script>alert('Login Sucessfully');</script>";
        echo "<script>location.href='demo.php';</script>";

       }
       else{
        echo "<script>alert('Wrong username or Password');</script>";
        echo "<script>location.href='highauthoritylogin.php';</script>";
       }
}
 
?>