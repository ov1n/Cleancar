<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Employee registration form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\add_employee.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

        <!-- get external js file -->
        <script type="text/javascript" src="public\js\add_emp.js"></script>
        <!-- get imported jquery -->
        <script src="public/js/jquery/jquery-3.5.1.js"></script>
    </head>

    <body>

     
    
      <form name="emp_reg_form" id="emp_reg_form" method = "post" onsubmit="send_data()" >
        <div class="container">  
          
          <div class="background">
          
            <ul class="breadcrumb">
                
                  <li><a href="home">Home</a></li>
                  <li><a href="receptionist">Receptionist</a></li>
                  <li>Add Employee</li>          
            </ul><!-- breadcrumb -->
            <h1 style="text-align:center;"><i class="fas fa-id-card-alt"></i> Employee Registration</h1>
                
                <hr style = "width:60%">
                <br>

                  
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" required size="50"></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" required></br>

                &ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="nic" id="nic" onkeyup='check_nic();button_enable();' required>
                <div id="nic_msg"><p></p></div><br>

                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" id="address" required></br>

                &ensp;&ensp;<label for="email"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="email" id="email" required></br>

                &ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='check_match_psw();password_length();button_enable();' required>
                </br>

                &ensp;&ensp;<label for="confirm_password"><div class="form_label"><b>Confirm Password</b></div></label>
                <input type="password" placeholder="Re Enter the Password" name="confirm_password" id="confirm_password" onkeyup='check_match_psw();password_length();button_enable();' required>
                <br><div id="psw_length"><p></p></div><br>
                <div id="psw_validation"><p></p></div></br>

                &ensp;&ensp;<h2>Contact Numbers</h2>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="tel" placeholder="Enter Your mobile number" name="mobile_tel_no" id="mobile_tel_no" onkeyup = 'check_phone_no();button_enable();' required></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="tel" placeholder="Enter Your Home number" name="home_tel_no" id="home_tel_no" onkeyup = 'check_phone_no();button_enable();' required><br>
                <div id="phone_validation"><p></p></div><br>

                <a href="receptionist" class="btn cancelbtn" class="form_btn" > Cancel </a>
                <!-- <button href="receptionist" class="btn cancelbtn" class="form_btn" >Cancel</button> -->
                <button type="submit" id="register" class="btn" class="form_btn" style="margin-right :10px">Register</button>
                </br></br></br></br>

              </div><!-- form_content -->   
            </div><!-- card -->
             </br></br></br></br>
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