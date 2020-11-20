<!DOCTYPE html>    
<html>    
<head>    
    <title>change_login_password</title>     
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet"><!-- get font just in case -->

        <link rel="stylesheet" type="text/css" href="public\css\change_password.css"><!-- add style to form -->
        
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script> 
</head>    
<body> 
      </br>
      </br>
     

        <form action="./controllers/Register.php">
        <div class="container">  
         
          <div class="background">
            <!-- create breadcrumb-->  
        <ul class="breadcrumb">
        
          <li><a href="home">Home</a></li>
          <li>Change Login Password</li>
        </ul> <!--breadcrumb--></br></br>
         <h1>Change Password&ensp;<i class="far fa-lock-alt fa-lg"></i></h1> <hr style="width: 60%;">
          </br>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

          &ensp;&ensp;<label for="user_name"><div class="form_label"><b>User Name</b></div></label>   
          <input type="text" placeholder="Enter username" name="user_name" id="user_name" required><br> 
             
          &ensp;&ensp;<label for="e-mail"><div class="form_label"><b>Email Address</b></div></label>   
          <input type="text" placeholder="Enter email address" name="e-mail" id="e-mail" required>
          <br><br>

          &ensp;&ensp;<button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
          <button type="submit" class="btn" class="form_btn" style="margin-right :10px">OK</button> 
            </br></br></br></br>

    

          </div><!-- form_content --> 
            </div><!-- card -->
            </br></br> </br></br></br></br>
          </div><!-- background -->
         
        </div><!-- container -->

      </form>

      <?php include("nav_profile.php"); ?> <!-- add navigation bar -->

    <!-- add footer -->
    <?php include("footer.php"); ?>

    </form>

</body>    
</html> 