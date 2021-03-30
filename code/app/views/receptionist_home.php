<!DOCTYPE html>
<html>
<head>
	<title>receptionist_home</title>

	<link rel="stylesheet" type="text/css" href="public\css\receptionist_home.css"><!-- add style home page -->
	
    <link rel="stylesheet" type="text/css" href="public\css\footer.css"><!-- add style to footer -->  

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>

<?php
      //echo($_SESSION["uname"]);
      //var_dump($array);
    ?>

		
		<!-- create breadcrumb -->


		

	    <div class="cover"> 
	    			<ul class="breadcrumb">
         
          <li><a href="home">Home</a></li>
          <li>Receptionist</li>
          
        </ul> <!-- breadcrumb -->

		<h1 style="color: white;">Receptionist Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
		
	    <div class="square"> <br>
		<div class="square1">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<br>
				<a href="add_employee"><button><b>Add Employee</b></button></a>
			</div>

			<div class="square2">
				<i class="fa fa-address-card-o fa-3x" aria-hidden="true"></i>
				<br>
				<a href="employee_list_recep"><button><b>Employee Details</b></button></a>
			</div>

			<div class="square3">
				<i class="fa fa-calculator fa-3x" aria-hidden="true"></i>
				<br>
				<a href="billing"><button><b>Make Billing</b></button></a>
			</div>

			<div class="square5">
				<i class="fa fa-list-alt fa-3x" aria-hidden="true"></i>
				<br>
				<a href="time_table_recep"><button><b>View Reservation</b></button></a>
			</div>

			<div class="square6">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<br>
				<a href="emergency_reservation"><button><b>Make Reservation</b></button></a>
			</div>

		</div><!--square-->
	
		</div><!--cover-->
		

	
<?php include("nav_profile.php"); ?> <!-- add navigation bar -->
	<?php include("footer.php"); ?><!-- add footer -->

</body>
</html>