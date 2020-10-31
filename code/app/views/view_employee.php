<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Employee registration form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>

      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Manager Home</a></li>
        <li>Add Employee</li>          
      </ul><!-- breadcrumb -->

      <form action="./controllers/Register.php">
        <div class="container">  
          <h1>Employee Registration</h1>
          <p>Please fill in this form to register a employee</p>
          <div class="background">
            <hr>
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Employee ID</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="emp_id" value = "ES1023" id="emp_id" required disabled></br>

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" value = "Tharindu" id="first_name" required disabled></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" value = "Dulshan" id="last_name" required disabled></br>

                &ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="nic" value = "972401737v" id="nic" required disabled></br>

                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" value = "Shanika Akurugoda Telijjawila" id="address" required disabled></br>

                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="e-mail" value = "tdwithanage97@gmail.com" id="e-mail" required disabled></br>

                &ensp;&ensp;<h2>Contact Numbers</h2>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="text" placeholder="Enter Your mobile number" name="mobile_tel_no" value = "0711555555" id="mobile_tel_no" required disabled></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="text" placeholder="Enter Your Home number" name="home_tel_no" value = "0412222222" id="home_tel_no" required disabled>
                </br>
                <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
                </br></br>

              </div><!-- form_content -->   
            </div><!-- card -->
            </br></br>
          </div><!-- background -->
          <hr>
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