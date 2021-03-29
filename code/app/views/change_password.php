<!DOCTYPE html>
<html>

<head>
    <title>change_login_password</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <!-- get font just in case -->

    <link rel="stylesheet" type="text/css" href="public\css\change_password.css"><!-- add style to form -->
    <script type="text/javascript" src="public\js\change_password.js"></script>
    <script type="text/javascript" src="public\js\push.min.js"></script>
    <script type="text/javascript" src="public\js\serviceWorker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
    </br>
    </br>


    <form name="change_login_password" id="change_login_password" method="post" action="change_password_auth">
        <div class="container">

            <div class="background">
                <!-- create breadcrumb-->
                <ul class="breadcrumb">

                    <li><a href="home">Home</a></li>
                    <li><a href="profile">Profile</a></li>
                    <li>Change Login Password</li>
                </ul>
                <!--breadcrumb--></br></br>
                <h1>Change Password&ensp;<i class="far fa-lock-alt fa-lg"></i></h1>
                <hr style="width: 60%;">
                </br>
                <div class="card">
                    <div id=form_content>
                        <!-- div to center needed elements -->

                        <div id="incorrect_msg" style="margin-top: 10px;text-align: center;color:red;">
                            <p><?php if (session::get("changePassword") == "Incorrect_Password") {
                                    echo "Incorrect current password, try again!";
                                } ?></p>
                        </div>

                        &ensp;&ensp;<label for="Current_password">
                            <div class="form_label"><b>Current Password</b></div>
                        </label>
                        <input type="password" placeholder="Enter Current Password" name="crrpassword" id="crrpassword"
                            required><br>

                        &ensp;&ensp;<label for="password">
                            <div class="form_label"><b>New Password</b></div>
                        </label>
                        <input type="password" placeholder="Enter New Password" name="password" id="password"
                            onkeyup='password_length();button_enable();' required>
                        <br><br>

                        &ensp;&ensp;<label for="confirm_password">
                            <div class="form_label"><b>Confirm Password</b></div>
                        </label>
                        <input type="password" placeholder="Confirm Password" name="confirm_password"
                            id="confirm_password" onkeyup='check_match_psw();password_length();button_enable();'
                            required>
                        <br> <br>
                        <div id="psw_length">
                            <p></p>
                        </div><br>
                        <div id="psw_validation">
                            <p></p>
                        </div><br>

                        &ensp;&ensp;<a href="profile" class="btn cancelbtn" class="form_btn">Cancel</a>
                        <a onclick="updateme()" id="register" class="btn" class="acceptbtn" style="margin-right :10px"
                            disabled>OK</a>
                        </br></br></br></br>



                    </div><!-- form_content -->
                </div><!-- card -->
                </br></br> </br></br></br></br>
            </div><!-- background -->

        </div><!-- container -->

    </form>

    <?php include("nav_profile.php"); ?>
    <!-- add navigation bar -->

    <!-- add footer -->
    <?php include("footer.php"); ?>



</body>

</html>