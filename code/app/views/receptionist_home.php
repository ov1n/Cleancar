<!DOCTYPE html>
<html>
<head>
	<title>receptionist_home</title>

	<link rel="stylesheet" type="text/css" href="public\css\receptionist_home.css"><!-- add style home page -->
	<link rel="stylesheet" type="text/css" href="public\css\nav_bar.css"><!-- add style to nav bar -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->  

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php include("nav_profile.php"); ?> <!-- add navigation bar -->

		<br><br><br>
		<!-- create breadcrumb -->

		<ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Login</li>
          
        </ul> <!-- breadcrumb -->

		<h1>Receptionist Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
		
		<hr>
		<br>

	    <div class="cover"> <br>

	    <div class="square"> <br>
		<div class="square1">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="add_employee"><button><b>Add Employee</b></button></a>
			</div>

			<div class="square2">
				<i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="#"><button><b>Employee Details</b></button></a>
			</div>

			<div class="square3">
				<i class="fa fa-book fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="billing"><button><b>Make Billing</b></button></a>
			</div>

			<div class="square4">
				<i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="delay_time_table"><button><b>Delay Timetable</b></button></a>
			</div>

			<div class="square5">
				<i class="fa fa-list-alt fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="#"><button><b>View Reservation</b></button></a>
			</div>

			<div class="square6">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="make_reservation"><button><b>Make Reservation</b></button></a>
			</div>

			<div class="square7">
				<i class="fa fa-pencil-square-o fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="#"><button><b>Update Reservation</b></button></a>
			</div>

			<div class="square8">
				<i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
				<br><br><br><br>
				<a href="#"><button><b>Delete Reservation</b></button></a>
			</div>
		</div><!--square-->
	
		</div><!--cover-->
		<br>
		<hr>
		<br>

	<!-- add footer -->

	<?php include("footer.php"); ?>

</body>
</html>