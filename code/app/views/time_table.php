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
</head>
<body>

<!-- add breadcrumb for find the path easily to users -->
<ul class="breadcrumb">
        <img src="public\images\4444.png" width="109" height="48" style="float:right">
        </br>
        <li><a href="home">Home</a></li>
        <li><a href="manager">Manager Home</a></li>
        <li>Timetable</li>
    </ul><!-- breadcrumb -->
<h2>Time Table</h2>

<div class = "list_table">
  <div style="overflow-x:auto; width:94%;   margin-left: 3%; border-radius: 6px;">

  <table id="table_">
    <tr>
      <th class='time_col'>Time</th>
      <th>L_001</th>
      <th>L_002</th>
      <th>L_003</th>
      <th>L_004</th>
    </tr>
    <tr>
      <td class='time_col'>8.00 - 8.30</td>
      <td>58-3987</td>
      <td>CAB-4675</td>
      <td> </td>
      <td>PA-4782</td>
    </tr>
    <tr>
      <td class='time_col'>8.30 - 9.00</td>
      <td>58-3987</td>
      <td>CAB-4675</td>
      <td> </td>
      <td>PA-4782</td>
    </tr>
    <tr>
      <td class='time_col'>9.00 - 9.30</td>
      <td>58-3987</td>
      <td>CAB-4675</td>
      <td>CAS-2354</td>
      <td>PA-4782</td>
    </tr>
    <tr>
      <td class='time_col'>9.30 - 10.00</td>
      <td> </td>
      <td>CAB-4675</td>
      <td>CAS-2354</td>
      <td>PA-4782</td>
    </tr>
    <tr>
      <td class='time_col'>10.00 - 10.30 </td>
      <td>16-8937</td>
      <td>CAB-4675</td>
      <td>CAS-2354</td>
      <td>255-4782</td>
    </tr>
    <tr>
      <td class='time_col'>10.30 - 11.00</td>
      <td>16-8937</td>
      <td>CAR-3875</td>
      <td>CAS-2354</td>
      <td>255-4782</td>
    </tr>
    <tr>
      <td class='time_col'>11.00 - 11.30</td>
      <td>16-8937</td>
      <td>CAR-3875</td>
      <td>CAD-2984</td>
      <td>255-4782</td>
    </tr>
    <tr>
      <td class='time_col'>11.30 - 12.00</td>
      <td>16-8937</td>
      <td>CAR-3875</td>
      <td>CAD-2984</td>
      <td>255-4782</td>
    </tr>
    <tr>
      <td class='time_col'>12.00 - 12.30</td>
      <td>300-0977</td>
      <td>CBB-3891</td>
      <td>CBA-0000</td>
      <td>PA-9202</td>
    </tr>
    <tr>
      <td class='time_col'>12.30 - 13.00</td>
      <td>300-0977</td>
      <td>CBB-3891</td>
      <td>CBA-0000</td>
      <td>PA-9202</td>
    </tr>
    <tr>
      <td class='time_col'>13.00 - 13.30</td>
      <td> </td>
      <td> </td>
      <td>CBA-0000</td>
      <td>PA-9202</td>
    </tr>
    <tr>
      <td class='time_col'>13.30 - 14.00</td>
      <td> </td>
      <td> </td>
      <td>CBA-0000</td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>14.00 - 14.30</td>
      <td></td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>14.30 - 15.00</td>
      <td>19-8937</td>
      <td>CAB-9815</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>15.00 - 15.30</td>
      <td>19-8937</td>
      <td>CAB-9815</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>15.30 - 16.00</td>
      <td>19-8937</td>
      <td>CAB-9815</td>
      <td>CAA-1025</td>
      <td>253-4891</td>
    </tr>
    <tr>
      <td class='time_col'>16.00 - 16.30</td>
      <td>19-8937</td>
      <td>CAB-9815</td>
      <td>CAA-1025</td>
      <td>253-4891</td>
    </tr>
    </table>
  </div>
  <div class = "select_buttons">
        <a class="delaybtn btn" class="form_btn" href="delay_time_table">Delay Timetable</a>
        <a class="exitbtn btn" class="form_btn" href="manager">Exit</a>
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
