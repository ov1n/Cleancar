<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Billing form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\billing.css"><!-- add style to form -->
        
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

        <script type="text/javascript" src="public\js\bill.js"></script>
        <script src="public/js/jquery/jquery.alertable.min.js"></script>

    </head>

    <body>
  

      
          
      <form name="add_bill" id="add_bill" method = "post" onsubmit="send_bill_data()">
        
        
          <div class="background">
           
              <!-- add breadcrumb for find the path easily to users -->
              <ul class="breadcrumb">
               
                <li><a href="home">Home</a></li>
                <li><a href="receptionist">Receptionist Home</a></li>
                <li>Billing</li>   
              </ul><!-- breadcrumb -->

               
              <div class="container">  
              <h1 style="text-align:center;"><i class="fa fa-money" aria-hidden="true"></i> Billing</h1><hr style="width: 60%;">
               <div class = "select_buttons" style="margin-right: 46%;">
                    <a class="optionbtn btn" class="form_btn" href="invoice_report"> View Report</a>
                    <!-- <button type="submit" class="optionbtn btn" class="form_btn">View Report</button> -->
                </div>
                  </br></br></br></br>
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

                <button type="cancel" class="cancelbtn btn" >Cancel</button>
                <button type="submit" class="okbtn btn"  style="margin-right :10px">OK</button> </br></br></br></br>
              </div><!-- form_content --> 
            </div><!-- card -->
            </br></br></br></br>
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
