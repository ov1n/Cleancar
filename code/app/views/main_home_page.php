<!DOCTYPE html>
<html>
<head>
  <title>home</title>
  <link rel="stylesheet" type="text/css" href="public/css/main_home.css">
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>

  <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>
</head>
<body>
  <?php
    echo($_SESSION["uname"]);
    ?>
  <!-- Slideshow container -->
<div class="slideshow-container">
  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">

    <img src="public/images/home/pexels-jan.png">
    <div class="overlay">
    <div class="text1">
      <h1>Always Best Choice!!</h1>
        </div>
  </div>
  </div>

  <div class="mySlides fade">
 <img src="public/images/home/detailer-gives-finishing-fender.png">
 <div class="overlay">
    <div class="text2">
      <h1>Professionally Trained Staff !!</h1>
            
        </div>
  </div>
   </div>

  <div class="mySlides fade">
    <img src="public/images/home/NRMA Car Service Experts.png">
    <div class="overlay">
    <div class="text3">
      <h1> No Queue, No Waiting!!</h1>
           
        </div>
  </div>
   </div>

  <div class="mySlides fade">
    <img src="public/images/home/NRMA Car Service Experts123.png">
    <div class="overlay">
    <div class="text4">
      <h1> Quick Responses!!</h1>
            
        </div>
  </div>
   </div>
</div>


  


<div class="description">
          <h1>Always Best Choice!!</h1>
            <p >CLEAN Car  division was initiated in the year 2001 as a fully owned Group37 Ltd. CLEAN Car has established itself as a high-quality brand providing motorists with a range of car was and services. As a trusted solution provider in the automobile industry in Sri Lanka, CLEAN Car will continue to provide premier quality automobile products and services.</p></div>


<!-- 4 cards-->
<div class="row">
  <div class="column">
    <div class="card1"><h2>WELCOME</h2> <div class="overlay1"><div class="contents"><p> We offer convenient and quality driven services for your vehicle. our professionally trained staff delivers exceptional results on all types of vehicles.</p></div></div></div>
    </div>

 <div class="column">
    <div class="card2" ><h2>ABOUT US</h2> <div class="overlay1"><div class="contents"><p>As a trusted solution provider in the automobile industry in Sri Lanka, Clean Car  will continue to provide quality automobile products and services.</p></div></div></div>
    </div>

     <div class="column">
    <div class="card3" ><h2>SMART CALENDER</h2> <div class="overlay1"><div class="contents"><p>No need of calling and inquiring ,just click on the date and timeslot you need. The availability will be viewed.</p></div></div></div>
    </div>

     <div class="column">
    <div class="card4" ><h2>PAY ONLINE</h2><div class="overlay1"><div class="contents"><p>Pay and advance and make a reservation through the system to avoid trouble of cash transactions.</p></div></div></div>
    </div>
  
</div>


<div class="rows">
  <div class="leftcolumn">
    <div class="cards">
      <div class="container">
        <div class="content" style="height: 335px">
     <h2>PURE PROFESSIONALISM</h2><br>
      <p>We at Clean Car offer convenient and quality driven services for your vehicle.From interior cleaning to full service and from motor bicycles to heavy vehicles, our professionally trained staff delivers exceptional results on all types of vehicles.</p>
   </div>
 </div>
   <div class="content_img">
     <div class="fakeimg"  style="height:335px"></div>
    
    </div>
  </div>
    <div class="cards">

<div class="container">
  <div class="content" style="height: 330px">
     <h2>SERVICE TYPES</h2><br>
     <ul>
      <i class="fa fa-taxi " aria-hidden="true"></i> Full Service<br><br>
      <i class="fa fa-taxi " aria-hidden="true"></i> Vehicle Wash<br><br>
      <i class="fa fa-taxi " aria-hidden="true"></i> Wheel Alignment<br><br>
      <i class="fa fa-taxi " aria-hidden="true"></i> Hybrid Services<br><br>
      <i class="fa fa-taxi " aria-hidden="true"></i> Other Specialized Service<br><br>
    </ul>
    </div> 
  </div>
  <div class="content_img">
    <div class="fakeimg1"  style="height:330px"></div>
    </div>
  </div>
 </div>

 <div class="rightcolumn">
    <div class="cards" style="height: 150px">
      <div class="container">
        <div class="content1" style="height: 150px">
          <h2><CENTER>OPEN</CENTER></h2>
          <p><b>Weekdays : 8.00a.m - 6.00p.m<br>Weekends : 8.00a.m - 7.00p.m</b></p>
        </div>
      </div>
      </div>


    <div class="cards" style="height: 350px">
       <div class="container">
        <div class="content1" style="height: 350px">
      <h2><CENTER>LOCATION</CENTER> </h2>
         <div id='map'>
         </div>
      </div></div>
    </div> 


   
    <div class="cards" style="height: 150px">
      <div class="container">
        <div class="content1" style="height: 150px">
          <h2><CENTER>CONTACT US</CENTER></h2>
              <b>Tel : 0119654123</b><br>
              <b> WhatsApp   : 0716325478</b><br>
              <b> Email : cleancar@gmail.com</b>
      </div>
      </div>
    </div>
  </div>

</div>
  
 
<?php 
include("footer.php");
?>
<?php 
        //get header in seperate file
        include("nav_login.php");
    ?>
<script type="text/javascript">
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

//map
  var map = L.map('map').setView([6.89, 79.87], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var LeafIcon = L.Icon.extend({
    options: {
      shadowUrl: 'public/images/home/mkr1.png',
      iconSize:     [38, 95],
      shadowSize:   [50, 64],
      iconAnchor:   [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor:  [-3, -76]
    }
  });

  
  
  var  redIcon = new LeafIcon({iconUrl: 'public/images/home/mkr2.png'});
   
  L.marker([6.89, 79.87], {icon: redIcon}).bindPopup("I am a green leaf.").addTo(map);
</script>
</body>
</html>