<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
      <title>CleanCar - Add Leave</title>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="C:\Users\USER\Desktop\Clean_Car\style_css\form.css">
      
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
          <li><a href="home">Employee</a></li>
          <li>Add Leave</li>
          
        </ul>
        <form action="./controllers/Register.php">
            <div class="container">  
              <h1>Add Leave</h1>
              <hr></br>
              <div class="background">
              <hr>
              <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;&ensp;&ensp;<label for="date"><div class="form_label"><b>Select Date</b></div></label>
              <input type="date" placeholder="Enter the date" name="date" id="date" required></br>

              &ensp;&ensp;&ensp;&ensp;<label for="service_type"><div class="form_label"><b>Leave Type</b></div></label>
                <select name="service_type" id="service_type">
                    <option value="Full_leave">Full Leave</option>
                    <option value="half_day">half Day</option>
                    <option value="short_leave">Short Leave</option>
                </select><br>

              &ensp;&ensp;&ensp;&ensp;<label for="service_type"><div class="form_label"><b>Seect Time</b></div></label>
               <select name="service_type" id="service_type">
                <option value="Full_leave">full day</option>
                 <option value="half_day1">08:00 am - 12:00am</option>
                 <option value="half_day2">12:00 pm - 05:00pm</option>
                 <option value="short_leave1">08:00 am - 10:00am</option>
                 <option value="short_leave2">03:00 pm - 05:00pm</option>
               </select><br>
              
              &ensp;&ensp;&ensp;&ensp;<label for="tp_no"><div class="form_label"><b>Reason</b></div></label>
              <input type="tel" placeholder="Enter your reason here" name="tp_no" id="tp_no" required></br>

              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Submit</button>
              </div>
              
            </div>
            </br>
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