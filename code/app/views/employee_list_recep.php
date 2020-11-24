 <!DOCTYPE html>
<html>
<head>
  <title>Employee Receptionist</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\employee_list.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\employee.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>
<body>
<div class="container">  
          
          <div class="background">
<!-- add breadcrumb for find the path easily to users -->
    <ul class="breadcrumb">
        <!-- <img src="public\images\4444.png" width="109" height="48" style="float:right"> -->
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="receptionist">Receptionist</a></li>
        <li>Employee</li>
    </ul><!-- breadcrumb -->
    
    <h1 style="text-align:center;"><i class="fas fa-users"></i> Employee</h1>
              <hr style="width: 60%;">
              <br><br>
<div class = "list_table">
<!-- <h2>Employee Details</h2> -->
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
              <td style="text-align: center; font-weight: 700; background:linear-gradient(to right,#306875,#488999,#559cad,#67b6c9,#85d9ed,#9eecff);">
                  E <?php echo "$emp[emp_id]"; ?>
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
                  <a href="employee_view_recep?emp_id=<?php echo "$emp[emp_id]"; ?>" name="view" class="btn viewbtn">View</a>
              </td>
              <td style = " text-align: center;">
                  <a href="employee_update_recep" name="update" class="btn updatelbtn">Update</a>
              </td>
              <td style = " text-align: center;">
                  <a href="employee_delete?emp_id=<?php echo "$emp[emp_id]"; ?>" name="delete" class="btn deletebtn">Delete</a>
              </td>
          </tr>
      <?php } ?>
  </table>
  </div>
</div><br><br>
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
