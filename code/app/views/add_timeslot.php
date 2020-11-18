<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Add Service</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\add_timeslot.css"><!-- add style to form -->
        
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      
    

      <form action="./controllers/Register.php">
        <div class="container">  
         
          <div class="background">
             <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">
             
              <li><a href="home">Home</a></li>
              <li><a href="manager">Manager</a></li>
              <li>Add Timeslot</li>
            </ul><!-- breadcrumb -->
           <h1>Add Time Slots <i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></h1> <hr>
              <p>Please fill in this form to add Time Slot</p>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="no_of_employees"><div class="form_label"><b>Start Time</b></div></label>
                <input type="text" placeholder="Enter number of emploees" name="no_of_employees" id="no_of_employees" required size="50"></br>

                &ensp;&ensp;<label for="no_of_time_slot"><div class="form_label"><b>End Time</b></div></label>
                <input type="text" placeholder="Enter number of time slot" name="no_of_time_slot" id="no_of_time_slot" required size="50"></br>

                &ensp;&ensp;<label for="no_of_time_slot"><div class="form_label"><b>Lift No</b></div></label>
                <input type="text" placeholder="Enter number of time slot" name="no_of_time_slot" id="no_of_time_slot" required size="50"></br>

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