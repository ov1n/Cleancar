<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\emergency_reservation.css">                  <!-- add style to form -->
       
        <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">  <!-- add style to alert box -->
        <!-- get imported jquery -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>
        <!-- get external js file -->
        <script type="text/javascript" src="public\js\reservation.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
     
     

      <form id="reservation" name="reservation" onsubmit="confirmSubmit(); return false;">
        <div class="container">  
          
            <div class="background">
                       <!-- add breadcrumb for find the path easily to users -->
              <ul class="breadcrumb">
                
                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                <li>Make Reservation</li>    
              </ul><!-- breadcrumb -->
              <h1>Make Reservation</h1><hr style="width: 60%;">
             
               
             
              <div class="card" >
                <div id=form_content> <!-- div to center needed elements -->
                
                <!-- Each div has php echo function to autofill the form from user account details -->
                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name"></br>
  
                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name"></br></br>

                &ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category</b></div></label>
                <select name="vehicle_category" id="vehicle_category">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="cab">Cab</option>
                    <option value="jeep">Jeep</option>
                </select><br>
                
                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="e-mail" id="e-mail" required> </br>

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="date" placeholder="Enter the date" name="date" id="date" required></br>

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                </select><br>

                &ensp;&ensp;<label for="tp_no"><div class="form_label"><b>Contact Number</b></div></label>
                <input type="tel" placeholder="Enter Your Telephone Number" name="tp_no" id="tp_no" required></br>

                <button type="cancel" class="btn cancelbtn" class="form_btn">Cancel</button>
                <button type="submit" class="btn" class="form_btn" >Submit</button> </br></br> </br></br>
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