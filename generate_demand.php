<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="admin_add_anganwadi.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


   </head>
<body>

  <div class="container">
    
    <div class="title">Generate Demand</div>
    <div class="content">
      <form action="aportal_demands.php"  method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Anganwadi Name</span>
            <input type="text" name="aname" placeholder="Enter Anganwadi Name" required>
          </div> 
          <div class="input-box">
            <span class="details">Rice</span>
            <input type="text" name="rice" placeholder="Enter No. Of Quantity In Kgs" required>
          </div>
          <div class="input-box">
            <span class="details">Wheat</span>
            <input type="text" name="wheat" placeholder="Enter No. Of Quantity In Kgs" required>
          </div>
          <div class="input-box">
            <span class="details">Toys</span>
            <input type="text" name="toys" placeholder="Enter No. Of Quantity" required>
          </div>


          <div class="input-box">
            <span class="details">Drawing Books</span>
            <input type="text" name="drawingbooks" placeholder="Enter No. Of Quantity" required>
          </div>

          <div class="input-box">
            <span class="details">Story Books</span>
            <input type="text" name="storybooks" placeholder="Enter No. Of Quantity" required>
          </div>

          <div class="input-box">
            <span class="details">Food Packet(Balbhog)</span>
            <input type="text" name="foodpacket" placeholder="Enter No. Of Quantity" required>
          </div>
        
          <div class="input-box">
            <span class="details">Other</span>
            <input type="text" name="other" placeholder="Decribe Resource" required>
          </div>
          
          
        </div>

        <div class="Register">
          
          
        </div>
        <div class="button">
          <input type="submit" value="Request">
          
        </div>

        <div>
        <p><a href="anganwadiofficelogin.php"><i>Logout!</i></a></p>
        </div>

        <div>
        <p><a href="display_demands1.php"><i>Show Details</i></a></p>
        </div>

      </form>
    </div>
  </div>

</body>
</html>












