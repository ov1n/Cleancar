<!DOCTYPE html>    
<html>    
<head>    
    <title>change_login_password</title>     
    <link rel="stylesheet" type="text/css" href="public/css/footer.css"><!-- add style to form -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>   
</head>    
<body> 

      <!-- create breadcrumb-->  
        <ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Change Login Password</li>
        </ul> <!--breadcrumb-->

        <form action="./controllers/Register.php">
        <div class="container">  
          <h1>Change Password</h1>
          <hr></br>
          <div class="background">
            <hr>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->

          &ensp;&ensp;<label for="user_name"><b>User Name</b></label>   
        	<input type="text" placeholder="Enter username" name="user_name" id="user_name" required><br> 
        	   
        	&ensp;&ensp;<label for="e-mail"><b>Email Address</b></label>   
        	<input type="text" placeholder="Enter email address" name="e-mail" id="e-mail" required>
        	<br><br>

          &ensp;&ensp;<button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
          <button type="submit" class="btn" class="form_btn" style="margin-right :10px">OK</button> 
            
          </div><!-- form_content --> 
            </div><!-- card -->
            </br></br>
          </div><!-- background -->
          <hr>
        </div><!-- container -->

      </form>

      <?php include("nav_profile.php"); ?> <!-- add navigation bar -->

    <!-- add footer -->
    <?php include("footer.php"); ?>

    </form>

</body>    
</html> 