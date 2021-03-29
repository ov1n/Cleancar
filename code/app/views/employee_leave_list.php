<!DOCTYPE html>
<html>

<head>
    <title>Leave List</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public/css/employee_leave_list.css">
    <!-- add style to employee_leave_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <!-- <script type="text/javascript" src="public\js\employee.js"></script> -->
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="background">
            <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">
                <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
                </br>
                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                <li><a href="employee_list">Employee Section</a></li>
                <li>Employee</li>
            </ul><!-- breadcrumb -->
            <h1>Pending Leaves</h1>
            <hr style="width: 60%;"><br>
            <?php if ($array) { ?>

            <div class="list_table">

                <div style="overflow-x:auto; width:94%;  margin-left:3%; border-radius:6px;">

                    <table id="table_">
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Leave Type</th>
                            <th>Leave Time</th>
                            <th>Reason</th>
                            <th>Accept</th>
                            <th>Reject</th>
                        </tr>

                        <?php foreach ($array as $emp) { ?>
                        <tr>
                            <td>
                                <?php echo "$emp[emp_id]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[first_name]" . " " . "$emp[last_name]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[leave_date]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[type]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[leave_time]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[reason]"; ?>
                            </td>
                            <td style=" text-align: center;">
                                <a href="leave_status?emp_id=<?php echo base64_encode($emp['emp_id']); ?>&leave_type=<?php echo base64_encode($emp['type']); ?>&leave_date=<?php echo base64_encode($emp['leave_date']); ?>&leave_status=Accepted"
                                    name="accept" class="btn acceptbtn">Accept</a>
                            </td>
                            <td style=" text-align: center;">
                                <a href="leave_status?emp_id=<?php echo base64_encode($emp['emp_id']); ?>&leave_type=<?php echo base64_encode($emp['type']); ?>&leave_date=<?php echo base64_encode($emp['leave_date']); ?>&leave_status=Rejected"
                                    name="delete" class="btn rejectbtn">Reject</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            <?php } else { ?>
            <div class="card_">
                <h2>No Upcoming Leaves</h2>
            </div>
            <?php } ?>
            <br><br>
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