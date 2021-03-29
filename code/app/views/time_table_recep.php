<!DOCTYPE html>
<html>
<head>
  <title>Timetable</title>
  <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="public\css\time_table.css"><!-- add style to employee_list -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- get external js file -->
    <script type="text/javascript" src="public\js\employee.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>

    <!-- get external icons -->
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">  
          
            <div class="background">
<!-- add breadcrumb for find the path easily to users -->
<ul class="breadcrumb">
       
        <li><a href="home">Home</a></li>
        <li><a href="receptionist">Receptionist</a></li>
        <li>View Reservation</li>
    </ul><!-- breadcrumb -->
<h1>View Reservation&ensp;<i class="fa fa-table" aria-hidden="true"></i></h1><hr style="width: 60%;"><br>

<div class = "list_table">
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
    <tr>
      <th class='time_col'>Reservation ID</th>
      <th>Is Advanced paid</th>
      <th>customer ID</th>
      <th>Service Type</th>
      <th>Lift No</th>
      <th>Start Time</th>
      <th>Delay</th>
      <th>View Details</th>
    </tr>
    <?php if ($array) { ?>
      <?php foreach ($array as $timeslot) { ?>
      <tr>
        <td>
          <b><?php echo "$timeslot[reservation_id]"; ?></b>
        </td>
        <td>
          <?php echo "$timeslot[is_advance_paid]"; ?>
        </td>
        <td>
          <?php echo "$timeslot[cust_id]"; ?>
        </td>
        <td>
          <?php echo "$timeslot[servise_type]"; ?>
        </td>
        <td>
          <?php echo "$timeslot[lift_no]"; ?>
        </td>
        <td>
          <?php echo "$timeslot[start_time]"; ?>
        </td>

        <td style=" text-align: center;">
          <a  href="#" name="update" class="btn updatelbtn">Delay</a>
        </td>
        <td style=" text-align: center;">
          <a href="#" name="delete" class="btn deletebtn">View</a>
        </td>
      </tr>
      <?php } ?>
      <?php } ?>
      <?php if (!$array) { ?>
        <p style="color: red;font-size:large;padding:10px;font-weight:100;">
        <b> <?php echo "Record Not Found !"; ?> </b>
        </p>
      <?php } ?>
    </table>
  </div>
</div><br><br>
 </div>
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
