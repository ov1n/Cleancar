<!DOCTYPE html>
<html>

<head>
    <title>Employee List</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\employee_list.css"><!-- add style to employee_list -->
    <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">
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
                <li>Employee</li>
            </ul><!-- breadcrumb -->

            <h1 style="text-align:center;"><i class="fas fa-users"></i> Employee Section</h1>
            <hr style="width: 60%;font-style: solid;margin-left: 20%;"><br>

            <div class="card">
                <h2>Employee Leave</h2>
                <div class="select_buttons">
                    <button onclick="button1()" class="optionbtn btn" class="form_btn" style="margin-left:5%;">Add
                        Leave</button>
                    <button onclick="button2()" class="optionbtn btn" class="form_btn">Cancel Leave</button>
                    <button onclick="button3()" class="optionbtn btn" class="form_btn">Pending Leaves</button>
                    <button onclick="button4()" type="submit" class="optionbtn btn" class="form_btn"
                        style="margin-right:5%;">Leave Report</button>
                </div>
            </div><!-- card -->
            <div class="list_table">
                <h2>Employee Details</h2>
                <form class="example" method="post" action="search_emp_data"
                    style="margin:auto;max-width:300px;float:right;padding:20px;">
                    <input type="text" placeholder="Search.." name="search" id="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

                    <table id="table_">
                        <tr>
                            <th>Employee ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>NIC</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php if ($array) { ?>
                        <?php foreach ($array as $emp) { ?>
                        <tr>
                            <td style="text-align: center; font-weight: 700;">
                                <?php echo "$emp[emp_id]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[first_name]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[last_name]"; ?>
                            </td>
                            <td>
                                <?php echo "$emp[NIC_no]"; ?>
                            </td>
                            <td style=" text-align: center;">
                                <a href="employee_view?emp_id=<?php echo "$emp[emp_id]"; ?>" name="view"
                                    class="btn viewbtn">View</a>
                            </td>
                            <td style=" text-align: center;">
                                <a href="employee_update?emp_id=<?php echo "$emp[emp_id]"; ?>" name="update"
                                    class="btn updatelbtn">Update</a>
                            </td>
                            <td style=" text-align: center;">
                                <a onClick="deleteme_man(<?php echo $emp['emp_id']; ?>)" name="delete"
                                    class="btn deletebtn">Delete</a><br>
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
            </div><br><br>
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