<!DOCTYPE html>
<html>
<head>
  <title>View Reservations</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\confirm_reservation.css"><!-- add style to form -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\view_reservation.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body>

<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li>View Reservations</a></li>
    </ul><!-- breadcrumb -->
    
    <h1><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  View Reservations</h1>

<div class = "list_table">
<h3 style="text-align:left;">Current reservations by Mr .<?php echo "$last_name"; ?></h3>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">
    
  <form >
        <div class="container">  
        <div class="background">
            <hr>
    <?php foreach($reservation_details as $row){ ?>
        <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->

                <label for="res_id"><div class="form_label"><b>Reservation ID</b></div></label>
                <input type="text"  name="res_id" value =
                <?php echo "$row[reservation_id]"; ?> id="res_id" disabled></br>

                <!--ADD CONCAT FUNCTION -->
                <label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="date"  name="date" value = <?php echo "$row[date]"; ?>
                 id="date" disabled></br>

                <label for="time"><div class="form_label"><b>Time</b></div></label>
                <input type="text"  name="time" value = 
                 "<?php echo "$row[time]"; ?>" id="time" disabled></br>

                <label for="service_type"><div class="form_label"><b>Category</b></div></label>
                <input type="text"  name="service_type" value = 
                 "<?php echo "$row[type_name]"; ?>" id="service_type" disabled></br>

                <label for="price"><div class="form_label"><b>Price</b></div></label>
                <input type="text"  name="price" value = 
                "Rs. <?php echo "$row[price]"; ?>" id="price" disabled></br>

                <label for="advance_paid"><div class="form_label"><b>Payment</b></div></label>
                <input type="text"  name="advance_paid" class="is_paid" value =
                 "<?php echo($row["is_advance_paid"])?>" disabled></br>

                 <?php if(!($row["is_advance_paid"])){
                            echo("<a href='update_emp?emp_id=' name='update' class='btn updatelbtn'>Pay Online</a>");
                 } ?>

              </div><!-- form_content -->   
            </div><!-- card -->
            </br></br>
            <?php } ?>
          </div><!-- background -->
          <hr>
        </div><!-- container -->
      </form>
    
  </div>
</div>
    <?php 
          //include nav bar externally 
          include("nav_profile.php");
    ?>

</body>
</html>
