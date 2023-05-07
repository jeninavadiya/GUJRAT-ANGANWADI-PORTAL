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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
    <!-- <link rel="stylesheet" href="admin_add_anganwadi.css"> -->
     <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">  -->



</head>
<body>

    <div class="container">
    <h1>Details Of Requested Resources</h1>
    <p><a href="highauthority_portal.php"><i>Go To Dashboard!</i></a></p>
    <br>

        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Rice</th>
                    <th>Wheat</th>
                    <th>Toys</th>
                    <th>Drawing Books</th>
                    <th>Story Books</th>
                    <th>Food Packets</th>
                    <th>Other</th>
                    <th>Status</th>
                    <th>Action</th>
                    

                    
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

                    $sql = "SELECT * FROM demand_request";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("Invalid Query:". $conn->error);
                    }

                    while($row=$result->fetch_assoc()){
                        $status=$row["Status"];

                    echo"<tr>
                        <td>" . $row["id"]. "</td>
                        <td>" . $row["aname"]."</td>
                        <td>". $row["rice"]."</td>
                        <td>" . $row["wheat"]."</td>
                        <td>" . $row["toys"]."</td>
                        <td>". $row["drawingbooks"]."</td>
                        <td>" . $row["storybooks"]."</td>
                        <td>". $row["foodpacket"]."</td>
                        <td>". $row["other"]."</td>
                        <td>";

                        if($status == 0)
                        {
                            echo "Pending";
                            ?>
                            <td>
                            <a onclick="javascript: return confirm('Are you sure? you want to approve?');" href="approver.php?id=<?php echo $row['id']; ?>">Approve</a>
                            <a  onclick="javascript: return confirm('Are you sure? you want to reject?');" href="rejectr.php?id=<?php echo $row['id']; ?>">Reject</a></td>
                            <?php
                        }elseif($status == 1)
                        {
                            echo "Approved";
                            ?>
                            <td><a  onclick="javascript: return confirm('Are you sure? you want to reject?');" href="rejectr.php?id=<?php echo $row['id']; ?>">Reject</a></td>
                            <?php
                        }else
                        {
                            echo "Rejected";
                            ?>
                            <td><a onclick="javascript: return confirm('Are you sure? you want to approve?');" href="approver.php?id=<?php echo $row['id']; ?>">Approve</a></td>
                            <?php
                        }
                        echo "</td>";
                        ?>
                        
                    
                        <?php
                    }

                
                ?>
            </tbody>

        </table>
    </div>
</body>
</html>