<!DOCTYPE html>
<html>

<head>
    <title>Timeslot</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\service_type_list.css"><!-- add style to employee_list -->
    <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">

    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
    <script type="text/javascript" src="public\js\add_timeslot.js"></script>

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">


        <div class="background">
            <!-- add breadcrumb for find the path easily to users -->
            <ul class="breadcrumb">

                <li><a href="home">Home</a></li>
                <li><a href="manager">Manager</a></li>
                
                <li>Timeslot list</li>
            </ul><!-- breadcrumb -->
            <?php
            //echo($_SESSION["uname"]);
            //var_dump($array);
            ?>
            <h1>Timeslot list &ensp;<i class="fa fa-clock-o fa-lg" aria-hidden="true"></i></h1><br>
            <hr style="width: 60%;margin-left: 20%"><br> <br>

            <div class="select_buttons">
                <a href="add_timeslot"><button type="submit" class="optionbtn btn" class="form_btn">Add Time
                        Slot</button></a>
            </div>
            <br><br><br>
            <div class="list_table">
                <h2>Timeslot Details</h2>
                 <form class="example" method="post" action="search_timeslot_data" style="margin:auto;max-width:300px;float:right;padding:20px;">
                    <input type="text" placeholder="Search.." name="search" id="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

                    <table id="table_">
                        <tr>
                            <th style="width: 10%;">Timeslot No</th>
                            <th style="width: 10%;">Lift No</th>
                            <th>Start time</th>
                            <th>End time</th>
                            <th>Edit</th>
                            <th>Delete</th>


                        </tr>
                        <?php if ($array) { ?>
                        <?php foreach ($array as $timeslot) { ?>
                        <tr>
                            <td>
                                <b>TS-<?php echo "$timeslot[timeslot_no]"; ?></b>
                            </td>
                            <td>
                                <?php echo "$timeslot[lift_no]"; ?>
                            </td>
                            <td>
                                <?php echo "$timeslot[start_time]"; ?>
                            </td>
                            <td>
                                <?php echo "$timeslot[end_time]"; ?>
                            </td>

                            <td style=" text-align: center;">
                                <a onClick="updateme('<?php echo $timeslot['timeslot_no']; ?>')" name="update" class="btn updatelbtn">Update</a>

                            </td>
                            <td style=" text-align: center;">
                                <a onClick="deleteme('<?php echo $timeslot['timeslot_no']; ?>')" name="delete" class="btn deletebtn">Delete</a>

                            </td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                        <?php if (!$array) { ?>
                        <p style="color: red;font-size:large;padding:10px;font-weight:100;">
                            <b> <?php echo "Record Not Found !"; ?>
                            </b>
                        </p>
                        <?php } ?>
                    </table>
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