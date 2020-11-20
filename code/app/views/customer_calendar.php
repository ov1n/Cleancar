<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\form.css">                  <!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css">                <!-- add style to footer -->
        <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">  <!-- add style to alert box -->

        <!-- style needed for calendar -->
        <link rel="stylesheet" href="public/css/calendar_card.css">
        <link rel="stylesheet" href="public/css/calendar/aicon/style.css">
        <link rel="stylesheet" href="public/css/calendar/4grid.css">
        <link rel="stylesheet" href="public/css/calendar/jquery-pseudo-ripple.css">
        <link rel="stylesheet" href="public/css/calendar/calendar_construct.css">



        <!-- get imported jquery -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>
        <!-- get external js file -->
        <script type="text/javascript" src="public\js\reservation.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <?php
        //echo($_SESSION["uname"]);
        
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
        <li>Select Date</li>    
      </ul><!-- breadcrumb -->

      <form id="reservation_time" name="reservation_time" method="POST" action="make_reservation">
        <div class="container">  
          <h1>Select Date</h1>
          <hr>
          <p>Please select a date and a time slot for the reservation</p>
            <div class="background">
              <hr>
              <div class="card" >
                <div id=form_content> <!-- div to center needed elements -->
                
                <!-- Each div has php echo function to autofill the form from user account details -->
                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type:</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full Service">Full Service</option>
                    <option value="Normal Service">Normal Service</option>
                    <option value="Body Wash">Body wash</option>
                </select><br>

                <!--ADD DATE SELECTOR IF CALENDAR DOESNT WORK -->
                &ensp;&ensp;<label for="time"><div class="form_label"><b>Time</b></div></label>
                <select name="time" id="time">
                    <option value="08:00:00">08.00</option>
                    <option value="10:00:00">10.00</option>
                    <option value="12:00:00">12.00</option>
                </select><br>

                <!--set DATE to  hidden field -->
                <input type="hidden" id="date" name="date" value="2020-11-26">

                <!-- get external components -->
                <script src="public/js/jquery/calendar/jquery-pseudo-ripple.js"></script>
                <script src="public/js/jquery/calendar/jquery-nao-calendar.js"></script>

                <div >
                  <h3>Date</h3>
                  <div class="calendar-3 calendar_card" onclick="date_display()"></div>
                </div>

                </br>
                <div id="date_display"></div>
                <!-- link local js file -->
                <script src="public/js/customer_calendar.js"></script>
                
                

                <button type="cancel" class="btn cancelbtn" class="form_btn">Cancel</button>
                <button type="submit" class="btn" class="form_btn" >Submit</button>
              </div><!-- form_content -->              
            </div><!-- card -->
            </br></br>
          </div><!-- background -->
          <hr>
        </div><!-- container -->
      </form>

      <script src="public/js/jquery/calendar/jquery-nao-calendar.js"></script>

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