<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Employee registration form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\employee_update.css"><!-- add style to form -->
        <!-- get external js file -->
        <script type="text/javascript" src="public\js\add_emp.js"></script>
        <link rel="stylesheet" type="text/css" href="public\css\libraries\jquery.alertable.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script> 
    </head>

    <body>



      <form name="emp_update_form" id="emp_update_form" method = "post" onsubmit="updateme(); return false;">
        <div class="container">  
         
                <div class="background">
                   <ul class="breadcrumb">
             
             
              <li><a href="home">Home</a></li>
              <li><a href="manager">Manager</a></li>
              <li><a href="employee_list">Employee</a></li>
              <li>Update Employee</li>          
            </ul><!-- breadcrumb -->
             <h1>Employee Update</h1>   <hr style="width: 60%;">
           
          </br>
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                <input type="hidden" name="emp_id" value = '<?php echo "$array[emp_id]"; ?>' id="emp_id"></br>

                &ensp;&ensp;<label for="emp_id_no"><div class="form_label"><b>Employee ID</b></div></label>
                <input type="text" placeholder="Enter Your First Name"  value = '<?php echo "$array[emp_id]"; ?>' disabled></br>

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" value = '<?php echo "$array[first_name]"; ?>' id="first_name" required></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" value = '<?php echo "$array[last_name]"; ?>' id="last_name" required></br>

                &ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="nic" value = '<?php echo "$array[NIC_no]"; ?>' id="nic" onkeyup='check_nic();button_enable();' required>
                <div id="nic_msg"><p></p></div><br>
                
                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" value = '<?php echo "$array[address]"; ?>' id="address" required ></br>

                &ensp;&ensp;<label for="email"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="email" value = '<?php echo "$array[email]"; ?>' id="email" required ></br>

                &ensp;&ensp;<h2>Contact Numbers</h2>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="tel" placeholder="Enter Your mobile number" name="mobile_tel_no" value = '<?php echo "$array[mobile_tel_no]"; ?>' id="mobile_tel_no" pattern="^[0]{1}[0-9]{9}$" required ></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="tel" placeholder="Enter Your Home number" name="home_tel_no" value = '<?php echo "$array[home_tel_no]"; ?>' id="home_tel_no" pattern="^[0]{1}[0-9]{9}$" required >
                </br>
                <a href="employee_list" class="btn cancelbtn" class="form_btn" > Cancel </a>
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