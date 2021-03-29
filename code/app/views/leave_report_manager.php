<!DOCTYPE html>
<html>

<head>
    <title>Leave Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public/css/employee_leave_list.css">
    <!-- add style to employee_leave_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <!-- <script type="text/javascript" src="public\js\employee.js"></script> -->
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
    <style type="text/css">

    </style>
</head>

<style type="text/css">
.body {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;

}

.progress {
    background-color: #d8d8d8;
    height: 30px;
    width: 200px;
    border-radius: 20px;

}
</style>

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
                <li>Leave Report</li>
            </ul><!-- breadcrumb -->
            <h1>Leave Report</h1>
            <hr style="width: 60%;"><br>
            <?php if ($array) { ?>

            <div class="list_table">

                <div style="overflow-x:auto; width:94%;  margin-left:3%; border-radius:6px;">

                    <table id="table_">
                        <tr>
                            <th>Employee ID</th>
                            <th>Name</th>
                            <th>Full Day Leaves (20)</th>
                            <th>Half Day Leaves (20)</th>
                            <th>Short Leaves (20)</th>
                            <th>Leave Percentage</th>

                        </tr>

                        <?php foreach ($array as $emp) { ?>
                        <tr>
                            <td style="text-align: center;">
                                <b>&ensp;&ensp; <?php echo "$emp[emp_id]"; ?></b>
                            </td>
                            <td>
                                <?php echo "$emp[first_name]" . " " . "$emp[last_name]"; ?>
                            </td>
                            <td style="text-align: center;">
                                <?php if ($emp['no_of_leaves_fullday'] >= 20) { ?>
                                <p style=color:red;font-size:16px;> <?php echo "$emp[no_of_leaves_fullday]"; ?></p>
                                <?php     } else {
                                            echo "$emp[no_of_leaves_fullday]";
                                        } ?>
                            </td>

                            <td style="text-align: center;">
                                <?php if ($emp['no_of_leaves_short'] >= 20) { ?>
                                <p style=color:red;font-size:16px;> <?php echo "$emp[no_of_leaves_short]"; ?></p>
                                <?php     } else {
                                            echo "$emp[no_of_leaves_short]";
                                        } ?>
                            </td>

                            <td style="text-align: center;">
                                <?php if ($emp['no_of_leaves_halfday'] >= 20) { ?>
                                <p style=color:red;font-size:16px;> <?php echo "$emp[no_of_leaves_halfday]"; ?></p>
                                <?php     } else {
                                            echo "$emp[no_of_leaves_halfday]";
                                        } ?>
                            </td>
                            <td>
                                <div class="progress" style="text-align:center;padding:3px;">
                                    <?php if(($emp['no_of_leaves_fullday'] + $emp['no_of_leaves_halfday'] + $emp['no_of_leaves_short'])>=60){echo "100%";} 
                                    else{echo (floor((($emp['no_of_leaves_fullday'] + $emp['no_of_leaves_halfday'] + $emp['no_of_leaves_short']) / 60) * 100)) . "%"; }
                                    ?>

                                    <div class="progress-done"
                                        style="  background-color: orange;border-radius: 20px;height: 100%;width: <?php if(($emp['no_of_leaves_fullday'] + $emp['no_of_leaves_halfday'] + $emp['no_of_leaves_short'])>=60){echo "100%";}
                                        else{echo ((($emp['no_of_leaves_fullday'] + $emp['no_of_leaves_halfday'] + $emp['no_of_leaves_short']) / 60) * 100) . "%";} ?>;margin-top:-20px;display: flex;align-items: center;justify-content: center;text-align:center;opacity:1;transition: 1s ease 0.8s;">

                                    </div>

                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>

                </div>
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