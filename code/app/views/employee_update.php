<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Employee registration form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\employee_update.css"><!-- add style to form -->
        
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script> 
    </head>

    <body>



      <form >
        <div class="container">  
         
                <div class="background">
                   <ul class="breadcrumb">
             
             
              <li><a href="home">Home</a></li>
              <li><a href="home">Manager Home</a></li>
              <li>Update Employee</li>          
            </ul><!-- breadcrumb -->
             <h1>Employee Update</h1>   <hr style="width: 60%;">
           
          </br>
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Employee ID</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="emp_id" value = "ES1023" id="emp_id" required></br>

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" value = "Tharindu" id="first_name" required></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" value = "Dulshan" id="last_name" required></br>

                &ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="nic" value = "972401737v" id="nic" required></br>

                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" value = "Shanika Akurugoda Telijjawila" id="address" required ></br>

                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="e-mail" value = "tdwithanage97@gmail.com" id="e-mail" required ></br>

                &ensp;&ensp;<h2>Contact Numbers</h2>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="text" placeholder="Enter Your mobile number" name="mobile_tel_no" value = "0711555555" id="mobile_tel_no" required ></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="text" placeholder="Enter Your Home number" name="home_tel_no" value = "0412222222" id="home_tel_no" required >
                </br>
                <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
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