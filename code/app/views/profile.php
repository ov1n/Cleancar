<!DOCTYPE html>
<html lang="en">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public\css\profile.css">
    <script type="text/javascript" src="public\js\user_profile.js"></script>
</head>

<body>



    <form name="update_user" id="update_user" method="POST" onsubmit="send_update_data()">
        <div class="container">

            <div class="background">
                <ul class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li>Profile</li>
                </ul><!-- breadcrumb -->


                </br>
                <div class="card">
                    <img src="public\images\user-icons.png" style="margin-left: auto;
  margin-right: auto;">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        <input type="hidden" name="user_id" value='<?php if (Session::get("role") == 'customer') {
                                                                        echo "$array[cust_id]";
                                                                    } else {
                                                                        echo "$array[emp_id]";
                                                                    } ?>' id="user_id" required></br>

                        &ensp;&ensp;<label for="first_name">
                            <div class="form_label"><b>First Name</b></div>
                        </label>
                        <input type="text" placeholder="Enter Your First Name" name="first_name"
                            value='<?php echo "$array[first_name]"; ?>' id="first_name" required></br>

                        &ensp;&ensp;<label for="last_name">
                            <div class="form_label"><b>Last Name</b></div>
                        </label>
                        <input type="text" placeholder="Enter Your Last Name" name="last_name"
                            value='<?php echo "$array[last_name]"; ?>' id="last_name" required></br>

                        &ensp;&ensp;<label for="nic">
                            <div class="form_label"><b><?php if (session::get("role") != 'customer') {
                                                            echo "NIC";
                                                        } ?></b></div>
                        </label>
                        <input type="<?php if (Session::get("role") == 'customer') {
                                            echo "hidden";
                                        } else {
                                            echo "text";
                                        } ?>" placeholder="Enter Your Nic" name="nic"
                            value='<?php echo "$array[NIC_no]"; ?>' id="nic" required></br>

                        &ensp;&ensp;<label for="address">
                            <div class="form_label"><b>Address</b></div>
                        </label>
                        <input type="text" placeholder="Enter Your Address" name="address"
                            value='<?php echo "$array[address]"; ?>' id="address" required></br>

                        &ensp;&ensp;<label for="e-mail">
                            <div class="form_label"><b>Email</b></div>
                        </label>
                        <input type="email" placeholder="Enter Your Email Address" name="email"
                            value='<?php echo "$array[email]"; ?>' gmail.com" id="email" required></br>

                        &ensp;&ensp;<h2>Contact Numbers</h2>

                        &ensp;&ensp;<label for="mobile_tel_no">
                            <div class="form_label"><b>Mobile</b></div>
                        </label>
                        <input type="text" placeholder="Enter Your mobile number" name="mobile_tel_no"
                            value='<?php echo "$array[mobile_tel_no]"; ?>' id="mobile_tel_no" pattern="[0-9]{10}"
                            required></br>

                        &ensp;&ensp;<label for="home_tel_no">
                            <div class="form_label"><b>Home</b></div>
                        </label>
                        <input type="text" placeholder="Enter Your Home number" name="home_tel_no"
                            value='<?php echo "$array[home_tel_no]"; ?>' id="home_tel_no" pattern="[0-9]{10}" required>
                        </br>
                        &ensp;&ensp;<a href="change_password"> Change Password?</a>
                        <a href="<?php if (session::get("role") == 'customer') {
                                        echo "home";
                                    } elseif (session::get("role") == 'manager') {
                                        echo "manager";
                                    } elseif (session::get("role") == 'receptionist') {
                                        echo "receptionist";
                                    } else {
                                        echo "employee";
                                    } ?>" class="btn cancelbtn" class="form_btn"> Cancel </a>
                        <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Update</button>
                        </br></br></br></br>

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