<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Gujrat Anganwadi Portal</title>
    <meta charset="UTF-8">
<!-- 
    <link rel="stylesheet" href="admin_add_anganwadi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->

    <meta content="" name="description">
    <meta content="" name="keywords">

    
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    
    <link href="assets/css/style.css" rel="stylesheet">


</head>
<body>
    <div class="container"> 
    <h1>Details Of Anganwadies</h1>
    <p><a href="index.php"><i>Go To Home!</i></a></p>
    <br>

    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Address</th>
                <th>Pin Code</th>
                <th>Phone Number</th>
                <th>No. Of Children</th>
                


            </tr>
        </thead>

        <tbody>
            <?php
                
                $server = "localhost";
                $user = "root";
                $pass = "";
                $db = "admin_add_anganwadi";

                $conn =new mysqli($server, $user, $pass, $db);

                if($conn->connect_error){
                    die("connection failed". $conn->connect_error);
                }

                $sql = "SELECT * FROM anganwadi_list WHERE `anganwadi_list`.`id` > 10";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid Query:". $conn->error);
                }

                while($row=$result->fetch_assoc()){

                echo"<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["fullname"]."</td>
                    <td>". $row["username"]."</td>
                    <td>" . $row["email"]."</td>
                    <td>" . $row["address"]."</td>
                    <td>". $row["pincode"]."</td>
                    <td>" . $row["phonenumber"]."</td>
                    <td>". $row["noofchildren"]."</td>   
                 </tr>";
                }

            ?>
        </tbody>

    </table>
    </div>
</body>
</html>