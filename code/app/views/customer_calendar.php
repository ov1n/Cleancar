<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\customer_caledar.css">                  <!-- add style to form -->
       
        <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">  <!-- add style to alert box -->

        <!-- style needed for calendar tables -->
        <link rel="stylesheet" href="public/css/calendar_table.css">


        <!-- get imported jquery -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>
        <!-- get external js file -->
        <script type="text/javascript" src="public\js\reservation.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>
        <script src="public/js/util/time.js"></script>

        <!-- link calendar table js file -->
        <script type="text/javascript" src="public\js\calendar\calendar_table.js"></script>

        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body >

      <script  type="text/javascript">
        //assign each variables
        var full_service_slots= <?php echo json_encode($_SESSION["full_service_slots"]); ?>;
        var normal_service_slots= <?php echo json_encode($_SESSION["normal_service_slots"]); ?>; 
        var body_wash_slots= <?php echo json_encode($_SESSION["body_wash_slots"]); ?>;
        
        var full_service_list= <?php echo json_encode($_SESSION["full_service_list"]); ?>;
        var normal_service_list= <?php echo json_encode($_SESSION["normal_service_list"]); ?>;
        var body_wash_list= <?php echo json_encode($_SESSION["body_wash_list"]); ?>;
        //console.log(full_service_list);

      //code to create dynamic table
      </script>
      
      <form id="reservation_time" name="reservation_time" method="POST" action="make_reservation">
      
        <div class="container">  
          
            <div class="background">
               <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
        
        <li><a href="home">Home</a></li>
        <li><a href="home">Customer</a></li>
        <li>Select Date</li>    
      </ul><!-- breadcrumb -->
      <h1>Select Date &ensp;<i class="fas fa-calendar-alt fa-lg"></i></h1><hr style="width: 60%;">
         
          <p style="text-align: center;color: white">Please select a date and a time slot for the reservation</p>
              <div class="card" >
                <div id=form_content> <!-- div to center needed elements -->
                
                <!-- Each div has php echo function to autofill the form from user account details -->
                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type:</b></div></label>
                <select name="service_type" id="service_type" onmousedown="this.value='';" onchange="display_table(this.value);">
                  <option value="Normal Service">Normal Service</option>
                  <option value="Full Service">Full Service</option>
                  <option value="Body Wash">Body wash</option>
                </select><br>

                <!--set DATE to  hidden field -->
                <input type="hidden" id="date" name="date" value="">
                <input type="hidden" id="time" name="time" value="">

                <!-- get external components -->
                <script src="public/js/jquery/calendar/jquery-pseudo-ripple.js"></script>
                <script src="public/js/jquery/calendar/jquery-nao-calendar.js"></script>

                </div>
                  <h3> Timeslots </h3>

                <div id="table_create">
                </div>

                </br>
                <div id="date_showw"></div>

                <!-- link local js file -->
                <!--<script src="public/js/customer_calendar.js"></script> -->
                <div id="calendar_message"><p></p></div>               

                <button type="reset" name="submitted" class="btn cancelbtn" class="form_btn">Cancel</button>
                <button type="submit" name="reserve" class="btn" class="form_btn" id="reserve" disabled>Submit</button></br></br>
            </br></br>

              </div><!-- form_content -->              
            </div><!-- card -->
            </br></br>
          </div><!-- background -->
      
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