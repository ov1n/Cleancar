<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Customer registration form</title>

         <!-- get font just in case -->
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\register.css">
        
        <!-- get external jquery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

        <!-- get external js file -->
        <script type="text/javascript" src="public\js\register.js"></script>
    </head>

    <body>
      <!-- include footer seperately -->
      <?php
                include("nav-bar.php");
            ?>

        <ul class="breadcrumb">
          <img src="public\images\4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Customer Registration</li>  
        </ul>
        <form method="POST" name="reg_form" id="reg_form">
            <div class="container">  
              <h1>Registration</h1>
              <p>Please fill in this form to register as a customer</p>
              <div class="background">
                <hr>
              <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

              <!-- &ensp characters are used to improve clarity and keep clear spacing -->
              
              &ensp;&ensp;&ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
              <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
              <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="vehicle_number"><div class="form_label"><b>Vehicle Number</b></div></label>
              <input type="text" placeholder="Vehicle Number" name="vehicle_number" id="vehicle_number" required>&ensp;
              <button class="btn btn_round" id="add_vehicle_number" formnovalidate>&ensp;+&ensp;</button></br>

              &ensp;&ensp;&ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
              <input type="text" placeholder="Enter Your Address" name="address" id="address" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="email"><div class="form_label"><b>Email</b></div></label>
              <input type="email" placeholder="Enter Your Email Address" name="email" id="email" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
              <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='confirm_password();' required></br>
          
              &ensp;&ensp;&ensp;&ensp;<label for="psw-repeat"><div class="form_label"><b>Repeat Password</b></div></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onkeyup='confirm_password();' required></br>
              <div id="psw-message"><p></p></div>
              &ensp;&ensp;&ensp;&ensp;<h3>Contact Numbers</h3>
              &ensp;&ensp;&ensp;&ensp;<label for="mobile_tel_no" class="form_label"><div class="form_label"><b>Mobile</b></div></label>
              <input type="tel" placeholder="Enter Your mobile number" name="mobile_tel_no" id="mobile_tel_no" required></br>
              
              &ensp;&ensp;&ensp;&ensp;<label for="home_tel_no" class="form_label"><div class="form_label"><b>Home</b></div></label>
              <input type="tel" placeholder="Enter Your Home number" name="home_tel_no" id="home_tel_no" required>
              </br>
              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px" onclick="create()">Register</button>
              </div>
              
            </div>
            </br></br>
          </div>
          <hr>
        </div>
            </form>
            <!-- include footer seperately -->
            <?php
                include("footer.php");
            ?>
          
    </body>
</html>