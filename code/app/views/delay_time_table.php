<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>Delay form</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\delay_time.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
    </head>

    <body>
  <form > 
    <div class="container"> 
      <div class="background">

      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
        <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="receptionist">Receptionist</a></li>
        <li>Delay Timetable</li>      
      </ul><!-- breadcrumb -->

      
      <h1 style="text-align:center;"><i class="fas fa-hourglass-half"></i> Delay Timetable</h1>
      <hr style="width: 60%;">
        <div class="card" >
          <div id=form_content> <!-- div to center needed elements -->

              &ensp;&ensp;<label for="lift_no"><div class="form_label"><b>Lift No</b></div></label>
                <select name="lift_no" id="lift_no">
                    <option value="L001">L001</option>
                    <option value="L002">L002</option>
                    <option value="L003">L003</option>
                    <option value="L004">L004</option>
                </select><br>

              &ensp;&ensp;<label for="delay_time"><div class="form_label"><b>Delay (Minutes)</b></div></label>
                <select name="delay_time" id="delay_time">
                    <option value="a">10</option>
                    <option value="b">15</option>
                    <option value="c">20</option>
                    <option value="c">25</option>
                    <option value="d">30</option>
                </select><br>

              &ensp;&ensp;<label for="initial_time"><div class="form_label"><b>Initial Delay Time</b></div></label>
                <select name="initial_time" id="initial_time">
                    <option value="a">08.00 a.m.</option>
                    <option value="b">10.00 a.m.</option>
                    <option value="c">01.00 p.m.</option>
                    <option value="d">03.00 p.m.</option>
                </select><br>

                
                <a href="receptionist" class="cancelbtn btn" class="form_btn" > Cancel </a>
                <button type="submit" class="okbtn btn" class="form_btn" style="margin-right :10px">Send notification</button>
                </br></br></br>
          </div><!-- form_content -->  
          
        </div><!-- card -->
            
          
      
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