<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Confirm Reservation</title>
    
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
        <li><a href="home">Customer</a></li>
        <li><a href="make_reservation">Make Reservation</a></li>
        <li>Confirm</a></li>          
      </ul><!-- breadcrumb -->

      <form >
        <div class="container">  
          <h1>Confirm Reservation</h1>
          <div class="background">
            <hr>
            <div class="card" >
              <h2>&ensp;&ensp;Thank you for making your online reservation with CleanCar!</h2></br>
              <h3>&ensp;&ensp;Your reservation details are as follows: </h3></br>
              <div id=form_content> <!-- div to center needed elements -->

                <!-- each field gets details from the array -->

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text"  name="first_name" value = <?php echo "$array[first_name]"; ?> id="first_name" disabled></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text"  name="last_name" value = <?php echo "$array[last_name]"; ?> id="last_name" disabled></br>

                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text"  name="address" value = <?php echo "$array[address]"; ?> id="address" disabled></br>

                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email"  name="email" value = <?php echo "$array[email]"; ?> id="e-mail" disabled></br>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="text"  name="mobile_tel_no" value = <?php echo "$array[mobile_tel_no]"; ?> id="mobile_tel_no" disabled></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="text"  name="home_tel_no" value = <?php echo "$array[home_tel_no]"; ?> id="home_tel_no" disabled>
                </br>
                <a href="employee_list"><button class="btn cancelbtn" class="form_btn" >Cancel</button></a>
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