<!DOCTYPE html>
<html>
<head>
	<title>manager_home</title>

	<link rel="stylesheet" type="text/css" href="public/css/manager_home.css">
	<link rel="stylesheet" type="text/css" href="public/css/nav_profile.css">   
	<link rel="stylesheet" type="text/css" href="public/css/footer.css">
	    
	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
	<?php include("nav_profile.php"); ?> <!-- add navigation bar -->

	<form action="managerhome.php" method="post"> 

		<!-- create breadcrumb -->

		<ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Login</li>
          
        </ul> <!-- breadcrumb -->

		<h1>Manager Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
		<hr>

	<div class="cover"> <br>

	    <div class="column">
			<div class="column1">
				<h3><b>Reservation</b></h3>
				<br><br>
				<button><b>Add</button><br><br>
				<button><b>Delete</button><br><br>
				<button><b>View</button><br>
			</div>

			<div class="column2">
				<div class="raw">
					<div class="raw1">
						<div class="subcolumn1">
							<h3><b>Service</b></h3>
							<br><br>
							<button><b>Add</b></button><br><br>
							<button><b>Delete</b></button><br><br>
							<button><b>Update</b></button><br><br>
						</div>
						<div class="subcolumn2">
							<h3><b>Time Slot</b></h3>
							<br><br>
							<button><b>Add</b></button><br><br>
							<button><b>Delete</b></button><br><br>
							<button><b>Update</b></button><br><br>
						</div>
					</div>
					<div class="raw2">
						<h3><b>Reports</b></h3>
						<br><br>
						<button><b>View Invoice Detail</b></button><br><br>
						<button><b>View Employee Detail</b></button><br><br>
						<button><b>View Employee Leaves</b></button><br><br>
					</div>
				</div>
			</div>

			<div class="column3">
				<h3><b>Employee</b></h3>
				<br><br>
				<button><b>Add Leaves</b></button><br><br>
				<button><b>Delete Leaves</b></button><br><br>
				<button><b>Accept/Reject Leaves</b></button><br><br>
				<button><b>Pending Leaves</b></button><br><br>
				<button><b>Add Employee</b></button><br><br>
				<button><b>Delete Employee</b></button><br><br>
				<button><b>Update Employee</b></button><br><br>
			</div>

		</div><!--column-->
	</form>
	</div> <!--cover-->

	<br> <hr> <br>

	<!-- add footer -->
	
	<?php include("footer.php"); ?>
	
</body>
</html>