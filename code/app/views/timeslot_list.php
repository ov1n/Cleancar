<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\service_type_list.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body>

<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="manager">Manager Home</a></li>
        <li>Timeslot list</li>
    </ul><!-- breadcrumb -->
    <?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>
<h1>Timeslot list</h1>

    <div class = "select_buttons">
        <a href="add_timeslot"><button type="submit" class="optionbtn btn" class="form_btn">Add Time Slot</button></a>
    </div>
    
<div class = "list_table">
<h2>Timeslot Deatails</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>timeslot_no</th>
            <th>lift_no</th>
            <th>start_timen</th>
            <th>end_time</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>
        
        <?php foreach($array as $timeslot){ ?>
          <tr>
              <td>
                  <?php echo "$timeslot[timeslot_no]"; ?>
              </td>
              <td>
                  <?php echo "$timeslot[lift_no]"; ?>
              </td>
              <td>
                  <?php echo "$timeslot[start_time]"; ?>
              </td>
              <td>
                  <?php echo "$timeslot[end_time]"; ?>
              </td>

              <td style = " text-align: center;">
                  <a href="update_emp?emp_id=" name="update" class="btn updatelbtn">Update</a>
              </td>
              <td style = " text-align: center;">
                  <a href="employee_delete?emp_id=<?php echo "$emp[emp_id]"; ?>" name="delete" class="btn deletebtn">Delete</a>
              </td>
          </tr>
      <?php } ?>
  </table>
  </div>

</div>
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
