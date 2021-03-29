<!DOCTYPE html>
<html>

<head>
    <title>Cancel Leaves</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\emp_leave.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\employee.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>

<body>
    <div class="container">

        <div class="background">

            <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">
                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                <li><a href="employee_list">Employee section</a></li>
                <li>Cancel Leave</li>
            </ul><!-- breadcrumb -->
            <h1>Upcoming Accepted Leave Details</h1><br>
            <hr style="width: 60%;"><br>

            <?php if ($array) {  ?>
            <!-- check condition are there upcoming accepted leaves in the array which loaded from database -->
            <div class="list_table">

                <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

                    <table id="table_">
                        <tr>
                            <th>Employee Id</th>
                            <th>Leave Date</th>
                            <th>Leave Type</th>
                            <th>Leave Time</th>
                            <th>Reason</th>
                            <th>Cancel</th>


                        </tr>

                        <?php foreach ($array as $emp_leave) { ?>
                        <tr>
                            <td class="dateclmn">
                                <?php echo "$emp_leave[emp_id]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp_leave[leave_date]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp_leave[type]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp_leave[leave_time]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp_leave[reason]"; ?>
                            </td>

                            <td style=" text-align: center;">
                                <a href="leave_delete_manager?leave_date=<?php echo base64_encode($emp_leave['leave_date']); ?>&emp_id= <?php echo base64_encode($emp_leave['emp_id']); ?>&type=<?php echo base64_encode($emp_leave['type']); ?>"
                                    name="delete" class="btn deletebtn">Cancel</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div><br><br><br>
        </div>
    </div>
    <?php } else { ?>
    <!-- if there are no upcoming leaves, display message -->
    <div class="card_">
        <br>
        <h2> No upcoming accepted leaves </h2>
    </div>
    <?php } ?>
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