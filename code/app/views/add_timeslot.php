<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Add Timeslot</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\add_timeslot.css"><!-- add style to form -->
        
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="public\js\add_timeslot.js"></script>
      <script src="public/js/jquery/jquery.alertable.min.js"></script>
    </head>

    <body>
      
    <!-- onsubmit="send_timeslot_data() -->

    <form name="add_timeslot_form" id="add_timeslot_form" method = "post" onsubmit="send_timeslot_data()">
        <div class="container">  
         
          <div class="background">
             <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">
             
              <li><a href="home">Home</a></li>
              <li><a href="manager">Manager</a></li>
              <li><a href="timeslot_list">Timeslot List</a></li>
              <li>Add Timeslot</li>
            </ul><!-- breadcrumb -->
           <h1>Add Time Slots <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></h1> <hr>
              <p>Please fill in this form to add Time Slot</p>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="start_time"><div class="form_label"><b>Start Time</b></div></label>
                <input type="text" placeholder="Enter starting time" name="start_time" id="start_time" required size="50"></br>

                &ensp;&ensp;<label for="end_time"><div class="form_label"><b>End Time</b></div></label>
                <input type="text" placeholder="Enter ending time" name="end_time" id="end_time" required size="50"></br>

                &ensp;&ensp;<label for="lift_no"><div class="form_label"><b>Lift No</b></div></label>
                <select name="lift_no" id="lift_no">
                  <option value="" selected disabled hidden style="color:gray">Select Lift</option>
                  <option value="1">L_01</option>
                  <option value="2">L_02</option>
                  <option value="3">L_03</option>
                </select><br>

                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Add</button></br></br> </br></br>
              </div><!-- form_content --> 
            </div><!-- card -->
            
            </br></br> </br></br>
          </div><!-- background -->
         
        </div><!-- container -->
      </form>

      <?php
          //include nav bar externally 
          include("nav_profile.php");
      ?>

      <?php 
        //get footer in seperate file
        include("footer.php");
      ?>
          
    </body>
</html>