<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
      <title>CleanCar - Add Leave</title>
      <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

      <link rel="stylesheet" type="text/css" href="public\css\request_leave.css"><!-- add style to form -->
      
      <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

      <script type="text/javascript" src="public/js/add_emp_leave.js"></script>
      <script src="public/js/jquery/jquery.alertable.min.js"></script>
    </head>

    <body>

      
      <!-- onsubmit="send_leave_data()" -->
      <form name="add_leave_form" id="add_leave_form" method = "post" onsubmit="send_leave_data()">        
      <div class="container">  
         
          <div class="background">
             <!-- breadcrumb-->
              <ul class="breadcrumb">
             
              <li><a href="home">Home</a></li>
              <li><a href="manager">Manager</a></li>
              <li><a href="employee_list">Employee section</a></li>
              <li>Add Leave</li>    
            </ul>
               <h1>Add Leave</h1>
                <hr style="width: 60%;"></br>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

                &ensp;&ensp;<label for="date"><div class="form_label"><b>Select Date</b></div></label>
                <input type="date" placeholder="Enter the date" name="leave_date" id="leave_date" required></br>

                &ensp;&ensp;<label for="emp_id"><div class="form_label"><b>Employee Id</b></div></label>
                <input type="text" placeholder="Enter employee id" name="emp_id" id="emp_id" required></br>

                &ensp;&ensp;<label for="leave_type"><div class="form_label"><b>Leave Type</b></div></label>
                <select name="leave_type" id="leave_type">
                    <option value="Full_leave">Full Leave</option>
                    <option value="half_day">half Day</option>
                    <option value="short_leave">Short Leave</option>
                </select><br>

                &ensp;&ensp;<label for="leave_time"><div class="form_label"><b>Seect Time</b></div></label>
                <select name="leave_time" id="leave_time">
                  <option value="08:00:00">full day</option>
                  <option value="08:00:00">08:00 am - 12:00am</option>
                  <option value="12:00:00">12:00 pm - 05:00pm</option>
                  <option value="08:00:00">08:00 am - 10:00am</option>
                  <option value="15:00:00">03:00 pm - 05:00pm</option>
                </select><br>
              
                &ensp;&ensp;<label for="reason"><div class="form_label"><b>Reason</b></div></label>
               <input type="text" placeholder="Enter your reason here" name="reason" id="reason" required></br>

                <button type="cancel" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Submit</button> </br></br> </br></br>
              
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