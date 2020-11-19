<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Update Service</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\update_service.css"><!-- add style to form -->
       
        
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
                <li>Update Service</li>
              </ul><!-- breadcrumb -->
              <h1>Update Service Type&ensp;<i class="far fa-edit fa-lg"></i></h1> <hr style="width: 60%;"> </br>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                  <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                  </select><br>

                &ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category</b></div></label>
                  <select name="vehicle_category" id="vehicle_category">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="cab">Cab</option>
                    <option value="jeep">Jeep</option>
                  </select><br>

                &ensp;&ensp;<label for="no_of_employees"><div class="form_label"><b>No of Employees</b></div></label>
                <input type="text" placeholder="Enter number of emploees" name="no_of_employees" id="no_of_employees" required size="50"></br>

                &ensp;&ensp;<label for="no_of_time_slot"><div class="form_label"><b>No of time slots</b></div></label>
                <input type="text" placeholder="Enter number of time slot" name="no_of_time_slot" id="no_of_time_slot" required size="50"></br>

                &ensp;&ensp;<label for="lift_no"><div class="form_label"><b>Lift Number</b></div></label>
                  <select name="lift_no" id="lift_no">
                    <option value="L001">L001</option>
                    <option value="L002">L002</option>
                    <option value="L003">L003</option>
                    <option value="L004">L004</option>
                  </select><br>

                &ensp;&ensp;<label for="prize"><div class="form_label"><b>Normal Prize</b></div></label>
                <input type="text" placeholder="Enter normal prize" name="prize" id="prize" required size="50"></br>

                <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Update</button> </br></br> </br></br>
              </div><!-- form_content --> 
            </div><!-- card -->
            
            </br></br>
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