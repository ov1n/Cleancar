<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Add Service</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="..\..\public\css\form.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
      <div id="navbar">

        <a class="profile"  href="javascript:void(0)"><i class="fa fa-user-circle-o"  aria-hidden="true" style="margin-right: 20px"></i></a>
        <a href="javascript:void(0)">Contact Us</a>
        <a href="javascript:void(0)">About Us</a>
        <a href="javascript:void(0)">Booking</a>
        <a href="javascript:void(0)">Home</a>
        <img src="../../public/images/2222.png">        
      </div>
        <ul class="breadcrumb">
          <img src="../../public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li><a href="home">Manager</a></li>
          <li>Add Service</li>
        </ul>
        <form action="./controllers/Register.php">
            <div class="container">  
              <h1>Add Service Type</h1>
              <p>Please fill in this form to create new service type</p>
              <div class="background">
                <hr>
                <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;&ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full_service">Full Service</option>
                    <option value="Normal_service">Normal Service</option>
                    <option value="body_wash">Body wash</option>
                </select><br>

              &ensp;&ensp;&ensp;&ensp;<label for="vehicle_category"><div class="form_label"><b>Vehicle Category</b></div></label>
                <select name="vehicle_category" id="vehicle_category">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="cab">Cab</option>
                    <option value="jeep">Jeep</option>
                </select><br>

              &ensp;&ensp;&ensp;&ensp;<label for="no_of_employees"><div class="form_label"><b>No of Employees</b></div></label>
              <input type="text" placeholder="Enter number of emploees" name="no_of_employees" id="no_of_employees" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="no_of_time_slot"><div class="form_label"><b>No of time slots</b></div></label>
              <input type="text" placeholder="Enter number of time slot" name="no_of_time_slot" id="no_of_time_slot" required size="50"></br>

              &ensp;&ensp;&ensp;&ensp;<label for="lift_no"><div class="form_label"><b>Lift Number</b></div></label>
                <select name="lift_no" id="lift_no">
                    <option value="L001">L001</option>
                    <option value="L002">L002</option>
                    <option value="L003">L003</option>
                    <option value="L004">L004</option>
                </select><br>

              &ensp;&ensp;&ensp;&ensp;<label for="prize"><div class="form_label"><b>Normal Prize</b></div></label>
              <input type="text" placeholder="Enter normal prize" name="prize" id="prize" required size="50"></br>

              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Submit</button>
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
                 <img src="../../public/images/3333.png">
               </div>
               
            </div>
          </div>
          
    </body>
</html>