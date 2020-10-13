<!DOCTYPE html>    
<html>    
<head>    
    <title>change_login_password</title>    
    <link rel="stylesheet" type="text/css" href="css/change_password.css">    
</head>    
<body> 
      <?php include("nav-bar.php"); ?> <!-- add navigation bar -->

      <!-- create breadcrumb-->  
        <ul class="breadcrumb">
          <img src="image/car.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Change Login Password</li>
        </ul> <!--breadcrumb-->

    <form action="changepwd.php" method="post"> 

      <h1>Forgotten Password</h1>
      
      <hr> <br>

      <div class="cover">

    	   <div class="container">

        	<label for="user_name"><b>User Name</b></label>   
        	<input type="text" placeholder="Enter username" name="user_name" id="user_name" required>
        
        	<br><br><br>   
        	   
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

        <div class="footer">

              <div class="footer-wrapper">
              <div class="single-footer">
               
                <h4><a href="/home.php" style="text-decoration: none; color: inherit;">Clean<span>Car</span></a></h4>
              </div>
              <div class="single-footer">
                <h4>navigation</h4>
                <br><p>© 2019 CS group 37</p>
              </div>
              <div class="single-footer">
                <p><span> 123,cross Road,</span>Nugegoda, Srilanka </p>
                <p>+94-1132158724 </p>
                <p>+94-1132158123 </p>
                <div class="icon">
                <i class="fa fa-instagram" aria-hidden="true"></i>
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-twitter-square" aria-hidden="true"></i>
                </div>
              </div>
          
               <div class="single-footer">
                 <img src="C:\Users\USER\Desktop\Clean_Car\images\3333.png">
               </div>
               
            </div>
        </div> <!-- footer -->

    </form>

</body>    
</html> 