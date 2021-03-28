<!DOCTYPE html>
<html>
<head>
	<title>Leave Summary</title>

  <link rel="stylesheet" type="text/css" href="public/css/employee_calendar.css">

	<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="container"> 

<div class="background">

     <!-- create breadcrumb-->
      <ul class="breadcrumb">
          <li><a href="home">Home</a></li>
          <li><a href="employee">Employee</a></li>
          <li>Leave Summary</li>
      </ul>  <!-- breadcrumb-->
      
      <h1>Leave Summary</h1><br><hr style="width: 60%;"><br>

      <div class="row">
  <div class="column">
    <div class="card1"><h2>JAN</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-01-'){
                      echo ($array[$x]['leave_date']);
                    }
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

 <div class="column">
    <div class="card2" ><h2>FEB</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-02-'){
                      echo ($array[$x]['leave_date']);
                    }
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card3" ><h2>MAR</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-03-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card4" ><h2>APR</h2><div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-04-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>
  
</div>

<div class="row">
  <div class="column">
    <div class="card1"><h2>MAY</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-05-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

 <div class="column">
    <div class="card2" ><h2>JUNE</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-06-'){
                      echo ($array[$x]['leave_date']);
                    }
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card3" ><h2>JULY</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-07-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card4" ><h2>AUG</h2><div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-08-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>
  
</div>

<div class="row">
  <div class="column">
    <div class="card1"><h2>SEP</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-09-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

 <div class="column">
    <div class="card2" ><h2>OCT</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-10-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card3" ><h2>NOV</h2> <div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-11-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>

     <div class="column">
    <div class="card4" ><h2>DEC</h2><div class="overlay1"><div class="contents"><p><?php 
                for ($x = 0; $x < count($array); $x++)
                {
                    // echo ($array[$x]['leave_date']); 
                    // echo "<br>";
                    if((substr(($array[$x]['leave_date']), 0, -2))== '2021-12-'){
                      echo ($array[$x]['leave_date']);
                    } 
                    echo "<br>";
                } 
                ?></p></div></div></div>
    </div>
  
</div>
</div> <!-- background -->
	    
</div> <!-- container -->



  <!-- add footer -->
  <?php include("nav_profile.php"); ?> <!-- add navigation bar -->
  <?php include("footer.php"); ?>

</body>
</html>