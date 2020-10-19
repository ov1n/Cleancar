
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="public/css/nav_bar.css"> <!--style sheet-->
  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->
  <style type="text/css">
    


  </style>
</head>
<body>

<div id="navbar">
   <a href="login">Sign In</a>
   <a href="register">Sign Up</a>
   <a href="contact_us">Contact Us</a>
   <a href="about_us">About Us</a>
   <a href="make_reservation">Booking</a>
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

