<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="public\css\profile.css">
</head>
<body>



      <form >
        <div class="container">  
         
                <div class="background">
                   <ul class="breadcrumb">
             <li><a href="home">Home</a></li>
            <li>Profile</li>          
            </ul><!-- breadcrumb -->
            
           
          </br>
            <div class="card" >
            	 <img src="public\images\user-icons.png" style="margin-left: auto;
  margin-right: auto;">
              <div id=form_content> <!-- div to center needed elements -->

           

                &ensp;&ensp;<label for="first_name"><div class="form_label"><b>First Name</b></div></label>
                <input type="text" placeholder="Enter Your First Name" name="first_name" value = "Tharindu" id="first_name" required></br>

                &ensp;&ensp;<label for="last_name"><div class="form_label"><b>Last Name</b></div></label>
                <input type="text" placeholder="Enter Your Last Name" name="last_name" value = "Dulshan" id="last_name" required></br>

                &ensp;&ensp;<label for="nic"><div class="form_label"><b>NIC</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="nic" value = "972401737v" id="nic" required></br>

                &ensp;&ensp;<label for="address"><div class="form_label"><b>Address</b></div></label>
                <input type="text" placeholder="Enter Your Address" name="address" value = "Shanika Akurugoda Telijjawila" id="address" required ></br>

                &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email</b></div></label>
                <input type="email" placeholder="Enter Your Email Address" name="e-mail" value = "tdwithanage97@gmail.com" id="e-mail" required ></br>

                &ensp;&ensp;<h2>Contact Numbers</h2>

                &ensp;&ensp;<label for="mobile_tel_no"><div class="form_label"><b>Mobile</b></div></label>
                <input type="text" placeholder="Enter Your mobile number" name="mobile_tel_no" value = "0711555555" id="mobile_tel_no" required ></br>
              
                &ensp;&ensp;<label for="home_tel_no"><div class="form_label"><b>Home</b></div></label>
                <input type="text" placeholder="Enter Your Home number" name="home_tel_no" value = "0412222222" id="home_tel_no" required >
                </br>
                <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
                <button type="submit" class="btn" class="form_btn" style="margin-right :10px">Update</button>
                </br></br></br></br>

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
