<!DOCTYPE html>
<html>
<head>
  <title>View Reservations</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\view_reservation.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">  <!-- add style to alert box -->
    <!-- get imported jquery -->

    <script  type="text/javascript">
        //assign each variables
        var notif= <?php echo json_encode($_SESSION["cancel"]); ?>;

    </script>
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\view_reservation.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body >

<div class="cover">
<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
      
        <li><a href="home">Home</a></li>
        <li>View Reservations</a></li>
    </ul><!-- breadcrumb -->
    
    <h1> View Reservations &ensp;<i class="fa fa-calendar-check-o fa-lg" aria-hidden="true"></i></h1><hr style="width: 60%; color: white">

<div class = "list_table">
<h3 style="text-align:left;color: white;">Current reservations by Mr. <b style="color:red;"><?php echo "$last_name"; ?></b>
</h3>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">
    
  <form action="cancel_reservation" method="post" id="cancel_form" name="cancel_form">
        <div class="container">  
        <div class="background">
        <div class="card" > 
    <?php if ($reservation_details){
      foreach($reservation_details as $row){ ?>
        
              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->

                <label for="res_id"><div class="form_label"><b>Reservation ID</b></div></label>
                <input type="text" class="output_detail"  name="res_id" value =
                <?php echo "$row[reservation_id]"; ?> id="res_id" disabled></br>

                <!--ADD CONCAT FUNCTION -->
                <label for="date"><div class="form_label"><b>Date</b></div></label>
                <input type="date"  name="date" class="output_detail" value = <?php echo "$row[date]"; ?>
                 id="date" disabled maxlength="30" size="30"></br>

                <label for="time"><div class="form_label"><b>Time</b></div></label>
                <input type="text"  name="time" value = 
                 "<?php echo "$row[start_time]"; ?>" id="time" disabled></br>

                <label for="service_type"><div class="form_label"><b>Category</b></div></label>
                <input type="text"  name="service_type" value = 
                 "<?php echo "$row[type_name]"; ?>" id="service_type" disabled></br>

                <label for="price"><div class="form_label"><b>Price</b></div></label>
                <input type="text"  name="price" value = 
                "Rs. <?php echo "$row[price]"; ?>" id="price" disabled></br>

                <label for="advance_paid"><div class="form_label"><b>Payment</b></div></label>
                <input type="text"  name="advance_paid" class="is_paid" value =
                 "<?php echo($row["is_advance_paid"])?>" disabled></br> 
                 </div><!-- form_content -->  
                 <?php if(!($row["is_advance_paid"])){
                            echo("<a href='https://sandbox.payhere.lk/pay/o9e7eec74' name='update' class='btn updatelbtn' style=width:90px;>Pay Online</a>");
                 } ?>
                 <?php $date=date_create(date("Y-m-d"))->modify('+1 days')->format('Y-m-d'); ?>
                 <?php if($row['date']>$date){
                   
                   echo '<a onclick="cancelConfirm('.$row['reservation_id'].')" name="cancel" class="btn deletebtn" id="'.$row['reservation_id'].'">Cancel Reservation</a>';
                 }?>
                 </br>------------------------------------------------
                <?php }
                
              }else{
              echo( " <h2 style='text-align:center;color: white;'> No reservations </h2>");
            } ?>
              <input type="hidden"  name="cancel_id" value = 
                "" id="cancel_id" ></br>
              
              <input type="hidden"  name="cancel_date" value = 
                "" id="cancel_date" ></br>
            </br></br>
          </div><!-- card -->
          </div><!-- background -->
       
        </div><!-- container -->
      </form>
    </div>
  </div> </br></br> </br></br> </br></br>
</div>
    <?php 
          //include nav bar externally 
          include("nav_profile.php");
          Session::unset("cancel");
          //echo ($_SESSION["cancel"]);
    ?>
 <?php 
        //get footer in seperate file
        include("footer.php");
      ?>
         
</body>
</html>
