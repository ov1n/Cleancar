<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->
  
  <!-- get external js file -->
  <!-- get imported jquery -->
  <script src="public/js/jquery/jquery-3.5.1.js"></script>
  <script src="public/js/jquery/jquery.alertable.min.js"></script>

<style>

* {
  box-sizing: border-box;
}


body {
  margin: 0;
  
  font-family: 'raleway' !important;
}

 .navbar {
  height: 65px;
  background-image: linear-gradient(to right, rgb(250, 0, 0,0.85), rgb(0, 118, 255));
  position: fixed; /* Make it stick/fixed */
  top: 0; /* Stay on top */
  width: 100%; /* Full width */
  transition: top 0.3s; /* Transition effect when sliding down (and up) */
}

 .navbar a {

   float: right;
  display: block;
  color: white;
  text-align: center;
 padding: 16px 16px;
  text-decoration: none;
   width: 13%;
 margin-right: 5px;
 font-size: 17px;
}
@media screen and (max-width: 650px){
   .navbar a{
  width: 12%;
  margin-left: 1px;
  font-size: 15px;
  }
}
 .navbar img{
 width: 100px;
 height: 60px;
 float: left;
 margin-left:50px;
 margin-top: 2px;
}
@media screen and (max-width: 800px){
   .navbar img{
  width: 97px;
  margin-left: 4px;
 
  }
}

/*dropdown for booking*/
.dropdown {
  float: right;
  overflow: hidden;


}
/*dropdown booking button*/
.dropdown .dropbtn {
  font-size:17px;
    
  border: none;
  outline: none;
  color: white;
  text-align: center;
  padding: 16px 16px;
  background-color: inherit;
  font-family: 'raleway' !important;
  margin-left: 10px;
  margin-right: 23px;
  margin-bottom: 7px;
}
/*responsive booking button*/
@media screen and (max-width: 650px){
 .dropdown .dropbtn{
 
  margin-left: 1px;
  margin-right: 0px;
  font-size: 15px;
  }
}
 .navbar a:hover, .dropdown:hover .dropbtn {
    color: black;
  height: 100%;
}
/*contant of booking*/
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
  z-index: 1;
  
}

.dropdown-content a {
  float: none;
  color: black;
  width: 140px;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.dropdown-content a:hover {
  background-color: #ddd;
  width: 100%;
}

.dropdown:hover .dropdown-content {
  display: block;
}

/*dropdown for user icon*/
.dropdown1 {
  float: right;
  overflow: hidden;


}

.dropdown1 .dropbtn {
  font-size:17px;
    
  border: none;
  outline: none;
  color: white;
  text-align: center;
  padding: 1px 16px;
  background-color: inherit;
  font-family: 'raleway' !important;
  margin-left: 1px;
  margin-right: 23px;
}
/*responsive drop down user icon*/
@media screen and (max-width: 600px){
 .dropdown1 .dropbtn{
 
  margin-left: 1px;
  margin-right: 0px;
  font-size: 15px;
  }
}
 .navbar a:hover, .dropdown1:hover .dropbtn {
    color: black;
  height: 100%;
}
/*content of dropdown user icon*/
.dropdown1-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
  z-index: 1;
  margin-top: 1px;
}

.dropdown1-content a {
  float: none;
  color: black;
  width: 140px;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown1-content a:hover {
  background-color: #ddd;
  width: 100%;
}

.dropdown1:hover .dropdown1-content {
  display: block;
}


@media screen and (max-width: 900px){
   .navbar{
    display: none;
  }
}

</style>
</head>
<body>
 <?php 
        //get header in seperate file(side nav bar)
        include("sidenav_profile.php");
        
    ?>
<div class="navbar">
   <div class="dropdown1">
    <button class="dropbtn"><a class="profile"  href="javascript:void(0)"><i class="fa fa-user-circle-o"  aria-hidden="true" ></i></a>
    </button>
    <div class="dropdown1-content">
      <a href="#"><i class="fa fa-user" id="profile_avatar" aria-hidden="true" style="padding-right: 4px"></i>Profile</a>
      <a href="#" onclick="logout(); return false;" class="log_icon"><i class="fa fa-sign-out" aria-hidden="true" style="padding-right: 4px"></i>Log Out</a>
    </div>
  </div> 
   <a href="contact_us">Contact Us</a>
   <a href="about_us">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Booking<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
      <a href="calendar">Make Reservation</a>
      <a href="view_reservation">View Reservation</a>
    </div>
  </div> 
   <a href="home">Home</a>
   <img src="public\images\2222.png">  
</div>



<script type="text/javascript">
  /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
  prevScrollpos = currentScrollPos;
}

//testfunction js
logout=function(event){

  var confirmBox=confirm("Are you sure you want to log out?");
  //if ok logout, otherwise don't
  if(confirmBox==true){
    //debugging
    console.log('confirm box');

    //execute jquery which logs out of system
    window.location= "logout";
  }else{
    console.log('login cancelled');
  }
  
}

//FIX ALERTABLE
$('.ALERTABLE').on('click', function() {
  $.alertable.confirm('You sure?').then(function() {
    console.log('Confirmation submitted');
  }, function() {
    console.log('Confirmation canceled');
  });
});

</script>

</body>
</html>
