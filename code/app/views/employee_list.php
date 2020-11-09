<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\employee_list.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\employee.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body>

<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Manager</a></li>
        <li>Employee</li>
    </ul><!-- breadcrumb -->
    <?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>
    
    <h1>Employee Section</h1>

    <div class = "card">
        <h2>Employee Leave</h2>
        <div class = "select_buttons">
        <button type="submit" class="optionbtn btn" class="form_btn" style = "margin-left:5%;">Add Leave</button>
        <button type="submit" class="optionbtn btn" class="form_btn" >Cancel Leave</button>
        <button type="submit" class="optionbtn btn" class="form_btn" >Pending Leaves</button>
        <button type="submit" class="optionbtn btn" class="form_btn" style = "margin-right:5%;">Leave Report</button>
        </div>
    </div><!-- card -->
<div class = "list_table">
<h2>Employee Details</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>View</th>
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
                  <a href="employee_view?emp_id=<?php echo "$emp[emp_id]"; ?>" name="view" class="btn viewbtn">View</a>
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
