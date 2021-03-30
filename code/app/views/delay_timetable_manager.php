<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>Delay form</title>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\delay_time.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
    <form name="delay_time" method="POST" action="delay_time_manager">
        <div class="container">
            <div class="background">

                <!-- add breadcrumb for find the path easily to users -->
                <ul class="breadcrumb">
                    <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
                    </br>
                    <li><a href="home">Home</a></li>
                    <li><a href="manager">Manager</a></li>
                    <li><a href="time_table">View Reservation</a></li>
                    <li>Delay Notification</li>
                </ul><!-- breadcrumb -->


                <h1 style="text-align:center;"><i class="fas fa-hourglass-half"></i> Delay Notification</h1>
                <hr style="width: 60%;">
                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        &ensp;&ensp;<label for="cust_id">
                            <div class="form_label"><b>Customer Id</b></div>
                        </label>
                        <input type="text" name="cust_id" id="cust_id" value='<?php echo $array[0]["cust_id"]; ?>'
                            required></br>

                        &ensp;&ensp;<label for="reservation_id">
                            <div class="form_label"><b>Reservation Id</b></div>
                        </label>
                        <input type="text" name="reservation_id" id="reservation_id"
                            value='<?php echo $array[0]["reservation_id"]; ?>'></br>

                        <input type="hidden" name="tp_no" value="<?php echo $array[0]['tp_no']; ?>" id="tp_no"></br>

                        &ensp;&ensp;<label for="delay_time">
                            <div class="form_label"><b>Delay (Minutes)</b></div>
                        </label>
                        <input type="text" name="delay_time" id="delay_time" placeholder="Enter delay time in minutes"
                            required></br>

                        <a href="time_table" class="cancelbtn btn" class="form_btn"> Cancel </a>

                        <button type="submit" class="okbtn btn" class="form_btn" style="margin-right :10px">Send
                            notification</button>
                        </br></br></br>
                    </div><!-- form_content -->

                </div><!-- card -->



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