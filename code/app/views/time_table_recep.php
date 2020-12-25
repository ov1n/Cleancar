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
      <th class='time_col'>Time</th>
      <th>Lift 1</th>
      <th>Lift 2</th>
      <th>Lift 3</th>
      <th>Lift 4</th>
    </tr>
    <tr>
      <td class='time_col'>8.00 - 8.30</td>
      <td class='present' rowspan=3>58-3987</td>
      <td class='present' rowspan=5>CAB-4675</td>
      <td> </td>
      <td class='present' rowspan=4>PA-4782</td>
    </tr>
    <tr>
      <td class='time_col'>8.30 - 9.00</td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>9.00 - 9.30</td>
      <td class='present' rowspan=4>CAS-2354</td>
    </tr>
    <tr>
      <td class='time_col'>9.30 - 10.00</td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>10.00 - 10.30 </td>
      <td class='present'rowspan=4>16-8937</td>
      <td class='present' rowspan=4>255-4782</td>
    </tr>
    <tr>
      <td class='time_col'>10.30 - 11.00</td>
      <td class='present' rowspan=3>CAR-3875</td>
    </tr>
    <tr>
      <td class='time_col'>11.00 - 11.30</td>
      <td class='present' rowspan=2>CAD-2984</td>
    </tr>
    <tr>
      <td class='time_col'>11.30 - 12.00</td>
    </tr>
    <tr>
      <td class='time_col'>12.00 - 12.30</td>
      <td class='present' rowspan=2>300-0977</td>
      <td class='present' rowspan=2>CBB-3891</td>
      <td ></td>
      <td ></td>
    </tr>
    <tr>
      <td class='time_col'>12.30 - 13.00</td>
      <td></td>
      <td ></td>
    </tr>
    <tr>
      <td class='time_col'>13.00 - 13.30</td>
      <td class='unavailable'> </td>
      <td class='unavailable'> </td>
      <td class='unavailable' ></td>
      <td class='unavailable' ></td>
    </tr>
    <tr>
      <td class='time_col'>13.30 - 14.00</td>
      <td class='unavailable'> </td>
      <td class='unavailable'> </td>
      <td class='unavailable'></td>
      <td class='unavailable'> </td>
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
      <td class='present' rowspan=4>19-8937</td>
      <td class='present' rowspan=4>CAB-9815</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>15.00 - 15.30</td>
      <td> </td>
      <td> </td>
    </tr>
    <tr>
      <td class='time_col'>15.30 - 16.00</td>
      <td class='present' rowspan=2>CAA-1025</td>
      <td class='present' rowspan=2>253-4891</td>
    </tr>
    <tr>
      <td class='time_col'>16.00 - 16.30</td>
    </tr>
    </table>
  </div>
  <div class = "select_buttons">
        <a class="delaybtn btn" class="form_btn" href="delay_time_table">Delay Timetable</a>
        <a class="exitbtn btn" class="form_btn" href="receptionist">Exit</a><br>
  </div>
</div><br><br><br>
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
