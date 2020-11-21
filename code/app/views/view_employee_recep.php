<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - View Employee</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\view_employee.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>

      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="receptionist">Receptionist</a></li>
        <li><a href="employee_list_recep">Employee section</a></li>
        <li>View Employee</li>          
      </ul><!-- breadcrumb -->

      <form >
        <div class="container">  
          <h1>Employee Details</h1>
          <div class="background">
            <hr>
            <div class="card" >

              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->
                <label for="emp_id"><div class="form_label">Employee ID </div></label>
                <input type="text"  name="emp_id" value = <?php echo ":-"."$array[emp_id]"; ?> id="emp_id" disabled></br>

                <label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text"  name="first_name" value = <?php echo ":-"."$array[first_name]"; ?> id="first_name" disabled></br>

                <label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text"  name="last_name" value = <?php echo ":-"."$array[last_name]"; ?> id="last_name" disabled></br>

                <label for="nic"><div class="form_label"><b>NIC No</b></div></label>
                <input type="text"  name="nic" value = <?php echo ":-"."$array[NIC_no]"; ?> id="nic" disabled></br>

                <label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text"  name="address" value = <?php echo ":-"."$array[address]"; ?> id="address" disabled></br>

                <label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email"  name="email" value = <?php echo ":-"."$array[email]"; ?> id="e-mail" disabled></br>

                <label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="text"  name="mobile_tel_no" value = <?php echo ":-"."$array[mobile_tel_no]"; ?> id="mobile_tel_no" disabled></br>
              
                <label for="home_tel_no"><div class="form_label" ><b>Home</b></div></label>
                <input type="text"  name="home_tel_no" value = <?php echo ":-"."$array[home_tel_no]"; ?> id="home_tel_no" disabled>
                </br>
                <a class="updatebtn" href="employee_update">Update</a>
                <a class="backbtn" href="employee_list">Back</a>
                </br></br>

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