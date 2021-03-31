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
  

      
          
      <form name="add_bill" id="add_bill" method = "post" action="add_bill">
        
        
          <div class="background">
           
              <!-- add breadcrumb for find the path easily to users -->
              <ul class="breadcrumb">
               
                <li><a href="home">Home</a></li>
                <li><a href="receptionist">Receptionist</a></li>
                <li><a href="time_table_recep">View Reservation</a></li>
                <li>Billing</li>   
              </ul><!-- breadcrumb -->

              <div class = "select_buttons" style="float:left; margin-left: 10px;">
                    <a class="optionbtn btn" class="form_btn" href="invoice_report"> View Report</a>
                    <!-- <button type="submit" class="optionbtn btn" class="form_btn">View Report</button> -->
                </div>

               
              <div class="container">  
              <h1 style="text-align:center;"><i class="fa fa-money" aria-hidden="true"></i> Billing</h1>
              <hr style="width: 60%;">
               
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="reservation_id"><div class="form_label"><b>Reservation Id</b></div></label>
                <input type="text" placeholder="Enter the Reservation Id" value = '<?php echo "$array[reservation_id]"; ?>' name="reservation_id" id="reservation_id" ></br>

                &ensp;&ensp;<label for="name"><div class="form_label"><b>Customer Name</b></div></label>
                <input type="text" placeholder="Enter the Customer Name" value = '<?php echo "$array[name]"; ?>' name="name" id="name" required ></br>

                &ensp;&ensp;<label for="contact_number"><div class="form_label"><b>Contact Number</b></div></label>
                <input type="text" placeholder="Enter the Contact Number" value = '<?php echo "$array[tp_no]"; ?>' name="contact_number" id="contact_number" required ></br>

                &ensp;&ensp;<label for="veh_Number"><div class="form_label"><b>Vehicle Number</b></div></label>
                <input type="text" placeholder="Enter the Vehicle Number" value = '<?php echo "$array[vehicle_num]"; ?>' name="veh_Number" id="veh_Number" required ></br>

                &ensp;&ensp;<label for="veh_Model"><div class="form_label"><b>Vehicle Model</b></div></label>
                <input type="text" placeholder="Enter the Vehicle Model"  name="veh_Model" id="veh_Model" required ></br>

                &ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Handled By</b></div></label>
                <input type="text" placeholder="Enter the Employee id" name="emp_id" id="emp_id"></br>

                &ensp;&ensp;<label for="service_type"><div class="form_label"><b>Service Type</b></div></label>
                <input type="text" placeholder="Enter the Service Type" value = '<?php echo "$array[service_type]"; ?>' name="service_type" id="service_type"></br>

                &ensp;&ensp;<label for="service_charge"><div class="form_label"><b>Service Charge</b></div></label>
                <input type="text" placeholder="Enter the Service Charge" name="service_charge" id="service_charge" required onkeyup="calculate_insidebill()" ></br>

                &ensp;&ensp;<label for="aditional_charges"><div class="form_label"><b>Aditional Charges</b></div></label>
                <input type="text" placeholder="Enter the aditional charges" name="aditional_charges" id="aditional_charges" onkeyup="calculate_insidebill()" ></br>
                <?php 
                  if($array['is_advance_paid'] == 1){
                    $advance = 500;
                  }else{
                    $advance = 0;
                  }

                ?>
                &ensp;&ensp;<label for="advanced_fee"><div class="form_label"><b>Advanced</b></div></label>
                <input type="text" placeholder="Enter the aditional charges" value = '<?php echo $advance; ?>' name="advanced_fee" id="advanced_fee"></br>

                &ensp;&ensp;<label for="net_amount"><div class="form_label"><b>Total Amount</b></div></label>
                <input type="text" placeholder="Enter the Total Amount" name="net_amount" id="net_amount" required ></br>

                <a href="receptionist" class="btn cancelbtn" class="form_btn" > Cancel </a>
                <button type="submit" id="okbtn" class="okbtn btn"  style="margin-right :10px">OK</button> </br><br><br>
              </div><!-- form_content --> 
            </div><!-- card -->
            </br>
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
