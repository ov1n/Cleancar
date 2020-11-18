<!DOCTYPE html>
<html>
<head>
  <title>View Reservations</title>
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
        <li>View Reservations</a></li>
    </ul><!-- breadcrumb -->
    
    <h1>View Reservations</h1>

<div class = "list_table">
<h2>Current reservations by Mr.</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>Reservation ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Service Type</th>
            <th>Price</th>
            <th>Paid?</th>
        </tr>
        
        <?php foreach($reservation_details as $row){ ?>
          <tr>
              <td>
                  <?php echo "$row[reservation_id]"; ?>
              </td>
              <td>
                  <?php echo "$row[date]"; ?>
              </td>
              <td>
                  <?php echo "$row[time]"; ?>
              </td>
              <td>
                  <?php echo "$row[type_name]"; ?>
              </td>
              <td>
                  Rs. <?php echo "$row[price]"; ?>
              </td>
              <td id="is_paid">
                <b>
                  <?php if($row["is_advance_paid"]){
                            echo "Yes";
                        }else{
                            echo "No";
                        }; ?>
                </b>
              </td>

              <td style = " text-align: center;">
                  <a href="update_emp?emp_id=" name="update" class="btn updatelbtn">Pay Online</a>
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
