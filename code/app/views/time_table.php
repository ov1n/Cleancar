<!DOCTYPE html>
<html>

<head>
    <title>Timetable</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\time_table.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\reservation_timetable.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>

    <!-- get external icons -->
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <div class="background">
            <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">

                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                <li>View Reservation</li>
            </ul><!-- breadcrumb -->
            <h1>View Reservation&ensp;<i class="fa fa-table" aria-hidden="true"></i></h1>
            <hr style="width: 60%;"><br>

            <div class="list_table">
                <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

                    <table id="table_">
                        <tr>
                            <th class='time_col'>Reservation ID</th>
                            <th>Is Advanced paid</th>
                            <th>customer ID</th>
                            <th>Service Type</th>
                            <th>Lift No</th>
                            <th>Start Time</th>
                            <th>View Details</th>
                            <th>Delay</th>


                        </tr>
                        <?php if ($array) { ?>
                        <?php foreach ($array as $reservation) { ?>
                        <tr>
                            <td>
                                <b><?php echo "$reservation[reservation_id]"; ?></b>
                            </td>
                            <td class="advanced_convert">
                                <?php echo "$reservation[is_advance_paid]"; ?>
                            </td>
                            <td>
                                <?php echo "$reservation[cust_id]"; ?>
                            </td>
                            <td>
                                <?php echo "$reservation[servise_type]"; ?>
                            </td>
                            <td>
                                <?php echo "$reservation[lift_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$reservation[start_time]"; ?>
                            </td>
                            <td style=" text-align: center;">
                                <a href="view_cust_reservation_manager?cust_id=<?php echo "$reservation[cust_id]"; ?>"
                                    name="View" class="btn viewbtn">View</a>
                            </td>

                            <td style=" text-align: center;">
                                <a href="delay_timetable_manager?reservation_id=<?php echo "$reservation[reservation_id]"; ?>"
                                    name="delay" class="btn delaybtn">Delay</a>
                            </td>

                        </tr>
                        <?php } ?>
                        <?php } ?>
                        <?php if (!$array) { ?>
                        <p style="color: red;font-size:large;padding:10px;font-weight:100;">
                            <b> <?php echo "Record Not Found !"; ?> </b>
                        </p>
                        <?php } ?>
                    </table>
                </div>
            </div><br><br>
        </div>
    </div>
    </div>

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