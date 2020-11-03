

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->
  <style type="text/css">
    
* {
  box-sizing: border-box;
}


body {
  margin: 0;
  
  font-family: 'raleway' !important;
}

.navbar {
  height: 65px;
  background-image: linear-gradient(to right, rgb(250, 0, 0,0.7), rgb(0, 118, 255));
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
@media screen and (max-width: 800px){
  .navbar a{
  width: 11%;
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
@media screen and (max-width: 900px){
  .navbar img{
  width: 76px;
  margin-left: 0px;
 
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
  margin-left: 7px;
  margin-right: 20px;
  margin-bottom: 7px;
}
/*responsive booking button*/
@media screen and (max-width: 800px){
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
.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.7);
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
 
}
.overlay p{
  color:red;
  font-size: 22px;
  width: 40%;
  margin-left: 30%;
}
.overlay a {
  padding: 8px;
  text-decoration: none;
  width: 8%;
   margin-left: 46%;
  font-size: 24px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 40px;
}

@media screen and (max-height: 650px) {
  .overlay a {font-size: 2px;width: 80%;margin-left: 0%}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

  </style>
</head>
<body>


<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <p>Before make reservation you need to sign in or sign up</p>
    <a href="login">Sign In</a>
    <a href="register">Sign Up</a>
  </div>
</div>

<div class="navbar">
   <a href="login">Sign In</a>
   <a href="register">Sign Up</a>
   <a href="contact_us">Contact Us</a>
   <a href="about_us">About Us</a>
 <div class="dropdown">
    <button class="dropbtn">Booking 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content"  onclick="openNav()">
      <a href="make_reservation">Make Reservation</a>
      <a href="view_reservation">View Reservation</a>
      
    </div>
  </div> 
   <a href="home">Home</a>
   <img src="public/images/nav_bar_image/imageedit_58_5294224580.png">  
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
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
}

</script>


</body>
</html>
