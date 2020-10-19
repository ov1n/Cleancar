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

#navbar {
  height: 65px;
  background-image: linear-gradient(to right, rgb(250, 0, 0,0.7), rgb(0, 118, 255));
  position: fixed; /* Make it stick/fixed */
  top: 0; /* Stay on top */
  width: 100%; /* Full width */
  transition: top 0.3s; /* Transition effect when sliding down (and up) */
}

/* Style the navbar links */
#navbar a {
  float: right;
  display: block;
  color: white;
  text-align: center;
 padding: 1.3%;
  text-decoration: none;
   width: 12%;
 margin-left: 0px;
 font-size: 17px;
}
@media screen and (max-width: 600px){
  #navbar a{
  width: 12%;
  margin-left: 1px;
  font-size: 15px;
  }
}


#navbar img{
 width: 100px;
 height: 60px;
 float: left;
 margin-left:50px;
 margin-top: 2px;
}
@media screen and (max-width: 800px){
  #navbar img{
  width: 97;
  margin-left: 4px;
 
  }
}
#navbar a:hover {
  
  color: black;
  height: 100%;

}

    
  </style>
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
