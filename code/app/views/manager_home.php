<!DOCTYPE html>
<html>
<head>
	<title>manager_home</title>

	<link rel="stylesheet" type="text/css" href="public\css\manager_home.css"><!-- add style home page -->
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->  

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
	
	    <div class="cover"> 
	    	<!-- create breadcrumb -->
	    	<ul class="breadcrumb">
          <li><a href="home">Home</a></li>
          <li>Manager</li>
          
        </ul> <!-- breadcrumb -->
      
	    		<h1 style="color: white;">Manager Home <i class="fa fa-home fa-lg" aria-hidden="true" style="color: white;"></i></h1>
	    <div class="square"> <br>
		<div class="square1" style="float: left;">
				<i class="fa fa-address-card-o fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="employee_list"><button><b>Employee</b></button></a>
			</div>

			<div class="square2">
				<i class="fa fa-list-alt fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="time_table"><button><b>Reservation</b></button></a>
			</div>

			<div class="square3">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="service_type_list"><button><b>Service Type</b></button></a>
			</div>

			<div class="square4">
				<i class="fa fa-clock-o fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="#"><button><b>Timeslot</b></button></a>
			</div>

			<div class="square5">
				<i class="fa fa-file-text fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="#"><button><b>Reports</b></button></a>
			</div>
			<div class="square6">
				<i class="fa fa-list fa-3x" aria-hidden="true" style="color: white;"></i>
				<br>
				<a href="#"><button><b>Time Table</b></button></a>
			</div>
		</div><!--square-->
	
		</div><!--cover-->
		

	
<?php include("nav_profile.php"); ?> <!-- add navigation bar -->
	<?php include("footer.php"); ?><!-- add footer -->

</body>
</html>