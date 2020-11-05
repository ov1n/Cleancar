<!DOCTYPE html>
<html>
<head>
  <title>Table</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<h2>List of Employee</h2>
<!-- add breadcrumb for find the path easily to users -->
<ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="home">Manager</a></li>
        <li>Employee</li>
      </ul><!-- breadcrumb -->

<div style="overflow-x:auto;"><!-- add responsive for table -->
    <table class="table_">
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>NIC</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($emp_data as $emp){ ?>
          <tr>
              <td>
                  <?php echo "$emp->emp_id"; ?>
              </td>
              <td>
                  <?php echo "$emp->first_name"; ?>
              </td>
              <td>
                  <?php echo "$emp->last_name"; ?>
              </td>
              <td>
                  <?php echo "$emp->NIC"; ?>
              </td>
              <td>
                  <a href="view_emp?emp_id=<?php echo $item->item_id ?>" name="view" class="btn btn-info">View</a>
              </td>
              <td>
                  <a href="update_emp?emp_id=<?php echo $item->item_id ?>" name="update" class="btn btn-info">Update</a>
              </td>
              <td>
                  <a href="delete_emp?emp_id=<?php echo $item->item_id ?>" name="delete" class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php } ?>
    </table>
</div><!-- responsive -->
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
