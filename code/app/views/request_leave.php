<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <title>CleanCar - Add Leave</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- get font just in case -->

    <link rel="stylesheet" type="text/css" href="public\css\request_leave.css"><!-- add style to form -->

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script> <!-- get icons -->

    <script type="text/javascript" src="public/js/add_emp_leave.js"></script> <!-- link to js file -->
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>

<body>

    <!-- onsubmit="send_leave_data()" -->
    <!-- action="add_leave_" -->
    <form name="add_leave_form" id="add_leave_form" method="post" onsubmit="send_leave_data()">
        <!-- call function in js file -->
        <div class="container">

            <div class="background">
                <!-- breadcrumb-->
                <ul class="breadcrumb">

                    <li><a href="home">Home</a></li>
                    <li><a href="employee">Employee</a></li>
                    <li>Add Leave</li>
                </ul> <!-- end breadcrumb -->

                <h1>Add Leave</h1>
                <hr style="width: 60%;"></br> <!-- style horizontal line -->
                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        <p style="color: red;font-size:large;padding:10px;font-weight:100;text-align:center;">



                        <?php if ($array['no_of_leaves_fullday'] >= 20 & $array['no_of_leaves_halfday'] >= 20 & $array['no_of_leaves_short'] >= 20) {
                echo " You Reached Max Leave Limit";
              } elseif ($array['no_of_leaves_fullday'] >= 20 & $array['no_of_leaves_halfday'] >= 20) {
                echo " You Reached Max Full & Half Day Leave Limit";
              } elseif ($array['no_of_leaves_fullday'] >= 20 & $array['no_of_leaves_short'] >= 20) {
                echo " You Reached Max Full & Short Leave Limit";
              } elseif ($array['no_of_leaves_short'] >= 20 & $array['no_of_leaves_halfday'] >= 20) {
                echo " You Reached Max Half & Short Leave Limit";
              } elseif ($array['no_of_leaves_short'] >= 20) {
                echo " You Reached Max Short Leave Limit";
              } elseif ($array['no_of_leaves_fullday'] >= 20) {
                echo " You Reached Max Fullday Leave Limit";
              } elseif ($array['no_of_leaves_halfday'] >= 20) {
                echo " You Reached Max Halfday Leave Limit";
              } ?>

                        </p>

                        </br></br>
                        &ensp;&ensp;<label for="date">
                            <div class="form_label"><b>Select Date</b></div>
                        </label>
                        <input type="date" placeholder="Enter the date" name="leave_date" id="leave_date"
                            onchange="check_date(); button_enable();" required <?php if ($array['no_of_leaves_fullday'] >= 20 & $array['no_of_leaves_halfday'] >= 20 & $array['no_of_leaves_short'] >= 20) { echo "disabled";} ?>></br>
                        <div id="date_validate_msg">
                            <p></p>
                        </div><br> <!-- functions for date validity -->

                        &ensp;&ensp;<label for="emp_id">
                            <div class="form_label"><b>Employee Id</b></div>
                        </label>
                        <input type="text" name="emp_id" id="emp_id"
                            value="<?php echo ($_SESSION['uname']); ?>"
                            style="background-color: transparent; border: 0px solid;color: #000; font-weight:550" disabled></br>
                        <!-- auto fill employee id when employee logged -->




                        &ensp;&ensp;<label for="leave_type">
                            <div class="form_label"><b>Leave Type</b></div>
                        </label>
                        <select name="leave_type" id="leave_type">

                            <option value="Full_leave" <?php if ($array['no_of_leaves_fullday'] >= 20) {
                                            echo "disabled";
                                          } ?>>Full Leave</option>

                            <option value="Half_day" <?php if ($array['no_of_leaves_halfday'] >= 20) {
                                          echo "disabled";
                                        } ?>>Half Day</option>
                            <option value="Short_leave" <?php if ($array['no_of_leaves_short'] >= 20) {
                                            echo "disabled";
                                          } ?>>Short Leave</option>
                        </select><br>

                        &ensp;&ensp;<label for="leave_time">
                            <div class="form_label"><b>Select Time</b></div>
                        </label>
                        <select name="leave_time" id="leave_time">
                            <option value="08:00:00">full day</option>
                            <option value="08:00:00">08:00 am - 12:00am</option>
                            <option value="12:00:00">12:00 pm - 05:00pm</option>
                            <option value="08:00:00">08:00 am - 10:00am</option>
                            <option value="15:00:00">03:00 pm - 05:00pm</option>
                        </select><br>

                        &ensp;&ensp;<label for="reason">
                            <div class="form_label"><b>Reason</b></div>
                        </label>
                        <input type="text" placeholder="Enter your reason here" name="reason" id="reason" required></br>

                        <button type="cancel" class="btn cancelbtn" class="form_btn">Cancel</button>
                        <button type="submit" id="submit" class="btn" class="form_btn" style="margin-right :10px"
                            <?php if ($array['no_of_leaves_fullday'] >= 20 & $array['no_of_leaves_halfday'] >= 20 & $array['no_of_leaves_short'] >= 20) {
                                                                                                        echo "disabled";
                                                                                                      } ?>>Submit</button> </br></br> </br></br>

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