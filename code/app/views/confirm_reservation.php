<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\form.css">                  <!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css">                <!-- add style to footer -->
        <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">  <!-- add style to alert box -->
        <!-- get imported jquery -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>
        <!-- get external js file -->
        <script type="text/javascript" src="public\js\reservation.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>
        
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
        <li><a href="customer">Customer</a></li>
        <li>Confirm Reservation</li>    
      </ul><!-- breadcrumb -->

      <form id="reservation" name="reservation">
        <div class="container">  
          <h1>Confirm Reservation</h1>
          <hr>
          <p>Please check if following information is valid</p>
            <div class="background">
              <hr>
              <div class="card" >
                <div id=form_content> <!-- div to center needed elements -->
                
                <!-- Each data is taken from database tables -->
                &ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category:</b></div></label>
                <span class="reservation_info" > SET VALUE</span></br></br></br></br>
  
                &ensp;&ensp;<label for="vehicle_no"><div class="form_label"><b>Vehicle Number:</b></div></label>
                <span class="reservation_info" > SET VALUE</span></br></br></br></br>

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Date: </b></div></label>
                <span class="reservation_info" > SET VALUE</span></br></br></br></br>

                &ensp;&ensp;<label for="time"><div class="form_label"><b>Time:</b></div></label>
                <span class="reservation_info" > SET VALUE</span></br></br></br></br>

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service type:</b></div></label>
                <span class="reservation_info" > SET VALUE</span></br></br></br></br>

                <button type="submit" class="btn" class="form_btn" style="float:left;">Edit details</button>
                </br></br></br></br></br></br></br></br>

                <h1>Confirm Reservation?</h1>
                <!-- The CSS files style is overridden as custom margins have to be kept -->
                <button type="submit" class="btn" class="form_btn" style="float:left;margin-right:73px;" >Make Advance Payment</button>
                <button type="submit" class="btn" class="form_btn" style=float:left;margin-right:23px;>Yes</button>
                <button type="cancel" class="btn cancelbtn" class="form_btn" style="float:left;">No</button>
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