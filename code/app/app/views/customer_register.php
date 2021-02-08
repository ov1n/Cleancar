<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Customer registration form</title>

        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="C:\Users\USER\Desktop\Clean_car_github\Clean-Car\code\public\css\form.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div id="navbar">
        <a href="javascript:void(0)">Sign In</a>
        <a href="javascript:void(0)">Contact Us</a>
        <a href="javascript:void(0)">About Us</a>
        <a href="javascript:void(0)">Booking</a>
        <a href="javascript:void(0)">Home</a>
        <img src="C:\Users\USER\Desktop\Clean_Car\images\2222.png">        
      </div>
        <ul class="breadcrumb">
          <img src="public\images\4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Customer Registration</li>  
        </ul>
        <form action="./controllers/Register.php">
            <div class="container">  
              <h1>Registration</h1>
              <p>Please fill in this form to register as a customer</p>
              <div class="background">
                <hr>
              <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->
              
              &ensp;&ensp;&ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
              <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
              <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="vehicle_number"><div class="form_label"><b>Vehicle Number</b></div></label>
              <input type="text" placeholder="Vehicle Number" name="vehicle_number" id="vehicle_number" required>&ensp;
              <button class="btn btn_round" id="add_vehicle_number" formnovalidate>&ensp;+&ensp;</button></br>

              &ensp;&ensp;&ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
              <input type="text" placeholder="Enter Your Address" name="address" id="address" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
              <input type="email" placeholder="Enter Your Email Address" name="e-mail" id="e-mail" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
              <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='confirm_password();' required></br>
          
              &ensp;&ensp;&ensp;&ensp;<label for="psw-repeat"><div class="form_label"><b>Repeat Password</b></div></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" onkeyup='confirm_password();' required></br>
              <div id="psw-message"><p></p></div>
              &ensp;&ensp;&ensp;&ensp;<h3>Contact Numbers</h3>
              &ensp;&ensp;&ensp;&ensp;<label for="mobile_tel_no" class="form_label"><div class="form_label"><b>Mobile</b></div></label>
              <input type="tel" placeholder="Enter Your mobile number" name="mobile_tel_no" id="mobile_tel_no" required></br>
              
              &ensp;&ensp;&ensp;&ensp;<label for="home_tel_no" class="form_label"><div class="form_label"><b>Home</b></div></label>
              <input type="tel" placeholder="Enter Your Home number" name="home_tel_no" id="home_tel_no" required>
              </br>
              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Register</button>
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
    <script>
      
      var confirm_password = function() {  //function which matches password values
        if (document.getElementById('password').value == document.getElementById('psw-repeat').value) {
          document.getElementById('psw-message').style.color = 'green';
          document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;matching';
        } else {
          document.getElementById('psw-message').style.color = 'red';
          document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;not matching';
        }
        
      }

      var password_length = function() {  //function which checks range of characters
        if(document.getElementById('password').length <= 8) {
          document.getElementById('psw-message').style.color = 'red';
          document.getElementById('psw-message').innerHTML = '&ensp;&ensp;&ensp;&ensp;&#9432;&emsp;need at least 8 characters';
        }
        
      }
    </script>
</html>