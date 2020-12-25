<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Customer Registration form</title>

        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\register.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <!-- get imported jquery -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>

        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

        <!-- get external js file -->
        <script type="text/javascript" src="public\js\register.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>
    </head>

    <body>
     

    

      <form method="POST" name="reg_form" id="reg_form" onsubmit="create()">
        <div>  
            <div class="background">
         
             <ul class="breadcrumb">
           
            <li><a href="home">Home</a></li>
            <li>Customer Registration</li>  
          </ul>
             
            <div class="card" >
              <h1>Sign Up</h1>
              <div id=form_content> <!-- div to center needed elements -->

                <!-- &ensp characters are used to improve clarity and keep clear spacing -->
              
                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" required size="50">
                </br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" required></br>

                &ensp;&ensp;<label for="vehicle_number"><div class="form_label"><b>Vehicle Number</b></div></label>
                <input type="text" placeholder="Vehicle Number" name="vehicle_number" id="vehicle_number" onkeyup='vehicle_no_validate();button_enable();'required> <br>
                <div id="vehicle-message"><p></p></div>
                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" id="address" required></br>

                &ensp;&ensp;<label for="email"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="email" id="email" required></br>

                &ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='confirm_password();password_length();button_enable();' required></br>
          
                &ensp;&ensp;<label for="psw-repeat"><div class="form_label"><b>Repeat Password</b></div></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onkeyup='confirm_password();password_length();button_enable();' required></br>
                <div id="psw-message"><p></p></div></br>
                <div id="psw-message2"><p></p></div>

                &ensp;&ensp;&ensp;&ensp;<h3>Contact Numbers</h3>
                &ensp;&ensp;&ensp;&ensp;<label for="mobile_tel_no" class="form_label"><div class="form_label"><b>Mobile</b></div></label>
                <input type="tel" placeholder="Enter Your mobile number" name="mobile_tel_no" id="mobile_tel_no" onkeyup='phone_validate();button_enable();' required></br>
              
                &ensp;&ensp;&ensp;&ensp;<label for="home_tel_no" class="form_label"><div class="form_label"><b>Home</b></div></label>
                <input type="tel" placeholder="Enter Your Home number" name="home_tel_no" id="home_tel_no" onkeyup='phone_validate();button_enable();' required>
                </br>
                <div id="other-message"><p></p></div>

                <p>already have an account?<a href="login"><b>Login</b></a></p>
                <button type="reset" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" class="btn" class="form_btn" style="margin-right :10px" id="register" disabled>Register</button>
              </div>
              
            </div>
            </br></br></br>
          </div>
           </div> 
        
      </form>
  
       <?php
        //include nav bar externally
        include("nav_login.php");
      ?>
      <?php
        // include footer seperately
        include("footer.php");
      ?>
          
    </body>
</html>