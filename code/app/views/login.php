<!DOCTYPE html>
<html>
<head>
    <title>CleanCar -Login Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- set favicon icon -->
    <link rel="icon" href="public/images/favicon/favicon.png">

    <link rel="stylesheet" type="text/css" href="public\css\login.css"><!-- add style to form -->
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
        //echo($notification);

    ?>
   
    <form action="auth" method="POST" id="login" name="login"><!-- TEMPORARY AUTH -->
        <div class="container">  
     
                <div class="background">
                        <!-- add breadcrumb to find the path easily to users -->
                        <ul class="breadcrumb">
                            <li><a href="home">Home</a></li>
                            <li>Sign In</li>
                        </ul>
                         <div class="card">
                        <div id=form_content> <!-- div to center needed elements -->
                                <h1 style="margin-top: -110px;">Sign In</h1>
                            <img class="avatar" id="avatar" src="public/images/user-icons.PNG"><br>

                           
                            <input type="text" placeholder="Enter User Name" name="user_name" id="user_name" required></br>

                           
                            <input type="password" placeholder="Enter Password" name="password" id="password" required>

                            
                             <button type="submit" class="btn" class="form_btn" >Log In</button></br></br>
                            
                            <!-- div which displays on invalid credentials --> 
                            <div id="incorrect_msg" style="margin-top: 50px;"></div>
                            </br></br></br></br>
                            
                            <a href="forgot_password" style="margin-left: 35%;"><b>Forgot Password?</b></a>
                            
                            
                            
                           
                        </div><!-- form_content -->               
                    </div><!-- card -->
                    </br></br>
                </div><!-- background -->
         
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