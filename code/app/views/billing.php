<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Billing form</title>
    
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
        <li><a href="home">Receptionist Home</a></li>
        <li>Billing</li>          
      </ul>
      <form action="./controllers/Register.php">
        <div class="container">  
          <h1>Billing</h1>
          <hr></br>
          <div class="background">
            <hr>
            <div class="card" >
            <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;&ensp;&ensp;</i><label for="bill_no"><div class="form_label"><b>Bill Number</b></div></label>
              <input type="text" placeholder="Enter the Bill Number" name="bill_no" id="bill_no" ></br>
  
              &ensp;&ensp;&ensp;&ensp;<label for="reservation_id"><div class="form_label"><b>Reservation Id</b></div></label>
              <input type="text" placeholder="Enter the Reservation Id" name="reservation_id" id="reservation_id" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="veh_Number"><div class="form_label"><b>Vehicle Number</b></div></label>
              <input type="text" placeholder="Enter the Vehicle Number" name="veh_Number" id="veh_Number" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="veh_Model"><div class="form_label"><b>Vehicle Model</b></div></label>
              <input type="text" placeholder="Enter the Vehicle Model" name="veh_Model" id="veh_Model" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="name"><div class="form_label"><b>customer Name</b></div></label>
              <input type="text" placeholder="Enter the Customer Name" name="name" id="name" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="contact_number"><div class="form_label"><b>Contact Number</b></div></label>
              <input type="text" placeholder="Enter the Contact Number" name="contact_number" id="contact_number" ></br>

              &ensp;&ensp;&ensp;&ensp;<label for="net_amount"><div class="form_label"><b>Net Amount</b></div></label>
              <input type="text" placeholder="Enter the Net Amount" name="net_amount" id="net_amount" ></br>

              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" style="margin-right :10px">OK</button>
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