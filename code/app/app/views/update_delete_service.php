<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Update_Delete Service</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      
      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Manager</a></li>
        <li>Update Service</li>
      </ul><!-- breadcrumb -->

      <form action="./controllers/Register.php">
        <div class="container">  
          <h1>Update Service Type</h1>
          <p>Please select the service type to update or delete</p>
          <div class="background">
            <hr>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Select Service Type</b></div></label>
                  <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                  </select><br>


                <button type="submit" class="btn cancelbtn" class="form_btn" >Delete</button>
                <a href="update_service"><button class="btn" class="form_btn" style="margin-right :10px">Update</button></a>
              </div><!-- form_content --> 
            </div><!-- card -->
            
            </br></br>
          </div><!-- background -->
          <hr>
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