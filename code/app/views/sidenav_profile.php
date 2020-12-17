<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/css/sidenav.css"><!--side nav bar css-->
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>  <!--user icon-->
    <!-- get external js file -->
    <!-- get imported jquery -->
    <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <script src="public/js/jquery/jquery.alertable.min.js"></script>
    <script src="public/js/sidenav_profile.js"></script><!--side nav bar js-->
</head>
<body>
<!--side nav bar -->
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
   <a href="profile"><i class="fa fa-user" id="profile_avatar" aria-hidden="true" style="padding-right: 4px"></i>Profile</a>
  <a href="#" onclick="logout(); return false;" class="log_icon"><i class="fa fa-sign-out" aria-hidden="true" style="padding-right: 4px"></i>Log Out</a>
</div>

<div class="side_nav_bar">
<span onclick="openSideNav()">&#9776;</span>
 <img src="public/images/nav_bar_image/imageedit_58_5294224580.png"> 
</div>

<script type="text/javascript">
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
