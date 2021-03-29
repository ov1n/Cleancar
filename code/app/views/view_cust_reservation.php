<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - View Employee</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\view_employee.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
    <div class="background">
    <div class="container"> 
    
      <ul class="breadcrumb">
        <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="receptionist">Receptionist</a></li>
        <li><a href="time_table_recep">View Reservation</a></li>
        <li>Reservation Details</li>          
      </ul><!-- breadcrumb -->

      <form >
         
          <h1><i class="fas fa-id-card-alt"></i> Reservation Details</h1>
          
          <hr style="width: 60%;"><br>
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->
                <label for="cust_id"><div class="form_label">Customer ID </div></label>
                <input type="text"  name="cust_id" value = '<?php echo ":- "."$array[cust_id]"; ?>' id="emp_id" disabled></br>

                <label for="name"><div class="form_label"><b>Full Name</b></div></label>
                <input type="text"  name="name" value = '<?php echo ":- "."$array[name]"; ?>' id="name" disabled></br>

                <label for="home_tp"><div class="form_label"><b>Home TP</b></div></label>
                <input type="text"  name="home_tp" value = '<?php echo ":- "."$array[home_tp]"; ?>' id="home_tp" disabled></br>

                <label for="mobile_tp"><div class="form_label"><b>Home TP</b></div></label>
                <input type="text"  name="mobile_tp" value = '<?php echo ":- "."$array[mobile_tp]"; ?>' id="mobile_tp" disabled></br>

                <label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text"  name="address" value = '<?php echo ":- "."$array[address]"; ?>' id="address" disabled></br>

                &ensp;&ensp;<h2>Vehicle Details</h2>

                <label for="vehicle_num"><div class="form_label"><b>Number</b></div></label>
                <input type="text"  name="vehicle_num" value = '<?php echo ":- "."$array[vehicle_num]"; ?>' id="vehicle_num" disabled></br>

                <label for="vehicle_category"><div class="form_label"><b>Category</b></div></label>
                <input type="text"  name="vehicle_category" value = '<?php echo ":- "."$array[vehicle_category]"; ?>' id="vehicle_category" disabled></br>

                </br>
                <a class="backbtn" href="time_table_recep" style="float: right;">Back</a>
                </br></br>

              </div><!-- form_content -->   
            </div><!-- card -->
            </br></br>
          
      </form>
      </div><!-- container -->
      <hr>
    </div><!-- background -->

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