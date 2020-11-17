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
        <li><a href="employee">Employee Home</a></li>
        <li>Employee leave</li>
    </ul><!-- breadcrumb -->
    <?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>

    <div class = "list_table">

    <h2>Upcoming Accepted Leave Details</h2>
    <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">
  
    <table id="table_">
  
    <tr>
            <th>Leave Date</th>
            <th>Leave Type</th>
            <th>Reason</th>
            <th>Leave Time</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        
            <?php foreach($array as $emp_leave){ ?>
          <tr>
              <td>
                  <?php echo "$emp_leave[leave_date]"; ?>
              </td>
              <td>
                  <?php echo "$emp_leave[type]"; ?>
              </td>
              <td>
                  <?php echo "$emp_leave[reason]"; ?>
              </td>
              <td>
                  <?php echo "$emp_leave[leave_time]"; ?>
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
<?php } else{ ?>
<!-- 1111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
    <div class="minuri meka hadanna">
        <h2>No Upcoming Leaves</h2>
    </div>
<?php } ?>
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
