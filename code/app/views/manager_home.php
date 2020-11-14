<!DOCTYPE html>
<html>
<head>
	<title>manager_home</title>

	<link rel="stylesheet" type="text/css" href="public\css\manager_home.css"><!-- add style home page -->
	<link rel="stylesheet" type="text/css" href="public\css\nav_bar.css"><!-- add style to nav bar -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->  

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
	

		<br><br><br>
		<!-- create breadcrumb -->

		<ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Login</li>
          
        </ul> <!-- breadcrumb -->

		<h1>Manager Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
		
		<hr>
		<br>

	    <div class="cover"> <hr>

	    <div class="square"> <br>
		<div class="square1">
				<i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i>
				<br>
				<a href="employee_list"><button><b>Employee</b></button></a>
			</div>

			<div class="square2">
				<i class="fa fa-list-alt fa-3x" aria-hidden="true"></i>
				<br>
				<a href="#"><button><b>Reservation</b></button></a>
			</div>

			<div class="square3">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<br>
				<a href="service_type_list"><button><b>Service Type</b></button></a>
			</div>

			<div class="square4">
				<i class="fa fa-clock-o fa-3x" aria-hidden="true"></i>
				<br>
				<a href="#"><button><b>Timeslot</b></button></a>
			</div>

			<div class="square5">
				<i class="fa fa-book fa-3x" aria-hidden="true"></i>
				<br>
				<a href="#"><button><b>Reports</b></button></a>
			</div>
		</div><!--square-->
	
		</div><!--cover-->
		<hr>

	
<?php include("nav_profile.php"); ?> <!-- add navigation bar -->
	<?php include("footer.php"); ?><!-- add footer -->

</body>
</html>