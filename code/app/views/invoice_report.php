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
        <li><a href="receptionist">Receptionist</a></li>
        <li><a href="Billing">Reports</a></li>
        <li>Business Reports</li>
    </ul><!-- breadcrumb -->
    <?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>
    
<div class = "list_table">
<h2>Business Report</h2>
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
  <tr>
            <th>Invoice no</th>
            <th>Bill no</th>
            <th>Reservation Id</th>
            <th>Vehicle No</th>
            <th>Vehicle Model</th>
            <th>Customer Name</th>
            <th>Contact No</th>
            <th>Net Amount</th>

        </tr>
        
        <?php foreach($array as $invoice){ ?>
          <tr>
              <td>
                  <?php echo "$invoice[invoice_no]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[bill_no]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[reservation_id]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[vehicle_no]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[vehicle_model]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[customer_name]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[contact_no]"; ?>
              </td>
              <td>
                  <?php echo "$invoice[net_amount]"; ?>
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