<!DOCTYPE html>
<html>
<head>
    <title>CleanCar -Login Form</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="..\..\public\css\form.css">
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
    <ul class="breadcrumb">
        <img src="C:\Users\USER\Desktop\Clean_Car\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li>Sign In</li>
        
      </ul>
      <form action="./controllers/Register.php">
        <div class="container">  
            <h1>Sign In</h1>
            <hr>
            <br>
            <div class="background">
            <hr>
            <div class="card" >
            <div id=form_content> <!-- div to center needed elements -->
                <img class="image" src="C:\Users\USER\Desktop\Clean_Car\images\user-icons.PNG"><br>

                &ensp;&ensp;&ensp;&ensp;<label for="user_name"><div class="form_label"><b>User Name</b></div></label>
                <input type="text" placeholder="Enter Your User Name" name="user_name" id="user_name" ></br>

                &ensp;&ensp;&ensp;&ensp;<label for="password"><div class="form_label"><b>Password</b></div></label>
              <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup='confirm_password();' required></br>

              <button type="submit" class="btn cancelbtn" class="form_btn" >Cancel</button>
              <button type="submit" class="btn" class="form_btn" >Log In</button>
            </div>
              
        </div>
        </br></br>
        </div>
        <hr>
        </div>
        </form>

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
        </div>
    </body>
</html>