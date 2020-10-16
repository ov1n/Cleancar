<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Make Reservation form</title>
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\form.css">
        <link rel="stylesheet" type="text/css" href="public\css\nav_bar.css">
        <link rel="stylesheet" type="text/css" href="public\css\footer.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>

      <div id="navbar">

        <a class="profile"  href="javascript:void(0)"><i class="fa fa-user-circle-o"  aria-hidden="true" style="margin-right: 20px"></i></a>
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
          <li><a href="home">Customer</a></li>
          <li>Make Reservation</li>
          
        </ul>
        <form action="./controllers/Register.php">
            <div class="container">  
              <h1>Make Reservation</h1>
              <hr>
              <p>Please fill in this form to make reservation</p>
              <div class="background">
              <hr>
              <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;&ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
              <input type="text" placeholder="Enter Your First Name" name="first_name" id="first_name" ></br>
  
              &ensp;&ensp;&ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
              <input type="text" placeholder="Enter Your Last Name" name="last_name" id="last_name" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category</b></div></label>
                <select name="vehicle_category" id="vehicle_category">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="cab">Cab</option>
                    <option value="jeep">Jeep</option>
                </select><br>
              
              &ensp;&ensp;&ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
              <input type="email" placeholder="Enter Your Email Address" name="e-mail" id="e-mail" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="date"><div class="form_label"><b>Date</b></div></label>
              <input type="date" placeholder="Enter the date" name="date" id="date" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                </select><br>

              &ensp;&ensp;&ensp;&ensp;<label for="tp_no"><div class="form_label"><b>Contact Number</b></div></label>
              <input type="tel" placeholder="Enter Your Telephone Number" name="tp_no" id="tp_no" required></br>

              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" >Submit</button>
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