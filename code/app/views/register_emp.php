<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Employee registration form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="C:\Users\USER\Desktop\Clean_Car\style_css\form.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div id="navbar">

        <a class="profile"  href="javascript:void(0)"><i class="fa fa-user-circle-o"  aria-hidden="true" style="margin-right: 20px"></i></a>
        <a href="javascript:void(0)">Sign In</a>
        <a href="javascript:void(0)">Contact Us</a>
        <a href="javascript:void(0)">About Us</a>
        <a href="javascript:void(0)">Booking</a>
        <a href="javascript:void(0)">Home</a>
        <img src="C:\Users\USER\Desktop\Clean_Car\images\2222.png"> 
      </div>

        <ul class="breadcrumb">
          <img src="C:\Users\USER\Desktop\Clean_Car\images\4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li><a href="home">Manager Home</a></li>
          <li>Add Employee</li>          
        </ul>
        <form action="./controllers/Register.php">
            <div class="container">  
              <h1>Employee Registration</h1>
              <p>Please fill in this form to register a employee</p>
              <div class="background">
              <hr>
              <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;&ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Employee ID</b></div></label>
              <input type="text" placeholder="Enter Your First Name" name="emp_id" id="emp_id" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
              <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
              <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
              <input type="text" placeholder="Enter Your Address" name="nic" id="nic" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
              <input type="text" placeholder="Enter Your Address" name="address" id="address" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
              <input type="email" placeholder="Enter Your Email Address" name="e-mail" id="e-mail" required></br>

              &ensp;&ensp;&ensp;&ensp;<h2>Contact Numbers</h2>
              &ensp;&ensp;&ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
              <input type="text" placeholder="Enter Your mobile number" name="mobile_tel_no" id="mobile_tel_no" required></br>
              
              &ensp;&ensp;&ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
              <input type="text" placeholder="Enter Your Home number" name="home_tel_no" id="home_tel_no" required>
              </br>
              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Register</button>
            </br></br>
              </div>
              
            </div>
          
            </br></br>
          </div>
            <hr>
          </div>
            </form>
            <div class="footer">

              <div class="footer-wrapper">
              <div class="single-footer">
               
                <h4><a href="/home.php" style="text-decoration: none; color: inherit;">Clean<span>Car</span></a></h4>
              </div>
              <div class="single-footer">
                <h4>navigation</h4>
                <br><p>© 2019 CS group 37</p>
              </div>
              <div class="single-footer">
                <p><span> 123,cross Road,</span>Nugegoda, Srilanka </p>
                <p>+94-1132158724 </p>
                <p>+94-1132158123 </p>
                <div class="icon">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </div>
              </div>
          
               <div class="single-footer">
                 <img src="C:\Users\USER\Desktop\Clean_Car\images\3333.png">
               </div>
               
            </div>
          </div>
          
    </body>
</html>