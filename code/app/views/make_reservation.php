<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->

        <!-- get external js file -->
        <script type="text/javascript" src="public\js\reservation.js"></script>
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <?php
        echo($_SESSION["uname"]);
        
        //details test
        //echo(($_SESSION["details"])["first_name"]);
        //echo(($_SESSION["details"])["last_name"]);
        //echo(($_SESSION["details"])["email"]);
        //echo(($_SESSION["details"])["first_name"]);
      ?>

      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
         <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Customer</a></li>
        <li>Make Reservation</li>    
      </ul><!-- breadcrumb -->

      <form action="confirm_reservation">
        <div class="container">  
          <h1>Make Reservation</h1>
          <hr>
          <p>Please fill in this form to make reservation</p>
            <div class="background">
              <hr>
              <div class="card" >
                <div id=form_content> <!-- div to center needed elements -->
                
                <!-- Each div has php echo function to autofill the form from user account details -->
                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name"
                 value=<?php echo(($_SESSION["details"])["first_name"]); ?> ></br>
  
                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name"
                value=<?php echo(($_SESSION["details"])["last_name"]); ?> ></br>></br>

                &ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category</b></div></label>
                <select name="vehicle_category" id="vehicle_category">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="cab">Cab</option>
                    <option value="jeep">Jeep</option>
                </select><br>
                
                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="e-mail" id="e-mail" required
                value=<?php echo(($_SESSION["details"])["email"]); ?>> </br>

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="date" placeholder="Enter the date" name="date" id="date" required></br>

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                </select><br>

                &ensp;&ensp;<label for="tp_no"><div class="form_label"><b>Contact Number</b></div></label>
                <input type="tel" placeholder="Enter Your Telephone Number" name="tp_no" id="tp_no" required
                value=<?php echo(($_SESSION["details"])["mobile_tel_no"]); ?>></br>

                <button type="submit" class="btn cancelbtn" class="form_btn">Cancel</button>
                <button type="submit" class="btn" class="form_btn" onclick="confirmSubmit()">Submit</button>
              </div><!-- form_content -->              
            </div><!-- card -->
            </br></br>
          </div><!-- background -->
          <hr>
        </div><!-- container -->
      </form>

      <?php 
          //get header in seperate file
          include("nav_profile.php");
      ?>

      <?php 
        //get footer in seperate file
        include("footer.php");
      ?>      
          
    </body>
</html>