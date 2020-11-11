<!DOCTYPE html>
<html>
<head>
    <title>CleanCar -Login Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- set favicon icon -->
    <link rel="icon" href="public/images/favicon/favicon.png">

    <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->

    <!-- get imported jquery -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>

    <!-- get external js file -->
    <script type="text/javascript" src="public\js\login.js"></script>

    <!-- set php notification to a js var in order to execute external js -->
    <script type="text/javascript">var notification = "<?= $notification ?>";</script>
        
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        //DEBUGGING
        echo($notification);
        echo("cat");

    ?>
    <!-- add breadcrumb to find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public/images/4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li>Sign In</li>
    </ul>
    <form action="auth" method="POST" id="login" name="login"><!-- TEMPORARY AUTH -->
        <div class="container">  
            <h1>Sign In</h1>
            <hr>
            <br>
                <div class="background">
                <hr>
                    <div class="card" >
                        <div id=form_content> <!-- div to center needed elements -->

                            <img class="avatar" id="avatar" src="public/images/user-icons.PNG"><br>

                            &ensp;&ensp;<label for="user_name"><div class="form_label"><b>User Name</b></div></label>
                            <input type="text" placeholder="Enter Your User Name" name="user_name" id="user_name" required></br>

                            &ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required></br>

                            </br>
                            <!-- div which displays on invalid credentials --> 
                            <div id="incorrect_msg"></div>
                            </br></br>
                            
                            &ensp;&ensp;<a href="change_password">Forgot Password?</a>
                            
                            </br>
                            <button type="reset" class="btn cancelbtn" class="form_btn" >Cancel</button>
                            <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Log In</button>&ensp;
                        </div><!-- form_content -->               
                    </div><!-- card -->
                    </br></br>
                </div><!-- background -->
                <hr>
            </div><!-- container -->
        </form>

        <?php
        //include nav bar externally 
        include("nav_login.php")
        ?>

        <?php
            //get footer in seperate file
            include("footer.php")
        ?>
    </body>
</html>