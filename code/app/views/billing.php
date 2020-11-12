<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Billing form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\form.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="public\js\bill.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>

    </head>

    <body>
  
      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Receptionist</a></li>
        <li>Billing</li>   
      </ul><!-- breadcrumb -->

      <div class = "select_buttons">
          <a class="optionbtn btn" class="form_btn" href="invoice_report"> View Report</a>
          <!-- <button type="submit" class="optionbtn btn" class="form_btn">View Report</button> -->
          </div>
          
      <form name="add_bill" id="add_bill" method = "post" onsubmit="send_bill_data()">
        <div class="container">  
          <h1>Billing</h1>
          </br>
          <div class="background">
            <hr>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;</i><label for="bill_no"><div class="form_label"><b>Bill Number</b></div></label>
                <input type="text" placeholder="Enter the Bill Number" name="bill_no" id="bill_no" ></br>
  
                &ensp;&ensp;<label for="reservation_id"><div class="form_label"><b>Reservation Id</b></div></label>
                <input type="text" placeholder="Enter the Reservation Id" name="reservation_id" id="reservation_id" ></br>

                &ensp;&ensp;<label for="veh_Number"><div class="form_label"><b>Vehicle Number</b></div></label>
                <input type="text" placeholder="Enter the Vehicle Number" name="veh_Number" id="veh_Number" ></br>

                &ensp;&ensp;<label for="veh_Model"><div class="form_label"><b>Vehicle Model</b></div></label>
                <input type="text" placeholder="Enter the Vehicle Model" name="veh_Model" id="veh_Model" ></br>

                &ensp;&ensp;<label for="name"><div class="form_label"><b>customer Name</b></div></label>
                <input type="text" placeholder="Enter the Customer Name" name="name" id="name" ></br>

                &ensp;&ensp;<label for="contact_number"><div class="form_label"><b>Contact Number</b></div></label>
                <input type="text" placeholder="Enter the Contact Number" name="contact_number" id="contact_number" ></br>

                &ensp;&ensp;<label for="net_amount"><div class="form_label"><b>Net Amount</b></div></label>
                <input type="text" placeholder="Enter the Net Amount" name="net_amount" id="net_amount" ></br>

                <button type="cancel" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">OK</button>
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
