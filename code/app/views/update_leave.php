<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
      <title>CleanCar - Add Leave</title>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

      <link rel="stylesheet" type="text/css" href="public\css\request_leave.css"><!-- add style to form -->
      
      <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script> <!-- get icons -->

      <script type="text/javascript" src="public/js/add_emp_leave.js"></script> <!-- link to js file -->
      <script src="public/js/jquery/jquery.alertable.min.js"></script>
    </head>

    <body>

      <form name="add_leave_form" id="add_leave_form" method = "post" onsubmit="send_leave_data()">   <!-- call function in js file -->  
      <div class="container">  
         
          <div class="background">
             <!-- breadcrumb-->
              <ul class="breadcrumb">
             
              <li><a href="home">Home</a></li>
              <li><a href="employee">Employee</a></li>
              <li><a href="emp_leave">Leave List</a></li>
              <li>Update Leave</li>    
            </ul> <!-- end breadcrumb -->

            <h1>Update Leave</h1>
            <hr style="width: 60%;"></br> <!-- style horizontal line -->
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Select Date</b></div></label>
                <input type="text" placeholder="Enter the date" name="leave_date" value="12/12/2020" id="leave_date"   required></br>

                &ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Employee Id</b></div></label>
                <input type="text" placeholder="Enter employee id" name="emp_id" id="emp_id" value=
                "<?php echo($_SESSION['uname']); ?>" required></br> <!-- auto fill employee id when employee logged -->

                &ensp;&ensp;<label for="leave_type"><div class="form_label"><b>Leave Type</b></div></label>
                <input type="text" name="leave_type" id="leave_type" value = "half_day" required></br>
                    

                &ensp;&ensp;<label for="leave_time"><div class="form_label"><b>Seect Time</b></div></label>
                <input type="text" name="leave_time" id="leave_time" value = "12:00 pm - 05:00pm" required><br>
              
                &ensp;&ensp;<label for="reason"><div class="form_label"><b>Reason</b></div></label>
               <input type="text" placeholder="Enter your reason here" name="reason" id="reason" value="Doctor chanelling" required></br>

                <button type="cancel" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" id="submit" class="btn" class="form_btn" style="margin-right :10px">Update</button> </br></br> </br></br>
              
              </div><!-- form_content -->   
            </div><!-- card -->
            </br></br> 
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