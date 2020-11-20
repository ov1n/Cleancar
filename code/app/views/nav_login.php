
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
  display: block;
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
        include("sidenav_login.php");
        
    ?>
<div class="navbar">
   <a href="login">Sign In</a>
   <a href="register">Sign Up</a>
   <a href="contact_us">Contact Us</a>
   <a href="about_us">About Us</a>
 <div class="dropdown">
    <button class="dropbtn" onclick=" reservation_click();">Booking 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#make_reservation" >Make Reservation</a>
      <a href="#view_reservation" onclick=" reservation_click();">View Reservation</a>
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


</script>


</body>
</html>

