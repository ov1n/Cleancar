<!DOCTYPE html>
<html>
<head>
	<title>manager_home</title>
	<link rel="stylesheet" type="text/css" href="css/manager_home.css">    
	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
	<form action="managerhome.php" method="post"> 

		<!-- create breadcrumb -->

		<ul class="breadcrumb">
          <img src="image/car.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Login</li>
          
        </ul> <!-- breadcrumb -->

		<h1>Manager Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
		<hr> <br>

	<div class="cover">

	    <div class="column">
			<div class="column1">
				<h3><b>Reservation</b></h3>
				<br><br>
				<button>Add</button><br><br>
				<button>Delete</button><br><br>
				<button>View</button><br>
			</div>

			<div class="column2">
				<div class="raw">
					<div class="raw1">
						<div class="subcolumn1">
							<h3><b>Service</b></h3>
							<br><br>
							<button>Add</button><br><br>
							<button>Delete</button><br><br>
							<button>Update</button><br><br>
						</div>
						<div class="subcolumn2">
							<h3><b>Time Slot</b></h3>
							<br><br>
							<button>Add</button><br><br>
							<button>Delete</button><br><br>
							<button>Update</button><br><br>
						</div>
					</div>
					<div class="raw2">
						<h3><b>Reports</b></h3>
						<br><br>
						<button>View Invoice Detail</button><br><br>
						<button>View Employee Detail</button><br><br>
						<button>View Employee Leaves</button><br><br>
					</div>
				</div>
			</div>

			<div class="column3">
				<h3><b>Employee</b></h3>
				<br><br>
				<button>Add Leaves</button><br><br>
				<button>Delete Leaves</button><br><br>
				<button>Accept/Reject Leaves</button><br><br>
				<button>Pending Leaves</button><br><br>
				<button>Add Employee</button><br><br>
				<button>Delete Employee</button><br><br>
				<button>Update Employee</button><br><br>
			</div>

		</div><!--column-->
	</form>
	</div> <!--cover-->

	<hr> <br> <hr>

	<!-- add footer -->
	<div class="footer">

<div class="footer-wrapper">
	  <div class="single-footer">
	   
		<h4><a href="/home.php" style="text-decoration: none; color: inherit;">Clean<span>Car</span></a></h4>
	  </div>
	  <div class="single-footer">
		<h4>navigation</h4>
		<br><p>© 2019 CS group 37</p>
	  </div>
	  <div class="single-footer">
		<p><span> 123,cross Road,</span>Nugegoda, Srilanka </p>
		<p>+94-1132158724 </p>
		<p>+94-1132158123 </p>
		<div class="icon">
		<i class="fa fa-instagram" aria-hidden="true"></i>
		<i class="fa fa-facebook-square" aria-hidden="true"></i>
		<i class="fa fa-twitter-square" aria-hidden="true"></i>
		</div>
	  </div>
  
	   <div class="single-footer">
		 <img src="C:\Users\USER\Desktop\Clean_Car\images\3333.png">
	   </div>
	   
	</div>
  </div> <!-- footer --> 
	
</body>
</html>