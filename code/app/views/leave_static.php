<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
        <title>CleanCar - Leave Statistic</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="public\css\leave_statistics.css"><!-- add style to form -->
        <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->
        
        <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
        
    </head>

    <body>
      
      <form>
        <div class="container">  
         
          <div class="background">
                    <!-- add breadcrumb for find the path easily to users -->
              <ul class="breadcrumb">
                
                <li><a href="home">Home</a></li>
                <li><a href="employee">Employee</a></li>
                <li>Leave Statistics</li>
              </ul><!-- breadcrumb -->
           </br>
             <h1>Leave Statistics&ensp;<i class="fa fa-line-chart fa-lg" aria-hidden="true"></i></h1> <hr style="width: 60%;"></br>
          <p>This data valid only for this year</p>
            <div class="card" >
              <div id=form_content> <!-- div to center needed elements -->
                <label for="Number Of Leave You Got" style="width: 280px" ><div class="form_label"><b>Number Of Leave You Got upto Today</b></div></label>
                 <div class="form_label" style="margin:35px;color: black">Full Day&ensp;&ensp; <?php echo($array[0]['no_of_leaves_fullday']); ?> &ensp;&ensp;&ensp;&ensp;&ensp;Half Day&ensp;&ensp; <?php echo($array[0]['no_of_leaves_halfday']); ?> &ensp;&ensp;&ensp;&ensp;&ensp;Short Leave&ensp;&ensp; <?php echo($array[0]['no_of_leaves_short']); ?> </div>

                

                  <label for="Number Of Leave Available" style="width: 300px"><div class="form_label"><b>Number Of Leave Available upto Today</b></div></label>
                 <div class="form_label"style="margin:35px;color: black">Full Day&ensp;&ensp; <?php echo(20-$array[0]['no_of_leaves_fullday']); ?> &ensp;&ensp;&ensp;&ensp;&ensp;Half Day&ensp;&ensp; <?php echo(20-$array[0]['no_of_leaves_halfday']); ?> &ensp;&ensp;&ensp;&ensp;&ensp;Short Leave&ensp;&ensp; <?php echo(20-$array[0]['no_of_leaves_short']); ?> </div>
              </div><!-- form_content -->
             

                
 
            </div><!-- card -->
            
            </br></br></br>
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