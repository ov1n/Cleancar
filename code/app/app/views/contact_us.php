<!DOCTYPE html>
<html>
<head>
  <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
<link rel="stylesheet" type="text/css" href="public/css/contact_us.css">

<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

<!-- get imported jquery -->
<script src="public/js/jquery/jquery-3.5.1.js"></script>
<!-- link external js -->
<script src="public/js/jquery/jquery.alertable.min.js"></script>
<script type="text/javascript" src="public\js\no_reservation.js"></script>

</head>
<body>

 


    <div class="container">

  <img src="public/images/contact_us/Contact-Us.jpg" alt="Norway">
  <div class="text-block">
    <h4 >CONTACT US</h4>
    
  </div>
</div>

<div class="background">

<div class="row">
  <div class="column1">
    <div class="card">
      <h3><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></h3>

      <p><br>www.cleancar@gmail.com<br></p>
    
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <h3><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></h3>
      <p>123,cross Road,Nugegoda,<br> Srilanka</p>
     
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <h3><i class="fa fa-volume-control-phone fa-2x" aria-hidden="true"></i></h3>
      <p>0113 215 872<br>0113 215 812</p>
      
    </div>
  </div>

  <div class="column1">
    <div class="card">
      <h3><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></h3>
      <p>0713 215 872<br>0703 215 812</p>
      
    </div>
  </div>
  
  
  
</div>
<?php 
        //put appropriate header according to type of user logged in
        if(Session::get("uname")){
          include("nav_profile.php");
        }else{
          include("nav_login.php");
        }
        
?>


<div style="text-align:center; font-size: 20px">
  <h2>BRANCHES </h2>
</div>
<div class="map-container">
<!-- Three columns -->
<div class="row1">
 
  <div class="column" onclick="openTab('b1');" style="background:rgb(03, 168, 130,.9);">
    <h3>MATARA</h3>
    NO2, Nupe, Matara<br><br>
    <button class="btn info" style="border-color: black;border-style: solid;border-width: 2px;">View Map</button>
  </div>
  <div class="column" onclick="openTab('b2');" style="background:rgb(03, 168, 130,.9);">
    <h3>GALLE</h3>
    NO34, Galle<br><br>
    <button class="btn info" style="border-color: black;border-style: solid;border-width: 2px;">View Map</button>
  </div>
  <div class="column" onclick="openTab('b3');"style="background:rgb(03, 168, 130,.9);">
   <h3>KALUTHARA</h3> 
    NO6,Kaluthara<br><br>
    <button class="btn info" style="border-color: black;border-style: solid;border-width: 2px;">View Map</button>
  </div>
  <div class="column" onclick="openTab('b4');" style="background:rgb(03, 168, 130,.9);">
       <h3>MAHARAGAMA</h3>
    NO7,Cross Road<br><br>
    <button class="btn info" style="border-color: black;border-style: solid;border-width: 2px;">View Map</button>
  </div>
</div>


</div>

<!-- Full-width columns: (hidden by default) -->
<div id="b1" class="containerTab" style="display:none;background: rgb(0, 0, 0,.5)">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
 <div id='map1'>
         </div>
</div>

<div id="b2" class="containerTab" style="display:none;background:rgb(0, 0, 0,.5)">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <div id='map2'>
         </div></div>

<div id="b3" class="containerTab" style="display:none;background:rgb(0, 0, 0,.5)">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <div id='map3'>
         </div>
</div>

<div id="b4" class="containerTab" style="display:none;background:rgb(0, 0, 0,.5)">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
   <div id='map4'>
         </div>
</div>
 </div>
  <?php
    include("footer.php");
    ?>

<script type="text/javascript">

  //map1
  var mapx = L.map('map1').setView([5.945160, 80.553494], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(mapx);

  var LeafIcon = L.Icon.extend({
    options: {
      shadowUrl: 'public/images/contact_us/mkr1.png',
      iconSize:     [38, 95],
      shadowSize:   [50, 64],
      iconAnchor:   [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor:  [-3, -76]
    }
  });

  
  
  var  redIcon = new LeafIcon({iconUrl: 'public/images/contact_us/mkr2.png'});
   
  L.marker([5.945160, 80.553494], {icon: redIcon}).bindPopup("I am a green leaf.").addTo(mapx);

 //map2
  var mapy = L.map('map2').setView([6.055292, 80.218177], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(mapy);

  var LeafIcon = L.Icon.extend({
    options: {
      shadowUrl: 'public/images/contact_us/mkr1.png',
      iconSize:     [38, 95],
      shadowSize:   [50, 64],
      iconAnchor:   [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor:  [-3, -76]
    }
  });

  
  
  var  redIcon = new LeafIcon({iconUrl: 'public/images/contact_us/mkr2.png'});
   
  L.marker([6.055292, 80.218177], {icon: redIcon}).bindPopup("I am a green leaf.").addTo(mapy);

//map3
  var mapz = L.map('map3').setView([6.584720, 79.960780], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(mapz);

  var LeafIcon = L.Icon.extend({
    options: {
      shadowUrl: 'public/images/contact_us/mkr1.png',
      iconSize:     [38, 95],
      shadowSize:   [50, 64],
      iconAnchor:   [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor:  [-3, -76]
    }
  });

  
  
  var  redIcon = new LeafIcon({iconUrl: 'public/images/contact_us/mkr2.png'});
   
  L.marker([6.584720, 79.960780], {icon: redIcon}).bindPopup("I am a green leaf.").addTo(mapz);

//map4
  var mapw = L.map('map4').setView([6.849357, 79.924086], 15);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(mapw);

  var LeafIcon = L.Icon.extend({
    options: {
      shadowUrl: 'public/images/contact_us/mkr1.png',
      iconSize:     [38, 95],
      shadowSize:   [50, 64],
      iconAnchor:   [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor:  [-3, -76]
    }
  });

  
  
  var  redIcon = new LeafIcon({iconUrl: 'public/images/contact_us/mkr2.png'});
   
  L.marker([6.849357, 79.924086], {icon: redIcon}).bindPopup("I am a green leaf.").addTo(mapw);





function openTab(tabName) {
  var i, x;
  x = document.getElementsByClassName("containerTab");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(tabName).style.display = "block";
}

</script>

</body>
</html>