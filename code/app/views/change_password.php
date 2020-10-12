<!DOCTYPE html>    
<html>    
<head>    
    <title>change_login_password</title>    
    <link rel="stylesheet" type="text/css" href="css/changepwd.css">    
</head>    
<body> 
    <form action="changepwd.php" method="post"> 

	    <h1>Forgotten Password</h1>

      <div class="cover">

        <hr>

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

</body>    
</html> 