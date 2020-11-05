<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Leave Statistic</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="form.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
        
    </head>

    <body>
      
      <!-- add breadcrumb for find the path easily to users -->
      <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Employee</a></li>
        <li>Leave Statistic</li>
      </ul><!-- breadcrumb -->

      <form action="./controllers/Leave Statistic.php">
        <div class="container">  
          <h1>Leave Statistic</h1>
          <p>This data valid only for this year</p>
          <div class="background">
            <hr>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->
                <div style="text-align: center;margin-top: -100px;margin-bottom: 50px"><i class="fa fa-line-chart fa-4x" aria-hidden="true"></i></div><!--icon-->

                <label for="Number Of Leave You Got" style="width: 250px" ><div class="form_label"><b>Number Of Leave You Got</b></div></label>
                 <div class="form_label" style="margin:50px;color: black">Full Day&ensp;&ensp;&ensp;5 &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Short Leave&ensp;&ensp;&ensp;4</div>

                  <label for="Number Of Leave Available" style="width: 250px"><div class="form_label"><b>Number Of Leave Available</b></div></label>
                 <div class="form_label"style="margin:50px;color: black">Full Day&ensp;&ensp;&ensp;5 &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Short Leave&ensp;&ensp;&ensp;4</div>
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