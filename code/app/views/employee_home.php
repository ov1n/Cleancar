<!DOCTYPE html>
<html>
<head>
	<title>employee_home</title>

	<link rel="stylesheet" type="text/css" href="public/css/employee_home.css">
	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="cover"> 
     <!-- create breadcrumb-->
      <ul class="breadcrumb">
          <li><a href="home">Home</a></li>
          <li>Employee</li>
      </ul>  <!-- breadcrumb-->
      
      <h1>Employee Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
	    <div class="square"><br>
		<div class="square1">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i> 
				<br>
				<a href="request_leave"><button><b>Add Leave</b></button></a>
			</div>

			<div class="square2">
				<i class="fa fa-times-circle fa-3x" aria-hidden="true"></i> 
				<br>
				<a href="emp_leave"><button><b>Upcoming Leaves</b></button></a>
			</div>

			<div class="square3">
				<i class="fa fa-calendar fa-3x" aria-hidden="true"></i> 
				<br>
				<a href="employee_calendar"><button><b>Leave Calendar</b></button></a>
			</div>

			<div class="square4">
				<i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i> 
				<br>
				<a href="leave_static"><button><b>Leave Statistics</b></button></a>
			</div>
		</div> <!--square-->
</div> <!-- cover -->



  <!-- add footer -->
  <?php include("nav_profile.php"); ?> <!-- add navigation bar -->
  <?php include("footer.php"); ?>

</body>
</html>