<!DOCTYPE html>
<html>
<head>
	<title>employee_home</title>

	<link rel="stylesheet" type="text/css" href="public/css/employee_home.css">
	<link rel="stylesheet" type="text/css" href="public/css/nav_profile.css">    
	<link rel="stylesheet" type="text/css" href="public/css/footer.css">

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
      <?php include("nav_profile.php"); ?> <!-- add navigation bar -->

      <!-- create breadcrumb-->
      <ul class="breadcrumb">
          <img src="public/images/4444.png" width="109" height="48" style="float:right">
          </br>
          <li><a href="home">Home</a></li>
          <li>Login</li>
      </ul>  <!-- breadcrumb-->
      
  <form action="employeehome.php" method="post">

      <h1>Employee Home <i class="fa fa-home fa-lg" aria-hidden="true"></i></h1>
      
      <hr> <br>

      <div class="cover">

	    <div class="square">
			<div class="square1">
				<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
				<button><b>Add Leave</b></button>
			</div>

			<br>

			<div class="square2">
				<i class="fa fa-times-circle fa-3x" aria-hidden="true"></i>
				<button><b>Cancel Leave</b></button>
			</div>

			<br>

			<div class="square3">
				<i class="fa fa-calendar fa-3x" aria-hidden="true"></i>
				<button><b>Calender</b></button>
			</div>

			<br>

			<div class="square4">
				<i class="fa fa-pie-chart fa-3x" aria-hidden="true"></i>
				<button><b>Check the number of Leaves</b></button>
			</div>
		</div> <!--square-->
  </form>
</div> <!-- cover -->

<br> <hr> <br>

  <!-- add footer -->
  
  <?php include("footer.php"); ?>

</body>
</html>