<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="admin_add_anganwadi.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


   </head>
<body>

  <div class="container">
    
    <div class="title">Add New Anganwadi</div>
    <div class="content">
      <form action="admin_add.php"  method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>


          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your Address" required>
          </div>

          <div class="input-box">
            <span class="details">Pin Code</span>
            <input type="text" name="pincode" placeholder="Enter your Pin Code" required>
          </div>

          <div class="input-box">
            <span class="details">No. Of Children</span>
            <input type="text" name="noofchildren" placeholder="Enter No. Of Children" required>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="pass" placeholder="Enter your password" required>
          </div>
        </div>

        <div class="Register">
          
          
        </div>
        <div class="button">
          <input type="submit" value="Add">
          
        </div>

        <div>
        <p><a href="adminlogin.php"><i>Logout!</i></a></p>
        </div>

        <div>
        <p><a href="display_detail.php"><i>Show Details</i></a></p>
        </div>

      </form>
    </div>
  </div>

</body>
</html>
