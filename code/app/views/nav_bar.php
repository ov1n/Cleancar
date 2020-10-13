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
   <a href="#"><i class="fa fa-user-circle-o"  aria-hidden="true" style="margin-right: 20px"></i></a>
   <a href="javascript:void(0)">Sign In</a>
   <a href="javascript:void(0)">Contact Us</a>
   <a href="javascript:void(0)">About Us</a>
   <a href="javascript:void(0)">Booking</a>
   <a href="javascript:void(0)">Home</a>
   <img src="C:\Users\USER\Desktop\Clean_Car\images\2222.png">  
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
