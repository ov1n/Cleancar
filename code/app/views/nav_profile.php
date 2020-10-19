<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="..\..\public\css\nav_bar.css"> <!--style sheet-->

  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->

</head>
</head>
<body>
<div id="navbar">
   <a class="profile"  href="javascript:void(0)"><i class="fa fa-user-circle-o"  aria-hidden="true"></i></a>
   <a href="contact_us">Contact Us</a>
   <a href="about_us">About Us</a>
   <a href="make_reservation">Booking</a>
   <a href="home">Home</a>
   <img src="public\images\2222.png">  
</div>






<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>	 
