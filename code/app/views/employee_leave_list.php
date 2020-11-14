<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\employee_leave_list.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <!-- <script type="text/javascript" src="public\js\employee.js"></script> -->
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
    
<div class = "list_table">
<h2>Employee Details</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>Employee ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Leave Type</th>
            <th>Leave Time</th>
            <th>Reason</th>
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        
        <?php foreach($array as $emp){ ?>
          <tr>
              <td>
                  <?php echo "$emp[emp_id]"; ?>
              </td>
              <td>
                  <?php echo "$emp[first_name]"." "."$emp[last_name]"; ?>
              </td>
              <td>
                  <?php echo ; "$emp[leave_date]"?>
              </td>
              <td>
                  <?php echo "$emp[type]"; ?>
              </td>
              <td>
                  <?php echo "$emp[leave_time]"; ?>
              </td>
              <td>
                  <?php echo "$emp[reason]"; ?>
              </td>
              <td style = " text-align: center;">
                  <a href="#" name="accept" class="btn acceptbtn">Accept</a>
              </td>
              <td style = " text-align: center;">
                  <a href="#" name="delete" class="btn rejectbtn">Reject</a>
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
