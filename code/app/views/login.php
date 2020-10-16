<!DOCTYPE html>
<html>
<head>
    <title>CleanCar -Login Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!-- set favicon icon -->
    <link rel="icon" href="public/images/favicon/favicon.png">

    <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\nav_bar.css"><!-- add style to nav bar -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        //include nav bar externally 
        include("nav-bar.php")
    ?>
    <!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public/images/4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li>Sign In</li>
    </ul>
    <form action="auth" method="POST"><!-- TEMPORARY AUTH -->
        <div class="container">  
            <h1>Sign In</h1>
            <hr>
            <br>
                <div class="background">
                <hr>
                    <div class="card" >
                        <div id=form_content> <!-- div to center needed elements -->
                            <img class="avatar" src="public/images/user-icons.PNG"><br>

                            &ensp;&ensp;&ensp;&ensp;<label for="user_name"><div class="form_label"><b>User Name</b></div></label>
                            <input type="text" placeholder="Enter Your User Name" name="user_name" id="user_name" ></br>

                            &ensp;&ensp;&ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
                            <input type="password" placeholder="Enter Password" name="password" id="password" required></br>

                            <button type="reset" class="btn cancelbtn" class="form_btn" >Cancel</button>
                            <button type="submit" class="btn" class="form_btn" >Log In</button>&ensp;
                        </div><!-- form_content -->               
                    </div><!-- card -->
                    </br></br>
                </div><!-- background -->
                <hr>
            </div><!-- container -->
        </form>

        <?php
            //get footer in seperate file
            include("footer.php")
        ?>
    </body>
</html>