<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Link primary CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/about_us.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/45c8933d3d.js" crossorigin="anonymous"></script>

    <!-- get imported jquery -->
  <script src="public/js/jquery/jquery-3.5.1.js"></script>
    <!-- link external js -->
  <script type="text/javascript" src="public\js\no_reservation.js"></script>
  <script src="public/js/jquery/jquery.alertable.min.js"></script>
</head>

<body>
    <div class="container">
    
        <img src="public/images/about_us/about-us-best-website-company-in-muzaffarnagar.jpg" alt="Norway">
        <div class="text-block">
            <h4>ABOUT US</h4>
        </div>
    </div>
    <div class="row">
        <div class="column">
            <div class="card">
                <h2>Our Vision</h2>
                <p>Our Vision is To be the most trusted, recognized and respected service provider in Sri Lanka.</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h2>Our Mission</h2>
                <p>We endeavor to give the best quality car item and administrations through strategically placed Car Care Service Centre's, at reasonable costs.</p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <h2>Our Values</h2>
                <ul>
                   <li> <i class="fa fa-check-square-o" aria-hidden="true"></i>We act with trustworthiness and we speak the truth about our work so as to be reasonable and moral.</li>
                   
                </ul>
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
    
    <!-- Header -->
    <div class="headers">
        <h1>Stories</h1>
    </div>
    <!-- Photo Grid -->
    <div class="rows">
        <div class="columns">
            <img src="public/images/about_us/640x360.jpg" style="width:100%">
            <img src="public/images/about_us/blog-head-selfwash-768x512.jpg" style="width:100%">
            <img src="public/images/about_us/carrozzeria-alle-cave-come-lavare-auto-00.jpg" style="width:100%">
            <img src="public/images/about_us/image.jpg" style="width:100%; height: 120px;">
        </div>
        <div class="columns">
            <img src="public/images/about_us/lavaggio-a-secco.jpg" style="width:100%">
            <img src="public/images/about_us/pexels-negative-space-97075.jpg" style="width:100%">
            <img src="public/images/about_us/thumb-chemia.jpg" style="width:100%">
        </div>
        <div class="columns">
            <img src="public/images/about_us/pexels-negative-space-97075.jpg" style="width:100%">
            <img src="public/images/about_us/5-Reasons-Why-Car-Owners-Manuals-Should-Be-in-Your-Car-at-All-Times.jpg" style="width:100%">
            <img src="public/images/about_us/NRMA-Car-Service-App.jpg" style="width:100%">
            <img src="public/images/about_us/Car-Service-Guide-to-Find-The-Best-Automatic-Service-2.jpg" style="width:100%; height: 180px;">
        </div>
        <div class="columns">
            <img src="public/images/about_us/pexels-pixabay-372810.jpg" style="width:100%">
            <img src="public/images/about_us/thumb-chemia.jpg" style="width:100%">
            <img src="public/images/about_us/pexels-andrea-piacquadio-3807695.jpg" style="width:100%">
        </div>
    </div>
    <?php 
        //get footer in seperate file
        include("footer.php");
    ?>
    <script>
    window.onscroll = function() { myFunction() };

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