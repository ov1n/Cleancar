<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Confirm Reservation</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\view_employee.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>

      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Customer</a></li>
        <li>Make Reservation</a></li>
        <li>Confirm</a></li>          
      </ul><!-- breadcrumb -->

      <form >
        <div class="container">  
          <h1>Confirm Reservation</h1>
          <div class="background">
            <hr>
            <div class="card" >
              <h2>&ensp;&ensp;Thank you for making your online reservation with CleanCar!</h2></br>
              <h3>&ensp;&ensp;Your reservation details are as follows: </h3></br>
              <div id=form_content> <!-- div to center needed elements -->
                <?php $array=(Session::get("details")); ?>

                <!-- each field gets details from the array -->

                &ensp;&ensp;<label for="res_id"><div class="form_label"><b>Reservation ID</b></div></label>
                <input type="text"  name="res_id" value =
                <?php echo(Session::get("res_id")); ?> 1223 id="res_id" disabled></br>

                <!--ADD CONCAT FUNCTION -->
                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>Customer Name</b></div></label>
                <input type="text"  name="first_name" value = <?php echo "$array[first_name]" ?> id="first_name" disabled></br>

                &ensp;&ensp;<label for="vehicle_no"><div class="form_label"><b>Vehicle No</b></div></label>
                <input type="text"  name="vehicle_no" value = 
                 "<?php echo(Session::get("vehicle_num")); ?>" id="vehicle_no" disabled></br>

                &ensp;&ensp;<label for="category"><div class="form_label"><b>Category</b></div></label>
                <input type="text"  name="category" value = 
                 "<?php echo(Session::get("vehicle_category")); ?>" id="category" disabled></br>

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <input type="text"  name="service_type" value = 
                "<?php echo(Session::get("service_name")); ?>" id="service_type" disabled></br>

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="text"  name="date" value =
                 "<?php echo(Session::get("res_date")); ?>" id="date" disabled></br>

                &ensp;&ensp;<label for="time"><div class="form_label"><b>Time</b></div></label>
                <input type="text"  name="time" value = "8.00AM" id="time" disabled></br>

                &ensp;&ensp;<label for="approx"><div class="form_label"><b>Approximate Duration</b></div></label>
                <input type="text"  name="approx" value = '2 hours' id="approx" disabled></br>

                &ensp;&ensp;<label for="lift_no"><div class="form_label"><b>Lift No</b></div></label>
                <input type="text"  name="lift_no" value = "1" id="lift_no" disabled></br>

                &ensp;&ensp;<label for="price"><div class="form_label"><b>Price</b></div></label>
                <input type="text"  name="price" value = "<?php echo(Session::get("price")); ?>"
                 id="price" disabled></br>

                <h3> For more details please contact CleanCar at our hotline </h3>
                </br>
                <a class="backbtn" href="home">Back</a>
                </br></br>

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