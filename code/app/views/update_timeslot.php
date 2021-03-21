<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Update Service</title>
    
         <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\update_timeslot.css"><!-- add style to form -->
        <script type="text/javascript" src="public\js\add_timeslot.js"></script>
      
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>>
    </head>

    <body>
    <!-- onsubmit="send_update_data()" -->

    <form name="timeslot_update_form" id="timeslot_update_form" method = "post" action = "update_timeslot_" >

        <div class="container">  
          
          <div class="background">

      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
      
        <li><a href="home">Home</a></li>
        <li><a href="manager">Manager</a></li>
        <li><a href="timeslot_list">timeslot list</a></li>

        <li>Update Timeslot</li>
      </ul><!-- breadcrumb -->
           <h1>Update Time Slots <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></h1> <hr style="width: 60%;"></br> </br>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->
                
              <!-- value = '<php echo "$array[start_time]"?>' -->
                &ensp;&ensp;<label for="lift_no"><div class="form_label"><b>timeslot_no</b></div></label>
                <input type="text"  name="lift_no" id="lift_no" value = '<?php echo "$array[lift_no]"; ?>'  disabled></br>

                <input type="hidden"  name="timeslot_no" id="timeslot_no" value = '<?php echo "$array[timeslot_no]"; ?>'  ></br>

                &ensp;&ensp;<label for="new_start_time"><div class="form_label"><b>New Start Time</b></div></label>
                <input type="text" placeholder="Enter new start time" name="new_start_time" id="new_start_time" value = '<?php echo "$array[start_time]"; ?>' required size="50"></br>

                &ensp;&ensp;<label for="new_end_time"><div class="form_label"><b>New End Time</b></div></label>
                <input type="text" placeholder="Enter new end time" name="new_end_time" id="new_end_time" value = '<?php echo "$array[end_time]"; ?>' required size="50"></br>

                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Update</button></br></br></br></br></br></br></br></br>
              </div><!-- form_content --> 
            </div><!-- card -->
          
            </br> </br> </br> </br> </br> </br>
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