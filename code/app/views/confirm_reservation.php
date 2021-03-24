<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Confirm Reservation</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\confirm_reservation.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
        <!-- assign necessary elements to array for JS functions -->
        <?php $array=(Session::get("details"));
          $str=(Session::get("time"));
          $duration=(Session::get("duration"));
          //echo($str);
        ?>
        <!-- get external js -->
        <script type="text/javascript" src="public\js\confirm_reservation.js"></script>

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
              <h2>Thank you for making your online reservation with CleanCar!</h2>
              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->

                <label for="res_id"><div class="form_label"><b>Reservation ID</b></div></label>
                <input type="text"  name="res_id" value =
                <?php echo(Session::get("res_id")); ?> 1223 id="res_id" disabled></br>

                <!--ADD CONCAT FUNCTION -->
                <label for="first_name"><div class="form_label"><b>Customer Name</b></div></label>
                <input type="text"  name="first_name" value = '<?php echo ($array["first_name"] . " " . $array["last_name"]) ?>' id="first_name" disabled></br>

                <label for="vehicle_no"><div class="form_label"><b>Vehicle No</b></div></label>
                <input type="text"  name="vehicle_no" value = 
                 "<?php echo(Session::get("vehicle_num")); ?>" id="vehicle_no" disabled></br>

                <label for="category"><div class="form_label"><b>Category</b></div></label>
                <input type="text"  name="category" value = 
                 "<?php echo(Session::get("vehicle_category")); ?>" id="category" disabled></br>

                <label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <input type="text"  name="service_type" value = 
                "<?php echo(Session::get("service_name")); ?>" id="service_type" disabled></br>

                <label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="text"  name="date" value =
                 "<?php echo(Session::get("res_date")); ?>" id="date" disabled></br>

                <label for="time"><div class="form_label"><b>Time</b></div></label>
                <input type="text"  name="time" value =
                 "<?php echo(Session::get("time")); ?>" id="time" disabled></br>

                <label for="approx"><div class="form_label"><b>Approximate Duration</b></div></label>
                <input type="text"  name="approx" value = '2 hours' id="approx" disabled> <br>

                <label for="lift_no"><div class="form_label"><b>Lift No</b></div></label>
                <input type="text"  name="lift_no" value = "1" id="lift_no" disabled></br>

                <label for="price"><div class="form_label"><b>Price</b></div></label>
                <input type="text"  name="price" value = "<?php echo(Session::get("price")); ?>"
                 id="price" disabled></br>

                <h3>For any clarifications please contact CleanCar at our hotline </h3>
                <h3><i class="fas fa-phone-alt"></i> 011-2773411 </h3>
                </br>
                <!-- clear session -->
                <?php Session::unset("full_service_slots"); ?>
                <?php Session::unset("normal_service_slots"); ?>
                <?php Session::unset("body_wash_slots"); ?>
                <?php Session::unset("coming_week"); ?>
                <?php Session::unset("full_service_list"); ?>
                <?php Session::unset("normal_service_list"); ?>
                <?php Session::unset("body_wash_list"); ?>
                <?php Session::unset("vehicle_num"); ?>
                <?php Session::unset("price"); ?>
                <?php Session::unset("res_date"); ?>
                <?php Session::unset("service_id"); ?>
                <?php Session::unset("time"); ?>
                <?php Session::unset("service_name"); ?>
                <?php Session::unset("details"); ?>
                <?php Session::unset("duration"); ?>
                <?php Session::unset("vehicle_category"); ?>
                <?php //var_dump($_SESSION); ?>
                <a class="backbtn" href="home">Back</a>
                <a class="advbtn" href="pay_advanced">Pay Advanced</a>
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

        <script type="text/javascript"> 
          //js function to present data in amore favorable manner in the view
          var str = "<?php Print($str); ?>";
          var duration="<?php Print($duration); ?>"; 
          
          //var str = str.slice(0, 5);
          //logic to derive AM or PM
          if(str.slice(0,2)<12){

            //console.log(str.slice(0,5)+"AM");
            document.getElementById("time").value = str.slice(0,5)+" AM";

          }else{
            
            pmval=str.slice(0,2)
            document.getElementById("time").value = (pmval-12)+":00 AM";
          }
          
          //set duration
          document.getElementById("approx").value = duration.slice(0,2)+" hours";
        </script>
                
    </body>
</html>