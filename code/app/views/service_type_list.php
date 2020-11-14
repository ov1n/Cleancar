<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\service_type_list.css"><!-- add style to service type_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\add_service_type.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body>

<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="manager">Manager Home</a></li>
        <li>Service Type</li>
    </ul><!-- breadcrumb -->
    <?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>
    
    <h1>Service Type</h1>

   
       <!-- <h2>Add Service Type</h2>-->
        <div class = "select_buttons">
        <a href="Add_service"><button type="submit" class="optionbtn btn" class="form_btn">Add Service Type</button></a>
        </div>
    
<div class = "list_table">
<h2>Service Details</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>Type Id</th>
            <th>Name</th>
            <th>Vehicle Category</th>
            <th>No Of Employee</th>
            <th>No Of Time slot</th>
            <th>Lift No</th>
            <th>Normal Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($array as $emp){ ?>
          <tr>
              <td>
                  <?php echo "$emp[emp_id]"; ?>
              </td>
              <td>
                  <?php echo "$emp[first_name]"; ?>
              </td>
              <td>
                  <?php echo "$emp[last_name]"; ?>
              </td>
              <td>
                  <?php echo "$emp[NIC_no]"; ?>
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
