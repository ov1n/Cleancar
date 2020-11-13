<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->

<style>
* {
  box-sizing: border-box;
}


body {
  margin: 0;
  
  font-family: 'raleway' !important;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  /*background-color: #111;*/
  background-color:#262626;
   /* background-image: linear-gradient(to top, rgba(255, 0, 0,0), rgb(0, 0, 0));*/

  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 18px 8px 8px 32px;
  text-decoration: none;
  font-size: 19px;
  color: white;
  display: block;
  transition: 0.3s;
}
.dropdown-btn{
 padding: 18px 8px 8px 32px;
  text-decoration: none;
  font-size: 18px;
  color: white;
  background: none;
  cursor: pointer;
  outline: none;
  border: none;
  font-family: 'raleway' !important;
  display: block;
  transition: 0.3s;
}
.dropdown-container {
  display: none;
  background-color:rgb(60, 60, 60,1);
  padding-left: 8px;
}
.active {
 
  color: white;
}
.sidenav a:hover,.dropdown-btn:hover {
  color: #818181;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.side_nav_bar {
  height: 65px;
  display: none;
  background-image: linear-gradient(to right, rgb(250, 0, 0,0.85), rgb(0, 118, 255));
  position: fixed; /* Make it stick/fixed */
  top: 0; /* Stay on top */
  width: 100%; /* Full width */
  transition: top 0.3s; /* Transition effect when sliding down (and up) */
  padding-top: 10px;
}
.side_nav_bar span{
  font-size:30px;
  cursor:pointer;
  color: white;
  margin-left: 30px;
  
}

.side_nav_bar img{
 width: 100px;
 height: 60px;
 float: right;
 margin-right:50px;
 margin-top: -5px;
}
@media screen and (max-width:900px) {
  .side_nav_bar {display: block;}
 
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeSideNav()">&times;</a>
  <a href="home">Home</a>
    <button class="dropdown-btn">Booking 
    <i class="fa fa-caret-down"></i>
  </button>
    <div class="dropdown-container" >
    <a href="#">&ensp;&ensp;Make Reservation</a>
    <a href="#">&ensp;&ensp;View Reservation</a>
    
  </div>
  <a href="about_us">About Us</a>
  <a href="contact_us">Contact Us</a>
  <a href="login">Sign In</a>
   <a href="register">Sign Up</a>
</div>

<div class="side_nav_bar">
<span onclick="openSideNav()">&#9776;</span>
 <img src="public/images/nav_bar_image/imageedit_58_5294224580.png"> 
</div>

<script>
function openSideNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeSideNav() {
  document.getElementById("mySidenav").style.width = "0";
}




var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}


</script>
   
</body>
</html> 
