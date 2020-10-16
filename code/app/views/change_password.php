<!DOCTYPE html>    
<html>    
<head>    
    <title>change_login_password</title>    
    <link rel="stylesheet" type="text/css" href="public/css/change_password.css"> 
    <link rel="stylesheet" type="text/css" href="public/css/footer.css"> 

    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>   
</head>    
<body> 
      <?php include("nav_profile.php"); ?> <!-- add navigation bar -->

      <!-- create breadcrumb-->  
        <ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Change Login Password</li>
        </ul> <!--breadcrumb-->

    <form action="changepwd.php" method="post"> 

      <h1>Forgotten Password</h1>
      
      <hr>

      <div class="cover"> <br>

    	   <div class="container">

        	<label for="user_name"><b>User Name</b></label>   
        	<input type="text" placeholder="Enter username" name="user_name" id="user_name" required>
        
        	<br> 
        	   
        	<label for="e-mail"><b>Email Address</b></label>   
        	<input type="text" placeholder="Enter email address" name="e-mail" id="e-mail" required>
        	<br><br><br><br>

          <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
          <button type="submit" class="btn" class="form_btn" style="margin-right :10px">OK</button> 
            
        </div> <!-- container -->

    </form>
  </div> <!-- cover -->
  <br> <hr> <br>

    <!-- add footer -->

    <?php include("footer.php"); ?>

    </form>

</body>    
</html> 